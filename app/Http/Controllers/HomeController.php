<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\redeem;
use Socialite;
use Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');//commented to enable mail authentication
        $this->middleware(['auth', 'verified']);

        
    }
    public function index()
    {
        $role = Auth::User();
        if($role->role === "kiosk"){
            return view('kiosk')->with("role",$role);
        }
        else if($role == "user"){
            return view('app')->with("role",$role);
        }
        else{
            //assume is user
            return view('app')->with("role",$role);
        }
    }
    public function kiosk(Request $request,$id){
        //check if you have redeemed
        $user = Auth::User();
        // $checkRedeem = redeem::where("userid",$user->id)->first();
        // dd($checkRedeem);
        if(redeem::where("userid",$user->id)->exists()){
            $redeemStatus="you have already redeemed the trial pack";
            
            return view("redeem")->with('redeemStatus',$redeemStatus);
        }
        else{

            $redeem = new redeem;
            $redeem->userid = $user->id;
            $redeem->redeem = "yes";
            $redeem->save();

            $redeemStatus="You have successfully reedemed your trial pack";
            return view("redeem")->with('redeemStatus',$redeemStatus);
        }
    }
}
