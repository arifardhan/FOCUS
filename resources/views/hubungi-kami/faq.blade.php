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
        <h1>FAQ</h1>
        <div class="link-breadcrumb">
            <a href="/" class="active">Beranda</a>
            Hubungi Kami / FAQ </div>
    </div>
</section>
<!-- End Breadcumb Area -->


<section class="content-post">
    <div class="container">
        <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12" style="margin-top: 30px">
                    <div class="faq-details">
                        <div class="panel-group" id="accordion">
                            <!-- Panel Default -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="check-title">
                                        <a data-toggle="collapse" class="active" data-parent="#accordion" href="#check1">
                                            <span class="acc-icons"></span>APA YANG DIMAKSUD KONTRA BANK GARANSI
                                        </a>
                                    </h4>
                                </div>
                                <div id="check1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>
                                            Kontra Bank Garansi adalah Penjaminan yang diberikan Penjamin (Perusahaan Penjaminan) kepada Penerima Jaminan (Bank) yang bersifat tanpa syarat (unconditional) dan Penjamin akan membayar ganti rugi kepada Penerima Jaminan atas tuntutan pencairan Bank Garansi (BG) yang diajukan Obligee ketika Terjamin wanprestasi.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Panel Default -->
                            <!-- Panel Default -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="check-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#check2">
                                            <span class="acc-icons"></span> JENIS KONTRA BANK GARANSI YANG DAPAT DIJAMIN
                                        </a>
                                    </h4>
                                </div>
                                <div id="check2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul >
                                            <li style="margin-bottom: 10px">1. Jaminan untuk Penawaran (Bid Bond)</li>
                                            <li style="margin-bottom: 10px">2. Jaminan Uang Muka (Jaminan Uang Muka)</li>
                                            <li style="margin-bottom: 10px">3. Jaminan Pelaksanaan (Advance Payment Bond)</li>
                                            <li style="margin-bottom: 10px">4. Jaminan Pemeliharaan (Maintenance Bond)</li>
                                            <li style="margin-bottom: 10px">5. Jaminan untuk Penyalur/Agen/Dealer/Depot Holeder (Swasta bonafide)</li>
                                        </ul>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Panel Default -->
                            <!-- Panel Default -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="check-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#check3">
                                            <span class="acc-icons"></span>MANFAAT KONTRA BANK GARANSI
                                        </a>
                                    </h4>
                                </div>
                                <div id="check3" class="panel-collapse collapse ">
                                    <div class="panel-body">
                                        <p style="color: #0C519D; font-weight: bold">Bagi Principal</p>
                                        <p>Pemberian Bank Garansi merupakan seleksi langsung maupun tidak langsung membantu principal yang bonafid dalam kompetisi untuk mendapatkan order kontrak pekerjaan proyek dari Obligee Kontra Bank Garansi merupakan jaminan yang diperuntukan bagi Principal terhadap pihak Bank (penerbit Bank Garansi).
                                        </p>
                                        <p style="color: #0C519D; font-weight: bold">Bagi Bank</p>
                                        <p>Lebih terjamin dan sesuai dengan Undang – Undang Fee base income Risiko kredit relatif rendah karena ada penjamin.
                                        </p>
                                        <p style="color: #0C519D; font-weight: bold">Bagi Obligee</p>
                                        <p>Mudah dalam proses pencairan bila Principal Wanprestasi.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Panel Default -->
                        </div>
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
