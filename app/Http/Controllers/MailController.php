<?php

namespace App\Http\Controllers;
use App\Mail\RedeemTrialPack;
use App\Models\sendRedeemMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PharIo\Manifest\Email;
use Auth;
class MailController extends Controller
{
    public function getEmail(){
        return view('getMail');
    }
    public function sendRedeemMail(Request $request){
        $kioskCode = mt_rand(100000, 999999);
            // $user = Auth::User();
            $saveCode = new sendRedeemMail();
            if(!empty($request->input('email'))){

                $saveCode->email = $request->input('email');
            }
            else{
                return view('getMail');
            }
            $saveCode->kioskCode = $kioskCode;
            $saveCode->save();
        Mail::to($request->input('email'))->send(new RedeemTrialPack($kioskCode));
        return view('kiosk');
    }
    public function receiveCode(Request $request,$id){
        $user = Auth::User();
        // dd($request);
        $checkCode = sendRedeemMail::where('kioskCode',$request->kioskCode)->whereNull('status')->latest()->first();
        if($checkCode ==null){
            return view('redeem')->with('message','This is an invalid code');
        }
        else{
            if($checkCode->exists() && $user->role == 'kiosk'){
                $invalidateAllCode = sendRedeemMail::where('status')->update(['status'=>'invalid']);
                $checkCode->save();
                // dd($checkCode);
                // return redirect()->action([HomeController::class, 'kiosk'],[$id]);
                return view('survey');
            }
            else{
    
                return view('redeem')->with('message','you gave the wrong code');
            }
            
        }
        
    }
}
