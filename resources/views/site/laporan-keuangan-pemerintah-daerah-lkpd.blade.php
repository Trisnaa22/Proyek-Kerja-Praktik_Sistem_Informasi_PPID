@extends('layouts.master')

@section('content')
<section class="sabbi-section section-meet_the_team roboto-bold" style="margin-top: 100px">
    <div class="kotak">
        <h1 class="center_title_layout">Laporan Keuangan Pemerintah Daerah LKPD</h1>
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
        <div class="row" style="margin-left: 300px;">
            <div class="col-xs-12 col-sm-8">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <a href="document/LKPD/LRA_OPD-SKPD_2022_1.pdf" class="link-pdf" target="_blank">
                        <img style="width: 190px;" src="assets/img/ppid/lkpd.png">
                        <span class="caption-img col-md-12">2022</span>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <a href="#" class="link-pdf" target="_blank">
                        <img style="width: 190px;" src="assets/img/ppid/lkpd.png">
                        <span class="caption-img col-md-12">2021</span>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <a href="document/LKPD/LRA_OPD-SKPD_2020_1.pdf" class="link-pdf" target="_blank">
                        <img style="width: 190px;" src="assets/img/ppid/lkpd.png">
                        <span class="caption-img col-md-12">2020</span>
                    </a>
                </div>
                <div style="clear: both;"></div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <a href="document/LKPD/LRA_OPD-SKPD_2019_1.pdf" class="link-pdf" target="_blank">
                        <img style="width: 190px;" src="assets/img/ppid/lkpd.png">
                        <span class="caption-img col-md-12">2019</span>
                    </a>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <a href="document/LKPD/LRA_OPD-SKPD_2018_1.pdf" class="link-pdf" target="_blank">
                        <img style="width: 190px;" src="assets/img/ppid/lkpd.png">
                        <span class="caption-img col-md-12">2018</span>
                    </a>
                </div>

            </div>
            <div class=" col-xs-12 col-sm-4" style="text-align: left !important;">
                <!-- CONTENT END -->
            </div>
        </div>
    </div>
</section>
@endsection