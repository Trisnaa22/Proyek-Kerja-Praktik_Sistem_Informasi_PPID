@extends('layouts.master')

@section('content')
<section class="sabbi-section section-meet_the_team roboto-bold" style="margin-top: 100px">
    <div class="kotak">
        <h1 class="center_title_layout">Prosedur Pelayanan Informasi Publik</h1>
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


<!--prosedur-pelayanan-informasi-publik-->
<style>
    .layoutlogo {
        margin-bottom: 3%;
        border-top: 4px solid white;
        background-color: #03155b;
        width: 100%;
        height: 100px;
        flex-direction: column;
        justify-content: center;
        display: flex;
        flex: 1;
    }

    .center_title_layout {
        text-align: center;
        font-size: 30px;
        flex: 3;
        color: white;
        -webkit-box-orient: vertical;
        overflow: hidden;
        -webkit-line-clamp: 3;
        display: -webkit-box;
        overflow-wrap: break-word;
        word-wrap: break-word;
        -ms-word-break: break-all;
        word-break: break-all;
        word-break: break-word;
        -ms-hyphens: auto;
        -moz-hyphens: auto;
        -webkit-hyphens: auto;
        hyphens: auto;
        line-height: 34px;
    }

    .layoutlogocenter {
        display: flex;
        flex-direction: column;
        align-self: center;
    }

    .column_title_layout {
        display: flex;
        flex-direction: column;
        width: 100%;
        margin-left: 0%;
        margin-right: 0%;
    }

    @media only screen and (max-width: 900px) {
        .center_title_layout {
            width: 95vw;
            font-size: 18px;
            display: -webkit-box;
            overflow-wrap: break-word;
            word-wrap: break-word;
            -ms-word-break: break-all;
            word-break: break-all;
            word-break: break-word;
            -ms-hyphens: auto;
            -moz-hyphens: auto;
            -webkit-hyphens: auto;
            hyphens: auto;
        }

        .column_title_layout {
            width: 100%;
            margin-left: 0%;
            margin-right: 0%;
        }
    }
</style>
<section id="media" class="article">
    <div class="container wow fadeInDown">
        <div class="row">
            <div class="col-md-8 title-light">
                <img class="alur" src="assets/img/standarlayanan/prosedur-pelayanan-informasi.jpeg" style="margin-left: 200px;" alt="Alur Mekanisme Informasi Publik">
            </div>
        </div>
        <!-- CONTENT END -->
    </div>
    </div>
    </div>
</section>
@endsection