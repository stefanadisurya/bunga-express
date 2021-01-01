@extends('layouts.master')

@section('title', 'Tentang Kami — BungaExpress')

@section('styles')
    <style>
        * {
            font-family: "Poppins", "Arial", "Helvetica Neue", sans-serif;
        }

        .jumbotron {
            background-image: url('assets/image/mainheader4.png');
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

        img {
            border-radius: 200px;
            width: 200px;
            height: 200px
        }

        .mtx {
            margin-top: 100px;
        }
    </style>
@endsection

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div>
            <p style="font-size: 100px;" class="font-weight-bold text-center text-light">Tentang Kami</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="shadow p-3 mb-5 bg-white rounded mt-5 text-center"><h3>"Every flower is a soul blossoming in nature"</h3></div>
</div>

<div class="container text-center">
    Tumbuhan merupakan jenis organisme yang tergolong kedalam kingdom Plantae. Jenisnya pun beragam, mulai dari tumbuhan berbiji, lumut, tumbuhan berbunga, dan lain sebagainya. Diantara berbagai jenis tumbuhan tersebut, salah satu jenis tumbuhan yang mempunyai banyak manfaat yakni tumbuhan berbunga. Pada tumbuhan berbunga, terdapat sebuah bagian yang dinamakan sebagai bunga. Fungsi utama dari bunga atau kembang sendiri merupakan alat reproduksi seksual pada tumbuhan berbunga. Selain sebagai alat reproduksi untuk tumbuhan, bunga juga memberikan berbagai manfaat untuk manusia, yakni sebagai tanaman hias, pengurang debu, membantu kegiatan pertanian, dan bahkan dapat digunakan untuk kesehatan. Penggunaan bunga yang sering kita jumpai yakni sebagai bentuk apresiasi kepada orang lain atas pencapaian yang ia raih. Akan tetapi, pencarian bunga yang sesuai dengan kebutuhan dapat memakan waktu yang lama karena belum banyak toko/kios yang menjual bunga. Untuk mengatasi masalah tersebut, kami berinisiatif untuk membentuk sebuah bisnis bernama KMG BungaExpress
    <br><br>
    Dibuat pada tahun 2020, KMG BungaExpress berinovasi membuat pasta instan.
    <br><br>
    <div class="font-weight-bold">
        Buka: <br>
        Senin - Sabtu (09.00 - 20.00 WIB) <br>
        Minggu (09.00 - 15.00 WIB) <br>
        <br>
        Jalan Gajahmada 1, no. 2,<br>
        Jakarta Pusat, Indonesia <br>
    </div>
</div>

<h1 class="font-weight-bold text-center mtx">Tim</h1>

<div class="container my-5">
    <div class="row mb-5 d-flex justify-content-center">
        <div class="col-lg-4 ">
            <img src="{{ asset('assets/image/user1.jpg') }}" alt="" class="mx-auto d-block mb-3">
            <p class="h4 text-center font-weight-bold">Stefan Adisurya</p>
            <p class="text-muted text-center"><em>Project Manager</em></p>
        </div>

        <div class="col-lg-4 ">
            <img src="{{ asset('assets/image/user1.jpg') }}" alt="" class="mx-auto d-block mb-3">
            <p class="h4 text-center font-weight-bold">Nicholas Owen</p>
            <p class="text-muted text-center"><em>Data Engineer</em></p>
        </div>

        <div class="col-lg-4">
            <img src="{{ asset('assets/image/user1.jpg') }}" alt="" class="mx-auto d-block mb-3">
            <p class="h4 text-center font-weight-bold">Brellian Jordi</p>
            <p class="text-muted text-center"><em>Business Analyst</em></p>
        </div>

        <div class="col-lg-3 my-5">
            <img src="{{ asset('assets/image/user1.jpg') }}" alt="" class="mx-auto d-block mb-3">
            <p class="h4 text-center font-weight-bold">Fraderic</p>
            <p class="text-muted text-center"><em>Developer</em></p>
        </div>

        <div class="col-lg-3 my-5">
            <img src="{{ asset('assets/image/user1.jpg') }}" alt="" class="mx-auto d-block mb-3">
            <p class="h4 text-center font-weight-bold">Ruben Marton R.</p>
            <p class="text-muted text-center"><em>Developer</em></p>
        </div>
    </div>
</div>
@endsection