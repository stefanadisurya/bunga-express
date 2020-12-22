{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

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
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.master')

@section('title', 'Daftar — BungaExpress')

@section('styles')
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" media="all">
@endsection

@section('content')
<div class="page-wrapper p-t-100 p-b-100 font-poppins">
    <div class="wrapper wrapper--w680">
        <div class="card showcase-bottom card-4">
            <div class="card-body">
                <h2 class="title d-flex justify-content-center">Daftar</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row row-space">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <label for="first_name" class="label">Nama Depan</label>
                                <input id="first_name" class="input--style-4 @error('first_name') is-invalid @enderror" type="text" name="first_name" value="{{ old('first_name') }}" required autofocus>
                                @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <label for="last_name" class="label">Nama Belakang</label>
                                <input id="last_name" class="input--style-4 @error('last_name') is-invalid @enderror" type="text" name="last_name" value="{{ old('last_name') }}" required>
                                @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row row-space">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <label for="username" class="label">Username</label>
                                <input id="username" class="input--style-4 @error('username') is-invalid @enderror" type="text" name="username" value="{{ old('username') }}" required>
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <label for="email" class="label">Email</label>
                                <input id="email" class="input--style-4 @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row row-space">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <label for="phone_number" class="label">Nomor Telepon</label>
                                <input id="phone_number" class="input--style-4 @error('phone_number') is-invalid @enderror" type="text" name="phone_number" value="{{ old('phone_number') }}" required>
                                @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <label for="gender" class="label">Jenis Kelamin</label>
                                <div class="p-t-10">
                                    <label class="radio-container m-r-120">Pria
                                        <input type="radio" name="gender" value="Male" required>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container">Wanita
                                        <input type="radio" name="gender" value="Female" required>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row row-group">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <label for="role" class="label">Daftar Sebagai</label>
                                <select id="role" name="role" class="input--style-4" required>
                                    <option value="member">Member</option>
                                    <option value="seller">Seller</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row row-group">
                        <div class="col-lg-12">
                            <div class="input-group">
                                <label for="address" class="label">Alamat</label>
                                <input id="address" class="input--style-4 @error('address') is-invalid @enderror" type="text" name="address" value="{{ old('address') }}" required>
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row row-space">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <label for="password" class="label">Kata Sandi</label>
                                <input id="password" class="input--style-4 @error('password') is-invalid @enderror" type="password" name="password" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <label for="password_confirmation" class="label">Konfirmasi Kata Sandi</label>
                                <input id="password_confirmation" class="input--style-4" type="password" name="password_confirmation" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-t-15 d-flex justify-content-center">
                        <button class="btn btn--radius-2 bg-dark" type="submit">Daftar</button>
                    </div>
                </form>

                <div class="p-t-15 d-flex justify-content-center">
                    <p>Sudah punya akun?
                        <a href="{{ route('login') }}">
                            Masuk
                        </a>
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
