<?php

namespace App\Http\Controllers;

use Auth;
use session;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('pages.dashboard.index');
    }

    public function category(){
        return view('pages.dashboard.category.index');
    }

    public function category_edit($id){
        $category_edit = Category::findOrFail($id);
        return view('pages.dashboard.category.edit',compact('category_edit'));
    }
    public function product(){
        return view('pages.dashboard.product.index');
    }

    public function product_edit($id){
        $product_edit = Product::findOrFail($id);
        return view('pages.dashboard.product.edit', compact('product_edit'));
    }

    public function user(){
        return view('pages.dashboard.user.index');
    }
    public function edit_user($id){
        $user_edit = User::findOrFail($id);
        return view('pages.dashboard.user.edit', compact('user_edit'));
    }


    public function logout(Request $request){
       Auth::guard('web')->logout();
       $request->session()->invalidate();
       $request->session()->regenerateToken();
       return redirect('/');
    }
}
