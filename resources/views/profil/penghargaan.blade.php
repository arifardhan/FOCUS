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
<section class="head-breadcrumb" style="background-image:linear-gradient( rgb(0, 0, 0), rgba(0, 0, 0, 0.4) ), url('{{asset('assets/img/breadcumb/1.jpg')}}');">
    <div class="container">
        <h1>Penghargaan</h1>
        <div class="link-breadcrumb">
            <a href="/" class="active"> <i class="fa fa-home"></i> Beranda</a>
            Profil Perusahaan / Penghargaan        </div>
    </div>
</section>
<!-- End Breadcumb Area -->

<!-- Start Penghargaan Area -->
<div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            </div>
        </div>
        <div class="row">
            <!-- Start Penghargaan -page -->
            <div class="awesome-project-1 fix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="awesome-menu ">
                        <ul class="project-menu">
                            <li>
                                <a href="#" class="active" data-filter="*">All</a>
                            </li>
                            <li>
                                <a href="#" data-filter=".2018" class="">2018</a>
                            </li>
                            <li>
                                <a href="#" data-filter=".2017" class="">2017</a>
                            </li>
                            <li>
                                <a href="#" data-filter=".2016" class="">2016</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="awesome-project-content" style="position: relative; height: 636px;">
                <!-- single-awesome-project start -->
                <div class="col-md-4 col-sm-4 col-xs-12 2016" style="position: absolute; left: 0px; top: 0px;">
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            <a href="#"><img src="{{asset('assets/img/portfolio/penghargaan1.jpg')}}" alt=""></a>
                            <div class="add-actions text-center">
                                <div class="project-dec">
                                    <a class="venobox vbox-item" data-gall="myGallery" href="{{asset('assets/img/portfolio/penghargaan1.jpg')}}">
                                        <h4>Agen Bonding Terbaik</h4>
                                        <span>Jasindo</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-awesome-project end -->
                <!-- single-awesome-project start -->
                <div class="col-md-4 col-sm-4 col-xs-12 2016" style="position: absolute; left: 390px; top: 0px;">
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            <a href="#"><img src="{{asset('assets/img/portfolio/penghargaan2.jpg')}}" alt=""></a>
                            <div class="add-actions text-center">
                                <div class="project-dec">
                                    <a class="venobox vbox-item" data-gall="myGallery" href="{{asset('assets/img/portfolio/penghargaan2.jpg')}}">
                                        <h4>The Best Fee Base Income Contributor, Category: Insurance Broker</h4>
                                        <span>BNI</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-awesome-project end -->
                <!-- single-awesome-project start -->
                <div class="col-md-4 col-sm-4 col-xs-12 2017" style="position: absolute; left: 780px; top: 0px;">
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            <a href="#"><img src="{{asset('assets/img/portfolio/penghargaan3.jpg')}}" alt=""></a>
                            <div class="add-actions text-center">
                                <div class="project-dec">
                                    <a class="venobox vbox-item" data-gall="myGallery" href="{{asset('assets/img/portfolio/penghargaan3.jpg')}}">
                                        <h4>Agen Asuransi Terbaik 2017</h4>
                                        <span>Eximbank</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-awesome-project end -->
            </div>
        </div>
    </div>
</div>

<!-- Start Footer bottom Area -->
<footer>
    @include('layout.footer')
</footer>

<!-- Back to the top -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

@include('layout.library')
</body>
</html>
