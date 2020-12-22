<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home() {
        $products = Product::all()->take(5);
        return view('guest.home', ['products' => $products]);
    }

    public function products(Request $request) {
        $search = $request->get('search');
        $products = Product::where('name', 'like', '%' . $search . '%')
                    ->orWhere('price', 'like', '%' . $search . '%')
                    ->paginate(8);
        return view('guest.products', ['products' => $products]);
    }
}
