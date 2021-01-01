@extends('layouts.master')

@section('title', 'Produk — BungaExpress')

@section('styles')
    <style>
        * {
            font-family: "Poppins", "Arial", "Helvetica Neue", sans-serif;
        }

        .jumbotron {
            background-image: url('../assets/image/mainheader5.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
            height: 400px;
        }

        .jumbotron .display-4 {
            margin-top: 130px;
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

        .card img {
            width: 160px;
            height: 160px;
            border-radius: 5px;
        }
    </style>
@endsection

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div>
        <p style="font-size: 100px;" class="font-weight-bold text-center text-light">Produk Kami</p>
    </div>
</div>

<div class="container mt-5">
    <form method="GET" action=" {{ route('home') }}">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-start">
                <input class="form-control mr-sm-2" type="search" name="search" aria-label="Search" placeholder="Apa bungamu hari ini?">
                <button class="btn btn-primary my-2 my-sm-0" type="submit">Cari</button>
            </div>
        </div>
    </form>
</div>

<div class="container mb-5">
    <div class="row justify-content-center">
        @forelse ($products as $product)
            <div class="col-md-3 my-3">
                <a href="/member/products/{{ $product->id }}" class="text-decoration-none">
                <div class="card card-y mt-5 showcase-left" style="width: 15rem;">
                        <img src="{{ asset('assets/image/' . $product->image) }}" style="height:250px; width: 100%;" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold text-dark">{{ $product->name }}</h5>
                            <p class="card-text text-primary font-weight-bold">Rp {{ $product->price }}</p>
                            <div class="row justify-content-start">
                        </div>
                    </div>
                </div>
                </a>
            </div>

            @empty
                <div class="d-flex justify-content-center my-5">
                    <p class="h4 text-muted">Tidak ada item</p>
                </div>
        @endforelse
    </div>
</div>
</div>

<div class="container d-flex justify-content-center my-3">
    {{ $products->links() }}
</div>
@endsection