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
                                <img src="{{asset('assets/img/artikel-berita/5.jpg')}}" alt="" />
                            </div>
                            <div class="post-information">
                                <h2 style="font-family: Raleway; color: #0C519D";>(Berita) Terkait UU Penjaminan, Ini Sikap AAUI</h2>
                                <div class="entry-meta">
                                    <span class="author-meta"><i class="fa fa-bookmark"></i> <a href="/media/artikel-berita">Artikel & Berita</a></span>
                                    <span><i class="fa fa-clock-o"></i> Selasa, 12 Juni 2018 19:56</span>
                                    <span><i class="fa fa-user"></i> <a href="https://finansial.bisnis.com">Azizah Nur Alfi</a></span>
                                </div>
                                <div class="entry-content">
                                    <p><strong>Bisnis.com,</strong> JAKARTA - Dengan telah ditetapkannya UU No.1/2016 tentang Penjaminan, menimbulkan penafsiran di kalangan masyarakat dan industri yang seolah-olah produk suretyship dan asuransi kredit tidak dapat dijalankan lagi oleh perusahaan perasuransian setelah 2019. Oleh karena itu, AAUI perlu meluruskan persepsi ini.</p>
                                    <p>Dalam keterangan resminya yang dikutip pada Selasa (12/6/2018), AAUI menyampaikan beberapa poin di antaranya: </p>
                                    <p>1. Industri perasuransian merupakan industri tersendiri yang merupakan bagian dari industri jasa keuangan yang berada di bawah pembinaan dan pengawasan Otoritas Jasa Keuangan. Industri perasuransian di Indonesia diatur dalam UU No.40/2014 tentang Perasuransian.</p>
                                    <p>2. Dalam UU No.21/2011 ditegaskan bahwa OJK merupakan lembaga yang independen dan bebas dari campur tangan pihak lain, yang mempunyai fungsi, tugas, dan wewenang pengaturan, pengawasan, pemeriksaan, dan penyidikan kegiatan jasa keuangan di sektor perbankan, kegiatan jasa keuangan di sektor pasar modal, kegiatan jasa keuangan di sektor perasuransian, dana pensiun, lembaga pembiayaan, dan lembaga jasa keuangan lainnya.</p>
                                    <p>3. Lembaga jasa keuangan lainnya tersebut meliputi pergadaian, lembaga penjaminan, lembaga pembiayaan ekspor Indonesia, perusahaan pembiayaan sekunder perumahan, dan lembaga yang menyelenggarakan pengelolaan dana masyarakat yang bersifat wajib, meliputi penyelenggara program jaminan sosial, pensiun, dan kesejahteraan sebagaimana dimaksud dalam peraturan perundangan-undangan mengenai pergadaian, penjaminan, lembaga pembiayaan ekspor Indonesia, perusahaan pembiayaan sekunder perumahan, dan pengelolaan dana masyarakat yang bersifat wajib, serta lembaga jasa keuangan lain yang dinyatakan diawasi oleh OJK berdasarkan peraturan perundang-undangan. </p>
                                    <p>4. Masing-masing jasa keuangan dan jasa keuangan lainnya tersebut pelaksanaannya diatur dengan ketentuan perundang-undangan tersendiri, industri perbankan diatur dalam UU No.10/1998, industri pasar modal diatur dalam UU No.8/1995. Industri perasuransian diatur dalam UU No.40/2014, industri dana pensiun diatur dalam UU No.11/1992 dan industri penjaminan diatur dalam UU No.1/2016. </p>
                                    <p>5. Produk surety bond dikembangkan di Indonesia sejak 1980an sejalan dengan terbitnya Kepres No. 14A/1980. PT Jasa Raharja (Persero) merupakan perusahaan asuransi kerugian pertama yang ditunjuk oleh pemerintah untuk dapat menerbitkan jaminan dalam bentuk surety bond sebagai alternatif dari Bank Garansi. </p>
                                    <p>6. Ketentuan mengenai suretyship diatur dalam UU No.40/2014 tentang Perasuransian. Surety ship merupakan lini produk dari perusahaan asuransi umum. Dalam ruang lingkup usaha asuransi umum sebagaimana diatur dalam UU No.40/2014 ditegaskan bahwa perusahaan asuransi umum dapat melakukan perluasan ruang lingkup usaha yang ketentuannya diatur dalam POJK. Selanjutnya, dalam POJK No.69/POJK.05/2016 tentang penyelenggaraan usaha perusahaan asuransi, perusahaan asuransi syariah, perusahaan reasuransi dan perusahaan reasuransi syariah diatur bahwa suretyship merupakan salah satu perluasan usaha yang dapat dilakukan oleh perusahaan asuransi umum.</p>
                                    <p>7. Pemberian jaminan di Indonesia sudah dilayani oleh 4 industri berbeda. Di industri perbankan, bank umum menerbitkan produk bank garansi. Di industri perasuransian, perusahaan asuransi umum menerbitkan produk suretyship, lembaga pembiayaan eskpor Indonesia (Exim Bank) menerbitkan bank garansi, dan perusahaan penjaminan menerbitkan surety bond. </p>
                                    <p>8. Dalam peraturan presiden No.16/2018 tentang pengadaan barang dan jasa pemerintah, diatur bahwa jaminan penawaran, jaminan sanggah banding, jaminan pelaksanaan, jaminan uang muka, jamiunan pemeliharaan dan dapat diterbitkan oleh bank umum, perusahaan penjaminan, perusahaan asuransi atau lembaga keuangan khusus. </p>
                                    <p>9. Dalam UU No.2/2017 tentang jasa kontruksi, ditegaskan bahwa jaminan sebagaimana dimaksud pada ayat 3 dapat dikeluarkan oleh lembaga perbankan, perusahaan asuransi, dan atau perusahan penjaminan dalam bentuk bank garansi dan atau perjanjian terikat sesuai dengan ketentuan peraturan perundang-undangan.</p>
                                    <p>10. Terkait dengan UU No.1/2016 tentang penjaminan, dalam pasal 61 ayat 1 ditegaskan bahwa setiap orang di luar lembaga penjamin yang telah melakukan kegiatan penjaminan sebelum berlakunya UU ini wajib menyesuaikan dengan UU ini dalam jangka waktu paling lambat 3 tahun sejak berlakunya UU. selanjutnya, dalam ayat 2 ditegaskan bahwa ketentuan sebagaimana dimaksud pada ayat 1 tidak berlaku terhadap kegiatan penjaminan yang dijalankan berdasarkan UU tersendiri. </p>
                                    <p><strong>Editor: Martin Sihombing </strong></p>
                                    <p><strong>Sumber: (https://finansial.bisnis.com/read/20180612/215/805841/terkait-uu-penjaminan-ini-sikap-aaui)</strong></p>
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
