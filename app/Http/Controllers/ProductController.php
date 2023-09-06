<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
class ProductController extends Controller
{
    public function index(){
        $products= Product::inRandomOrder()
        ->whereActive(true)
        ->take(16)
        ->get();
        return view('users.apple',compact('products'));
    }
}
