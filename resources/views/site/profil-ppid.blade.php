@extends('layouts.master')

@section('content')
<section class="sabbi-section section-meet_the_team roboto-bold" style="margin-top: 100px">
    <div class="kotak">
        <h1 class="center_title_layout">Profil PPID</h1>
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

<style>
    .text-left {
        font-family: "'Times New Roman', Times, serif" !important;
    }

    .fontwebprofil {
        color: black;
        font-size: 17px;
        line-height: 1.7em;
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
            <div class="col-md-12">
                <div class="col-md-5 col-xs-12 item item-opacity video-informasi" style="opacity: 1;">
                    <img src="assets/img/ppid/kota-medan.jpeg">
                </div>
                <div class="text-left">
                    <h2 class="roboto-bold">LATAR BELAKANG</h2>
                    <p class="fontwebprofil roboto-regular">Informasi merupakan kebutuhan pokok setiap orang bagi pengembangan pribadi dan lingkungan sosialnya
                        serta merupakan bagian penting bagi ketahanan nasional. Hak memperoleh informasi merupakan hak asasi manusia dan keterbukaan
                        informasi publik merupakan salah satu ciri penting negara demokratis yang menjunjung tinggi kedaulatan rakyat untuk mewujudkan
                        penyelenggaraan negara yang baik.</p>

                    <p class="fontwebprofil roboto-regular">Pemberlakuan Undang-Undang Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik (UU KIP) pada tanggal 30 April
                        2010 merupakan momentum penting dalam mendorong keterbukaan di Indonesia. Dalam mendukung semangat keterbukaan informasi, Provinsi
                        Sumatera Utara telah ditetapkan Peraturan Gubernur Sumatera Utara Nomor 71 Tahun 2017 tentang Pedoman Pengelolaan Pelayanan Informasi
                        dan Dokumentasi Pemerintah Provinsi Sumatera Utara yang ditindaklanjuti dengan penetapan Keputusan Gubernur Sumatera Utara
                        Nomor 188.44/764/KPTS/2017 tentang Pejabat Pengelola Informasi dan Dokumentasi Provinsi Sumatera Utara.</p>

                    <p class="fontwebprofil roboto-regular">UU KIP telah memberikan landasan hukum terhadap hak setiap orang dalam memperoleh informasi publik. UU KIP
                        mengamanatkan setiap badan publik mempunyai kewajiban dalam menyediakan dan melayani permohonan informasi publik secara cepat,
                        tepat waktu, biaya ringan dan dengan cara sederhana. Untuk memberikan pelayanan informasi, setiap badan publik menunjuk Pejabat
                        Pengelola Informasi dan Dokumentasi (PPID). Salah satu tugas PPID adalah menyediakan akses informasi publik bagi pemohon informasi.
                        Terkait dengan tugas tersebut, PPID Provinsi Sumatera Utara menetapkan Standar Operasional Prosedur (SOP) Pejabat Pengelola Informasi
                        dan Dokumentasi Provinsi Sumatera Utara melalui Keputusan Gubernur Sumatera Utara Nomor 188.44/765/KPTS/2017 tentang Standar Operasional
                        Prosedur Pejabat Pengelola Informasi dan Dokumentasi Provinsi Sumatera Utara. Dengan adanya SOP ini, diharapkan implementasi UU KIP dapat
                        berjalan efektif, sehingga hak dan kewajiban badan publik maupun pemohon informasi dapat dilaksanakan dengan optimal sesuai dengan tujuan UU KIP.</p>
                </div>
                <div class="text-left">
                    <h2 class="roboto-bold">PPID Pemerintah Provinsi Sumatera Utara</h2>
                    <p class="fontwebprofil roboto-regular">Pejabat Pengelola Informasi dan Dokumentasi (PPID) Pemerintah Provinsi Sumatera Utara merupakan ujung tombak pelayanan informasi di Provinsi Sumatera Utara. Tugasnya adalah mengelola dan memberikan pelayanan informasi kepada masyarakat.</p>

                    <h2 class="roboto-bold">Motto PPID :</h2>
                    <p class=" fontwebprofil roboto-regular">Cepat, Akurat, Mudah dan Berkualitas.</p>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection