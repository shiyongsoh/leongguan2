<?php

namespace App\Http\Controllers;
use App\Models\orderedItems;
use App\Models\products;
use Auth;
use Illuminate\Http\Request;

class purchaseController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');//commented to enable mail authentication
        $this->middleware(['auth', 'verified']);

        
    }
    public function purchase(Request $request){
        $user = Auth::User();
        $cart = orderedItems::where("userid",$user->id)->where('productID',$request->input('productID'))->where("status",null)->exists();
        if($cart){
            // dd($request);
            // $cart = orderedItems::where("userid",$user->id)->where('productID',$request->input('productID'))->first();
            $cart = orderedItems::where("userid",$user->id)->where('productID',$request->input('productID'))->first();
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
        // dd($cart);
        // $productOrdered = orderedItems::where('userid',$user->id)->get();
        // $productName = products::where('productName',$productOrdered)->get();
        $products = orderedItems::select("*")
        ->join('products','products.id','=','ordered_items.id')
        ->where('ordered_items.userid',Auth::id())->get();

        return view('redeem')->with('products',$products);
        // event(new puchaseMade(Auth::user()->firstname, $actionData));
    }
    public function pay(){
        // $products = orderedItems::select("*")
        // ->join('products','products.id','=','ordered_items.id')
        // ->where('ordered_items.userid',Auth::id())->where('status',null)->get();
        $products = orderedItems::where('userid',Auth::id());
        if(!$products){
            orderedItems::where('userid',Auth::id())->delete();
            return view('redeem')->with('paid','You have paid');
        }
        else{
            return view('redeem')->with('paid','You have not ordered anything yet');
        }
        // dd($products);
    }
    public function listPurchase(Request $request){
        $user = Auth::User();
        
        // event(new puchaseMade(Auth::user()->firstname, $actionData));
    }
}
