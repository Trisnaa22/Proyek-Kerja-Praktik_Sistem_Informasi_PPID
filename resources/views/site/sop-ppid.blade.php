@extends('layouts.master')

@section('content')
<section class="sabbi-section section-meet_the_team roboto-bold" style="margin-top: 100px">
    <div class="kotak">
        <h1 class="center_title_layout">SOP PPID</h1>
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
    <div class="container wow fadeInDown text-left " data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="row roboto-bold">
            <div class="col-md-8 col-xs-12 title-light" style="margin-top: 20px; ">
                <ol>
                    <li><a class="font_sop" href="document/SOP/SOP PPID.pdf" target="_blank">SOP PPID - Pelayanan Permohonan Informasi dan Dokumentasi
                            Publik</a></li>
                    <li><a class="font_sop" href="document/SOP/SOP_Penanganan_Keberatan.pdf" target="_blank">SOP PPID - Keberatan Informasi Publik</a></li>
                    <li><a class="font_sop" href="document/SOP_Fasilitasi_Sengketa.pdf" target="_blank">SOP PPID - Fasilitasi Sengketa Informasi</a></li>
                    <li><a class="font_sop" href="document/SOP/SOP_Uji_Konsekuensi.pdf" target="_blank">SOP PPID - Pengujian Konsekuensi Informasi Publik</a></li>
                    <li><a class="font_sop" href="document/SOP_Penyusunan_DIDP.pdf" target="_blank">SOP PPID - Penyusunan Daftar Informasi dan Dokumentasi Publik</a>
                    </li>
                    <li><a class="font_sop" href="document/SOP/SOP_Pelayanan_Permohonan_Informasi.pdf" target="_blank">SOP PPID - Pelayanan Permohonan Informasi Publik</a></li>
                    <li><a class="font_sop" href="document/SOP/Lampiran_SOP.pdf" target="_blank">SOP PPID - Lampiran SOP PPID Provinsi Sumatera Utara</a></li>
                </ol>
            </div>

            <script>
                $(document).ready(function() {
                    shimmerbj();
                    setTimeout(() => {
                        hitapibj();
                    }, 1000);
                });

                function hitapibj() {
                    $.ajax('https://ppid.jakarta.go.id/api-berita-ppid', {
                        'data': JSON.stringify({
                            limit: 5,
                            pageid: '0'
                            //  datestart: datenows
                        }),
                        'type': 'POST',
                        'dataType': "json",
                        'processData': false,
                        'contentType': 'application/json' //typically 'application/x-www-form-urlencoded', but the service you are calling may expect 'text/json'... check with the service to see what they expect as content-type in the HTTP header.

                    }).done(function(data) {
                        if (data.code == 0) {
                            var databj = data.data;
                            listviewberita(databj);
                        } else if (data.code != 0) {
                            var databerita = `<div class="rowcontenterrorppid">` + data.message + `</div>`;
                            document.getElementById("listberitappid").innerHTML = databerita;
                        }

                    });
                }

                function listviewberita(val) {
                    var databeritabj = "";
                    for (let r of val) {
                        databeritabj += `<a href="` + r.url_new + `" target="_blank" class="rowcontentbj">
            
                    <div>
                    
                        <div class="columnimagebj">
                            <img class="imagebj" src='` + r.news_image + `'  alt="` + r.news_title + `">

                        </div>
                    </div>
                    <div class="columnberitabj">
                    <div class="tanggalberitabj">
                            ` + r.news_date + `
                            </div>
                        <div class="rowberitabj">
                            <div class="judulberitabj">
                            ` + r.news_title + `
                            </div>
                        
                        </div>
                        <div class="isisingkatberita">
                        ` + r.news_content + `
                        </div>
                       
                    </div>
                </a>`;
                    }
                    /*    <div class="tanggalberitabj">
                                                ` + r.news_date + `
                                                </div>*/
                    document.getElementById("listberitappid").innerHTML = databeritabj;
                }

                function shimmerbj() {
                    var shimmerhtml = "";
                    var asdsa = "";
                    for (let i = 1; i <= 5; i++) {
                        shimmerhtml += `<div class="rowcontentbjshimmer">
                    <div>
                        <div class="columnimagebjshimmer">
                            <div class="imagebjshimmer shimmerbox"></div>
                            <div class="imagebjshimmer shimmerbox"></div>
                        </div>
                    </div>
                    <div class="columnberitabj">
                    <div class="tanggalberitabj ">
                                <div class="garishimmertanggal shimmerbox"></div>
                            </div>
                        <div class="rowberitabj">
                            <div class="judulberitabjshimmer">
                                <div class="garishimmerjudul shimmerbox"></div>


                            </div>
                           
                        </div>
                        <div class="isisingkatberitashimmer ">

                            <div class="garishimmerisi shimmerbox"></div>
                            <div class="garishimmerisi shimmerbox"></div>

                        </div>
                    
                    </div>
                </div>`;
                    }

                    document.getElementById("listberitappid").innerHTML = shimmerhtml;
                }
            </script>

            <!-- CONTENT END -->
        </div>
    </div>
    </div>

    <div class="container wow fadeInDown hide " data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="row">
            <div class="col-md-12 title-light">
                <object class="view_pdf" data="https://ppid.jakarta.go.id/assets/pdf/sop-ppid-pemprov-dki-jakarta.pdf" internalinstanceid="8"></object>
            </div>
        </div>
        <h4>SOP Sengketa dapat dilihat di <strong>Peraturan Komisi Informasi Pusat Republik Indonesia Nomor 1
                Tahun 2013</strong>. Unduh <a class="url-orange" target="_blank" href="https://ppid.jakarta.go.id/pergub/Perki_No.1_Tahun_2013.pdf">disini</a></h4>
    </div>
</section>
@endsection