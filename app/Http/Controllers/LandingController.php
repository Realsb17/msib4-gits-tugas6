<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        return view('pages.Landing.index');
    }
    public function category(){
        $category = Category::all();
        return view('pages.Landing.category',compact('category'));
    }
    public function product(){
        $product = Product::with('category')->get();
        return view('pages.Landing.product',compact('product'));
    }

}
