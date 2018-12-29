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
    @include('layout.title-profile')
</head>

<head>
    @include('layout.style')
</head>

<body data-spy="scroll" data-target="#navbar-example">

<!-- header start -->
<header>
    @include('layout.header')
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
    @include('layout.footer')
</footer>

<!-- Back to the top -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

@include('layout.library')
</body>
</html>
