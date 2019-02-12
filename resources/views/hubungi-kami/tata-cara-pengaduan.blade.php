<!doctype html>
<html lang="en">
<head>
    @include('layout.ttitle-hubungi')
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
        <h1>Tata Cara Pengaduan</h1>
        <div class="link-breadcrumb">
            <a href="/" class="active">Beranda</a>
            Hubungi Kami / Tata Cara Pengaduan </div>
    </div>
</section>
<!-- End Breadcumb Area -->


<section class="content-post">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="post">
                    <h1 style="font-size: 20px; color: rgb(67, 94, 171); margin:0 0 4px">Tata Cara Pengaduan</h1>
                    <p style="margin:0 0 10px">Stakeholder bisa menyampaikan keluhan atau masukan kepada PT. Focus Inservindo,
                        baik secara lisan melalui telepon/datang langsung maupun secara tertulis melalui surat dan email (focusinservindo@gmail.com).</p>
                    <p>Pengaduan secara lisan dapat dilakukan melalui kantor FOCUS dengan alamat Gedung Pesona Lt. 1 Jl. Ciputat Raya No. 20 Kebayoran
                        Lama Jakarta Selatan 12240; telepon (021) 7290012.</p>
                    <p>Beberapa hal yang perlu disiapkan stakeholder untuk menyampaikan keluhan atau masukan adalah sebagai berikut: </p>
                    <ul style="margin-left: 20px">
                        <li style="color: #0C519D";></li>
                        <p>1. Identitas diri</p>
                        <p>2. Berkas pendukung</p>
                        <p>3. Nomor kontak yang bisa dihubungi (nomor telepon, nomor HP, email, atau alamat balasan surat)</p>
                    </ul>
                    <p>Tata cara penanganan keluhan atau masukan dari stakeholder adalah sebagai berikut:</p>
                    <img src="{{asset('assets/uploads/alur-pengaduan.jpg')}}" alt="">
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
