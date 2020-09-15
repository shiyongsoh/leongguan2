<?php

namespace App\Http\Controllers;
use App\Models\orderedItems;
use App\Models\kioskCode;
use App\Models\products;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;//for port programming
use App\Events\purchaseMade;
class purchaseController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');//commented to enable mail authentication
        $this->middleware(['auth', 'verified']);

        
    }
    public function purchase(Request $request){
        // $redis = Redis::connection();
        
        // Redis::set('name', $request->input('amount'));
        $user = Auth::User();
        $cart = orderedItems::where("userid",$user->id)->where('productID',$request->input('productID'))->where("status",null)->exists();
        // dd($cart);
        if($cart){
            // dd($request);
            // $cart = orderedItems::where("userid",$user->id)->where('productID',$request->input('productID'))->first();
            $cart = orderedItems::where("userid",$user->id)->where('productID',$request->input('productID'))->where("status",null)->first();
            // dd($cart);
            $cart->amount = $request->input('amount');
            // $cart->productID = $request->input('productID');
            $cart->save();
        }
        else{
            
            $cart = new orderedItems;
            $cart->userid = $user->id;
            $cart->productID = $request->input('productID');
            $cart->amount = $request->input('amount');
            $cart->save();
        }
        //send connection
        
        $products = orderedItems::select("*")
        ->join('products','products.id','=','ordered_items.productID')
        ->join('users','users.id','=','ordered_items.userid')
        ->where('ordered_items.userid',$user->id)
        ->where('status',null)->get();

        $redis = Redis::connection();
        Redis::set('name', $request);
        broadcast(new purchaseMade($products));
        if($user->role == 'kiosk'){
            return view('kioskOrder')->with('products',$products);
        }
        else{
            return view('redeem')->with('products',$products);
        }
        // event(new puchaseMade(Auth::user()->firstname, $actionData));
    }
    public function pay(){
        $user = Auth::User();
        $products = orderedItems::select("*")
        ->join('products','products.id','=','ordered_items.productID')
        ->join('users','users.id','=','ordered_items.userid')
        ->where('ordered_items.userid',$user->id)
        ->where('status',null)->get();
        if($products->first() !==null){
                    $products = orderedItems::select("*")
                    ->join('products','products.id','=','ordered_items.productID')
                    ->join('users','users.id','=','ordered_items.userid')
                    ->where('ordered_items.userid',$user->id)
                    ->where('status',null)->update(['status'=>'paid']);
                    $kioskCode = kioskCode::where('userid',$user->id)->get();
                    // $kioskCode->delete();
                    // dd($kioskCode);
            return view('finalise')->with('paid','You have finalised your payment');
        }
        else{
            
            return view('finalise')->with('paid','You have not ordered anything yet');
        }
        // dd($products);
    }
    public function listPurchase(Request $request){
        $user = Auth::User();
        
        // event(new puchaseMade(Auth::user()->firstname, $actionData));
    }
}
