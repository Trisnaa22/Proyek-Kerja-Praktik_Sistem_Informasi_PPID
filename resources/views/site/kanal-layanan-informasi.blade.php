@extends('layouts.master')

@section('content')
<section class="sabbi-section section-meet_the_team roboto-bold" style="margin-top: 100px">
    <div class="kotak">
        <h1 class="center_title_layout">Kanal Layanan Informasi</h1>
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
                <table>
                    <tbody>
                        <tr>

                            <td><img style="width: 50px;vertical-align: middle;" src="https://ppid.jakarta.go.id/assets/home/ppidNew/images/ico/Icon-telepon.png">
                            </td>
                            <td style="vertical-align: middle;"><span class="text-tbl">&nbsp;021 382 3252 /
                                    382 3146</span></td>
                        </tr>
                        <tr>
                            <td><img style="width: 50px;vertical-align: middle;" src="https://ppid.jakarta.go.id/assets/home/ppidNew/images/ico/icon-fax.png">
                            </td>
                            <td style="vertical-align: middle;"><span class="text-tbl">&nbsp;021 382
                                    3252</span></td>
                        </tr>
                        <tr>
                            <td><img style="width: 50px;vertical-align: middle;" src="https://ppid.jakarta.go.id/assets/home/ppidNew/images/ico/Icon-Email.png">
                            </td>
                            <td style="vertical-align: middle;" target="_blank"> <a href="mailto:ppid@jakarta.go.id"><span class="text-tbl">&nbsp;ppid@jakarta.go.id</span></a> /
                                <a href="mailto:ppidjakarta@gmail.com" target="_blank"><span class="text-tbl">&nbsp;ppidjakarta@gmail.com</span></a>
                            </td>
                        </tr>
                        <tr>
                            <td><img style="width: 50px;vertical-align: middle;" src="https://ppid.jakarta.go.id/assets/home/ppidNew/images/ico/icon-website.png">
                            </td>
                            <td style="vertical-align: middle;"> <a target="_blank" href="https://ppid@jakarta.go.id"><span class="text-tbl">&nbsp;ppid.jakarta.go.id</span></a></td>
                        </tr>
                        <tr>
                            <td><img style="width: 50px;vertical-align: middle;" src="https://ppid.jakarta.go.id/assets/home/ppidNew/images/ico/icon-mobile.png">
                            </td>
                            <td style="vertical-align: middle;">
                                <a href="https://s.id/PPIDJKT-Android" target="_blank"><span class="text-tbl">&nbsp;Mobile PPID Jakarta Google Play</span></a> /
                                <a href="https://s.id/PPIDJKT-Apple" target="_blank"><span class="text-tbl">&nbsp;Mobile PPID Jakarta Appstore</span></a>
                            </td>
                        </tr>
                        <tr>
                            <td><img style="width: 50px;vertical-align: middle;" src="https://ppid.jakarta.go.id/assets/home/ppidNew/images/ico/Icon-Lokasi.png">
                            </td>
                            <td style="vertical-align: middle;">
                                <span class="text-tbl">
                                    &nbsp;Ruangan Layanan Informasi Publik<br>
                                    &nbsp;Jl. Medan Merdeka Selatan No. 8-9<br>
                                    &nbsp;Blok F Lt.2 - Gambir<br>
                                    &nbsp;Jakarta Pusat, DKI Jakarta, 10110<br>
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
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