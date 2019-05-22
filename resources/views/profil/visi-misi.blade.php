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
<section class="head-breadcrumb" style="background-image:linear-gradient( rgb(0, 0, 0), rgba(0, 0, 0, 0.4) ), url('{{asset('assets/img/breadcumb/1.jpg')}}');">
    <div class="container">
        <h1>Visi & Misi</h1>
        <div class="link-breadcrumb">
            <a href="/" class="active"> <i class="fa fa-home"></i> Beranda</a>
            Profil Perusahaan / Visi & Misi
        </div>
    </div>
</section>
<!-- End Breadcumb Area -->

<!-- Start Container Area -->
<section class="content-post">
    <div class="container">
        <div class="row">
            <!-- Start Content Area -->
            <div class="col-md-8">
                <div class="post">
                    <h1 style="font-size: 28px; color: rgb(67, 94, 171); margin:0 0 4px">Visi Perusahaan</h1>
                    <p style="margin:0 0 10px">Kami memiliki  visi untuk menjadi perusahaan Jasa yang handal dan terpercaya
                        dalam penyediaan Penjaminan dan Asuransi.
                    </p>
                    <h1 style="font-size: 28px; color: rgb(67, 94, 171); margin:0 0 4px">Misi Perusahaan</h1>
                    <p style="margin:0 0 10px">Dalam menjalankan visi, kami memiliki misi untuk memberikan layanan yang terbaik, cepat dan penuh
                        solusi.
                    </p>
                    <h1 style="font-size: 28px; color: rgb(67, 94, 171); margin:0 0 4px">Strategi Perusahaan</h1>
                    <p style="margin:0 0 10px">Bermitra dengan perusahaan asuransi yang memiliki
                        komitmen, reputasi handal, finance yang kuat serta
                        terpercaya dalam layanan Penjaminan dan Asuransi.
                    </p>
                </div>
            </div>
            <!-- End Content Area -->
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
<!-- End Container Area -->

<!-- Start Footer bottom Area -->
<footer>
    @include('layout.footer')
</footer>

<!-- Back to the top -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

@include('layout.library')
</body>

</html>
