<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\food;
use App\Models\products;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');//commented to enable mail authentication
        $this->middleware(['auth', 'verified']);
        
        
    }
    public function listFood(){
        $role = Auth::User();
        if($role->role !== "admin"){
            return redirect('dashboard');
        }

        $food = food::all();
        return view('admin')->with('food',$food);
    }
    
    public function insertFood(Request $request){
        $role = Auth::User();
        if($role->role !== "admin"){
            return redirect('dashboard');
        }

        dd($request);
        $food = new food;
        $food->name = $request->input('name');
        $food->description = $request->input('description');
        $food->recepies = $request->input('recepies');

        //upload image
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        $food->filename = $imageName;
        dd($imageName);
        // $food->save();
        return view('admin')->with('food',$food);
    }
    public function addProduct(Request $request){
        $role = Auth::User();
        if($role->role !== "admin"){
            return redirect('dashboard');
        }

        // dd($request);
        if($request->input('productName') == null|| $request->input('price') ==null){
            return view('addProduct')->with('error',"Key in something");
        }
        else if(!is_numeric($request->input('price'))){
            return view('addProduct')->with('error',"must be a number");
        }
        $addProduct = new products();
        $addProduct->productName = $request->input('productName');
        $addProduct->price = $request->input('price');
        $addProduct->save();

        return view('productList');
    }
    public function addProductPage(){
        return view('addProduct');
    }
}
