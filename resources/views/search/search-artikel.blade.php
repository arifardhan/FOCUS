<!doctype html>
<html lang="en">
<head>
    @include('layout.title-search')
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
        <h1>Pencarian</h1>
        <div class="link-breadcrumb">
            <a href="/" class="active">Beranda</a>
            Search / {{$name}} <p id="cari"></p> </div>
    </div>
</section>
<!-- End Breadcumb Area -->

<!-- Start search blog -->
<div class="blog-page area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="row">
                    <h4 style="margin-bottom: 50px">
                        Hasil Pencarian "{{$name}}"
                    </h4>
                    <div class="single-blog">
                        <div class="blog-text">
                            <h4 style="margin-bottom: 0px">
                                <a style="font-family: Raleway; color: #0C519D; font-size: 32px" href="#">(Artikel) Tentang Industri Jasa Keuangan</a>
                            </h4>
                            <div class="blog-meta" style="margin-bottom: 15px">
                                <span class="author-meta"><i class="fa fa-bookmark"></i> <a href="/media/artikel-berita">Artikel & Berita </a></span>
                                <span>&nbsp; <i class="fa fa-clock-o"></i>Jum'at, 28 Desember 2018</span>
                            </div>
                            <p>
                                Jasa keuangan adalah suatu istilah yang digunakan untuk merujuk jasa yang disediakan oleh industri keuangan. Jasa keuangan juga digunakan untuk merujuk pada organisasi yang menangani pengelolaan dana. Bank, bank investasi, perusahaan asuransi, perusahaan kartu kredit, perusahaan pembiayaan konsumen...
                            </p>
                            <span>
                                <a href="/media/artikel-berita/read/03/tentang-industri-jasa-keuangan" class="ready-btn">Selengkapnya</a>
                            </span>
                    </div>
                </div>
            </div>
        </div>
            <!-- Start Widget Area -->
            <div class="col-md-4">
                <div class="widget">
                    @include('layout.management-profile')
                </div>
                <div class="widget">
                    @include('layout.artikel-berita-terbaru')
                </div>
            </div>
            <!-- End Widget Area -->
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
