@extends('layouts.master')

@section('content')

<section class="sabbi-section section-meet_the_team roboto-bold" style="margin-top: 100px">
    <div class="kotak">
        <h1 class="center_title_layout">Organisasi Perangkat Daerah</h1>
        <h3 class="center_title_layout">Provinsi Sumatera Utara</h3>
        <!-- Konten tambahan bisa ditambahkan di sini -->
    </div>
    </div>

    <style>
        .kotak {
            background-color: #888;
            padding: 20px;
        }

        .center_title_layout {
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
</section>

<section>
    <div class="container">
        <embed type="application/pdf" src="document/pergub opd.pdf" width="100%" height="500px"></embed>
    </div>
</section>

@endsection