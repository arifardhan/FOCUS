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
        <h1>Artikel & Berita</h1>
        <div class="link-breadcrumb">
            <a href="/" class="active">Beranda</a>
            Media / <a href="/media/artikel-berita">Artikel & Berita </a>/ (Berita) Jelang 2019, Focus Perkuat Sinergi Berkelanjutan dengan BTN
        </div>
    </div>
</section>
<!-- End Breadcumb Area -->
<div class="blog-page area-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="page-head-blog">
                    <div class="single-blog-page">
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
                        <!-- single-blog start -->
                        <article class="blog-post-wrapper">
                            <div class="post-thumbnail">
                                <img src="{{asset('assets/img/blog/1.jpg')}}" alt="" />
                            </div>
                            <div class="post-information">
                                <h2 style="font-family: Raleway; color: #0C519D";>(Berita) Jelang 2019, Focus Perkuat Sinergi Berkelanjutan dengan BTN</h2>
                                <div class="entry-meta">
                                    <span class="author-meta"><i class="fa fa-bookmark"></i> <a href="/media/artikel-berita">Artikel & Berita</a></span>
                                    <span><i class="fa fa-clock-o"></i> Kamis, 20 Desember 2018 15:03</span>
                                </div>
                                <div class="entry-content">
                                    <p>Jakarta- Perum Jamkrindo melakukan  kerja sama dengan PT Bank Tabungan Negara (Persero) Tbk dalam rangka meningkatkan kerjasama yang telah ada dalam hal layanan perbankan dan penjaminan kredit. Direktur Utama Randi Anto mengungkapkan, kerja sama ini direalisasikan dengan penandatangan nota kesepahaman dan perjanjian kerja sama. </p>
                                    <p>Nota kesepahaman terkait dengan sinergi jasa layanan perbankan dan penjaminan kredit. Sementara, penandatanganan tiga perjanjian kerja sama (PKS) terkait penyedian jasa layanan perbankan kepada karyawan Jamkrindo, penjaminan kredit ringan (KRING) BTN, dan terakhir penjaminan  KRING BTN program perumahan ASN, TNI dan Polri.</p>
                                    <p>Kerja sama tersebut merupakan langkah strategis kedua perusahaan untuk  memperluas hubungan secara berkesinambungan. Sebelum kerja sama ini dilakukan, kedua perusahaan telah bekerja sama dalam Penjaminan Kredit Usaha Rakyat (KUR), Penjaminan Kredit Fasilitas Likuiditas Pembiayaan Perumahan (FLPP), dan Penjaminan Kredit Eks KUR dan lain-lain. “Kami sangat antusias dengan adanya kerja sama tersebut, Kerja sama ini merupakan milestone peningkatan hubungan yang lebih erat antara Perum Jamkrindo dan BTN,” ujar Randi usai penandatanganan nota kesepahaman dan perjanjian kerja sama di Jakarta, Selasa (18/12/2018).</p>
                                    <p>Realisasi Kerja sama Penjaminan Kredit antara Perum Jamkrindo dengan Bank BTN periode Januari 2015 sampai dengan Juli 2018 tercatat sekitar Rp 61,31 triliun. Perjanjian Kerja sama Penjaminan Kredit Ringan (Kring) dengan Bank BTN diharapkan  akan meningkatkan portofolio penjaminan Kredit Perum Jamkrindo. “Proyeksi volume penjaminan untuk Kredit Ringan (Kring) BTN sebesar 1,5 Triliun per tahun,” ungkap Randi.  </p>
                                    <p>Penjaminan kredit diberlakukan untuk debitur dari Kring BTN Aktif, Kring BTN Pra Pensiun, Kring BTN Pensiunan, Kring BTN Pendidikan. Penjaminan yang bersifat Penjaminan Otomatis Bersyarat diberikan kepada debitur yang meraih Kring BTN Aktif dibawah plafond Rp 500 juta, Kring BTN Pra Pensiun, Kring BTN Pensiunan di bawah plafond Rp 300 juta dan Kring Pendidikan dibawah plafond Rp 100 juta. sementara yang diatas itu akan diberikan penjaminan kasus per kasus. </p>
                                    <p>Sedangkan  untuk ASN/TNI dan Polri yang menjadi debitur Kring BTN Program Perumahan bagi ASN, TNI & POLRI seperti  Kring BTN Program Perumahan bagi ASN, TNI & POLRI Aktif, Kring BTN Program Perumahan bagi ASN, TNI & POLRI Pra Pensiun dan Pensiunan, berhak mendapatkan penjaminan. Penjaminan untuk Kring program perumahan bagi ASN/TNI dan Polri Aktif dan Pra Pensiun yang bersifat Penjaminan Otomatis bersyarat diberikan kepada debitur yang mendapat kucuran Kring maksimal Rp 1 miliar dan untuk debitur Kring BTN Program Perumahan bagi ASN, TNI & POLRI  Pensiunan dengan plafond kredit Rp 300 juta.</p>
                                    <p>Selain kerja sama mengenai produk  KRING BTN, Perum Jamkrindo juga bekerja sama dengan BTN dalam penyediaan jasa layanan perbankan kepada karyawan Jamkrindo. Ruang lingkup kerja sama tersebut terkait penyediaan layanan dana dan fasilitas kredit atau pembiayaan konsumer bagi karyawan/i Perum Jamkrindo. “Dengan begitu seluruh karyawan dapat memperoleh kemudahan kredit untuk memenuhi kebutuhannya,” ujar Randi.  Pemenuhan kebutuhan diharapkan bisa meningkatkan produktivitas sumber daya manusia Perum Jamkrindo. (HUMAS)</p>
                                </div>
                            </div>
                        </article>
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
