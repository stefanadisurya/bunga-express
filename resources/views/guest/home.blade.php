@extends('layouts.master')

@section('title', 'Home — BungaExpress')

@section('styles')
    <style>
        * {
            font-family: "Poppins", "Arial", "Helvetica Neue", sans-serif;
        }

        .btn1 {
            background-color: #000000;
            color: #ffffff;
            border-radius: 10px;
        }

        .btn1:hover {
            color: #ffffff;
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

        .img2 {
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
        }

        .card img {
            width: 160px;
            height: 160px;
            border-radius: 5px;
        }

        hr {
            border-color: #000000;
            width: 100px;
            margin-top: 50px;
        }
    </style>
@endsection
    
@section('content')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="{{ asset('assets/image/mainheader.png') }}" class="d-block w-100" style="height: 400px;" alt="...">
        </div>
        <div class="carousel-item">
        <img src="{{ asset('assets/image/mainheader2.png') }}" class="d-block w-100" style="height: 400px;" alt="...">
        </div>
        <div class="carousel-item">
        <img src="{{ asset('assets/image/mainheader3.png') }}" class="d-block w-100" style="height: 400px;" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

    <div class="container">
        <div class="card card-x">
            <div class="card-body">
            <div class="row d-flex justify-content-center">
                    <div class="col-lg-4 d-flex justify-content-center">
                    <img src="{{ asset('assets/image/dollar-coin.png') }}" style="width: 75px; height: 75px;" alt="">
                        <div class="row">
                        <div class="col-lg-12 mt-3">
                            <p class="h5 font-weight-bold text-dark ml-3">Harga Terjangkau</p>
                            <p class="text-muted ml-3">Harga terjangkau dan kualitas tinggi</p>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-4 d-flex justify-content-center">
                        <img src="{{ asset('assets/image/rocket.png') }}" style="width: 70px; height: 70px;" alt="">
                        <div class="row">
                            <div class="col-lg-12 mt-3">
                            <p class="h5 font-weight-bold text-dark ml-3">Pengiriman Cepat</p>
                            <p class="text-muted ml-3">Barang cepat sampai tujuan</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 d-flex justify-content-center">
                        <img src="{{ asset('assets/image/badge.png') }}" style="width: 70px; height: 70px;" alt="">
                        <div class="row">
                            <div class="col-lg-12 mt-3">
                            <p class="h5 font-weight-bold text-dark ml-3">Kualitas terbaik</p>
                            <p class="text-muted ml-3">Kualitas terbaik yang Anda dapatkan</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-between">
                    <h1 class="font-weight-bold mt-5">Produk Pilihan</h1>
                    <a href="{{ route('products') }}" class="text-decoration-none">
                        <p class="h4 hx font-weight-bold">Lihat semua</p>
                    </a>
                    
                </div>
            </div>
            

            <div class="container mb-5">
                <div class="row">
                    @forelse ($products as $product)
                        <div class="col-md-3 my-3">
                            <img src="{{ asset('assets/image/' . $product->image) }}" style="height:250px; width: 100%;" class="card-img-top img2">       
                        </div>
        
                        @empty
                            <div class="d-flex justify-content-center my-5">
                                <p class="h4 text-muted">Tidak ada produk</p>
                            </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    @for ($i = 0; $i < 5; $i++)
        <br>
    @endfor
@endsection