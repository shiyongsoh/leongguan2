<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\redeem;
use App\Models\orderedItems;
use Socialite;
use Auth;
use App\Events\puchaseMade;
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
        $user = Auth::User();
        $products = orderedItems::select("*")
        ->join('products','products.id','=','ordered_items.productID')
        ->join('users','products.id','=','ordered_items.productID')
        ->where('ordered_items.userid',$user->id)
        ->where('status',null)->get();
        return view("redeem")->with('products',$products);
    }
    public function redeem(){
        //check if you have redeemed
        $user = Auth::User();
        $products = orderedItems::select("*")
        ->join('products','products.id','=','ordered_items.id')
        ->where('ordered_items.userid',Auth::id())->get();
        $cart = orderedItems::where("userid",Auth::User()->id)->get();
        // $checkRedeem = redeem::where("userid",$user->id)->first();
        // dd($checkRedeem);
        if(redeem::where("userid",$user->id)->exists()){
            $redeemStatus="you have already redeemed the trial pack";
            
            return view("redeem")->with('redeemStatus',$redeemStatus)->with('cart',$cart)->with('products',$products);
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
