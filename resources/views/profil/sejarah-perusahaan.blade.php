<!doctype html>
<html lang="en">

<head>
    @include('layout.title-profile')
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
        <h1>Sejarah Perusahaan</h1>
        <div class="link-breadcrumb">
            <a href="/" class="active">Beranda</a>
            Profil Perusahaan / Sejarah Perusahaan
        </div>
    </div>
</section>
<!-- End Breadcumb Area -->

<!-- Start Container Area -->
<section class="content-post">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="post">
                    <p>PT. FOCUS INSERVINDO (FOCUS) didirikan tanggal 20 April 2009 berkedudukan di Jakarta Selatan dan telah tercatat dalam Lembar Negara Nomor 74 Tanggal 15 September 2009. Berawal dari sebuah potensi bisnis jasa agen asuransi khususnya bisnis penjaminan bank garansi, mengingat untuk produk penjaminan ini, masih banyak perusahaan yang belum mengetahui, sehingga diperlukan sosialisasi.</p>
                    <p>Walaupun legalitas perusahaan belum lengkap, namun FOCUS telah dipercaya oleh PT. ASURANSI KREDIT INDONESIA (Persero) atau ASKRINDO untuk menandatangani Perjanjian Kerjasama Keagenan. Dan berkat Ridho dan Rahmat ALLOH SWT, kerja keras TIM FOCUS dan komitmen melayani customer atau nasabah, ALHAMDULILLAH dalam usia muda, FOCUS telah memperoleh Penghargaan sebagai Agen Terbaik tahun 2010, Peringkat -3 se-Jabodetabek.</p>
                    <p>Untuk produk Penjaminan Kontra Bank Garansi, selain dengan ASKRINDO, FOCUS juga telah memiliki jaringan ke beberapa perusahaan asuransi BUMN (PT. Asuransi Jasa Indonesia atau JASINDO dan PT. Asuransi Jasarahrjaputera) dan perusahaan asuransi swasta yaitu PT. Asuransi Umum Bumiputeramuda 1967 dengan penerbitan Bank Garansi di PT. Bank Rakyat Indonesia (Persero), PT. Bank Negara Indonesia (Persero), PT. Bank DKI, PT. Bank Jabar Banten, PT. Bank Sumatera Selatan dan Bangka Belitung dan PT. Bank Kaltim.</p>
                    <p>Sementara untuk produk asuransi umum (general insurance), fungsi FOCUS hanya sebagai konsultan, yaitu membantu customer dalam pemilihan perusahaan asuransi yang baik, mempunyai reputasi, memiliki financial yang kuat serta back-up reasuransi baik dalam maupun luar negeri.</p>
                    <p style="color:  rgb(67, 94, 171); font-weight:700">TO SUCCESS WE ALL NEED FOCUS</p>
                </div>
            </div>
            <!-- Start Widget Area -->
            <div class="col-md-4">
                <div class="widget">
                    @include('layout.management-profile')
                </div>
                <div class="widget">
                    @include('layout.artikel-berita-terbaru')
                </div>
            </div>
            <!-- End Widget Area -->
            </div>
        </div>
    </div>
</section>

<!-- Start Footer bottom Area -->
<footer>
    @include('layout.footer')
</footer>

<!-- Back to the top -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


@include('layout.library')
</body>
</html>
