<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kioskCode;
use App\Models\orderedItems;
use Auth;
class kioskCodeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');//commented to enable mail authentication
        $this->middleware(['auth', 'verified']);

        
    }
    public function giveKioskCode(){
        $kioskCode = mt_rand(100000, 999999);
        $user = Auth::User();
        $saveCode = new kioskCode();
        $saveCode->userid = $user->id;
        $saveCode->kioskCode = $kioskCode;
        $saveCode->save();
        
        return view('giveKioskCode')->with('kioskCode',$kioskCode);
    }
    public function receiveCode(Request $request,$id){
        $user = Auth::User();
        $checkCode = kioskCode::where('kioskCode',$request->kioskCode)->whereNull('active')->latest()->first();
        if($checkCode ==null){
            return view('kiosk')->with('message','This is an invalid code');
        }
        else{
            if($checkCode->exists() && $user->role == 'kiosk'){
                $invalidateAllCode = kioskCode::where('active')->update(['active'=>'invalid']);
                $checkCode->kiosk_userid = $user->id;
                $checkCode->save();
                // dd($checkCode);
                return redirect()->action([HomeController::class, 'kiosk'],[$id]);
            }
            else{
    
                return view('kiosk')->with('message','you gave the wrong code');
            }
            
        }
        
    }
    public function checkForKioskCode(Request $request,$id){
        $user = Auth::User();
        // $kioskCode = kioskCode::select("*")
        // ->join('ordered_items','ordered_items.userid',"kiosk_codes.userid")
        // ->where('ordered_items.userid',$user->id)
        // ->whereNull('status')->exists();
        $kioskCode = kioskCode::where('userid',$user->id)->latest()->first();
        // dd($id);
        // dd($user->role == 'kiosk');
        if($user->role == 'kiosk'){
            return redirect()->action([HomeController::class, 'kiosk'],[$id]);
        }
        else if(!$kioskCode){
            $kioskCode = mt_rand(100000, 999999);
            $user = Auth::User();
            $saveCode = new kioskCode();
            $saveCode->userid = $user->id;
            $saveCode->kioskCode = $kioskCode;
            $saveCode->save();
            return view('giveKioskCode')->with('kioskCode',$kioskCode);
        }
        else{
            return redirect()->action([HomeController::class, 'kiosk'],[$id]);
        }
    }
}
