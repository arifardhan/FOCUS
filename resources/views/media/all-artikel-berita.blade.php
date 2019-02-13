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
                                <a href="/media/artikel-berita/read/05/terkait-uu-penjaminan-ini-sikap-aaui">
                                    <img src="{{asset('assets/img/artikel-berita/5.jpg')}}" alt="">
                                </a>
                            </div>
                            <div class="blog-meta">
                                <span class="author-meta"><i class="fa fa-bookmark"></i> <a href="/media/artikel-berita">Artikel & Berita </a></span>
                                <span>&nbsp; <i class="fa fa-clock-o"></i>Selasa, 12 Juni 2018 19:56 &nbsp</span>
                                <span><i class="fa fa-user"></i> <a href="https://finansial.bisnis.com">Azizah Nur Alfi</a></span>
                            </div>
                            <div class="blog-text">
                                <h4>
                                    <a style="font-family: Raleway; color: #0C519D;" href="/media/artikel-berita/read/05/terkait-uu-penjaminan-ini-sikap-aaui">(Berita) Terkait UU Penjaminan, Ini Sikap AAUI</a>
                                </h4>
                                <p><strong>Bisnis.com,</strong> JAKARTA - Dengan telah ditetapkannya UU No.1/2016 tentang Penjaminan, menimbulkan penafsiran di kalangan masyarakat dan industri yang seolah-olah produk suretyship dan asuransi kredit tidak dapat dijalankan lagi oleh perusahaan perasuransian setelah 2019. Oleh karena itu, AAUI perlu meluruskan persepsi ini...</p>
                            </div>
                            <span>
										<a href="/media/artikel-berita/read/05/terkait-uu-penjaminan-ini-sikap-aaui" class="ready-btn">Selengkapnya</a>
									</span>
                        </div>
                    </div>
                    <!-- Start single blog -->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-blog">
                                    <div class="single-blog-img">
                                        <a href="#">
                                            <img src="{{asset('assets/img/artikel-berita/4.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="blog-meta">
                                        <span class="author-meta"><i class="fa fa-bookmark"></i> <a href="/media/artikel-berita">Artikel & Berita </a></span>
                                        <span>&nbsp; <i class="fa fa-clock-o"></i>Sabtu, 28 April 2018 12:30 &nbsp </span>
                                        <span><i class="fa fa-user"></i> <a href="http://www.baliekbis.com">Bali Ekbis</a></span>
                                    </div>
                                    <div class="blog-text">
                                        <h4>
                                            <a style="font-family: Raleway; color: #0C519D;" href="/media/artikel-berita/read/04/audiensi-dengan-dpr-ri-asippindo-harapkan-uu-penjaminan-bisa-diterapkan-tahun-2019">(Berita) Audiensi dengan DPR-RI, Asippindo Harapkan UU Penjaminan Bisa Diterapkan Tahun 2019</a>
                                        </h4>
                                        <p><strong>Baliekbis.com - </strong> Asippindo (Asosiasi Perusahaan Penjaminan Indonesia) berharap dukungan dari DPR-RI agar UU Nomor 1 Tahun 2016 tentang Penjaminan bisa diterapkan pada 15 Januari 2019 mendatang. Demikian terungkap dalam audiensi Asippindo dengan Anggota DPR-RI, Sabtu (28/4) di Warung Mina Jalan Padang Sambian Badung...</p>
                                        <span>
										<a href="/media/artikel-berita/read/04/audiensi-dengan-dpr-ri-asippindo-harapkan-uu-penjaminan-bisa-diterapkan-tahun-2019" class="ready-btn">Selengkapnya</a>
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
