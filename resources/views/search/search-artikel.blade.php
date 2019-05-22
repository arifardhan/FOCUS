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
<section class="head-breadcrumb" style="background-image:linear-gradient( rgb(0, 0, 0), rgba(0, 0, 0, 0.4) ), url('{{asset('assets/img/breadcumb/1.jpg')}}');">
    <div class="container">
        <h1>Pencarian</h1>
        <div class="link-breadcrumb">
            <a href="/" class="active"> <i class="fa fa-home"></i> Beranda</a>
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
                                <a style="font-family: Raleway; color: #0C519D; font-size: 32px" href="#">(Artikel) 5 Hal yang Harus Anda Pahami tentang Asuransi Keuangan Surety Bond</a>
                            </h4>
                            <div class="blog-meta" style="margin-bottom: 15px">
                                <span class="author-meta"><i class="fa fa-bookmark"></i> <a href="/media/artikel-berita">Artikel & Berita </a></span>
                                <span>&nbsp; <i class="fa fa-clock-o"></i>Rabu, 20 Desember 2017 06:23 &nbsp </span>
                                <span><i class="fa fa-user"></i> <a href="https://www.jasindo.co.id">Jasindo</a></span>
                            </div>
                            <p>
                                Dalam proses tender, setiap perusahaan peserta tender diwajibkan memiliki penjamin dalam bentuk surety bond
                                yang dikeluarkan oleh perusahaan asuransi. Selain untuk menjamin kepastian dan kepercayaan bagi masing-masing pihak,
                                asuransi keuangan atau surety bond berfungsi sebagai upaya pengambilalihan potensi risiko kerugian yang mungkin dapat dialami
                                oleh salah satu pihak karena pelanggaran kontrak yang telah disepakati. Selain penjelasan singkat di atas, berikut ini
                                serba-serbi asuransi keuangan yang perlu Anda ketahui...
                            </p>
                            <span>
                                <a href="/media/artikel-berita/read/03/5-hal-yang-harus-anda-pahami-tentang-asuransi-keuangan-surety-bond" class="ready-btn">Selengkapnya</a>
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
