@extends('layouts.master')

@section('content')
<section class="sabbi-section section-meet_the_team roboto-bold" style="margin-top: 100px">
    <div class="kotak">
        <h1 class="center_title_layout">Profil Pimpinan</h1>
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
<style type="text/css">
    #media.article .text-center h2 {
        width: 560px;
    }

    .contentpage {
        margin: 15px 10px 10px 10px;
        display: flex;
        flex-direction: column;
        flex: 1;
        width: auto;
    }

    .groupcontentleft {

        display: flex;
        flex-direction: row;
    }

    .contentcenter {
        display: flex;
        margin-top: 15px;
        flex-direction: row;
        align-self: center;
        margin-right: 5%;
    }

    .containergub {
        width: 225px;
        height: auto;
        display: flex;
        margin-right: 15px;
        flex: 1;
        border-bottom-left-radius: 10px;
        border-top-left-radius: 10px;
        border-bottom-right-radius: 10px;
        border-top-right-radius: 10px;
        overflow: hidden;
        flex-direction: column;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.4);
    }


    .responsiveimage {
        max-width: 225px;
        height: 275px;
        object-fit: inherit;
    }

    .groupimagepejabat {
        flex: 1;
        display: flex;
        flex-direction: column;
        width: auto;
        height: 10%;
    }

    .groupnamelead {

        display: flex;
        flex-direction: column;
        flex: 1;
        padding-bottom: 10px;
        justify-content: center;
        align-self: center;
    }

    .namelead1 {
        align-self: flex-end;
        display: flex;
        flex-direction: column;
        flex: 1;
        color: black;
        font-weight: bold;
        margin-top: 10px;
        font-size: 13px;
    }

    .namelead2 {
        align-self: flex-end;
        display: flex;
        flex-direction: column;
        flex: 1;
        color: black;
        font-weight: bold;
        margin-top: 5px;
        font-size: 11px;
        align-self: center;
    }

    .containergub:hover .namelead2,
    .containergub:hover .namelead1 {
        color: red;
    }

    .groupcontentpageleft {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
    }

    .groupcontentpageright {
        width: auto;
        margin-left: 2%;
    }

    .columnimagebjshimmer {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        overflow: hidden;
        border-bottom-left-radius: 10px;
        border-top-left-radius: 10px;
        border-bottom-right-radius: 10px;
        border-top-right-radius: 10px;
        margin-right: 10px;
        height: 130px;
        width: max-content;

    }

    .isisingkatberita {
        font-family: 'Times New Roman', Times, serif;
        margin-top: 5px;
        margin-right: 10px;
        color: #03155b;
        font-size: 12px;
        display: -webkit-box;
        max-width: max-content;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .contentpageppid {
        display: flex;
        flex: 1;
        flex-direction: row;
    }

    @media only screen and (max-width: 900px) {
        .groupcontentleft {
            flex-direction: column;
        }

        .groupcontentpageright {
            width: 100%;
        }

        .groupcontentpageleft {
            width: 100%;
        }

        .contentpage {
            flex-direction: column;
        }

        .contentpageppid {
            flex-direction: column;
        }
    }
</style>

<section id="media" class="article">

    <div class="contentpage">

        <div class="contentpageppid">
            <div class="groupcontentpageleft">
                <div class="groupcontentleft">

                    <div class="contentcenter">
                        <a href="https://sumutprov.go.id/artikel/halaman/gubernur-dan-wakil-gubernur" target="_blank">
                            <div class="containergub">
                                <div class="groupimagepejabat">
                                    <img class="responsiveimage" src="assets/img/profil/gubernur-sumut.png">
                                </div>
                                <div class="groupnamelead roboto-bold">
                                    <div class="namelead1">
                                        Dr. Drs. H. Agus Fatoni, M.Si </div>
                                    <div class="namelead2">
                                        ( Pj. Gubernur Sumatera Utara )
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection