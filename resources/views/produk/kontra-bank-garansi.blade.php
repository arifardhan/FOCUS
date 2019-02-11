<!doctype html>
<html lang="en">
<head>
    @include('layout.title-produk')
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
        <h1>Produk & Layanan</h1>
        <div class="link-breadcrumb">
            <a href="/" class="active">Beranda</a>
            <a href="/produk">Produk & Layanan / </a>Kontra Bank Garansi</div>
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
                    <div class="single-blog-page">
                        <!-- recent start -->
                        <div class="left-blog">
                            <h4>Produk & Layanan Lain</h4>
                            <div class="recent-post">
                                <!-- start single post -->
                                <div class="recent-single-post">
                                    <div class="post-img">
                                        <a href="/produk/detail/1/pembiayaan-umum">
                                            <img src="{{asset('assets/img/produk/1.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="pst-content">
                                        <p><a style="font-family: Raleway; color: #0C519D; font-size: 20px; font-weight: 700" href="/produk/detail/1/pembiayaan-umum">
                                                Pembiayaan Umum
                                            </a></p>
                                    </div>
                                </div>
                                <!-- End single post -->
                                <!-- start single post -->
                                <div class="recent-single-post">
                                    <div class="post-img">
                                        <a href="/produk/detail/3/pembiayaan-mikro">
                                            <img src="{{asset('assets/img/produk/3.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="pst-content">
                                        <p><a style="font-family: Raleway; color: #0C519D; font-size: 20px; font-weight: 700" href="/produk/detail/3/pembiayaan-mikro">
                                                Pembiayaan Mikro
                                            </a></p>
                                    </div>
                                </div>
                                <!-- End single post -->
                                <!-- start single post -->
                                <div class="recent-single-post">
                                    <div class="post-img">
                                        <a href="/produk/detail/2/pembiayaan-multiguna">
                                            <img src="{{asset('assets/img/produk/2.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="pst-content">
                                        <p><a style="font-family: Raleway; color: #0C519D; font-size: 20px; font-weight: 700" href="/produk/detail/2/pembiayaan-multiguna">
                                                Pembiayaan Multiguna
                                            </a></p>
                                    </div>
                                </div>
                                <!-- End single post -->
                                <!-- start single post -->
                                <div class="recent-single-post">
                                    <div class="post-img">
                                        <a href="/produk/detail/4/pembiayaan-konstruksi-dan-pengadaan-barang-jasa">
                                            <img src="{{asset('assets/img/produk/4.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="pst-content">
                                        <p><a style="font-family: Raleway; color: #0C519D; font-size: 20px; font-weight: 700" href="/produk/detail/4/pembiayaan-konstruksi-dan-pengadaan-barang-jasa">
                                                Pembiayaan Konstruksi & Pengadaan Barang/Jasa
                                            </a></p>
                                    </div>
                                </div>
                                <!-- End single post -->
                                <!-- start single post -->
                                <div class="recent-single-post">
                                    <div class="post-img">
                                        <a href="/produk/detail/5/custom-bond">
                                            <img src="{{asset('assets/img/produk/5.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="pst-content">
                                        <p><a style="font-family: Raleway; color: #0C519D; font-size: 20px; font-weight: 700" href="/produk/detail/5/custom-bond">
                                                Custom Bond
                                            </a></p>
                                    </div>
                                </div>
                                <!-- End single post -->
                                <div class="recent-single-post">
                                    <div class="post-img">
                                        <a href="/produk/detail/7/letter-of-credit">
                                            <img src="{{asset('assets/img/produk/7.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="pst-content">
                                        <p><a style="font-family: Raleway; color: #0C519D; font-size: 20px; font-weight: 700" href="/produk/detail/7/letter-of-credit">
                                                Letter of Credit (L/C)
                                            </a></p>
                                    </div>
                                </div>
                                <!-- End single post -->
                            </div>
                        </div>
                        <!-- recent end -->
                    </div>
                </div>
            </div>
            <!-- End left sidebar -->
            <!-- Start single blog -->
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- single-blog start -->
                        <article class="blog-post-wrapper">
                            <div class="post-thumbnail">
                                <img src="{{asset('assets/img/produk/6.jpg')}}" alt="" />
                            </div>
                            <div class="post-information">
                                <h2 style="font-family: Raleway; color: #0C519D";>Kontra Bank Garansi</h2>
                                <div class="entry-meta">
                                    <span class="author-meta"><i class="fa fa-bookmark"></i> <a href="/produk">Produk</a></span>
                                    <span><i class="fa fa-clock-o"></i> Jum'at, 28 Desember 2018</span>
                                </div>
                                <div class="entry-content">
                                    <p>Kontra Bank Garansi adalah Penjaminan yang diberikan Penjamin (Perusahaan Penjaminan) kepada Penerima
                                        Jaminan (Bank) yang bersifat tanpa syarat (unconditional) dan Penjamin akan membayar ganti rugi
                                        kepada Penerima Jaminan atas tuntutan pencairan Bank Garansi (BG) yang diajukan Obligee ketika
                                        Terjamin wanprestasi.
                                        </p>
                                    <p></p>
                                    <p style="color: #0C519D; font-weight: bold">Jenis Kontra Bank Garansi: </p>
                                    <ul style="list-style-type:disc; margin-left: 20px">
                                        <li>Jaminan untuk Penawaran (Bid Bond)</li>
                                        <li>Jaminan Uang Muka (Jaminan Uang Muka)</li>
                                        <li>Jaminan Pelaksanaan (Advance Payment Bond)</li>
                                        <li>Jaminan Pemeliharaan (Maintenance Bond)</li>
                                        <li>Jaminan untuk Penyalur/Agen/Dealer/Depot Holeder (Swasta bonafide)</li>
                                    </ul>
                                    <p></p>
                                    <p style="color: #0C519D; font-weight: bold">Cara Mendaftar</p>
                                    <p>Lengkapi seluruh dokumen persyaratan serta surat permohonan lalu kirim ke kantor kami. Atau bisa mengirimnya melalui email kami di <a href="mailto:focusinservindo@gmail.com?subject=Permohonan Penjaminan Pembiayaan [Jenis Produk/Layanan]">focusinservindo@gmail.com</a></p>
                                    <p></p>
                                    <p>Jika ada pertanyaan atau informasi lebih lanjut silahkan <a href="/layanan-pelanggan" style="font-weight: bold">Hubungi Kami</a></p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2 style="font-size: 22px; margin-bottom: 30px">Persyaratan</h2>
                        </div>
                    </div>
                </div>
                @include('layout.persyaratan')
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
