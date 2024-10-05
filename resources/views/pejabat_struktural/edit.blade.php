<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang>
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <title>PPID Provinsi Sumatera Utara</title>
    <meta content name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700|Open+Sans:300,400,400i,600,700" rel="stylesheet">

    <link href="assets/tools/sequence/css/sequence-theme.basic.css" rel="stylesheet" media="all">
    <link href="assets/tools/dropdownhover/css/animate.min.css" rel="stylesheet">
    <link href="assets/tools/dropdownhover/css/bootstrap-dropdownhover.min.css" rel="stylesheet">

    <link href="assets/tools/lightbox/ekko-lightbox.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="auth-theme-rashmore">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Form Tambah Data Pejabat Struktural -->
    <section class="sabbi-section section-meet_the_team" style="margin-top: 100px">
        <div class="kotak">
            <h1 class="center_title_layout"> Form Edit Data Daftar Pejabat Struktural</h1>
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
    <!-- Form Tambah Data Pejabat Struktural -->

    <section>
        <form action="/editdata/{{ $daftarpejabatstruktural->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class=" jarak" style="padding-top: 30px; ">
                <table align="center" bgcolor="grey" width="50%" bac>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama" size="30" value="{{ $daftarpejabatstruktural->nama }}"></td>
                    </tr>
                    <tr>
                        <td>Perangkat Daerah</td>
                        <td>:</td>
                        <td><input type="text" name="perangkat_daerah" value="{{ $daftarpejabatstruktural->perangkat_daerah }}" size="30"></td>
                    </tr>
                    <tr>
                        <td>Satuan Unit/Kerja</td>
                        <td>:</td>
                        <td><input type="text" name="satuan_unit_kerja" value="{{ $daftarpejabatstruktural->satuan_unit_kerja }}" size="30"></td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td><input type="text" name="jabatan" value="{{ $daftarpejabatstruktural->jabatan }}" size="30"></td>
                    </tr>
                    <tr>
                        <td>Golongan</td>
                        <td>:</td>
                        <td><input type="text" name="golongan" value="{{ $daftarpejabatstruktural->golongan }}" size="30"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="simpan" value="Simpan">
                            <input type="reset" name="batal" value="Batal">
                            <input type="button" name="kembali" value="Kembali" onclick="self.history.back()">
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </section>

</body>

</html>