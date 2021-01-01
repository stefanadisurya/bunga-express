<?php

namespace App\Http\Controllers;

use App\DetailTransaction;
use App\HeaderTransaction;
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

    public function show() {
        $transactions = HeaderTransaction::where('user_id', auth()->user()->id)->get();
        return view('global.transactions', ['transactions' => $transactions]);
    }

    public function about() {
        return view('global.about');
    }

    public function detailTransaction(HeaderTransaction $header) {
        $transactions = DetailTransaction::withTrashed()->where('header_id', $header->id)->get();
        return view('global.transactiondetails', ['transactions' => $transactions]);
    }
}
