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
        <h1>Layanan Pelanggan</h1>
        <div class="link-breadcrumb">
            <a href="/" class="active"> <i class="fa fa-home"></i> Beranda</a>
            Hubungi Kami / Layanan Pelanggan </div>
    </div>
</section>
<!-- End Breadcumb Area -->

<!-- Start contact Area -->
<div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2 style="font-size: 28px; margin-bottom: 55px">Hubungi Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Start contact icon column -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="fa fa-mobile"></i>
                            <p>
                                (021) 7290013<br>
                                <span>Senin-Jum'at (Pukul 9.00-17.00 WIB)</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Start contact icon column -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="fa fa-envelope-o"></i>
                            <p>
                               focusinservindo@gmail.com<br>
                                <span>myfocus.co.id</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Start contact icon column -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-icon text-center">
                        <div class="single-icon">
                            <i class="fa fa-map-marker"></i>
                            <p>
                                Gedung Pesona Lt. 1 Jl. Ciputat Raya No. 20 Kebayoran Lama Jakarta Selatan 12240<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- Start Google Map -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <!-- Start Map -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15864.327366941929!2d106.7774731!3d-6.2529472!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xca89466e1de89dbf!2sPT.+FOCUS+INSERVINDO!5e0!3m2!1sen!2sid!4v1545815876616" width="100%" height="380   " frameborder="0" style="border:0" allowfullscreen></iframe>
                    <!-- End Map -->
                </div>
                <!-- End Google Map -->

                <!-- Start  contact -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="form contact-form">
                        <div id="sendmessage">Pesan Telah Terkirim, Mohon Tunggu Balasan Dari Kami. Terima Kasih!</div>
                        <div id="errormessage">Maaf pesan tidak terkirim.</div>
                        <form action="" method="post" role="form" class="contactForm" onsubmit="validasi()">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" data-rule="minlen:1" data-msg="Wajib diisi" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" data-rule="email" data-msg="Wajib diisi" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" data-rule="minlen:1" data-msg="Wajib diisi" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="5" data-rule="required" data-msg="Anda belum memasukkan pesan untuk kami" placeholder="Pesan"></textarea>
                                <div class="validation"></div>
                            </div>

                            <div class="text-center"><button type="submit">Kirim</button></div>
                        </form>
                    </div>
                </div>
                <!-- End Left contact -->
            </div>
        </div>
    </div>
</div>
<!-- End Contact Area -->

<!-- Start Footer bottom Area -->
<footer>
    @include('layout.footer')
</footer>


<!-- Back to the top -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

@include('layout.library')

<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: #3ec1d5">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="color: white">Berhasil</h4>
            </div>
            <div class="modal-body">
                <p style="font-weight: 700; font-size: 17px">Terima kasih</p>
                <p>Pesan telah terkirim, mohon tunggu balasan dari kami.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- untuk memunculkan modal -->
<script type="text/javascript">
    function validasi() {
        var nama = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var subjek = document.getElementById("subject").value;
        var pesan = document.getElementById("message").value;
        if (nama != "" && email!="" && subjek !="" && pesan !="") {
            $('#myModal').modal('show');
            e.preventDefault();
        }else{
        }
    }
    function submit() {
        document.getElementById("name").reset();
        document.getElementById("email").reset();
        document.getElementById("subject").reset();
        document.getElementById("message").reset();
    }
</script>
</body>
</html>
