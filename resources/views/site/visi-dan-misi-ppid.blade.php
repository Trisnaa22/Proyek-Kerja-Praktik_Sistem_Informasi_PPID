@extends('layouts.master')

@section('content')
<section class="sabbi-section section-meet_the_team roboto-bold" style="margin-top: 100px">
    <div class="kotak">
        <h1 class="center_title_layout">Visi Dan Misi PPID</h1>
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
<section id="media" class="article">
    <div class="container wow fadeInDown">
        <div class="row">
            <div class="col-md-6">
                <h4 class="roboto-bold">Visi PPID Sumatera Utara :</h4>
                <p class="roboto-regular">“SUMATERA UTARA YANG MAJU, AMAN DAN BERMARTABAT“</p>
                <img style=" width: 350px;" src="{{ asset('assets/img/Visimisi/iconvisimisi.png') }}">

            </div>
            <div class="col-md-6">
                <h4 class="roboto-bold">Misi PPID Sumatera Utara :</h4>
                <ul class=" misi roboto-regular">
                    <li>
                        <span>Mewujudkan Masyarakat Sumatera Utara Yang Bermartabat Dalam Kehidupan karena memiliki iman dan taqwa, tersedianya sandang pangan yang cukup, rumah yang layak, pendidikan yang baik, kesehatan yang prima, mata pencaharian yang menyenangkan, serta harga-harga yang terjangkau.</span>
                    </li>
                    <li>
                        <span>Mewujudkan Masyarakat Sumatera Utara Yang Bermartabat Dalam Politik dengan adanya pemerintahan yang bersih dan dicintai, tata kelola pemerintah yang baik, adil, terpercaya, politik yang beretika, masyarakat yang berwawasan kebangsaan, dan memiliki kohesi sosial yang kuat serta harmonis.</span>
                    </li>
                    <li>
                        <span>Mewujudkan Masyarakat Sumatera Utara Yang Bermartabat Dalam Pendidikan karena masyarakatnya yang terpelajar, berkarakter, cerdas, kolaboratif, berdaya saing, dan mandiri.</span>
                    </li>
                    <li>
                        <span>Mewujudkan Masyarakat Sumatera Utara Yang Bermartabat Dalam Pergaulan karena terbebas dari judi, narkoba, prostitusi, dan penyeludupan, sehingga menjadi teladan di Asia Tenggara dan Dunia.</span>
                    </li>
                    <li>
                        <span>Mewujudkan Masyarakat Sumatera Utara Yang Bermartabat Dalam Lingkungan karena ekologinya yang terjaga, alamnya yang bersih dan indah, penduduknya yang ramah, berbudaya, berperikemanusiaan, dan beradab.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <style>
        .misi ul::before {
            content: "•";
            /* Menggunakan bullet */
            position: absolute;
            left: 3%;
            color: #000000;
            /* Warna bullet */
            font-size: 30px;
            /* Ukuran bullet */
        }
    </style>
</section>

@endsection