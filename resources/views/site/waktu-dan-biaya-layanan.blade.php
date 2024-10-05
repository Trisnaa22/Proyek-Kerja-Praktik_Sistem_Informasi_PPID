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
<section id="media" class="article">
    <div class="container wow fadeInDown " data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="row">
            <div class="col-md-8">
                <div class="col-md-12 title-light align-left">
                    <div class="col-md-2">
                        <img style="width: 100%;" src="https://ppid.jakarta.go.id/assets/home/ppidNew/images/ico/icon-waktu.png">
                    </div>
                    <div class="col-md-10 col-xs-12">
                        <br>
                        <h2>Waktu Pelayanan Informasi Publik</h2>
                        <h3>Senin - Jum'at : 08:00 WIB s/d 16:00 WIB</h3>
                        <div style="padding-left: 0px !important;" class="col-md-2 col-xs-12">
                            <strong>
                                Istirahat
                            </strong>
                        </div>
                        <div class="col-md-10 col-xs-12">
                            <strong>
                                (Senin - Kamis 12:00 WIB - 13:00 WIB)<br>
                                (Jum'at 11:30 WIB - 13:00 WIB)
                            </strong>
                        </div>
                    </div>
                </div>
                <div style="clear: both;margin-bottom: 15px;"></div>
                <div class="col-md-12 title-light align-left">
                    <div class="col-md-2">
                        <img style="width: 100%;" src="https://ppid.jakarta.go.id/assets/home/ppidNew/images/ico/icon-biaya.png">
                    </div>
                    <div class="col-md-10 col-xs-12">
                        <br>
                        <h2>Biaya Pelayanan Informasi Publik</h2>
                        <div style="padding-left: 0px !important;" class="col-md-12">
                            <h3>Sesuai dengan Peraturan Gubernur Nomor 175 Tahun 2016 tentang Layanan Informasi
                                Publik dijelaskan bahwa:</h3>
                            <strong>
                                <ol>
                                    <li>Penyediaan dan pemberian pelayanan informasi publik kepada pemohon
                                        informasi tidak dipungut biaya (pasal 53 ayat 3).</li>
                                    <li>Dalam hal pemohon bermaksud melakukan penggandaan atau perekaman
                                        informasi publik, maka pemohon informasi dapat melakukan penggandaan
                                        atau perekaman dengan menggunakan biaya sendiri di sekitar lokasi PPID
                                        bersama petugas layanan informasi PPID atau menyediakan CD/VCD/Flashdisk
                                        untuk perekaman data informasi publik (pasal 53 ayat 4).</li>
                                    <li>Dalam hal pemohon ingin mendapatkan salinan informasi melalui pengiriman
                                        jasa pos dan jasa kurir dikenakan biaya pos dan biaya kurir sesuai
                                        dengan ketentuan biaya pada kantor jasa pos dan kantor jasa kurir (pasal
                                        53 ayat 5).</li>
                                </ol>
                            </strong>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 title-light align-left hide">
                    <h2>Pembiayaan Pasal 53 Ayat 3, 4 dan Ayat 5</h2>
                    <li>(3) Penyediaan dan pemberian pelayanan informasi publik kepada pemohon informasi tidak
                        dipungut biaya.</li>
                    <li>(4) Dalam hal pemohon bermaksud melakukan penggandaan atau perekaman informasi publik,
                        maka pemohon informasi dapat melakukan penggandaan atau perekaman dengan menggunakan
                        biaya sendiri di sekitar lokasi PPID bersama petugas layanan informasi PPID atau
                        menyediakan CD/VCD/Flashdisk untuk perekaman data informasi publik.</li>
                    <li>(5) Dalam hal pemohon ingin mendapatkan salinan informasi melalui pengiriman jasa pos
                        dan jasa kurir dikenakan biaya pos dan biaya kurir sesuai dengan ketentuan biaya pada
                        kantor jasa pos dan kantor jasa kurir.</li>
                </div>
            </div>

            <style>
                .garishimmerisi {
                    height: 10px;
                    margin-top: 15px;
                    width: 100%;

                }

                .imagebj {
                    width: 150px;
                    height: 130px;
                    object-fit: cover;
                }

                .judulberitabj {
                    flex: 3;
                    font-family: "GothamMedium";
                    margin-top: 5px;
                    margin-right: 10px;
                    color: #03155b;
                    font-size: 14px;
                    display: -webkit-box;
                    max-width: max-content;
                    -webkit-line-clamp: 3;
                    text-align: left;
                    flex-direction: column;
                    -webkit-box-orient: vertical;
                    overflow: hidden;
                    font-weight: bolder;
                }

                .tanggalberitabj {
                    flex: 1.2;
                    display: flex;
                    flex-direction: column;
                    align-items: flex-start;

                    font-family: "GothamMedium";

                    color: #03155b;
                    font-size: 9px;
                    overflow: hidden;
                    word-break: break-all;
                    text-align: left;
                }

                @media only screen and (max-width: 900px) {

                    .rowcontentbj {
                        flex-direction: column;
                        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);
                        width: 100%;
                        max-width: 300px;
                        overflow: hidden;
                        border-bottom-left-radius: 10px;
                        border-top-left-radius: 10px;
                        border-bottom-right-radius: 10px;
                        border-top-right-radius: 10px;
                        margin-bottom: 30px;
                        display: flex;
                        flex: 1;
                    }

                    .groupcontentppid {
                        padding-right: 5px;
                        display: flex;
                        margin-top: 17px;
                        flex-direction: column;
                        flex: 1;
                        width: 100%;
                        align-items: flex-start;

                    }

                    .layoutjudul {
                        margin-top: 25px;

                    }


                    .columnimagebj {
                        margin-right: 0px;
                        width: 100%;
                        border-bottom-left-radius: 0px;
                        border-top-left-radius: 10px;
                        border-bottom-right-radius: 0px;
                        border-top-right-radius: 10px;
                        height: 175px;

                    }

                    .imagebj {
                        width: 100%;
                        height: auto;
                        object-fit: cover;
                    }



                    .columnberitabj {
                        margin-left: 10px;
                        margin-right: 10px;
                        margin-bottom: 10px;
                    }

                    .rowcontentbjshimmer {
                        flex-direction: column;
                        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);
                        width: 300px;

                        overflow: hidden;
                        border-bottom-left-radius: 10px;
                        border-top-left-radius: 10px;
                        border-bottom-right-radius: 10px;
                        border-top-right-radius: 10px;
                        margin-bottom: 30px;
                    }

                    .columnimagebjshimmer {
                        margin-right: 0px;
                        width: 100%;
                        border-bottom-left-radius: 0px;
                        border-top-left-radius: 10px;
                        border-bottom-right-radius: 0px;
                        border-top-right-radius: 10px;
                        height: 175px;

                    }



                    .imagebjshimmer {
                        width: 100%;
                        height: 50%;
                        object-fit: cover;
                    }



                }
            </style>
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
</section>

@endsection