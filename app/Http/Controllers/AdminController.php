<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    public function manageProducts(){
        $products = Product::all();
        return view('admin.admin', ['products'=>$products]);
    }
    
}
