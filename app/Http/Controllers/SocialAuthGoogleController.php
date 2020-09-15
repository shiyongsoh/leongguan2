<?php

namespace App\Http\Controllers;
use Socialite;
use Auth;
use App\Models\User;
use App\Models\accounts;
use Illuminate\Http\Request;

class SocialAuthGoogleController extends Controller
{
    public function redirect()
    {
        $scopes = ['https://www.googleapis.com/auth/calendar.events.readonly',
                    'https://www.googleapis.com/auth/calendar',
                    'https://www.googleapis.com/auth/calendar.addons.execute'
    
        ];
        return Socialite::driver('google')->scopes($scopes)->redirect();
    }


    public function callback()
    {
        
            
        
            $googleUser = Socialite::driver('google')->stateless()->user();
            $existUser = User::where('email',$googleUser->email)->first();
            #$_SESSION['google_id'] = Auth::User()->google_id;

            if($existUser) {
                Auth::loginUsingId($existUser->id);
                $google_token = $googleUser->token;
                $user = User::find($existUser->id);
                // $user->google_token = $googleUser->token;
                $userAccounts = accounts::firstOrNew(['userid'=>$user->id]);
                $userAccounts->openID = $googleUser->id;
                $userAccounts->token = $googleUser->token;
                $userAccounts->userid = $user->id;
                $userAccounts->accountName = 'google';
                $userAccounts->save();
            }
            else {
                $user = new User;
                $user->name = $googleUser->name;
                $user->firstname;
                $user->email = $googleUser->email;
                $user->password = md5(rand(1,10000));
                $user->avatar = $googleUser->avatar;
                $user->save();

                //save google credentials
                $userAccounts = accounts::firstOrNew(['userid'=>$user->id]);
                $userAccounts->openID = $googleUser->id;
                $userAccounts->token = $googleUser->token;
                $userAccounts->userid = $user->id;
                $userAccounts->accountName = 'google';
                $userAccounts->save();
                Auth::loginUsingId($user->id);

                
            }
            return redirect()->to('/dashboard');
        } 
}
