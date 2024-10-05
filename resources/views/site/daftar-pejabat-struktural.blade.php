@extends('layouts.master')

@section('content')
{{-- Daftar Pejabat Struktural --}}
<section class="sabbi-section section-meet_the_team" style="margin-top: 100px">
    <div class="kotak">
        <h1 class="center_title_layout">Daftar Pejabat Struktural</h1>
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
    <div class="container wow fadeInDown roboto-regular">
        <div class="row">
            <div class="col-md-12">
                <div class="search-param">
                    <h2><span><b>Pilih Satuan/Unit Kerja yang dicari</b></span></h2>
                    <select class="form-control search-opt select2 select2-hidden-accessible" onchange="choice1(this)" tabindex="-1" aria-hidden="true">&gt;
                        <option value="">Semua</option>
                        <option>BADAN KEPEGAWAIAN DAERAH</option>
                        <option>BADAN KESATUAN BANGSA DAN POLITIK</option>
                        <option>BADAN PELAYANAN PENGADAAN BARANG/JASA</option>
                        <option>BADAN PEMBINAAN BADAN USAHA MILIK DAERAH</option>
                        <option>BADAN PENANGGULANGAN BENCANA DAERAH</option>
                        <option>BADAN PENDAPATAN DAERAH</option>
                        <option>BADAN PENGELOLAAN ASET DAERAH</option>
                        <option>BADAN PENGELOLAAN KEUANGAN DAERAH</option>
                        <option>BADAN PENGEMBANGAN SUMBER DAYA MANUSIA</option>
                        <option>BADAN PERENCANAAN PEMBANGUNAN DAERAH</option>
                        <option>DINAS BINA MARGA</option>
                        <option>DINAS CIPTA KARYA, TATA RUANG DAN PERTANAHAN</option>
                        <option>DINAS KEBUDAYAAN</option>
                        <option>DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL</option>
                        <option>DINAS KESEHATAN</option>
                        <option>DINAS KESEHATAN (PARAMEDIS)</option>
                        <option>DINAS KETAHANAN PANGAN, KELAUTAN DAN PERTANIAN</option>
                        <option>DINAS KOMUNIKASI, INFORMATIKA DAN STATISTIK</option>
                        <option>DINAS LINGKUNGAN HIDUP</option>
                        <option>DINAS PARIWISATA DAN EKONOMI KREATIF</option>
                        <option>DINAS PEMBERDAYAAN, PERLINDUNGAN ANAK DAN PENGENDALIAN PENDUDUK</option>
                        <option>DINAS PEMUDA DAN OLAHRAGA</option>
                        <option>DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU</option>
                        <option>DINAS PENANGGULANGAN KEBAKARAN DAN PENYELAMATAN</option>
                        <option>DINAS PENDIDIKAN</option>
                        <option>DINAS PENDIDIKAN (GURU-GURU)</option>
                        <option>DINAS PERHUBUNGAN</option>
                        <option>DINAS PERINDUSTRIAN, PERDAGANGAN, KOPERASI, USAHA KECIL, DAN MENENGAH</option>
                        <option>DINAS PERPUSTAKAAN DAN KEARSIPAN</option>
                        <option>DINAS PERTAMANAN DAN HUTAN KOTA</option>
                        <option>DINAS PERUMAHAN RAKYAT DAN KAWASAN PERMUKIMAN</option>
                        <option>DINAS SOSIAL</option>
                        <option>DINAS SUMBER DAYA AIR</option>
                        <option>DINAS TENAGA KERJA, TRANSMIGRASI, DAN ENERGI</option>
                        <option>INSPEKTORAT</option>
                        <option>KABUPATEN ADMINISTRASI KEPULAUAN SERIBU</option>
                        <option>KOTA ADMINISTRASI JAKARTA BARAT</option>
                        <option>KOTA ADMINISTRASI JAKARTA PUSAT</option>
                        <option>KOTA ADMINISTRASI JAKARTA SELATAN</option>
                        <option>KOTA ADMINISTRASI JAKARTA TIMUR</option>
                        <option>KOTA ADMINISTRASI JAKARTA UTARA</option>
                        <option>SATUAN POLISI PAMONG PRAJA</option>
                        <option>SEKRETARIAT DAERAH</option>
                        <option>SEKRETARIAT DEWAN PERWAKILAN RAKYAT DAERAH</option>
                    </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 400px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-a7pt-container"><span class="select2-selection_rendered" id="select2-a7pt-container" title="Semua">Semua</span><span class="select2-selection_arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <div id="daftar-informasi_wrapper" class="dataTables_wrapper no-footer">
                    <div id="daftar-informasi_filter" class="dataTables_filter"><label>Cari : <input type="search" class="" placeholder="" aria-controls="daftar-informasi"></label></div>
                    <table align="center" class="roboto-bold">
                        <tr bgcolor="grey">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Perangkat Daerah</th>
                            <th>Satuan Unit Kerja</th>
                            <th>Jabatan</th>
                            <th>Golongan</th>
                        </tr>
                        <?php
                        include "../public/koneksi.php";
                        $no = 1;
                        $data = mysqli_query($koneksi, "select * from daftar_pejabat_strukturals");
                        while ($row = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row['nama']; ?></td>
                                <td><?php echo $row['perangkat_daerah']; ?></td>
                                <td><?php echo $row['satuan_unit_kerja']; ?></td>
                                <td><?php echo $row['jabatan']; ?></td>
                                <td><?php echo $row['golongan']; ?></td>
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