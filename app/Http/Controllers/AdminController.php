<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function home(){
        if(Auth::id()){
            $usertype = Auth()->user()->usertype;
            if($usertype=='user'){
                return view ('users.index');
            }
            else if($usertype=='admin')
            {
                return view ('admin.index');
            }
            else{
                return redirect()->back();
            }
        }
        
    }

    public function add(){
        
        return view ('admin.add');
    }
    public function edit(){
        
        return view ('admin.edit');
    }
    public function product(){
        
        return view ('admin.products');
    }
    
}
