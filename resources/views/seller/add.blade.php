@extends('layouts.master')

@section('title', 'Tambah Produk Baru — BungaExpress')

@section('styles')
    <style>
        * {
            font-family: "Poppins", "Arial", "Helvetica Neue", sans-serif;
        }

        .card .btn {
        border-radius: 10px;
        -webkit-transition: all 0.4s ease;
        -o-transition: all 0.4s ease;
        -moz-transition: all 0.4s ease;
        transition: all 0.4s ease;
        cursor: pointer;
        color: #fff;
        font-family: "Poppins", "Arial", "Helvetica Neue", sans-serif;
    }

        .btn1:hover {
            color: #ffffff;
        }

        .card .btn-danger {
            border-radius: 10px;
        }

        .card .btn:hover {
            color: #fffff;
        }

        .card, .card img {
            background: #fff;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
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
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="container">
                    <div class="card-body">
                        <h1 class="text-dark mb-4">Tambah Produk Baru</h1>
                        <form method="POST" action="{{ route('addproduct') }}" enctype="multipart/form-data">
                            @csrf
    
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-left">Nama Produk:</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label text-md-left">Harga:</label>
    
                                <div class="col-md-6">
                                    <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price">
                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-left">Deskripsi:</label>
    
                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description">
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-left">Gambar:</label>
    
                                <div class="col-md-6">
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" value="{{ old('image') }}" required>
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-left my-4">
                                    <button type="submit" class="btn btn-dark">
                                        Tambah Produk
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@for ($i = 0; $i < 7; $i++)
    <br>
@endfor
@endsection

