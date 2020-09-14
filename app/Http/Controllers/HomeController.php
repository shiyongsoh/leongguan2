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
use App\Models\kioskCode;
use Illuminate\Support\Facades\Redis;//for port programming
class HomeController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
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
        //check for kiosk code
        if($user->role =='kiosk'){
            $kioskCode = kioskCode::where('kiosk_userid',$user->id)->latest()->first();
        }
        else{

            $kioskCode = kioskCode::where('userid',$user->id)->latest()->first();
        }
        // dd($kioskCode);
        // dd(!$kioskCode->whereNull('active')->exists());
        if(!$kioskCode->whereNull('active')->exists() || !$kioskCode->whereNull('kiosk_userid')->exists()){
            return redirect()->action([kioskCodeController::class, 'giveKioskCode']);
        }
        else{

            $products = orderedItems::select("*")
            ->join('products','products.id','=','ordered_items.productID')
            ->join('users','users.id','=','ordered_items.userid')
            ->where('ordered_items.userid',$user->id)
            ->where('status',null)->get();
            return view("redeem")->with('products',$products);
        }
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
            //check if you have done the survey
            $user = Auth::User();
            // dd($user);
            if($user->gender == null ||$user->age == null ||$user->newsletter == null ||$user->favoriteFood == null){
                return view('survey');
            }
            $redeem = new redeem;
            $redeem->userid = $user->id;
            $redeem->redeem = "yes";
            $redeem->save();

            $redeemStatus="You have successfully reedemed your trial pack";
            return view("redeem")->with('redeemStatus',$redeemStatus);
        }
    }
    public function getSurvey(Request $request){
        // dd($request);
        $survey = User::find(Auth::id());
        $survey->gender = $request->input('gender');
        $survey->age = $request->input('age');
        $survey->favoriteFood = $request->input('favoriteFood');
        $survey->newsletter = $request->input('newsletter');
        $survey->save();
        return redirect()->action([HomeController::class, 'redeem']);

    }
    public function showProfile($id)
    {
        $user = Redis::get('name'.$id);
        dd($user);
        return view('redeem')->with('paid',$paid);
    }
    public function setProfile(Request $request,$id){
        $redis = Redis::connection();
        // $redis = Redis::connection();
        Redis::set('name', 'Taylor');

        // $values = Redis::lrange('names', 5, 10);

    }
    
   
}
