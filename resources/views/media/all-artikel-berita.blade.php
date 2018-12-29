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
<section class="head-breadcrumb" style="background-image:linear-gradient( rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4) ), url('{{asset('assets/img/breadcumb/1.jpg')}}');">
    <div class="container">
        <h1>Artikel & Berita</h1>
        <div class="link-breadcrumb">
            <a href="/" class="active">Beranda</a>
            Media / Artikel & Berita </div>
    </div>
</section>
<!-- End Breadcumb Area -->

<div class="blog-page area-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="page-head-blog">
                    <div class="single-blog-page">
                        <!-- search option start -->
                        <form action="/cari" method="POST" role="search">
                            {{ csrf_field() }}
                            <div class="search-option">
                                <input type="text" placeholder="Search..." name="s" >
                                <button class="button" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                        <!-- search option end -->
                    </div>
                    @include('layout.artikel-berita-terbaru')
                </div>
            </div>
            <!-- End left sidebar -->
            <!-- Start single blog -->
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="single-blog">
                            <div class="single-blog-img">
                                <a href="/media/artikel-berita/read/05/jelang-2019-focus-perkuat-sinergi-berkelanjutan-dengan-btn">
                                    <img src="{{asset('assets/img/blog/1.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="blog-meta">
                                <span class="author-meta"><i class="fa fa-bookmark"></i> <a href="/media/artikel-berita">Artikel & Berita </a></span>
                                <span>&nbsp; <i class="fa fa-clock-o"></i>Kamis, 20 Desember 2018 15:03</span>
                            </div>
                            <div class="blog-text">
                                <h4>
                                    <a style="font-family: Raleway; color: #0C519D;" href="/media/artikel-berita/read/05/jelang-2019-focus-perkuat-sinergi-berkelanjutan-dengan-btn">(Berita) Jelang 2019, Focus Perkuat Sinergi Berkelanjutan dengan BTN</a>
                                </h4>
                                <p>
                                    Jakarta- Perum Jamkrindo melakukan  kerja sama dengan PT Bank Tabungan Negara (Persero) Tbk dalam rangka meningkatkan kerjasama yang telah ada dalam hal layanan perbankan dan penjaminan kredit. Direktur Utama Randi Anto mengungkapkan, kerja sama ini direalisasikan dengan penandatangan nota kesepahaman dan perjanjian kerja sama... </p>
                            </div>
                            <span>
										<a href="/media/artikel-berita/read/05/jelang-2019-focus-perkuat-sinergi-berkelanjutan-dengan-btn" class="ready-btn">Selengkapnya</a>
									</span>
                        </div>
                    </div>
                    <!-- Start single blog -->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-blog">
                                    <div class="single-blog-img">
                                        <a href="#">
                                            <img src="{{asset('assets/img/blog/2.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="blog-meta">
                                        <span class="author-meta"><i class="fa fa-bookmark"></i> <a href="/media/artikel-berita">Artikel & Berita </a></span>
                                        <span>&nbsp; <i class="fa fa-clock-o"></i>Selasa, 18 Desember 2018 11:08</span>
                                    </div>
                                    <div class="blog-text">
                                        <h4>
                                            <a style="font-family: Raleway; color: #0C519D;" href="#">(Berita) FOCUS-KODIT Bahas Penjaminan Bisnis Start Up</a>
                                        </h4>
                                        <p>
                                            Yogyakarta- Perum Jamkrindo menerima kunjungan sejumah delegasi Korea Credit Guarantee Fund atau KODIT dalam pertemuan Working Level Council (WLC) ke 4 tahun 2018 yang diselenggarakan di Yogyakarta pada tanggal 11-14 Desember 2018. Salah satu bahasan adalah menumbuhkan penjaminan kredit untuk bisnis rintisan (start-up) di kedua negara dan industry 4.0...</div>
                                    <span>
										<a href="#" class="ready-btn">Selengkapnya</a>
									</span>
                                </div>
                            </div>
                        </div>
                            <div class="blog-pagination">
                                <ul class="pagination">
                                    <li><a href="#">&lt;</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">&gt;</a></li>
                                </ul>
                            </div>
                        </div>
                    <!-- End single blog -->
                </div>
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
