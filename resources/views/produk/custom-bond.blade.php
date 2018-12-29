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
            <a href="/produk">Produk & Layanan / </a>Custom Bond</div>
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
                                <div class="recent-single-post">
                                    <div class="post-img">
                                        <a href="/produk/detail/7/pembiayaan-pemilikan-rumah">
                                            <img src="{{asset('assets/img/produk/7.jpg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="pst-content">
                                        <p><a style="font-family: Raleway; color: #0C519D; font-size: 20px; font-weight: 700" href="/produk/detail/7/pembiayaan-pemilikan-rumah">
                                                Pembiayaan Pemilikan Rumah Dengan FLPP
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
                                <img src="{{asset('assets/img/produk/5.jpg')}}" alt="" />
                            </div>
                            <div class="post-information">
                                <h2 style="font-family: Raleway; color: #0C519D";>Custom Bond</h2>
                                <div class="entry-meta">
                                    <span class="author-meta"><i class="fa fa-bookmark"></i> <a href="/produk">Produk</a></span>
                                    <span><i class="fa fa-clock-o"></i> Jum'at, 28 Desember 2018</span>
                                </div>
                                <div class="entry-content">
                                    <p>Custom Bond adalah jenis penjaminan yang diberikan oleh Perusahaan Asuransi Penjamin (Surety Company),
                                        untuk kepentingan pihak Terjamin (Principal) yang terikat untuk memenuhi suatu kewajiban kepada
                                        pihak lain yakni Penerima Jaminan/Bea Cukai (Obligee) berdasarkan izin/fasilitas Bea Cukai berkaitan
                                        dengan kewajiban-kewajiban yang timbul dari ketentuan-ketentuan Bea Cukai atau Customs  Regulations, dalam hal ini adalah: </p>
                                    <ul style="list-style-type:disc; margin-left: 20px">
                                        <li>Bea Masuk (BM),</li>
                                        <li>Bea Masuk Tambahan (BMT),</li>
                                        <li>Pajak Pertambahan Nilai (PPN),</li>
                                        <li>Pajak Pertambahan nilai Barang Mewah (Ppn BM),</li>
                                        <li>Pajak Penghasilan (PPh) Pasal 22</li>
                                        <li>Biaya Administrasi yang diperhitungkan sejak tanggal Pemberitahuan Impor Barang (PIB)</li>
                                    </ul>
                                    <p></p>
                                    <p style="color: #0C519D; font-weight: bold">Fasilitas Bea dan Cukai yang dapat dijamin dengan Customs Bond: </p>
                                    <ul style="list-style-type:disc; margin-left: 20px">
                                        <li style="color: #0C519D";>KITE (KEMUDAHAN IMPOR TUJUAN EKSPOR)</li>
                                        <p>Impor bahan baku untuk diolah, dirakit atau dipasang pada barang lain dengan tujuan untuk diekspor yang impornya mendapat pembebasan atau pengembalian Bea Masuk atau Cukai serta Pajak Pertambahan Nilai dan Pajak Penjualan atas Barang Mewah tidak dipungut. Misal: Benang, Kulit, Garment, dll.</p>
                                        <li style="color: #0C519D";>ORDONANSI BEA PASAL 23 (OB.23) Atau IMPOR  SEMENTARA </li>
                                        <p>Impor barang ke dalam daerah pabean yang bertujuan untuk diekspor kembali dalam jangka waktu tertentu. Misal: Barang-barang untuk keperluan pameran, kegiatan seminar, keperluan perlombaan, keperluan proyek, dll</p>
                                        <li style="color: #0C519D";>VOORUITSLAG (IZIN PENGELUARAN LEBIH DAHULU)</li>
                                        <p>Pengeluaran barang dari pelabuhan/KPBC dengan penangguhan pembayaran Bea Masuk, Cukai dan Pajak. Misal: Barang yang mendapat kemudahan pembayaran berkala/PIB Berkala, Barang Impor untuk proyek yang mendesak, Barang Impor untuk keperluan penanggulangan keadaan darurat/bencana alam.</p>
                                        <li style="color: #0C519D";>KAWASAN BERIKAT (KABER) / EPTE</li>
                                        <p>Suatu tempat atau kawasan dengan batas-batas tertentu yang didalamnya dilakukan kegiatan usaha industri pengolahan barang dan bahan, kegiatan rancang bangun, perekayasaan, penyortiran, pemeriksaan awal, pemeriksaan akhir dan pengepakan atas barang dan bahan asal Impor atau barang dan bahan dari dalam daerah pabean Indonesia lainnya yang hasilnya terutama untuk tujuan Ekspor.</p>
                                        <li style="color: #0C519D";>PENGUSAHA PENGURUSAN JASA KEPABEANAN (PPJK)</li>
                                        <p>Pengusaha Pengurusan Jasa Kepabeanan (PPJK) untuk dapat melakukan kegiatan di Kantor Pelayanan Bea Cukai (KPBC) wajib memiliki Nomor Pokok PPJK yang dikeluarkan oleh Kepala Kantor Pelayanan BC setempat. Untuk mendapatkan Nomor Pokok  tersebut, PPJK mengajukan permohonan kepada Kepala Kantor Pelayanan BC. Salah satu syaratnya adalah menyerahkan jaminan senilai: di Tanjung Priok minimum Rp. 150 juta, di Belawan, Soekarno Hatta, Tanjung Emas, Tanjung Perak minimum Rp. 100 juta, di Polonia minimum Rp. 50 juta, dan di tempat lain minimum Rp. 5 juta.</p>
                                        <li style="color: #0C519D";>SPKPBM (SURAT PEMBERITAHUAN KEKURANGAN PEMBAYARAN BEA MASUK)</li>
                                        <p>Pungutan negara yang tertera dalam Surat Pemberitahuan Kekurangan Pembayaran Bea Masuk, yang disingkat SPKPBM, dalam hal penagihan Bea Cukai kepada Importir/PPJK yang salah dalam memberitahukan Nilai Pabean, Jenis dan/atau jumlah barang dalam PIB yang mengakibatkan kekurangan pembayaran Bea Masuk.</p>
                                    </ul>
                                    <p style="color: #0C519D; font-weight: bold">Cara Mendaftar</p>
                                    <p>Lengkapi seluruh dokumen persyaratan serta surat permohonan lalu kirim ke kantor kami. Atau bisa mengirimnya melalui email kami di <a href="mailto:focusinservindo@gmail.com?subject=Permohonan Pembiayaan [Jenis Produk/Layanan]">focusinservindo@gmail.com</a></p>
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
</body>
</html>
