@extends('layouts.master')

@section('content')
<section class="sabbi-section section-meet_the_team" style="margin-top: 100px">
    <div class="kotak">
        <h1 class="center_title_layout" style="color: #000;">Satuan Unit Kerja</h1>
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

{{-- Tabel --}}

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

    .search-param {
        margin-top: 3% !important;
    }

    @media only screen and (max-width: 900px) {
        .search-param {
            margin-top: 10% !important;
        }

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

    #media .rowsdate {
        width: 50px;
    }

    #media .myjabatan {
        text-align: center;
        width: 5px;
    }

    #media .rowspmu {
        width: 1px;
    }

    #media .rowsnama {
        width: 210px;
    }

    #media .rowsukpd {
        width: 210px;
    }

    #media .rowsno {
        width: 5px;
    }

    table {
        border-spacing: 1;
        border-collapse: collapse;
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        width: 100%;
        margin: 0 auto;
        position: relative;
        box-sizing: border-box
    }

    table * {
        position: relative
    }

    table td,
    table th {
        padding-left: 8px;
        font-family: "GothamMedium";
        font-size: 12px;

    }

    #datatablesiaranpers th {
        text-align: center;
    }

    #datatablesiaranpers td {
        text-align: center;
    }

    table thead tr {
        color: white;
        height: 60px;
        background: #888;
    }

    table tbody tr {
        height: 50px
    }

    table tbody tr:last-child {
        border: 0
    }

    table td,
    table th {
        text-align: left
    }

    #datatablesiaranpers_filter>label>input {


        border: 1px solid black !important;
        border-radius: 5px !important;
        font-size: 14px;
        line-height: 2;
        color: #555;
        vertical-align: middle;
        background-color: #fff;
        background-image: none;
    }

    #datatablesiaranpers_filter>label>input:focus {

        border: 1px solid blue !important;

    }


    table td,
    table th {
        text-align: center
    }

    td {
        text-align: center !important;
    }
</style>

<section id="media" class="article">
    <div class="container wow fadeInDown">
        <div class="row">
            <div class="col-md-12">
                <div id="daftar-informasi_wrapper" class="dataTables_wrapper no-footer">
                    <table align="center" class="roboto-bold">
                        <tr bgcolor="grey">
                            <th>No</th>
                            <th>Nama Perangkat Daerah</th>
                            <th>Alamat Perangkat Daerah</th>
                            <th>Telepon</th>
                        </tr>
                        <?php
                        include "../public/koneksi.php";
                        $no = 1;
                        $data = mysqli_query($koneksi, "select * from satuan_unit_kerjas");
                        while ($row = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row['nama_perangkat_daerah']; ?></td>
                                <td><?php echo $row['alamat_perangkat_daerah']; ?></td>
                                <td><?php echo $row['telepon']; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Tabel --}}

@endsection