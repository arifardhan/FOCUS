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
<section class="head-breadcrumb" style="background-image:linear-gradient( rgb(0, 0, 0), rgba(0, 0, 0, 0.4) ), url('{{asset('assets/img/breadcumb/1.jpg')}}');">
    <div class="container">
        <h1>Produk & Layanan</h1>
        <div class="link-breadcrumb">
            <a href="/" class="active">Beranda</a>
            <a href="/produk">Produk & Layanan / </a>Letter of Credit (L/C)</div>
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
                                                Penjaminan Pembiayaan Umum
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
                                                Penjaminan Pembiayaan Mikro
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
                                                Penjaminan Pembiayaan Multiguna
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
                                                Penjaminan Pembiayaan Konstruksi & Pengadaan Barang/Jasa
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
                                        <a href="/produk/detail/6/kontra-bank-garansi">
                                            <img src="{{asset('assets/img/produk/6.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="pst-content">
                                        <p><a style="font-family: Raleway; color: #0C519D; font-size: 20px; font-weight: 700" href="/produk/detail/6/kontra-bank-garansi">
                                                Kontra Bank Garansi
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
                                <img src="{{asset('assets/img/produk/7.jpg')}}" alt="" />
                            </div>
                            <div class="post-information">
                                <h2 style="font-family: Raleway; color: #0C519D";>Letter of Credit (L/C)</h2>
                                <div class="entry-meta">
                                    <span class="author-meta"><i class="fa fa-bookmark"></i> <a href="/produk">Produk</a></span>
                                    <span><i class="fa fa-clock-o"></i> Jum'at, 28 Desember 2018</span>
                                </div>
                                <div class="entry-content">
                                    <p>Letter of Credit (L/C) merupakan suatu janji yang pasti dari issuing bank yang bersifat irrevocable untuk melakukan pembayaran kepada pihak penerima (beneficiary) atas presentasi dokumen yang sesuai (complying presentation) dengan syarat dan kondisi LC.
                                    </p>
                                    <p>Surat Kredit Berdokumen Dalam Negeri (SKBDN) atau sering disebut LC local, adalah instrument yang diterbitkan oleh bank (Issuing Bank), atas permintaan Applicant yang berisi janji bank untuk membayar sejumlah uang kepada Beneficiary apabila Issuing Bank menerima dokumen yang sesuai dengan syarat SKBDN. SKBDN dipergunakan untuk mendukung transaksi perdagangan di dalam negeri.
                                    </p>
                                    <p>Perusahaan Penjaminan/Perusahaan Asuransi bukan sebagai penalang dana atas L/C & SKBDN.
                                        Perusahaan Penjaminan/Perusahaan Asuransi menjamin ganti rugi atas wanprestasi pembayaran saat jatuh tempo Penerbitan Kontra L/C dan SKBDN menggunakan fasilitas
                                    Non Cash Loan Perusahaan Penjaminan/Perusahaan Asuransi di Bank. Atas hal tersebut Applicant dikenakan Service Charge.</p>
                                    <p></p>
                                    <p style="color: #0C519D; font-weight: bold">Penerbitan Kontra L/C & SKBDN:</p>
                                    <ul style="list-style-type:decimal; margin-left: 20px">
                                        <li>Applicant membuat kontrak dengan beneficiary</li>
                                        <li>Appilcant mengajukan permohonan kontra LC/SKBDN</li>
                                        <li>Asuransi menerbitkan izin prinsip kepada Issuing Bank</li>
                                        <li>Issuing Bank menerbitkan LC/SKBDN kepada Advising Bank</li>
                                        <li>Issuing Bank memberikan copy LC/SKBDN kepada pihak asuransi</li>
                                        <li>Asuransi menertibkan polis kepada Issuing Bank</li>
                                    </ul>
                                    <p></p>
                                    <p style="color: #0C519D; font-weight: bold">Akseptasi Kontra L/C & SKBDN:</p>
                                    <ul style="list-style-type:decimal; margin-left: 20px">
                                        <li>Beneficiary mensubmit dokumen akseptasi sesuai yang tercantum pada LC/SKBDN</li>
                                        <li>Advising Bank memberitahukan kepada pihak Issuing Bank bahwa telah terjadi akseptasi yang dilakukan oleh beneficiary</li>
                                        <li>Applicant (dan kemudian diikuti oleh asuransi) menyetujui dokumen akseptasi kepada Issuing Bank</li>
                                        <li>Issuing Bank melakukan pembayaran kepada pihak Advising Bank</li>
                                        <li>Advising Bank menerima dan menyalurkan pembayaran kepada pihak Beneficiary</li>
                                    </ul>
                                    <p></p>
                                    <p style="color: #0C519D; font-weight: bold">Timbulnya Hak Klaim:</p>
                                    <p>Timbulnya hak Penerima Penjaminan (Bank) untuk menuntut pencairan Penjaminan LC / SKBDN
                                        dalam hal Terjamin tidak dapat melunasi kewajiban atas fasilitas LC dan / atau SKBDN yang
                                        telah dibuka oleh penerima Jaminan pada saat Jatuh Tempo
                                    </p>
                                    <p></p>
                                    <p style="color: #0C519D; font-weight: bold">Cara Mendaftar</p>
                                    <p>Lengkapi seluruh dokumen persyaratan serta surat permohonan lalu kirim ke kantor kami. Atau bisa mengirimnya melalui email kami di <a href="mailto:focusinservindo@gmail.com?subject=Permohonan Penjaminan Pembiayaan [Jenis Produk/Layanan]">
                                            focusinservindo@gmail.com</a>.</p>
                                    <p></p>
                                    <p>Jika ada pertanyaan atau informasi lebih lanjut silahkan <a href="/layanan-pelanggan" style="font-weight: bold">Hubungi Kami</a>.</p>
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
