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
            Media / <a href="/media/artikel-berita">Artikel & Berita </a>/ (Berita) Terkait UU Penjaminan, Ini Sikap AAUI
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
                                <img src="{{asset('assets/img/artikel-berita/4.jpg')}}" alt="" />
                            </div>
                            <div class="post-information">
                                <h2 style="font-family: Raleway; color: #0C519D";>(Berita) Audiensi dengan DPR-RI, Asippindo Harapkan UU Penjaminan Bisa Diterapkan Tahun 2019</h2>
                                <div class="entry-meta">
                                    <span class="author-meta"><i class="fa fa-bookmark"></i> <a href="/media/artikel-berita">Artikel & Berita</a></span>
                                    <span><i class="fa fa-clock-o"></i> Sabtu, 28 April 2018 12:30</span>
                                    <span><i class="fa fa-user"></i> <a href="http://www.baliekbis.com">Bali Ekbis</a></span>
                                </div>
                                <div class="entry-content">
                                    <p><strong>Baliekbis.com - </strong> Asippindo (Asosiasi Perusahaan Penjaminan Indonesia) berharap dukungan dari DPR-RI agar UU Nomor 1 Tahun 2016 tentang Penjaminan bisa diterapkan pada 15 Januari 2019 mendatang. Demikian terungkap dalam audiensi Asippindo dengan Anggota DPR-RI, Sabtu (28/4) di Warung Mina Jalan Padang Sambian Badung.</p>
                                    <p>Dalam pertemuan yang dihadiri sejumlah pengurus Jamkrida se Indonesia dan Anggota Komisi IV DPR-RI AAB Adhi Mahendra Putra, Sekjen Asippindo Dian Askin Hatta mengutarakan adanya kekhawatiran pemberlakuan UU No.1 Tahun 2016 tersebut menyusul rencana judicial review terhadap UU No. 1 Tahun 2016 tentang Penjaminan  yang dilakukan oleh AAUI. Peninjauan kembali UU tersebut dapat menghambat pertumbuhan ekonomi. Ia berharap DPR mendengar urgensi  dari permasalahan ini sehingga bisa ditemukan bargaining posisi lembaga penjamin atas permasahan tersebut.</p>
                                    <p>Dikatakan asuransi berbasis accident sedangkan penjaminan berbasis wanprestasi. Dalam UU Asuransi tidak ada ruang lingkup usaha penjaminan surety bond dan penjaminan kredit. Namun anehnya dalam POJK 69 membolehkan pengembangan usaha asuransi melalui penjaminan surety bond dan kredit. “Masalah ini timbul karena ada dukungan OJK yang membolehkan hal tersebut sehingga perlu dikaji peraturan tersebut,” tegas Askin Hatta didampingi Dirut Jamkrida Bali K. Widiana Karya. Dikatakan roh lembaga penjaminan adalah membantu UMKM dalam mendapat akses perbankan. Karena itu antara industri penjaminan dan asuransi diharapkan bisa berjalan selaras.</p>
                                    <p>Dian Askin Hatta menambahkan sebenarnya bisnis antara penjaminan dengan asuransi sudah diatur secara tegas. Penjaminan tidak masuk pada bisnis yang terkait asuransi jiwa. “Jadi asuransi jiwa ini bisa sepenuhnya digarap pihak asuransi,” ujarnya. Bahkan menurutnya potensi asuransi masih sangat luas. Berdasarkan data, baru lima persen warga yang mengikuti asuransi. “Jadi peluang bisnisnya masih sangat besar,” ujarnya. Bahkan peluang untuk bersinergi kedua lembaga ini juga sangat terbuka lebar. Karena itu, Sekjen Asippindo ini berharap judicial review terhadap UU Penjaminan itu tak sampai terjadi sehingga bisa diterapkan Januari tahun depan. “Adanya audiensi dengan Pak Bagus Adhi dari Fraksi Golkar di DPR RI kita harapkan bisa menjembatani pelaksanaan UU NO.1 itu nantinya,” harap Dian Askin Hatta yang juga Dirut Jamkrida Sumsel ini. Jamkrida selaku BUMD selama ini mampu menyumbang PAD yang baik untuk pemerintah selain juga mendukung pengembangan ekonomi kerakyatan.</p>
                                    <p>Sementara anggota DPR RI AAB Adhi Mahendra Putra dalam pertemuan tersebut menyambut positif dan mengapresiasi semangat pembentukan UU Penjaminan yang mendukung kearifan lokal, usaha dari rakyat oleh rakyat dan untuk rakyat. Untuk itu apa harapan Asippindo akan dibawa ke dewan dan juga akan dijadikan laporan kepada partai (Partai Golkar) untuk dibahas lebih lanjut. <strong>(bas)</strong></p>
                                    <p><strong>Sumber: (http://www.baliekbis.com/audiensi-dengan-dpr-ri-asippindo-harapkan-uu-penjaminan-bisa-diterapkan-tahun-2019)</strong></p>
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
