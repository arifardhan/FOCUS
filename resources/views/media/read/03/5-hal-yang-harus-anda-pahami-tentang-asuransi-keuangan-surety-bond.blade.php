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
            Media / <a href="/media/artikel-berita">Artikel & Berita </a>/
            5 Hal yang Harus Anda Pahami tentang Asuransi Keuangan Surety Bond
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
                                <img src="{{asset('assets/img/artikel-berita/3.jpg')}}" alt="" />
                            </div>
                            <div class="post-information">
                                <h2 style="font-family: Raleway; color: #0C519D";> (Artikel) 5 Hal yang Harus Anda Pahami tentang Asuransi Keuangan Surety Bond</h2>
                                <div class="entry-meta">
                                    <span class="author-meta"><i class="fa fa-bookmark"></i> <a href="/media/artikel-berita">Artikel & Berita</a></span>
                                    <span><i class="fa fa-clock-o"></i> Rabu, 20 Desember 2017 06:23</span>
                                    <span><i class="fa fa-user"></i> <a href="https://www.jasindo.co.id">Jasindo</a></span>
                                </div>
                                <div class="entry-content">
                                    <p>
                                        Dalam proses tender, setiap perusahaan peserta tender diwajibkan memiliki penjamin dalam bentuk surety bond
                                        yang dikeluarkan oleh perusahaan asuransi. Selain untuk menjamin kepastian dan kepercayaan bagi masing-masing pihak,
                                        asuransi keuangan atau surety bond berfungsi sebagai upaya pengambilalihan potensi risiko kerugian yang mungkin dapat dialami
                                        oleh salah satu pihak karena pelanggaran kontrak yang telah disepakati. Selain penjelasan singkat di atas, berikut ini
                                        serba-serbi asuransi keuangan yang perlu Anda ketahui:
                                    </p>
                                    <p></p>
                                    <p style="font-weight: 700">
                                        1. Kondisi jaminan
                                    </p>
                                    <p>
                                    </p>
                                    <p>
                                        Ada dua kondisi jaminan yang terdapat dalam surety bond.
                                        Yang pertama adalah jaminan bersyarat (conditional bond),
                                        di mana jaminan akan dicairkan setelah diketahui sebab-sebab
                                        dari pencairan. Dalam conditional bond, penjamin hanya wajib
                                        mengganti sebesar kerugian yang diderita oleh obligee (pemilik proyek).
                                        Yang kedua adalah jaminan tanpa syarat (unconditional bond), kondisi
                                        jaminan ini memberi keleluasaan untuk pencairan tanpa harus
                                        membuktikan kegagalan (loss situation).
                                    </p>
                                    <p></p>
                                    <p style="font-weight: 700">
                                        2. Manfaat surety bond
                                    </p>
                                    <p>
                                    </p>
                                    <p>
                                        Ada banyak kemungkinan kerugian yang bisa saja terjadi kapan saja saat Anda melakukan kerjasama bisnis.
                                        Surety bond dapat meminimalisir potensi risiko dengan berbagai manfaat, mulai dari jaminan penawaran (bid),
                                        pelaksanaan (performance), pembayaran uang muka (advance payment), pemeliharaan (maintenance), garansi bank, dan custom bond.
                                    </p>
                                    <p style="font-weight: 700">
                                        3. Kewajiban peserta surety bond
                                    </p>
                                    <p>
                                    </p>
                                    <p>
                                        Pelajari dengan baik proposal penawaran yang diajukan oleh agen asuransi atas risiko yang dijamin dan
                                        tidak dijamin, persyaratan yang harus dipenuhi,
                                        hingga cara pembayaran premi. Lengkapi dan isi
                                        dengan teliti formulir dan kelengkapan berkas lainnya.
                                    </p>
                                    <p style="font-weight: 700">
                                        4. Kompetitif
                                    </p>
                                    <p>
                                    </p>
                                    <p>
                                        Surety bond memberikan alternatif pemilihan
                                        jaminan dalam pengerjaan pemborongan, sehingga
                                        para kontraktor berkesempatan memakai jaminan dengan
                                        biaya yang lebih murah. Adanya asuransi keuangan seperti
                                        ini juga mendorong pasar jaminan yang lebih kompetitif dengan
                                        perbankan dan membuat kontraktor atau pemborong lebih sadar
                                        akan pentingnya asuransi.
                                    </p>
                                    <p style="font-weight: 700">
                                        5. Tren positif
                                    </p>
                                    <p>
                                    </p>
                                    <p>
                                        Upaya pemerintah memacu proyek infrastruktur berdampak positif
                                        bagi perkembangan surety bond. Seperti dikutip dari kontan.co.id,
                                        asuransi keuangan masih memiliki klaim rasio yang sehat.
                                        Catatan Asosiasi Asuransi Umum Indonesia (AAUI) mengungkapkan bahwa
                                        perolehan premi surety bond di tahun 2016 menyentuh Rp. 1,98 triliun,
                                        naik 29,3 dibandingkan tahun 2015 sebanyak Rp. 1,53 triliun. Untuk tahun ini,
                                        AAUI memperkirakan angka premi akan tumbuh hingga dua digit.
                                    </p>
                                    <p>
                                        <strong>sumber: (https://www.jasindo.co.id/media/artikel/5-hal-yang-harus-anda-pahami-tentang-asuransi-keuangan-surety-bond)
                                        </strong>
                                    </p>
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
