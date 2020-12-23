<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class GlobalController extends Controller
{
    public function home() {
        $products = Product::all();
        $myproducts = Product::where('user_id', auth()->user()->id)->take(4)->get();
        $productcount = $myproducts->count();
        return view('global.home', ['products' => $products, 'myproducts' => $myproducts , 'productcount' => $productcount]);
    }
}
