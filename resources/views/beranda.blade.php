<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>FOCUS | Agen Penjaminan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
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

<!-- Start Slider Area -->
<div id="home" class="slider-area">
    <div class="bend niceties preview-2">
        <div id="ensign-nivoslider" class="slides">
            <img src="{{asset('assets/img/slider/slider1.jpg')}}" alt="" title="#slider-direction-1" />
            <img src="{{asset('assets/img/slider/slider2.jpg')}}" alt="" title="#slider-direction-2" />
            <img src="{{asset('assets/img/slider/slider3.jpg')}}" alt="" title="#slider-direction-3" />
        </div>
        <!-- direction 1 -->
        <div id="slider-direction-1" class="slider-direction slider-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="slider-content">
                            <!-- layer 1 -->
                            <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                                <h1 class="title1">Selamat Datang</h1>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                <h2 class="title2">Focus Memudahkan Penjaminan & Selalu Memberi Pelayanan Terbaik </h2>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                <a class="ready-btn right-btn page-scroll" href="#services">Lihat Layanan</a>
                                <a class="ready-btn page-scroll" href="/sejarah-perusahaan">Tentang Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- direction 2 -->
        <div id="slider-direction-2" class="slider-direction slider-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="slider-content text-center">
                            <!-- layer 1 -->
                            <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                <h1 class="title1">Sampai Saat Ini </h1>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                <h2 class="title2">Focus Telah Melayani Lebih Dari 350 Perusahaan (Principal) </h2>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                <a class="ready-btn right-btn page-scroll" href="#services">Lihat Layanan</a>
                                <a class="ready-btn page-scroll" href="/sejarah-perusahaan">Tentang Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- direction 3 -->
        <div id="slider-direction-3" class="slider-direction slider-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="slider-content">
                            <!-- layer 1 -->
                            <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                <h1 class="title1">Focus </h1>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                <h2 class="title2">Telah Terdaftar di Ojk  & Asippindo Serta Telah Mendapatkan Beberapa Penghargaan</h2>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                <a class="ready-btn right-btn page-scroll" href="/perizinan-usaha">Izin Usaha</a>
                                <a class="ready-btn page-scroll" href="/penghargaan">Penghargaan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Slider Area -->

<!-- Start Service area -->
<div id="services" class="services-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline services-head text-center">
                    <h2>Produk & Layanan</h2>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="services-contents">
                <!-- Start Left services -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="about-move">
                        <!-- start about-details -->
                        <div class="services-details">
                            <div class="single-services">
                                <a class="services-icon" href="/produk/detail/1/pembiayaan-umum">
                                    <i class="fa fa-check-square"></i>
                                </a>
                                <h5><b>Penjaminan Pembiayaan Umum</b></h5>
                                <p>
                                    Penjaminan Pembiayaan Umum adalah Penjaminan Pembiayaan yang diajukan untuk mendukung kelancaran kegiatan Usaha/Proyek atau
                                    Kegiatan Investasi yang dilakukan oleh perorangan...                   </p>
                            </div>
                        </div>
                        <!-- end about-details -->
                    </div>
                </div>
                <!-- End Left services -->
                <!-- Start Left services -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="about-move">
                        <!-- start about-details -->
                        <div class="services-details">
                            <div class="single-services">
                                <a class="services-icon" href="/produk/detail/2/pembiayaan-multiguna">
                                    <i class="fa fa-briefcase"></i>
                                </a>
                                <h5><b>Penjaminan Pembiayaan Multiguna</b></h5>
                                <p>
                                    Penjaminan Pembiayaan Multiguna adalah Pembiayaan atau Penjaminan atas kredit/pembiayaan yang diberikan oleh Penerima Jaminan
                                    untuk Lembaga Keuangan Lainya (Non Bank) kepada Terjamin..</div>
                        </div>
                        <!-- end about-details -->
                    </div>
                </div>
                <!-- End Left services -->
                <!-- Start Left services -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <!-- end col-md-4 -->
                    <div class=" about-move">
                        <!-- start about-details -->
                        <div class="services-details">
                            <div class="single-services">
                                <a class="services-icon" href='/produk/detail/3/pembiayaan-mikro'>
                                    <i class="fa fa-bar-chart"></i>
                                </a>
                                <h5><b>Penjaminan Pembiayaan Mikro</b></h5>
                                <p>
                                    Penjaminan Pembiayaan Mikro adalah penjaminan atau pembiayaan atas kredit yang diberikan oleh Penerima
                                    Jaminan kepada Terjamin Pengusaha Mikro dan Kecil, untuk keperluan..</div>
                        </div>
                        <!-- end about-details -->
                    </div>
                </div>
                <!-- End Left services -->
                <!-- Start Left services -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <!-- end col-md-4 -->
                    <div class=" about-move">
                        <!-- start about-details -->
                        <div class="services-details">
                            <div class="single-services">
                                <a class="services-icon" href='/produk/detail/4/pembiayaan-konstruksi-dan-pengadaan-barang-jasa'>
                                    <i class="fa fa-building-o"></i>
                                </a>
                                <h5><b>Penjaminan Pembiayaan Konstruksi & Pengadaan Barang/Jasa </b> </h5>
                                <p>
                                    Penjaminan Pembiayaan Konstruksi & Pengadaan Barang/Jasa adalah Penjaminan/Pembiayaan atas Kredit yang diberikan
                                    oleh Penerima Jaminan kepada Terjamin untuk keperluan tambahan Modal Kerja usaha jasa Konstruksi...
                            </div>
                        </div>
                        <!-- end about-details -->
                    </div>
                </div>
                <!-- End Left services -->
                <!-- Start Left services -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <!-- end col-md-4 -->
                    <div class=" about-move">
                        <!-- start about-details -->
                        <div class="services-details">
                            <div class="single-services">
                                <a class="services-icon" href='/produk/detail/5/custom-bond'>
                                    <i class="fa fa-ship"></i>
                                </a>
                                <h4><b> Custom Bond </b></h4>
                                <br/>
                                <p>
                                    Custom Bond adalah jenis penjaminan yang diberikan oleh Perusahaan Asuransi Penjamin (Surety Company),
                                    untuk kepentingan pihak Terjamin (Principal) yang terikat untuk memenuhi...</div>
                        </div>
                        <!-- end about-details -->
                    </div>
                </div>
                <!-- End Left services -->
                <!-- Start Left services -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <!-- end col-md-4 -->
                    <div class=" about-move">
                        <!-- start about-details -->
                        <div class="services-details">
                            <div class="single-services">
                                <a class="services-icon" href='/produk/detail/6/kontra-bank-garansi'>
                                    <i class="fa fa-file-text"></i>
                                </a>
                                <h4> <b>Kontra Bank Garansi</b></h4>
                                <br/>
                                <p>
                                    Kontra Bank Garansi adalah Penjaminan yang diberikan Penjamin (Perusahaan Penjaminan) kepada
                                    Penerima Jaminan (Bank) yang bersifat tanpa syarat (unconditional)... </div>
                        </div>
                        <!-- end about-details -->
                    </div>
                </div>
                <!-- End Left services -->
                <!-- Start Left services -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline services-head text-center">
                    <a class="ready-btn right-btn-a page-scrol" href="/produk">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Service area -->

<!-- Start Testimonials -->
<div class="testimonials-area">
    <div class="testi-inner area-padding">
        <div class="testi-overly"></div>
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!-- Start testimonials Start -->
                    <div class="testimonial-content text-center">
                        <a class="quate" href="#"><i class="fa fa-quote-right"></i></a>
                        <!-- start testimonial carousel -->
                        <div class="testimonial-carousel">
                            <div class="single-testi">
                                <div class="testi-text">
                                    <p>
                                        Pelayanan Focus sangat baik, cepat dan bisa diandalkan
                                    </p>
                                    <h6>~Finance, PT. Citra Sari Makmur~</h6>
                                </div>
                            </div>
                            <!-- End single item -->
                            <div class="single-testi">
                                <div class="testi-text">
                                    <p>
                                        Sangat senang, pelayanan yang baik dan dapat dipercaya
                                    </p>
                                    <h6>~Marketing, PT. Delta Sumber Rezeki~</h6>
                                </div>
                            </div>
                            <!-- End single item -->
                            <div class="single-testi">
                                <div class="testi-text">
                                    <p>
                                        Tingkatkan terus pelayanannya sehingga dapat terus menjadi agen terpercaya
                                    </p>
                                    <h6>~Marketing, PT. Dimas Utama~</h6>
                                </div>
                            </div>
                            <!-- End single item -->
                        </div>
                    </div>
                    <!-- End testimonials end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonials -->

<!-- Start Suscrive Area -->
<div class="suscribe-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
                <div class="suscribe-text text-center">
                    <h3>Kami Siap Membantu Anda</h3>
                    <a class="sus-btn" href='/layanan-pelanggan'>Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Suscrive Area -->

<!-- Start Footer bottom Area -->
<footer>
    @include('layout.footer')
</footer>

<!-- Back to the top -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


@include('layout.library')
</body>

</html>
