<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\food;
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
}
