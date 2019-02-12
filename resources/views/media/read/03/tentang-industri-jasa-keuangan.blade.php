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
            (Artikel) Tentang Industri Jasa Keuangan
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
                                <img src="{{asset('assets/img/blog/3.jpg')}}" alt="" />
                            </div>
                            <div class="post-information">
                                <h2 style="font-family: Raleway; color: #0C519D";> (Artikel) Tentang Industri Jasa Keuangan</h2>
                                <div class="entry-meta">
                                    <span class="author-meta"><i class="fa fa-bookmark"></i> <a href="/media/artikel-berita">Artikel & Berita</a></span>
                                    <span><i class="fa fa-clock-o"></i> Selasa, 18 Desember 2018 12:06</span>
                                </div>
                                <div class="entry-content">
                                    <p>
                                        Jasa keuangan adalah suatu istilah yang digunakan untuk merujuk jasa yang disediakan
                                        oleh industri keuangan. Jasa keuangan juga digunakan untuk merujuk pada organisasi yang
                                        menangani pengelolaan dana. Bank, bank investasi, perusahaan asuransi, perusahaan kartu kredit,
                                        perusahaan pembiayaan konsumen, dan sekuritas adalah contoh-contoh perusahaan dalam industri ini
                                        yang menyediakan berbagai jasa yang terkait dengan uang dan investasi. Jasa keuangan adalah industri
                                        dengan pendapatan terbesar di dunia; pada tahun 2004, industri ini mewakili 20% kapitalisasi pasar dari S&P 500.
                                        Berikut ini adalah beberapa penjelasan terkait dengan lembaga atau perusahaan yang bekerja dalam bidang jasa keuangan.
                                    </p>
                                    <p></p>
                                    <p style="font-weight: 700">
                                        Perusahaan Penjaminan Kredit
                                    </p>
                                    <p>
                                    </p>
                                    <p>
                                        Perusahaan penjaminan kredit merupakan salah satu badan hukum yang bekerja pada bidang keuangan
                                        dimana kegiatan pokok dari perusahaan ini adalah memberikan pinjaman kredit kepada nasabah.
                                        Perusahaan penjaminan kredit bertujuan untuk membantu Usaha Kecil, Usaha Menengah,
                                        Usaha Mikro untuk mengakses dana dari lembaga keuangan lain, misalnya perbankan.
                                    </p>
                                    <p></p>
                                    <p style="font-weight: 700">
                                        Perusahaan Penjaminan Infrastruktur
                                    </p>
                                    <p>
                                    </p>
                                    <p>
                                        Perusahaan penjaminan infrastruktur merupakan salah satu bentuk perusahaan persero.
                                        Tujuan dari pendirian perusahaan ini adalah untuk memberi jaminan kepada proyek-proyek yang bekerjasama
                                        dengan pemerintah namun badan usaha
                                        ini bergerak hanya di bidang infrastruktur
                                        yang dilakukan dengan cara menyediakan penjaminan infrastruktur.
                                    </p>
                                    <p style="font-weight: 700">
                                        Lembaga Penyediaan Ekspor Indonesia
                                    </p>
                                    <p>
                                    </p>
                                    <p>
                                        Berdasarkan Undang-Undang Nomor 2 Tahun 2009 Tentang lembaga Pembiayaan Ekspor Indonesia,
                                        Lembaga Pembiayaan Ekspor Indonesia atau (LPEI) dibentuk demi membantu dan mendukung
                                        kebijakan yang dilakukan oleh pemerintah dalam
                                        mendorong ekspor barang-barang asli dalam negeri menuju Negara-negara tertentu.
                                    </p>
                                    <p style="font-weight: 700">
                                        Perusahaan Pembiayaan Sekunder Perumahan
                                    </p>
                                    <p>
                                    </p>
                                    <p>
                                        Fungsi atau tugas dari pendirian perusahaan ini adalah untuk menyediakan berbagai macam pembiayaan perumahan. Tujuan dari pembiayaan perumahan antara lain untuk meningkatkan kapasitas pembiayaan perumahan agar dapat dijangkau oleh masyarakat di berbagai kalangan. Di Indonesia hanya ada satu Perusahaan Pembiayaan Sekunder Perumahan, nama perusahaan tersebut adalah PT Sarana Multigriya Finansial atau sering disingkat dengan PT. SMF (persero).
                                    </p>
                                    <p style="font-weight: 700">
                                        Perusahaan Pegadaian
                                    </p>
                                    <p>
                                    </p>
                                    <p>
                                        Pemerintah memiliki program untuk meningkatkan kesejahteraan masyarakat kelas menengah ke bawah. Untuk meningkatkan dan mendukung program pemerintah tersebut, perusahaan pegadaian didirikan untuk memberi kemudahan bagi usaha skala mikro, kecil dan menengah dalam mencari pinjaman modal dengan bunga pinjaman yang tergolong kecil. Pemberian pinjaman memiliki dasar hukum gadai dan fidusia.
                                    </p>
                                    <p>
                                        Fungsi atau tugas dari pendirian perusahaan ini adalah untuk menyediakan berbagai macam pembiayaan perumahan. Tujuan dari pembiayaan perumahan antara lain untuk meningkatkan kapasitas pembiayaan perumahan agar dapat dijangkau oleh masyarakat di berbagai kalangan. Di Indonesia hanya ada satu Perusahaan Pembiayaan Sekunder Perumahan, nama perusahaan tersebut adalah PT Sarana Multigriya Finansial atau sering disingkat dengan PT. SMF (persero).
                                    </p>
                                    <p style="font-weight: 700">
                                        Badan Penyelenggara Jaminan Sosial
                                    </p>
                                    <p>
                                    </p>
                                    <p>
                                        Lembaga jasa keuangan ini sering disebut dengan BPJS yang didirikan berdasarkan Undang-Undang Nomor 24 Tahun 2011 Tentang Badan Penyelenggara Jaminan Sosial. Perusahaan ini memberikan jaminan dalam berbagai bentuk, yaitu jaminan kematian, jaminan kesehatan, jaminan kecelakaan kerja, jaminan pensiun, dan jaminan hari tua. Jenis jaminan dapat disesuaikan dengan kebutuhan dan keinginan masyarakat yang menggunakan BPJS.
                                    </p>
                                    <p style="font-weight: 700">
                                        Lembaga Keuangan Mikro
                                    </p>
                                    <p>
                                    </p>
                                    <p>
                                        Lembaga Keuangan Mikro (LKM) didirikan tidak hanya untuk mendapat keuntungan semata. Lembaga jasa keuangan ini bergerak khusus dalam bidang pemberian jasa pengembangan usaha dan pemberdayaan ekonomi masyarakat. Caranya adalah dengan memberi pinjaman dan pembiayaan secara langsung untuk usaha yang berskala mikro baik kepada anggotanya atau kepada masyarakat. Perusahaan ini juga melakukan pengelolaan uang simpanan masyarakat atau kelompok dan bersedia memberi konsultasi dalam pengembangan usaha yang dilakukan oleh kelompok masyarakat maupun individu.
                                    </p>
                                    <p>
                                        Anda dapat memilih perusahaan penyedia jasa keuangan sesuai dengan kebutuhan dan keinginan anda. Baik untuk perorangan maupun untuk kelompok demi kelancaran usaha-usaha yang anda miliki. Masing-masing lembaga perusahaan juga memiliki tingkatan masing-masing, mulai dari yang tersedia untuk kalangan bawah hingga untuk kalangan atas dengan nominal yang sangat bervariasi. Jasa keuangan merupakan industri yang memiliki pendapatan paling besar di dunia, yaitu mencapai 20%. Dengan begitu banyak keuntungan yang didapat, tak heran jika di Indonesia semakin banyak perusahaan jasa keuangan yang lahir.
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
