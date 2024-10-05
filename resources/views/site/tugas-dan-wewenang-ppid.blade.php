@extends('layouts.master')

@section('content')
<section class="sabbi-section section-meet_the_team roboto-bold" style="margin-top: 100px">
    <div class="kotak">
        <h1 class="center_title_layout">Tugas Dan Kewenangan PPID</h1>
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
                <h4 class="roboto-bold">Tugas PPID Provinsi Sumatera Utara :</h4>
                <ul class=" misi roboto-regular">
                    <li>
                        <span>Pengkoordinasikan dan mengkonsolidasikan pengumpulan bahan informasi dan dokumentasi dari PPID pembantu.</span>
                    </li>
                    <li>
                        <span>Menyimpan, mendokumentasikan, menyediakan dan memberi pelayanan informasi kepada publik.</span>
                    </li>
                    <li>
                        <span>Melakukan verifikasi bahan informasi publik.</span>
                    </li>
                    <li>
                        <span>Melakukan uji konsekuensi atas informasi yang dikecualikan.</span>
                    </li>
                    <li>
                        <span>Melakukan kemutakhiran informasi dan dokumentasi.</span>
                    </li>
                    <li>
                        <span>Menyediakan informasi dan dokumentasi untuk diakses oleh masyarakat.</span>
                    </li>
                </ul>

            </div>
            <div class="col-md-6">
                <h4 class="roboto-bold">Kewenangan PPID Provinsi Sumatera Utara :</h4>
                <ul class=" misi roboto-regular">
                    <li>
                        <span>Menolak memberikan informasi yang dikecualikan sesuai dengan ketentuan peraturan perundang-undangan.</span>
                    </li>
                    <li>
                        <span>Meminta dan memperoleh informasi dari unit kerja/komponen/satuan kerja yang menjadi cakupan kerjanya.</span>
                    </li>
                    <li>
                        <span>Mengkoordinasikan pemberian pelayanan informasi dengan PPID Pembantu dan/atau Pejabat Fungsional yang menjadi cakupan kerjanya</span>
                    </li>
                    <li>
                        <span>Menentukan atau menetapkan suatu informasi dapat/tidaknya diakses oleh publik.</span>
                    </li>
                    <li>
                        <span>Menugaskan PPID Pembantu dan/atau Pejabat Fungsional untuk membuat, mengumpulkan,serta memelihara informasi dan dokumentasi untuk kebutuhan organisasi.</span>
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