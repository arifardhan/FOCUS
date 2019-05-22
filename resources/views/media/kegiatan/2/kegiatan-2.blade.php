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
            Media / <a href="/media/kegiatan">Kegiatan</a>/ FOCUS Menerima Penghargaan dari Askrindo </div>
    </div>
</section>
<!-- End Breadcumb Area -->
<section class="content-video">
    <div class="video">
        <div class="container">
            <h1 style="color:#ffffff; font-size: 24px"> FOCUS Menerima Penghargaan dari Askrindo</h1>
            <br>
            <div id="headline" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img class="first-slide" src="{{asset('assets/img/kegiatan/detail2/1.jpg')}}" alt="">
                    </div>
                    <div class="item">
                        <img class="first-slide" src="{{asset('assets/img/kegiatan/detail2/2.jpg')}}" alt="">
                        <div class="carousel-caption">
                        </div>
                    </div>
                </div>

                <a class="left carousel-control" href="#headline" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#headline" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <a class="left carousel-control" href="#headline" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#headline" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Start Footer bottom Area -->
<footer>
    @include('layout.footer')
</footer>
<!-- Back to the top -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

@include('layout.library')
</body>
</html>
