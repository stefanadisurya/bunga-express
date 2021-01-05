<?php

namespace App\Http\Controllers;

use App\DetailTransaction;
use App\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SellerController extends Controller
{
    public function index() {
        $products = Product::where('user_id', auth()->user()->id)->paginate(8);
        return view('seller.index', ['products' => $products]);
    }

    public function add() {
        return view('seller.add');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|min:4|max:20',
            'price' => 'required|numeric|min:10000',
            'description' => 'required|min:10', 
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);

        $filename = $request->image->getClientOriginalName();

        Product::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $filename
        ]);

        $request->image->storeAs('image', $filename, 'public');

        Alert::success('Tambah Produk Berhasil!', 'Produk berhasil ditambahkan');

        return redirect()->route('home');
    }

    public function show(Product $product) {
        return view('seller.show', ['product' => $product]);
    }

    public function destroy(Product $product) {
        Product::destroy($product->id);

        Alert::success('Hapus Produk Berhasil!', 'Produk telah dihapus');

        return redirect()->route('home');
    }
}
