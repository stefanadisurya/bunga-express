@extends('layouts.master')

@section('title', 'Home — BungaExpress')

@section('styles')
    <style>
        * {
            font-family: "Poppins", "Arial", "Helvetica Neue", sans-serif;
        }

        .btn {
        border-radius: 10px;
        -webkit-transition: all 0.4s ease;
        -o-transition: all 0.4s ease;
        -moz-transition: all 0.4s ease;
        transition: all 0.4s ease;
        cursor: pointer;
        color: #fff;
        font-family: "Poppins", "Arial", "Helvetica Neue", sans-serif;
    }

        .card-x {
            margin-top: -70px;
            background: #fff;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
        }

        .card-y {
            background: #fff;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
        }

        .hx {
            margin-top: 60px;
        }

        .btn-large {
            width: 250px;
            padding: 10px;
            box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
        }

        hr {
            border-color: #000000;
            width: 100px;
            margin-top: 50px;
        }
    </style>
@endsection

@section('content')
<div class="container">
    <div class="card card-y my-5">
        <img src="{{ asset('assets/image/mainheader.png') }}" style="width: 100%; height: 100%;" class="card-img" alt="...">
    </div>
</div>
<div class="container my-5">
    <h1 class="font-weight-bold text-center mt-5">Produk Saya</h1>
    <hr>

    <div class="row">
        <div class="col-md-12 d-flex justify-content-center mt-5">
            <a href="{{ route('addproduct') }}" class="btn btn-dark btn-large btn-lg">Tambah Produk Baru</a>
        </div>
    </div>

        <div class="row justify-content-center">
            @forelse ($products as $product)
                <div class="col-md-3 my-3">
                    <a href="/product/{{ $product->id }}" class="text-decoration-none">
                    <div class="card-x mt-5" style="width: 15rem;">
                            <img src="{{ asset('assets/image/' . $product->image) }}" style="height:250px" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-dark">{{ $product->name }}</h5>
                                <p class="card-text font-weight-bold">Rp {{ $product->price }}</p>
                                <div class="row justify-content-center">
                            </div>
                        </div>
                    </div>
                </a>
                </div>

                @empty
                    <div class="d-flex justify-content-center my-5">
                        <p class="h4 text-muted">No item in the store</p>
                    </div>
            @endforelse
        </div>

        <div class="container d-flex justify-content-center my-3">
            {{ $products->links() }}
        </div>

        @for ($i = 0; $i < 3; $i++)
            <br>
        @endfor
    </div>
@endsection