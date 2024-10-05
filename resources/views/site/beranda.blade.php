@extends('layouts.master')

@section('content')


{{-- ISI HALAMAN BERANDA --}}
<div id="slider">
    <input type="radio" name="slider" id="slide1" checked>
    <input type="radio" name="slider" id="slide2">
    <input type="radio" name="slider" id="slide3">
    <input type="radio" name="slider" id="slide4">
    <div id="slides">
        <div id="overflow">
            <div class="inner">
                <div class="slide slide_1">
                    <div class="slide-content slider-banner">
                        <h2><img src="assets/img/ppid/ppid_home.jpg">
                        </h2>
                    </div>
                </div>
                <div class="slide slide_2">
                    <div class="slide-content">
                        <h2><img src="assets/img/ppid/logohome2.jpeg" style="width: 100%"> </h2>

                    </div>
                </div>
                <div class="slide slide_3">
                    <div class="slide-content">
                        <h2>Slide 3</h2>

                    </div>
                </div>
                <div class="slide slide_4">
                    <div class="slide-content">
                        <h2>Slide 4</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="controls">
        <label for="slide1"></label>
        <label for="slide2"></label>
        <label for="slide3"></label>
        <label for="slide4"></label>
    </div>
    <div id="bullets">
        <label for="slide1"></label>
        <label for="slide2"></label>
        <label for="slide3"></label>
        <label for="slide4"></label>
    </div>
</div>
{{-- BOX PERMOHONAN --}}

<section class="sabbbi-section home-info mt_35">
    <div class="container roboto-bold">
        <div class="col-md-3 col-sm-6">
            <div class="form_all_daftar_menu_permohonan">
                <div class="box_data_permohonan">
                    <a class="box_permohonan" href="http://ppid.sumutprov.go.id/login" target="_blank">
                        <img class="image_icon_ppid_permohonan" src="assets/img/ppid/iconform.jpeg">
                        {{-- <div class="new_color_icon_permohonan">Form</div>
                <div class="new_color_icon_permohonan">Permohonan</div>
                <div class="new_color_icon_permohonan">Informasi Publik</div> --}}
                        <div class="fontkotak">Form</div>
                        <div class="fontkotak">Permohonan</div>
                        <div class="fontkotak">Informasi Publik</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="form_all_daftar_menu_permohonan">
                <div class="box_data_permohonan">
                    <a class="box_permohonan" href="http://ppid.sumutprov.go.id/login" target="_blank">
                        <img class="image_icon_ppid_permohonan" src="assets/img/ppid/iconform.jpeg">
                        {{-- <div class="new_color_icon_permohonan">Form</div>
                <div class="new_color_icon_permohonan">Cek Status</div> --}}
                        <div class="fontkotak">Form</div>
                        <div class="fontkotak">Cek Status</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="form_all_daftar_menu_permohonan">
                <div class="box_data_permohonan">
                    <a class="box_permohonan" href="http://ppid.sumutprov.go.id/login" target="_blank">
                        <img class="image_icon_ppid_permohonan" src="assets/img/ppid/iconform.jpeg">
                        {{-- <div class="new_color_icon_permohonan">Statistik</div>
                <div class="new_color_icon_permohonan">Layanan</div>
                <div class="new_color_icon_permohonan">Informasi Publik</div> --}}
                        <div class="fontkotak">Statistik</div>
                        <div class="fontkotak">Layanan</div>
                        <div class="fontkotak">Informasi Publik</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="form_all_daftar_menu_permohonan">
                <div class="box_data_permohonan">
                    <a class="box_permohonan" href="https://www.lapor.go.id/instansi/pemerintah-provinsi-sumatera-utara" target="_blank">
                        <img class="image_icon_ppid_permohonan" src="assets/img/ppid/iconform.jpeg">
                        {{-- <div class="new_color_icon_permohonan">Kanal</div>
                <div class="new_color_icon_permohonan">Pengaduan</div>
                <div class="new_color_icon_permohonan">Informasi</div> --}}
                        <div class="fontkotak">Kanal</div>
                        <div class="fontkotak">Pengaduan</div>
                        <div class="fontkotak">Informasi</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .form_all_daftar_menu_permohonan {
        display: flex;
    }

    .box_data_permohonan {
        margin: 10px;
        display: flex;
        /* Menambahkan display: flex untuk mengaktifkan flexbox */
        align-items: center;
        font-weight: bold;
        justify-content: center;
        width: 100%;
        text-align: center;
    }

    .box_permohonan {
        padding-top: 15px;
        border-radius: 10px;
        height: 200px;
        border: 3px solid white;
        width: 200px;
        display: block;
        overflow: hidden;
        flex-direction: row;
        align-items: center;
        background-color: #fff;
        text-decoration: none;
    }

    .image_icon_ppid_permohonan {
        width: 100px;
        height: 100px;
    }

    .fontkotak {
        color: #000000
    }
</style>
{{-- Box Permohonan --}}
{{-- Satu Data --}}

<style>
    .backgrooupsatudata {
        display: flex;
        overflow: hidden;
        margin-top: -10px;
        flex-direction: column;
        background-color: #939185;
        width: 100%;
        height: 450px;
    }

    .groupbingkai_satu_data {
        width: 100%;
        display: inline-grid;
        grid-template-columns: auto auto auto auto auto auto auto;
        align-items: center;
        justify-content: center;
        height: 100%;
        margin-bottom: 10px;
        gap: 18px 18px;
        margin-top: 10px;
    }

    .bingkai_1_satu_data {
        display: flex;
        flex-direction: column;
        width: 100%;
        border: 2px solid #939185;
        border-radius: 15px;
        height: 150px;
        padding: 10px;

    }

    .container_satu_data {
        display: flex;
        flex-direction: column;
        align-items: center;

        width: 100%;
        height: 100%;
    }

    .img_satu_data_audience {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .bingkai_2_satu_data {
        display: flex;
        flex-direction: column;
        width: 100%;
        border: 2px solid white;
        border-radius: 15px;
        height: 150px;
        overflow: hidden;
    }

    .group_bingkai_2 {
        display: flex;
        flex-direction: row;
        justify-content: center;
        width: 100%;

    }

    .button_satu_data {
        margin-top: 10px;
        background-color: #45474B;
        padding: 2px;
        overflow: hidden;
        padding-left: 2px;

        width: 80px;
        padding-right: 5px;
        border-radius: 5px;
        color: white;
        display: flex;
        text-align: center;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 12px;


        -webkit-line-clamp: 1;
        overflow-wrap: break-word;
        word-wrap: break-word;
        -ms-word-break: break-all;
        word-break: break-all;
        word-break: break-word;
        -ms-hyphens: auto;
        -moz-hyphens: auto;
        -webkit-hyphens: auto;
        hyphens: auto;


        text-overflow: ellipsis;
        line-height: 1.8rem;
        height: 2.3rem;
        display: -webkit-box;
        -webkit-box-orient: vertical;
    }


    .group_bingkai_3 {
        display: flex;
        flex-direction: column;

    }

    .judul_satu_data {
        margin-top: 5px;
        margin-right: 10px;
        overflow: hidden;
        -webkit-line-clamp: 3;
        overflow-wrap: break-word;
        word-wrap: break-word;
        -ms-word-break: break-all;
        word-break: break-all;
        word-break: break-word;
        -ms-hyphens: auto;
        -moz-hyphens: auto;
        -webkit-hyphens: auto;
        hyphens: auto;
        color: #000;
        text-align: center;
        font-size: 14px;
        text-overflow: ellipsis;
        line-height: 1.8rem;
        height: 5.5rem;
        display: -webkit-box;
        -webkit-box-orient: vertical;
    }

    .group_satu_data_pointer {
        display: flex;
        flex-direction: column;
        align-items: center;
        height: max-content;
        width: 200px;
        margin-right: 5px;
        padding-top: 15px;
        padding-bottom: 15px;
        cursor: pointer;
        border-radius: 10px;
    }

    .group_satu_data_pointer_2 {
        width: 150px;

    }

    .group_satu_data_pointer:hover:not(.except_hover) {
        background-color: rgb(126, 126, 126);
    }

    .group_satu_data_pointer:hover .button_satu_data:not(.except_hover) {
        background-color: rgb(82, 82, 82);
    }



    .group_satu_data_pointer:hover .bingkai_1_satu_data:not(.except_hover) {
        background-color: black;
    }

    .group_satu_data_pointer:hover .judul_satu_data:not(.except_hover) {
        color: black;
    }

    .except_hover {
        pointer-events: none;
    }

    .group_satu_data_logo {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 175px;
        height: max-content;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .my_logo_satu_data {
        width: 175px;
        height: auto;
        object-fit: cover;
    }

    .change_background_grey {
        background-color: grey;
    }

    .jaraklihatsemua {
        margin-bottom: 25px;
    }


    @media only screen and (max-width: 900px) {
        .group_satu_data_pointer {
            margin-right: 0px;
            width: 100%;
        }

        .button_satu_data {
            width: 98px;
            padding-left: 0px;
            font-size: 10px;
            margin-right: 5px;
            text-align: center;
            font-weight: bold;
        }

        .orange_color_data_set {
            margin-left: 0px;
            font-size: 11px;
        }

        .group_satu_data_pointer_2 {
            width: 90%;

        }

        .img_satu_data_audience {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .backgrooupsatudata {
            display: flex;
            flex-direction: column;
            width: 100%;
            height: max-content;
        }

        .groupbingkai_satu_data {
            display: inline-grid;
            grid-template-columns: 170px 170px;
            gap: 18px 18px;
            margin-top: 10px;
        }

        .group_satu_data_logo {
            width: 100%;
        }

        #satudata {
            width: 100%;
        }
    }
</style>

{{--Satu data --}}
<section id="satudata">
    <div class="backgrooupsatudata wow fadeInDown ">
        <div class="container_satu_data roboto-bold">
            <div class="group_satu_data_logo">
                <a href="https://sadaina.sumutprov.go.id/open-data/opd" target="_blank">
                    <img class="my_logo_satu_data" src="assets/img/ppid/satu_data1.png" title="Logo Satu Data Jakarta">
                </a>
            </div>
            <div class="groupbingkai_satu_data" id="result_satu_data">
                <a class="group_satu_data_pointer" target="_blank" href="https://sadaina.sumutprov.go.id/open-data/dataset/filter?sectorId=0103ce4108b84b31a9824db9808fa095&regionName=Keuangan&nameFilters=arr_bidang">
                    <div class="group_satu_data_pointer_2">
                        <div class="bingkai_1_satu_data">
                            <div class="bingkai_2_satu_data">
                                <img class="img_satu_data_audience" src="assets/img/opendata/iconeko.png">
                            </div>
                        </div>
                        <div class="group_bingkai_2">
                            <div class="button_satu_data "> Open Data</div>

                        </div>
                        <div class="group_bingkai_3">
                            <div class="judul_satu_data">
                                Bidang Ekonomi
                            </div>
                        </div>
                    </div>
                </a>
                <a class="group_satu_data_pointer" target="_blank" href=https://sadaina.sumutprov.go.id/open-data/dataset/filter?sectorId=eb25087ca65245ddaa28bbbc796d1f2d&regionName=Transportasi&nameFilters=arr_bidang>
                    <div class="group_satu_data_pointer_2">
                        <div class="bingkai_1_satu_data">
                            <div class="bingkai_2_satu_data">
                                <img class="img_satu_data_audience" src="assets/img/opendata/icontransport.png">
                            </div>
                        </div>
                        <div class="group_bingkai_2">
                            <div class="button_satu_data "> Open Data</div>

                        </div>
                        <div class="group_bingkai_3">
                            <div class="judul_satu_data">
                                Bidang Transportasi Dan Infrastruktur
                            </div>
                        </div>
                    </div>
                </a>
                <a class="group_satu_data_pointer" target="_blank" href=https://sadaina.sumutprov.go.id/open-data/dataset/filter?sectorId=8c3b8a921d01427095d97e459553e349&regionName=Sosial&nameFilters=arr_bidang>
                    <div class="group_satu_data_pointer_2">
                        <div class="bingkai_1_satu_data">
                            <div class="bingkai_2_satu_data">
                                <img class="img_satu_data_audience" src="assets/img/opendata/iconrakyat.png">
                            </div>
                        </div>
                        <div class="group_bingkai_2">
                            <div class="button_satu_data "> Open Data</div>

                        </div>
                        <div class="group_bingkai_3">
                            <div class="judul_satu_data">
                                Bidang Kesejahteraan Rakyat
                            </div>
                        </div>
                    </div>
                </a>
                <a class="group_satu_data_pointer" target="_blank" href=https://sadaina.sumutprov.go.id/open-data/dataset/filter?sectorId=c1dc2cb5da7f48c8a1de18378dc5a13e&regionName=Pemerintahan&nameFilters=arr_bidang>
                    <div class="group_satu_data_pointer_2">
                        <div class="bingkai_1_satu_data">
                            <div class="bingkai_2_satu_data">
                                <img class="img_satu_data_audience" src="assets/img/opendata/iconpemerintahan.png">
                            </div>
                        </div>
                        <div class="group_bingkai_2">
                            <div class="button_satu_data "> Open Data</div>

                        </div>
                        <div class="group_bingkai_3">
                            <div class="judul_satu_data">
                                Bidang Pemerintahan
                            </div>
                        </div>
                    </div>
                </a>
                <a class="group_satu_data_pointer" target="_blank" href=https://sadaina.sumutprov.go.id/open-data/dataset/filter?sectorId=4a6b8bc5de474f41a97b23575115a1da&regionName=Lingkungan%20Hidup&nameFilters=arr_bidang>
                    <div class="group_satu_data_pointer_2">
                        <div class="bingkai_1_satu_data">
                            <div class="bingkai_2_satu_data">
                                <img class="img_satu_data_audience" src="assets/img/opendata/icontani.png">
                            </div>
                        </div>
                        <div class="group_bingkai_2">
                            <div class="button_satu_data "> Open Data</div>

                        </div>
                        <div class="group_bingkai_3">
                            <div class="judul_satu_data">
                                Bidang Pertanian Dan Peternakan
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        </a>
    </div>
    </div>
    </div>
</section>

{{-- Satu Ddata --}}

{{-- Buletin--}}

<style>
    .boxwidth {
        width: 95% !important;
        margin-right: 70px;
        margin-left: 80px;
    }

    .image_okesip {
        width: 45%;
    }

    .center_width_oksip {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
    }

    .oksip_ig_title_row {
        padding-bottom: 1%;
        border-bottom: 2px solid #101633 !important;
    }

    .group_content_ppid {
        display: grid;
        grid-template-columns: auto auto auto auto auto;
        justify-content: center;
        padding-bottom: 10px;

    }

    .artikel_ok_sip {
        width: 300px;
        height: auto;
        display: flex;
        flex: 1;
        margin-bottom: 10px;
        margin-left: 15px;
        margin-right: 5px;
        border-bottom-left-radius: 10px;
        border-top-left-radius: 10px;
        border-bottom-right-radius: 10px;
        border-top-right-radius: 10px;
        overflow: hidden;
        flex-direction: column;
        box-shadow: 0 0 16px rgba(0, 0, 0, 0.4);
    }

    .grupimage_ok_sip {
        width: 100%;
        height: 200px;
        display: flex;
        flex: 1;
        flex-direction: column;
        align-items: flex-start;
    }

    .columnimage_ok_sip {
        width: 300px;
        height: 200px;
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }

    .image_ok_sip_new {
        width: 100%;
        object-fit: contain;
    }

    .grupartikel_ok_sip {
        height: 100px;
        flex-direction: column;
        display: flex;
        padding-right: 15px;
        padding-left: 15px;
        padding-top: 10px;
    }

    .tanggal_ok_sip {
        font-weight: bold;
        color: black;
        font-size: 9px;
    }

    .description_ok_sip {
        color: black !important;
        font-size: 11px;
        display: -webkit-box;
        margin-bottom: 5px;
        max-width: max-content;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .jarak_ok_sip_title {
        margin-bottom: 25px !important;
    }

    .columndetailppid_ok_sip {
        width: max-content;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        justify-content: flex-end;
        flex: 1;
    }

    .height_image {
        height: max-content;
    }

    .artikel_ok_sip:hover .tanggal_ok_sip {
        color: red;
    }

    @media screen and (min-device-width: 1200px) and (max-device-width: 1600px) {
        .artikel_ok_sip {
            width: 225px;

        }

        .columnimage_ok_sip {
            width: 225px;
        }
    }

    @media only screen and (max-width: 900px) {
        .jarak_box_ok_sip {
            margin-bottom: -7% !important;
        }

        .boxwidth {
            width: 90% !important;

        }

        .group_content_ppid {
            display: grid;
            grid-template-columns: auto;
        }

        .image_ok_sip_new {
            width: 100%;
            object-fit: cover;
        }

        .artikel_ok_sip {
            width: 100%;
            margin-left: 0px;
            margin-right: 20px;
            margin-bottom: 20px;
        }

        .columnimage_ok_sip {
            width: 100%;
        }

        .height_image {
            width: 100%;
        }

    }
</style>

<section id="ok_sip_data" class="jarak_box_ok_sip">
    <div class="center_width_oksip roboto-medium">

        <style>
            .rowtitleoke_sip {
                flex-direction: row;
                display: flex;
                border-bottom: 2px solid #d6a721;
                margin-top: 7px;
                padding-bottom: 2%;
            }

            .columnoksipjudul {
                display: flex;
                font-weight: bold;
                color: #03155b;
                font-size: 20px;
                line-height: 1.5em;

                flex: 1;
                align-self: flex-end;
                flex-direction: column;
                word-break: break-all;
            }

            .columnimageiconokesip {
                display: flex;
                flex-direction: column;
                width: 350px;
                height: max-content;
                justify-content: flex-end;
                overflow: hidden;
                min-width: fit-content(20em);
            }

            @media only screen and (max-width: 900px) {

                .columnimageiconokesip {
                    height: max-content;
                    width: 50vw;
                    min-width: fit-content(20em);
                }

            }
        </style>


        <section id="ok_sip_data" class="jarak_box_ok_sip">
            <div class="containerberita wow fadeInDown">
                <div class="center_width_oksip">
                    <div class="boxppid boxwidth">
                        <style>
                            .rowtitleoke_sip {
                                flex-direction: row;
                                display: flex;
                                border-bottom: 2px solid #d6a721;
                                margin-top: 7px;
                                padding-bottom: 2%;
                            }

                            .columnoksipjudul {
                                display: flex;
                                font-weight: bold;
                                color: #03155b;
                                font-size: 20px;
                                line-height: 1.5em;

                                flex: 1;
                                align-self: flex-end;
                                flex-direction: column;
                                word-break: break-all;
                            }

                            .columnimageiconokesip {
                                display: flex;
                                flex-direction: column;
                                width: 350px;
                                height: max-content;
                                justify-content: flex-end;
                                overflow: hidden;
                                min-width: fit-content(20em);
                            }

                            @media only screen and (max-width: 900px) {

                                .columnimageiconokesip {
                                    height: max-content;
                                    width: 50vw;
                                    min-width: fit-content(20em);
                                }

                            }
                        </style>


                        <div class="grouptitleppid jarak_ok_sip_title">
                            <div class="rowtitleoke_sip oksip_ig_title_row ">
                                <div class="columnoksipjudul">
                                    <div class="columnimageiconokesip height_image">
                                        <img class="imagebjdki image_okesip" src="assets/img/ppid/info1_sumut.jpeg" style="width: 150px;">
                                    </div>
                                </div>
                                <div class="columndetailppid_ok_sip">
                                    <a href="buletin-sumut" target="_blank">
                                        <div class="textdetail">Lihat Semua »</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="group_content_ppid">

                            <a href="https://online.fliphtml5.com/fjwhz/fvaw/">
                                <div class="artikel_ok_sip">
                                    <div class="grupimage_ok_sip">
                                        <div class="columnimage_ok_sip">
                                            <img class="image_ok_sip_new" src="assets/img/buletin/berinternet-sehat-dan-aman-info-sumut.jpeg">
                                        </div>
                                    </div>
                                    <div class="grupartikel_ok_sip">
                                        <div class="description_ok_sip">Berinternet Sehat Dan Aman Info
                                            Sumut</div>
                                        <div class="description_ok_sip">Published On</div>
                                        <div class="tanggal_ok_sip">Tue, 11 June 2024</div>
                                    </div>
                                </div>
                            </a>
                            <a href="https://online.fliphtml5.com/fjwhz/fbeq/">
                                <div class="artikel_ok_sip">
                                    <div class="grupimage_ok_sip">
                                        <div class="columnimage_ok_sip">
                                            <img class="image_ok_sip_new" src="assets/img/buletin/panduan-berinternet-sehat-dan-aman.jpeg">
                                        </div>
                                    </div>
                                    <div class="grupartikel_ok_sip">
                                        <div class="description_ok_sip">Panduan Berinternet Sehat Dan Aman
                                        </div>
                                        <div class="description_ok_sip">Published On</div>
                                        <div class="tanggal_ok_sip">Mon, 28 Februari 2022</div>
                                    </div>
                                </div>
                            </a>
                            <a href="https://online.fliphtml5.com/fjwhz/kmgz/">
                                <div class="artikel_ok_sip">
                                    <div class="grupimage_ok_sip">
                                        <div class="columnimage_ok_sip">
                                            <img class="image_ok_sip_new" src="assets/img/buletin/buletin-2021-edisi-1.jpeg">
                                        </div>
                                    </div>
                                    <div class="grupartikel_ok_sip">
                                        <div class="description_ok_sip">Buletin 2021 Edisi I</div>
                                        <div class="description_ok_sip">Published On</div>
                                        <div class="tanggal_ok_sip">Mon, 07 June 2021</div>
                                    </div>
                                </div>
                            </a>
                            <a href="https://online.fliphtml5.com/fjwhz/wwzl/">
                                <div class="artikel_ok_sip">
                                    <div class="grupimage_ok_sip">
                                        <div class="columnimage_ok_sip">
                                            <img class="image_ok_sip_new" src="assets/img/buletin/buletin-2021-edisi-2.jpeg">
                                        </div>
                                    </div>
                                    <div class="grupartikel_ok_sip">
                                        <div class="description_ok_sip">Buletin 2021 Edisi II</div>
                                        <div class="description_ok_sip">Published On</div>
                                        <div class="tanggal_ok_sip">Tue, 21 September 2021</div>
                                    </div>
                                </div>
                            </a>
                            <a href="https://online.fliphtml5.com/fjwhz/ctah/">
                                <div class="artikel_ok_sip">
                                    <div class="grupimage_ok_sip">
                                        <div class="columnimage_ok_sip">
                                            <img class="image_ok_sip_new" src="assets/img/buletin/buletin-2021-edisi-3.jpeg">
                                        </div>
                                    </div>
                                    <div class="grupartikel_ok_sip">
                                        <div class="description_ok_sip">Buletin Edisi III</div>
                                        <div class="description_ok_sip">Published O</div>
                                        <div class="tanggal_ok_sip">Mon, 13 June 2022</div>
                                    </div>
                                </div>
                            </a>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Buletin --}}

        <link href="https://ppid.jakarta.go.id/assets/home/ppidNew/css/ppidhome.css" rel="stylesheet">
        <link href="https://kenwheeler.github.io/slick/slick/slick-theme.css" rel="stylesheet">
        <link href="https://kenwheeler.github.io/slick/slick/slick.css" rel="stylesheet">
        <script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>



        <!--berita-->
        <div class=" jarak" style="padding-top: 30px; ">
            <iframe src="https://infosumut.id/info-sumut-website-berita-resmi-pemprov-sumatera-utara/semua-halaman/" style="width: 100%; height: 600px; border: none; " title="Berita PPID SUMUT"></iframe>

            <!--berita-->




            @endsection