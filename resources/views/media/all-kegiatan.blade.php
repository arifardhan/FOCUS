<!doctype html>
<html lang="en">
<head>
    @include('layout.title-media')
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
        <h1>Kegiatan</h1>
        <div class="link-breadcrumb">
            <a href="/" class="active"> <i class="fa fa-home"></i> Beranda</a>
            Media / Kegiatan </div>
    </div>
</section>
<!-- End Breadcumb Area -->

<!-- Start Penghargaan Area -->
<div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
        <div class="row">
            <!-- Start Penghargaan -page -->
            <div class="awesome-project-content" style="position: relative; height: 636px;">
                <!-- single-awesome-project start -->
                <div class="col-md-3 col-sm-3 col-xs-12 2016" style="position: absolute; left: 0px; top: 0px;">
                    <a href="/media/kegiatan/01/focus-menggelar-acara-2nd-Anniversary">
                        <img src="{{asset('assets/img/kegiatan/1.jpg')}}" alt=""></a>

                    <h4 style="font-size: 16px; font-family: 'Raleway'; color: #0C519D; margin-top: 10px; text-align:center">
                        <a href="/media/kegiatan/01/focus-menggelar-acara-2nd-Anniversary">
                            FOCUS Menggelar Acara 2nd Anniversary</a></h4>
                </div>
                <!-- single-awesome-project start -->
                <div class="col-md-3 col-sm-3 col-xs-12 2016" style="position: absolute; left: 0px; top: 0px;">
                    <a href="#"><img src="{{asset('assets/img/kegiatan/2.jpg')}}" alt=""></a>
                    <h4 style="font-size: 16px; font-family: 'Raleway'; color: #0C519D; margin-top: 10px; text-align:center">
                        <a href="#">Donor Darah </a></h4>
                </div>
                <!-- single-awesome-project start -->
                <div class="col-md-3 col-sm-3 col-xs-12 2016" style="position: absolute; left: 0px; top: 0px;">
                    <a href="/media/kegiatan/02/focus-menerimaan-penghargaan-dari-askrindo"><img src="{{asset('assets/img/kegiatan/3.jpg')}}" alt=""></a>
                    <h4 style="font-size: 16px; font-family: 'Raleway'; color: #0C519D; margin-top: 10px; text-align:center">
                        <a href="/media/kegiatan/02/focus-menerimaan-penghargaan-dari-askrindo">FOCUS Menerima Penghargaan dari Askrindo</a></h4>
                </div>
                <!-- single-awesome-project start -->
                <div class="col-md-3 col-sm-3 col-xs-12 2016" style="position: absolute; left: 0px; top: 0px;">
                    <a href="#"><img src="{{asset('assets/img/kegiatan/4.jpg')}}" alt=""></a>
                    <h4 style="font-size: 16px; font-family: 'Raleway'; color: #0C519D; margin-top: 10px; text-align:center">
                        <a href="#">Study Banding Business Excellence Best Practice</a></h4>
                </div>
            </div>
            <div class="awesome-project-content" style="position: relative; height: 636px;">
                <!-- single-awesome-project start -->
                <div class="col-md-3 col-sm-3 col-xs-12 2016" style="position: absolute; left: 0px; top: 0px;">
                    <a href="#"><img src="{{asset('assets/img/kegiatan/5.jpg')}}" alt=""></a>
                    <h4 style="font-size: 16px; font-family: 'Raleway'; color: #0C519D; margin-top: 10px; text-align:center">
                        <a href="#">Pemenang Lomba Foto Tematik</a></h4>
                </div>
                <!-- single-awesome-project start -->
                <div class="col-md-3 col-sm-3 col-xs-12 2016" style="position: absolute; left: 0px; top: 0px;">
                    <a href="#"><img src="{{asset('assets/img/kegiatan/6.jpg')}}" alt=""></a>
                    <h4 style="font-size: 16px; font-family: 'Raleway'; color: #0C519D; margin-top: 10px; text-align:center">
                        <a href="#">Turnamen Futsal FOCUS Cup 2018</a></h4>
                </div>
                <!-- single-awesome-project start -->
                <div class="col-md-3 col-sm-3 col-xs-12 2016" style="position: absolute; left: 0px; top: 0px;">
                    <a href="#"><img src="{{asset('assets/img/kegiatan/7.jpg')}}" alt=""></a>
                    <h4 style="font-size: 16px; font-family: 'Raleway'; color: #0C519D; margin-top: 10px; text-align:center">
                        <a href="#">Turnamen Billiard</a></h4>
                </div>
                <!-- single-awesome-project start -->
                <div class="col-md-3 col-sm-3 col-xs-12 2016" style="position: absolute; left: 0px; top: 0px;">
                    <a href="#"><img src="{{asset('assets/img/kegiatan/8.jpg')}}" alt=""></a>
                    <h4 style="font-size: 16px; font-family: 'Raleway'; color: #0C519D; margin-top: 10px; text-align:center">
                        <a href="#">Pertandingan Bowling untuk Direksi dan Karyawan</a></h4>
                </div>
            </div>
        </div>
        <!-- single-awesome-project end -->
        <div class="blog-pagination" style="margin-left: 500px">
            <ul class="pagination">
                <li><a href="#">&lt;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&gt;</a></li>
            </ul>
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
