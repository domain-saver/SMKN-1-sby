
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
        
    <link rel="icon" type="image/png" sizes="96x96" href="http://www.smkn1-sby.sch.id/assets/template/landing/images/favicon.png">
	
    <!-- Google font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="http://www.smkn1-sby.sch.id/assets/template/landing/css/library/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://www.smkn1-sby.sch.id/assets/template/landing/css/library/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://www.smkn1-sby.sch.id/assets/template/landing/css/library/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="http://www.smkn1-sby.sch.id/assets/template/landing/css/md-font.css">
    <link rel="stylesheet" type="text/css" href="http://www.smkn1-sby.sch.id/assets/template/landing/css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <style>
        .slider-text p{
            color: #fff!important;
        }
    </style>
        <style>
        /* col-xs-6 col-sm-4 col-md-3 */

        @media(max-width: 1199px) {
            .col-md-3 {
                width: 33%;
            }
        }

        @media(max-width: 980px) {
            .col-md-3 {
                width: 50%;
            }
        }

        @media(max-width: 567px) {
            .col-md-3 {
                width: 52%;
            }
        }

        .single-team{
            border-radius: 2%;
            background-color: #001e3e;
            width: 280px;
            height: 400px;
            /* padding: 0 0 10px; */
            /* border: 1px solid black; */
            margin-bottom:20px;
        }

        .single-team:hover .social{
            cursor: pointer;
            opacity: 1;
            transform: rotateY(0deg) scale(1,1);
        }

        .img-area{
            border-top-left-radius: 2%;
            border-top-right-radius: 2%;
            overflow: hidden;
            position: relative;
        }

        .img-area img{
            
            height:320px; width:100%; object-fit:cover; object-position:center;
        }

        .img-area:hover img{
            transform: scale(1.2)
        }

        .img-area img{
            transition: all 0.4s ease 0s;
        }

        @media (max-width:768px){
            .img-area .img{
                display: inline-block;
            }
        }

        .img-area .social{
            background-color: rgba(0, 0, 0, 0.7);
            position: absolute;
            text-align: center;
            height: 100%;
            width: 100%;
            left: 0;
            top: 0;
            opacity: 0;
            transition: .5s;
            transform: rotateY(180deg) scale(0.5, 0.5);           
        }

        .img-area .social ul{
            text-align: center;
            position: relative;
            top: 175px;
        }

        .img-area .social ul li a{
            border: 1px solid #fff;
            color: #fff;
            display: block;
            font-size: 20px;
            height: 40px;
            width: 40px;
            line-height: 40px;
        }

        .img-area .social ul li a:hover{
            background-color: #fff;
            color: #000;
            border: 1px solid transparent;
        }

        .img-text{
            /* border: 1px solid black; */
            padding: 10px 10px 20px 20px;
            color: #fff;
            text-align: center;
        }

        .img-text h4{
            font-family: 'Lato', sans-serif;
            margin: 0;
            font-size: 13px;
            letter-spacing: 2px;
            font-weight: bold;
        }

        .img-text h5{
            margin: 0;
            font-family: 'Lato', sans-serif;
            letter-spacing: 1px;
            font-size: 12px;
        }
    </style>

    <title>SMK Negeri 1 Surabaya</title>

</head>
<body id="page-top" class="home">

<!-- PAGE WRAP -->
<div id="page-wrap">

    <!-- PRELOADER -->
    <div id="preloader">
        <div class="pre-icon">
            <div class="pre-item pre-item-1"></div>
            <div class="pre-item pre-item-2"></div>
            <div class="pre-item pre-item-3"></div>
            <div class="pre-item pre-item-4"></div>
        </div>
    </div>
    <!-- END / PRELOADER -->

    <!-- HEADER -->
    <header id="header" class="header" style="margin-top:1%; margin-bottom:1%;">
    <div class="container">

        <!-- LOGO -->
        <div class="logo"><a href="http://www.smkn1-sby.sch.id"><img style="height: 65px; object-fit:cover;" src="http://www.smkn1-sby.sch.id/assets/template/landing/images/logo.png" alt=""></a></div>
        <!-- END / LOGO -->

        <!-- NAVIGATION -->
        <nav class="navigation">

            <div class="open-menu">
                <span class="item item-1"></span>
                <span class="item item-2"></span>
                <span class="item item-3"></span>
            </div>

            <!-- MENU -->
            
            <ul class="menu">
                <li class="menu-item"><a href="http://www.smkn1-sby.sch.id">Home</a></li>
                <li class="menu-item-has-children active">
                    <a href="#">Profil</a>
                    <ul class="sub-menu">
                        <li class=""><a href="http://www.smkn1-sby.sch.id/profil/visimisi">Visi & Misi</a></li>
                        <li class=""><a href="http://www.smkn1-sby.sch.id/profil/struktur">Struktur Organisasi</a></li>
                        <li class=" active"><a href="http://www.smkn1-sby.sch.id/profil/guru/view">Guru & Tenaga Kependidikan</a></li>
                        <li class=""><a href="http://www.smkn1-sby.sch.id/profil/gallery/11/view">Sarana & Prasarana</a></li>
                        <li class=""><a href="http://www.smkn1-sby.sch.id/profil/gallery/12/view">Teaching Factory</a></li>
                        <li class=""><a href="http://www.smkn1-sby.sch.id/profil/gallery/semua/view">Gallery Foto</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children">
                    <a href="#">Jurusan</a>
                    <ul class="sub-menu">
                        <li class=""><a href="http://www.smkn1-sby.sch.id/jurusan/profil/3" style="line-height:30px;">Akuntansi dan Keuangan Lembaga</a></li>
                        <li class=""><a href="http://www.smkn1-sby.sch.id/jurusan/profil/9" style="line-height:30px;">Bisnis Daring dan Pemasaran</a></li>
                        <li class=""><a href="http://www.smkn1-sby.sch.id/jurusan/profil/11" style="line-height:30px;">Otomatisasi dan Tata Kelola Perkantoran</a></li>
                        <li class=""><a href="http://www.smkn1-sby.sch.id/jurusan/profil/1" style="line-height:30px;">Rekayasa Perangkat Lunak</a></li>
                        <li class=""><a href="http://www.smkn1-sby.sch.id/jurusan/profil/4" style="line-height:30px;">Multimedia</a></li>
                        <li class=""><a href="http://www.smkn1-sby.sch.id/jurusan/profil/5" style="line-height:30px;">Teknik Komputer dan Jaringan</a></li>
                        <li class=""><a href="http://www.smkn1-sby.sch.id/jurusan/profil/6" style="line-height:30px;">Desain Komunikasi Visual</a></li>
                        <li class=""><a href="http://www.smkn1-sby.sch.id/jurusan/profil/10" style="line-height:30px;">Produksi Siaran Program Pertelevisian</a></li>
                        <li class=""><a href="http://www.smkn1-sby.sch.id/jurusan/profil/8" style="line-height:30px;">Perhotelan</a></li>
                        
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Informasi</a>
                    <ul class="sub-menu">
                        <li class=""><a href="http://www.smkn1-sby.sch.id/info/mriso">Mr. Iso</a></li>
                        <li class=""><a href="http://www.smkn1-sby.sch.id/info/pengumuman/semua">Pengumuman</a></li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="http://www.smkn1-sby.sch.id/berita/semua/list">Berita</a>
                </li>
               
                <!-- 
                <li style="background-color:lightgreen" class="menu-item-has-children">
                    <a href="#">PPDB</a>
                    <ul class="sub-menu">
                        
                        <li><a href="http://www.smkn1-sby.sch.id/login">Entri Data Dapodik</a></li>
                    </ul>
                </li>
                -->
               
                <li class="menu-item">
                    <a href="http://www.smkn1-sby.sch.id/modul/semua/view">Modul</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Program</a>
                    <ul class="sub-menu">
                        <li><a target="_blank" href="http://lsp.smkn1-sby.sch.id/">Lembaga Sertifikasi Profesi</a></li>
                        <li><a target="_blank" href="http://bkk.smkn1-sby.sch.id/">Bursa Kerja Kusus (BKK)</a></li>
                    </ul>
                </li>
                                    <li class="menu-item">
                        <a href="http://www.smkn1-sby.sch.id/login">Log in</a>
                    </li>
                            </ul>
            <!-- END / MENU -->
            
        </nav>
        <!-- END / NAVIGATION -->

    </div>
</header>    <!-- END / HEADER -->
    
    <section class="sub-banner sub-banner-course">
    <div class="awe-static bg-sub-banner-course"></div>
    <div class="container">
        <div class="sub-banner-content">
            <h2 class="text-center">Guru dan Tenaga Kependidikan</h2>
        </div>
    </div>
</section>
<div class="container">

    <div class="tabs-page">
        <ul class="nav-tabs" role="tablist">
            <li class="active"><a href="#guru" role="tab" data-toggle="tab">Guru</a></li>
            <li><a href="#tenagaKependidikan" role="tab" data-toggle="tab">Tenaga Kependidikan</a></li>
        </ul>

        <section class="sub-banner sub-banner-search" style="padding:0;">
            <div class="sub-banner-content-result">
                <form action="http://www.smkn1-sby.sch.id/profil/guru/view" method="GET">
                <div class="form-item">
                    <input value="" name="cari" type="text" style="border: 1px solid #37ABF2;">
                </div>
                <div class="form-actions">
                    <input type="submit" value="Search">
                </div>
                </form>
            </div>
        </section>

        <!-- Tab panes -->
        <div class="tab-content">
            
            <!-- INTRODUCTION -->
            <div class="tab-pane fade in active" id="guru">
                <div class="content grid">
                    <div class="row">
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/abdul-majid2-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Abdul Majid, S.Pd.</h4>
                                        <h5>Pendidikan Pancasila dan Kewarganegaraan</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/adi-faeftri-yuniawan-spdi.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Adi Faeftri Yuniawan, S.Pd.I</h4>
                                        <h5>Pendidikan Agama Islam</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/ahmad-solikun-spd-mpd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Ahmad Solikun, S.Pd., M.Pd.</h4>
                                        <h5>Produktif Otomatisasi dan Tata kelola Perkantoran</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/ainun-najib-romadhoni-sst.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Ainun Najib Romadhoni, S.ST</h4>
                                        <h5>Guru Produktif TKJ</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/al-lukman-arief-proyogo-sds.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Al lukman Arief Proyogo, S.Ds</h4>
                                        <h5>Produktif DKV</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/aminatul-muklisyah-st-gr.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Aminatul Muklisyah, S.T., Gr</h4>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/ana-puspitasari-spd.png" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Ana Puspitasari, S.Pd</h4>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/andina-witaning-sari-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Andina Witaning Sari, S.Pd</h4>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/asmuin-sag.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Asmu&#039;in, S.Ag</h4>
                                        <h5>Pendidikan Agama Islam</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/badarudin-ssos.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Badarudin, S.Sos</h4>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/bagus-priyatno-sst-par.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Bagus Priyatno, S.St. Par</h4>
                                        <h5>Produktif Perhotelan</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/barid-nazih-el-fikri.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Barid Nazih El Fikri</h4>
                                        <h5>Bahasa Inggris</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/cheby-marse-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Cheby Marse, S.Pd</h4>
                                        <h5>Bimbingan Konseling</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/dra-ari-astuti.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Dra. Ari Astuti</h4>
                                        <h5>Produktif  Otomatisasi dan Tata Kelola Perkantoran</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/dra-dwi-sudarwati.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Dra. Dwi Sudarwati</h4>
                                        <h5>Produktif  Otomatisasi dan Tata Kelola Perkantoran</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/dra-eka-rismayawati-mm.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Dra. Eka Rismayawati, MM</h4>
                                        <h5>Produktif Pemasaran dan Bisnis Daring</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/dra-hardiani-mm.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Dra. Hardiani, MM.</h4>
                                        <h5>Produktif  Otomatisasi dan Tata Kelola Perkantoran</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/dra-istikomah-mm.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Dra. Istikomah, MM</h4>
                                        <h5>Produktif Pemasaran dan Bisnis Daring</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/dra-lilik-alfiah-mm-mpd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Dra. Lilik Alfiah, MM., M.Pd.</h4>
                                        <h5>Matematika</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/dra-lusita-mm.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Dra. Lusita, MM</h4>
                                        <h5>Produktif Akuntansi dan Keuangan Lembaga</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/dra-masyitah-munir-mm.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Dra. Masyitah Munir, MM</h4>
                                        <h5>Produktif Akuntansi dan Keuangan Lembaga</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/dra-ngesti-wahyu-widiastuti.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Dra. Ngesti Wahyu Widiastuti</h4>
                                        <h5>Pendidikan Pancasila dan Kewarganegaraan</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/dra-nur-ainiyah-mm.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Dra. Nur Ainiyah, MM</h4>
                                        <h5>Produktif  Otomatisasi dan Tata Kelola Perkantoran</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/dra-sakti-harini-mm.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Dra. Sakti Harini, MM</h4>
                                        <h5>Produktif Pemasaran dan Bisnis Daring</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/dra-siti-chodidjah-sst-mm.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Dra. Siti Chodidjah, SST, MM</h4>
                                        <h5>Matematika</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/dra-sri-minarni.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Dra. Sri Minarni</h4>
                                        <h5>Produktif Akuntansi dan Keuangan Lembaga</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/dra-sri-praptiwi-sst.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Dra. Sri Praptiwi, S.ST.</h4>
                                        <h5>Matematika dan Produktif Rekayasa Perangkat Lunak</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/dra-sripeni-wulansari.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Dra. Sripeni Wulansari</h4>
                                        <h5>Produktif  Otomatisasi dan Tata Kelola Perkantoran</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/dra-sulastri.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Dra. Sulastri</h4>
                                        <h5>Produktif Akuntansi dan Keuangan Lembaga</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/dra-sulastri-mm.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Dra. Sulastri, MM</h4>
                                        <h5>Bahasa Inggris</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/dra-sumiatun.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Dra. Sumiatun</h4>
                                        <h5>Produktif Akuntansi dan Keuangan Lembaga</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/dra-supiyah-mm.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Dra. Supiyah, MM</h4>
                                        <h5>Produktif Akuntansi dan Keuangan Lembaga</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/dra-titik-widhayanti-sst.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Dra. Titik Widhayanti, S.ST</h4>
                                        <h5>Produktif TP4RP</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/drs-abd-rosyid-mm.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Drs. Abd. Rosyid, MM</h4>
                                        <h5>Bahasa Indonesia</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/mochammad-arsyad-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Drs. Choirun Slamet</h4>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/1578451265.jpeg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Drs. Gigieh Roessajanto</h4>
                                        <h5>Sejarah</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/drs-joko-prastowo.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Drs. Joko Prastowo</h4>
                                        <h5>PenjaskesOr</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/drs-juli-wartono-mm.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Drs. Juli Wartono, MM</h4>
                                        <h5>Produktif  Otomatisasi dan Tata Kelola Perkantoran</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/drs-m-naim-hadi-mpd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Drs. M. Na&#039;im Hadi, M.Pd.</h4>
                                        <h5>Produktif Perhotelan</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/drs-rahmat-iskandar.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Drs. Rahmat Iskandar</h4>
                                        <h5>Matematika</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/drs-sidik-dwi-widodo-mm-mpd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Drs. Sidik Dwi Widodo, MM, M.Pd</h4>
                                        <h5>Matematika</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/drs-siswoyo-dwi-putro.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Drs. Siswoyo Dwi Putro</h4>
                                        <h5>Bahasa Indonesia</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/drs-susilo-tondo-widodo.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Drs. Susilo Tondo Widodo</h4>
                                        <h5>Produktif  Otomatisasi dan Tata Kelola Perkantoran</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/eko-septiawan-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Eko Septiawan, S.Pd</h4>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/ekowati-sulistyorini-spd-mm.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Ekowati Sulistyorini, S.Pd., MM</h4>
                                        <h5>Bahasa Indonesia</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/endang-dwi-purwanti-spd-mm.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Endang Dwi Purwanti, S.Pd. MM</h4>
                                        <h5>Produktif  Otomatisasi dan Tata Kelola Perkantoran</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/endang-poerwaningsih-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Endang Poerwaningsih, S.Pd</h4>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/etik-lukistyo-utami-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Etik Lukistyo Utami, S.Pd</h4>
                                        <h5>Fisika Kimia dan Produktf  Perhotelan</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/farahma-yuanita-ssi-sst.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Farahma Yuanita S.Si., S.ST</h4>
                                        <h5>Produktif Desain Komunikasi Visual</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/1519182774.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Farida Muzayyanah, S.Pd.I</h4>
                                        <h5>Pendidikan Agama Islam</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/hermanto-spdi.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Hermanto, S.Pd.I</h4>
                                        <h5>Pendidikan Agama Islam</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/herry-julianto-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Herry Julianto, S.Pd</h4>
                                        <h5>PenjaskesOr</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/husnun-niam-sh-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Husnun Niam, SH, S.Pd.</h4>
                                        <h5>Sejarah Indonesia</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/indah-saptaning-wahyuni-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Indah Saptaning Wahyuni, S.Pd.</h4>
                                        <h5>Matematika</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/iqbal-hakam-syah-pahlevi-sds.png" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Iqbal Hakam Syah Pahlevi, S.Ds.</h4>
                                        <h5>Desain Komunikasi Visual</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/jasuli-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Jasuli, S.Pd.</h4>
                                        <h5>Produktif BDP</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/jefry-mahardika-efendi.png" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Jefry Mahardika Efendi</h4>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/jhon-guruh-putra-pakarsi.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Jhon Guruh Putra Pakarsi</h4>
                                        <h5>Bahasa Daerah Jawa</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/joko-setiyo-spd-mpd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Joko Setiyo, S.Pd, M.Pd</h4>
                                        <h5>Matematika</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/1518593407.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Khoirun Nisa&#039; S.Pd, M.Pd.</h4>
                                        <h5>Matematika</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/labib-spd-mm.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Labib, S.Pd., MM.</h4>
                                        <h5>PenjaskesOr</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/lilik-kurniatispd-mm.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Lilik Kurniati,S.Pd., MM</h4>
                                        <h5>Produktif Pemasaran dan Bisnis Daring</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/lintang-novela-rosada-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Lintang Novela Rosada, S.Pd</h4>
                                        <h5>Produktif PSPT</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/lukas-agustinus-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Lukas Agustinus, S.Pd.</h4>
                                        <h5>Bahasa Indonesia</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/lukman-sholeh-skom.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Lukman Sholeh, S.Kom</h4>
                                        <h5>Produktif Rekayasa Perangkat Lunak</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/mochammad-arsyad-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Mochammad Arsyad, S.Pd</h4>
                                        <h5>Produktif PSPT</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/mukhamad-syaifullah-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Mukhamad Syaifullah, S.Pd</h4>
                                        <h5>Produktif RPL</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/nanik-sulastri-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Nanik Sulastri, S.Pd</h4>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/mochammad-arsyad-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Novita, S.Pd</h4>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/nur-aminatus-solikhahse.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Nur Aminatus  Solikhah,SE</h4>
                                        <h5>Sejarah Indonesia</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/nur-chalimatussadijah-spd-mpdi.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Nur Chalimatussa&#039;dijah, S.Pd. M.Pd.I.</h4>
                                        <h5>Matematika</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/nur-wahidah-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Nur Wahidah S.Pd</h4>
                                        <h5>Produktif Perhotelan dan Kewirausahaan</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/prestiwati-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Prestiwati, S.Pd</h4>
                                        <h5>Produktif Akuntansi dan Keuangan Lembaga</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/pudji-prihastuti-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Pudji Prihastuti, S.Pd</h4>
                                        <h5>Produktif Akuntansi dan Keuangan Lembaga</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/mochammad-arsyad-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Ratih Lestari, S.Pd</h4>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/mochammad-arsyad-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Reny Karlinawati, S.Pd</h4>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/retno-ariyani-spd-mm.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Retno Ariyani, S.Pd., MM.</h4>
                                        <h5>Kewirausahaan dan TP4RP</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/ririn-wartinah-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Ririn Wartinah, S.Pd</h4>
                                        <h5>Produktif Perhotelan</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/1519179840.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Rodhi Nurwulan Azis, S.Pd</h4>
                                        <h5>Produktif Multimedia</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/rohib-al-faisal-sutopo-st.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Rohib al Faisal Sutopo, S.T</h4>
                                        <h5>Produktif DKV</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/romy-dwy-setyo-wibowo-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Romy Dwy Setyo Wibowo, S.Pd.</h4>
                                        <h5>Bimbingan Konseling</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/rona-aniwidjaja-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Rona Aniwidjaja, S.Pd</h4>
                                        <h5>Bahasa Inggris</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/sapto-agung-nugroho-spd-sst.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Sapto Agung  Nugroho, S.Pd, S.ST</h4>
                                        <h5>Produktif PSPT</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/sari-okta-rahmalina-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Sari Okta Rahmalina, S.Pd</h4>
                                        <h5>Bahasa Indonesia</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/setyo-budiwati-spd-mm.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Setyo Budiwati, S.Pd, MM</h4>
                                        <h5>Produktif Akuntansi dan Keuangan Lembaga</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/siswantiningrum-spsi.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Siswantiningrum, S.Psi</h4>
                                        <h5>BK/BP</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/siti-nur-afiyanti-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Siti Nur Afiyanti, S.Pd</h4>
                                        <h5>Bahasa Inggris</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/siti-nurkhasanahspd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Siti Nurkhasanah,S.Pd</h4>
                                        <h5>Produktif Desain Komunikasi Visual</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/siti-romelah-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Siti Romelah, S.Pd</h4>
                                        <h5>Bahasa Inggris</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/sri-eni-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Sri Eni, S.Pd</h4>
                                        <h5>Produktif  Otomatisasi dan Tata Kelola Perkantoran</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/sri-retna-pratiwisstmpd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Sri Retna Pratiwi,S.ST,M.Pd</h4>
                                        <h5>Produktif Multimedia</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/sudarsi-mpd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Sudarsi, M.Pd</h4>
                                        <h5>Produktif  Otomatisasi dan Tata Kelola Perkantoran</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/sulam-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Sulam, S.Pd</h4>
                                        <h5>Produktif Desain Komunikasi Visual</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/sunardi-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Sunardi, S.Pd</h4>
                                        <h5>Prakarya dan Kewirausahaan, Sejarah Indonesia</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/suningtyas-harti-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Suningtyas Harti, S.Pd</h4>
                                        <h5>Matematika</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/suratman-sst.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Suratman, S.ST</h4>
                                        <h5>Produktif Teknik Komputer Jaringan</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/teguh-pribadi-st.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Teguh Pribadi, ST</h4>
                                        <h5>Produktif TP4RP</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/titin-soepriatin-spd-mm.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Titin Soepriatin, S.Pd, MM</h4>
                                        <h5>Bahasa Inggris</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/tressyana-diraswati-n-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Tressyana Diraswati N., S.Pd</h4>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/tri-wahyuningsih-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Tri Wahyuningsih, S.Pd</h4>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/tri-wulaning-purnami-spd-se-mpd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Tri Wulaning Purnami, S.Pd., SE, M.Pd.</h4>
                                        <h5>Produktif  Otomatisasi dan Tata Kelola Perkantoran</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/1519186193.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Tutik Asmiasih,S.Pd I</h4>
                                        <h5>Pendidikan Agama Islam</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/1577078038.jpeg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Wannugroho pasma ismara S,Pd</h4>
                                        <h5>Seni Budaya</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/winarsono-spd-mpd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Winarsono, S.Pd., M.Pd.</h4>
                                        <h5>Bahasa Inggris</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/windy-lutfiana-tristy-spd.png" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Windy Lutfiana Tristy, S.pd</h4>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/wiyono-spd-sst-mm.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Wiyono, S.Pd., S.ST, MM</h4>
                                        <h5>Produktif Teknik Komputer Jaringan</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/wuryaningsih-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Wuryaningsih, S.Pd</h4>
                                        <h5>Bahasa Indonesia</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/yektionospdsstmpd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Yektiono,S.Pd,S.ST,M.Pd</h4>
                                        <h5>Produktif Teknik Komputer Jaringan</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/yose-auliandi-sst.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Yose Auliandi, S.ST</h4>
                                        <h5>Produktif Multimedia</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/yunitaningrum-dwi-candrarinist.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Yunitaningrum Dwi Candrarini,S.T</h4>
                                        <h5>Fisika Kimia dan Seni Budaya</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/zainuri-spdi.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Zainuri, S.Pd.I</h4>
                                        <h5>Pendidikan Agama Islam</h5>
                                    </div>
                                </div>
                            </div>
                                            </div>
                </div>
            </div>
            <!-- END / INTRODUCTION -->

            <!-- INTRODUCTION -->
            <div class="tab-pane fade in" id="tenagaKependidikan">
                <div class="content grid">
                    <div class="row">
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/akhmad-abdul-khanif.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Akhmad Abdul Khanif</h4>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/ali-mustakim.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Ali Mustakim</h4>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/desy-indayanise-sst.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Desy Indayani,SE , S.ST</h4>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/dwi-nurul-cholifah-spd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Dwi Nurul Cholifah, S.Pd</h4>
                                        <h5>-</h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/emi-nur-ainiyah-ningsih-amd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Emi Nur Ainiyah Ningsih, A.Md</h4>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/feri-triharjono.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Feri Triharjono</h4>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/nurmita-rizky-azizah-amd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Nurmita Rizky Azizah, A.Md</h4>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/suryani-amd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Suryani, A.Md</h4>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/tien-sugito-amd.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Tien Sugito, A.Md</h4>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-3">
                                <div class="single-team">
                                    <div class="img-area">
                                        <img class="img-responsive" src="http://www.smkn1-sby.sch.id/storage/images/guru/1519186388.jpg" alt="">
                                    </div>
                                    <div class="img-text">
                                        <h4 id="el">Winarsih, SE</h4>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                                            </div>
                </div>
            </div>
            <!-- END / INTRODUCTION -->

        </div>
    </div>
</div>
    
    <!-- BEFORE FOOTER -->
    
    <!-- END / BEFORE FOOTER -->

    
    <!-- FOOTER -->
    <footer id="footer" class="footer">
    <div class="first-footer">
        <div class="container">
            <div class="row">
                
                <div class="col-md-6">
                    <div class="widget">
                        <h3 class="md">Tentang Kami</h3>
                        <p style="text-align: justify;">
                            Sekolah Kejuruan di Surabaya, Jawa Timur yang berlokasi di Jl. Smea No. 4, Wonokromo Surabaya, SMK Negeri 1 Surabaya bertekad mencapai perbaikan yang berkesinambungan berdasarkan sistem manajemen mutu ISO 9001:2008.
                            <br>Telp. 031-8292038 FAX. 031- 8292039, Email : info@smkn1-sby.sch.id
                        </p>
                        <ul style="display: inline-flex;">
                            <li>
                                <a style="border: 1px solid white; margin:5px; padding:10px; text-align:center;" href="https://www.youtube.com/channel/UCeJCDRP0PhIt7p81pbKR5hg" target="_blank" class="twitter">
                                    <i style="font-size: 18px;" class="fa fa-youtube-play"></i>
                                </a>
                            </li>
                            <li>
                                <a style="border: 1px solid white; margin:5px; padding:10px; text-align:center;"  href="https://www.instagram.com/smkn1surabaya.official/?hl=id" target="_blank" class="facebook">
                                    <i style="font-size: 20px;" class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>

                

                <div class="col-md-2">
                    <div class="widget quick_link">
                        <h3 class="sm">Links Terkait</h3>
                        <ul class="list-style-block">
                            <li><a href="http://bkk.smkn1-sby.sch.id/">BKK</a></li>
                            <li><a href="http://lsp.smkn1-sby.sch.id/">LSP</a></li>
                            <li><a href="http://www.ppdbjatim.net/">PPDB</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget news_letter">
                        <h3 class="sm">Lokasi SMK Negeri 1 Surabaya</h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15829.711567252976!2d112.7338791!3d-7.3057308!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5959ad479fd46d02!2sSMK%20Negeri%201%20Surabaya!5e0!3m2!1sen!2sid!4v1610061759307!5m2!1sen!2sid" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="second-footer">
        <div class="container">
            <div class="contact">
                <div class="email">
                    <i class="icon md-email"></i>
                    <a href="#">www.smkn1-sby.sch.id</a>
                </div>
                
                
            </div>
            <p class="copyright">Copyright © 2021 SMK Negeri 1 Surabaya. All rights reserved.</p>
        </div>
    </div>
</footer>    <!-- END / FOOTER -->


    


</div>
<!-- END / PAGE WRAP -->

<!-- Load jQuery -->
<script type="text/javascript" src="http://www.smkn1-sby.sch.id/assets/template/landing/js/library/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://www.smkn1-sby.sch.id/assets/template/landing/js/library/bootstrap.min.js"></script>
<script type="text/javascript" src="http://www.smkn1-sby.sch.id/assets/template/landing/js/library/jquery.owl.carousel.js"></script>
<script type="text/javascript" src="http://www.smkn1-sby.sch.id/assets/template/landing/js/library/jquery.appear.min.js"></script>
<script type="text/javascript" src="http://www.smkn1-sby.sch.id/assets/template/landing/js/library/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="http://www.smkn1-sby.sch.id/assets/template/landing/js/library/jquery.easing.min.js"></script>
<script type="text/javascript" src="http://www.smkn1-sby.sch.id/assets/template/landing/js/scripts.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
</body>
</html>
