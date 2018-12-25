<?php
/**
 * Created by PhpStorm.
 * User: Arif Ramadhan
 * Date: 12/24/2018
 * Time: 6:33 PM
 */
?>
    <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Profil | FOCUS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
</head>

<head>
    <!-- Favicons -->
    <link href="{{asset('assets/img/logo.png')}}" rel="icon">
    <link href="{{asset('assets/img/logo.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('assets/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('assets/lib/nivo-slider/css/nivo-slider.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/owlcarousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/owlcarousel/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/lib/venobox/venobox.css')}}" rel="stylesheet">

    <!-- Nivo Slider Theme -->
    <link href="{{asset('assets/css/nivo-slider-theme.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- Responsive Stylesheet File -->
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">

</head>

<body data-spy="scroll" data-target="#navbar-example">

<header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">

                    <!-- Navigation -->
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Brand -->
                            <a class="navbar-brand page-scroll sticky-logo" href="/">
                                <img src="{{asset('assets/img/logofocus.png')}}" alt="image" title="image" style="max-width:100%; height: 40px;">
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil Perusahaan<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="/sejarah-perusahaan" >Sejarah Perusahaan</a></li>
                                        <li><a href="/visi-misi" >Visi & Misi</a></li>
                                        <li><a href="/pengurus-perusahaan" >Pengurus Perusahaan</a></li>
                                        <li><a href="/perizinan-usaha" >Perizinan Usaha</a></li>
                                        <li><a href="/penghargaan" >Penghargaan</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Produk & Layanan<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href='/produk/detail/1/pembiayaan-umum' >Pembiayaan Umum</a></li>
                                        <li><a href='/produk/detail/2/pembiayaan-multiguna' >Pembiayaan Multiguna</a></li>
                                        <li><a href='/produk/detail/3/pembiayaan-mikro' >Pembiayaan Mikro</a></li>
                                        <li><a href='/produk/detail/4/pembiayaan-konstruksi-dan-pengadaan-barang-jasa' >Pembiayaan Konstruksi & Pengadaan Barang/Jasa</a></li>
                                        <li><a href='/produk/detail/5/custom-bond' >Custom Bond</a></li>
                                        <li><a href='/produk/detail/6/kontra-bank-garansi' >Kontra Bank Garansi</a></li>
                                        <li><a href='/produk/detail/7/pembiayaan-pemilikan-rumah' >Pembiayaan Pemilikan Rumah Dengan FLPP</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="page-scroll" href="/mitra-perusahaan">Mitra Kerja</a>
                                </li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Media<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href='media/artikel-berita' >Artikel & Berita</a></li>
                                        <li><a href='media/kegiatan' >Kegiatan</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Hubungi Kami<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href='/layanan-pelanggan' >Layanan Pelanggan</a></li>
                                        <li><a href='/tata-cara-pengaduan' >Tata Cara Pengaduan</a></li>
                                        <li><a href='/FAQ' >FAQ</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- navbar-collapse -->
                    </nav>
                    <!-- END: Navigation -->
                </div>
            </div>
        </div>
    </div>
    <!-- header-area end -->
</header>
<!-- header end -->

<!-- Start Breadcumb Area -->
<section class="head-breadcrumb" style="background-image:linear-gradient( rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4) ), url('{{asset('assets/img/breadcumb/1.jpg')}}');">
    <div class="container">
        <h1>Perizinan Usaha</h1>
        <div class="link-breadcrumb">
            <a href="/" class="active">Beranda</a>
            Profil Perusahaan / Perizinan Usaha </div>
    </div>
</section>
<!-- End Breadcumb Area -->

<!-- Start Izin Usaha Area -->
<div id="team" class="our-team-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h2 style="font-size: 28px">Perizinan Usaha PT. Focus Inservindo</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="team-top">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="layer-1-1 hidden-xs wow slideInDown  animated" style="max-width: 50%;border: 0px;margin-left: 201px;">
                        <a>
                            <img src="{{asset('assets/img/portfolio/1.png')}}" alt="">
                        </a>
                        <div class="team-content text-center">
                            <h4 style="font-family: 'Open Sans', sans-serif;margin-top: 15px; font-size: 22px">Terdaftar dan Diawasi OJK</h4>
                            <p>No. 022/NB.122/STTD-APJB/2018</p>
                        </div>
                    </div>
                </div>
                <!-- End column -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="layer-1-1 hidden-xs wow slideInUp  animated" style="max-width: 50%;border: 0px; margin-right: 201px; margin-left: 45px;">
                        <a>
                                <img src="{{asset('assets/img/portfolio/2.png')}}" alt="">
                            </a>
                        <div class="team-content text-center">
                            <h4 style="font-family: 'Open Sans', sans-serif;margin-top: 15px">Terdaftar di ASIPPINDO</h4>
                            <p>Nomor Lisensi: 2018-15-00083</p>
                        </div>
                    </div>
                </div>
                <!-- End column -->
            </div>
        </div>
    </div>
</div>
<!-- End Izin Usaha Area -->


<!-- Start Footer bottom Area -->
<footer>
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-content">
                        <div class="footer-head">
                            <div class="footer-logo">
                                <img src="{{asset('assets/img/logofocusbiru.png')}}" alt="image" title="image" style="max-width:100%; height: 40px;">
                            </div>
                            <p> Merupakan perusahaan jasa
                                perantara yang focus terhadap layanan penerbitan jaminan, baik yang diterbitkan dari
                                bank (Bank Garansi) maupun yang diterbitkan dari perusahaan asuransi (Surety Bond).                            <div class="footer-icons">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-google"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single footer -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-content" style="margin-left:35px">
                        <div class="footer-head">
                            <h4>Hubungi Kami</h4>
                            <div class="footer-contacts">
                                <p><span>Alamat:</span>
                                    Gedung Pesona Lt. 1
                                    Jl. Ciputat Raya No. 20 Kebayoran Lama
                                    Jakarta Selatan 12240
                                </p>
                                <p><span>Telp:</span> (021) 7290012 (Hunting)</p>
                                <p><span>Email:</span> focusinservindo@gmail.com</p>
                                <p><span>Fax:</span> (021) 7290013</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single footer -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-content">
                        <div class="footer-head" style="margin-left:90px">
                            <h4>Tentang Kami</h4>
                            <div class="footer-contacts">
                                <p><span><a href="#">Profil Perusahaan</a></span></p>
                                <p><span><a href="#">Produk & Layanan</a></span></p>
                                <p><span><a href="#">Artikel & Berita</a></span></p>
                                <p><span><a href="#">Mitra</a></span></p>
                                <p><span><a href="#">Penghargaan</a></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="footer-area-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="copyright text-center">
                        <p>
                            &copy; Copyright <strong>2018 PT. Focus Inservindo-Jakarta</strong>. All Rights Reserved
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="{{asset('assets/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/lib/venobox/venobox.min.js')}}"></script>
<script src="{{asset('assets/lib/knob/jquery.knob.js')}}"></script>
<script src="{{asset('assets/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('assets/lib/parallax/parallax.js')}}"></script>
<script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('assets/lib/nivo-slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/lib/appear/jquery.appear.js')}}"></script>
<script src="{{asset('assets/lib/isotope/isotope.pkgd.min.js')}}"></script>

<!-- Contact Form JavaScript File -->
<script src="{{asset('assets/contactform/contactform.js')}}"></script>

<script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>
