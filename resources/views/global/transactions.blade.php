@extends('layouts.master')

@section('content')
@if(auth()->user()->role=="member")

@section('title', 'Daftar Transaksi — Le Petite Pasta')

@section('styles')
    <style>
        * {
            font-family: "Poppins", "Arial", "Helvetica Neue", sans-serif;
        }

        table {
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
    </style>
@endsection

<div class="container my-5">
    @if($transactions->count() > 0)
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tanggal Transaksi</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ \Carbon\Carbon::parse($transaction->created_at)->format('D, d M Y')}}</td>
                    <td>
                        <a href="/transactions/{{ $transaction->id }}" class="btn btn-dark">Details</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        @for ($i = 0; $i < 20; $i++)
            <br>
        @endfor
      @else
        <div class="d-flex justify-content-center my-5">
            <p class="h4 text-muted">No transaction</p>
        </div>
        @for ($i = 0; $i < 20; $i++)
            <br>
        @endfor
      @endif
</div>
@endif

@for ($i = 0; $i < 20; $i++)
    <br>
@endfor
@endsection