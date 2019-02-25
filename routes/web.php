<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('beranda');
});

//Profil Perusahaan
/*------------------------------------------*/
//Sejarah
/*------------------------------------------*/
Route::get('/sejarah-perusahaan', function () {
    return view('profil/sejarah-perusahaan');
});
//Visi-Misi
/*------------------------------------------*/
Route::get('/visi-misi', function () {
    return view('profil/visi-misi');
});
//Pengurus
/*------------------------------------------*/
Route::get('/pengurus-perusahaan', function () {
    return view('profil/pengurus-perusahaan');
});
//Izin Usaha
/*------------------------------------------*/
Route::get('/perizinan-usaha', function () {
    return view('profil/izin-usaha');
});
//Penghargaan
/*------------------------------------------*/
Route::get('/penghargaan', function () {
    return view('profil/penghargaan');
});

/*------------------------------------------*/
//Semua Produk
/*------------------------------------------*/
Route::get('/produk', function () {
    return view('produk/all-produk');
});
/*------------------------------------------*/
//Detail Produk
/*------------------------------------------*/
Route::get('/produk/detail/1/pembiayaan-umum', function () {
    return view('produk/p-umum');
});
//Produk-1
/*------------------------------------------*/
Route::get('/produk/detail/2/pembiayaan-multiguna', function () {
    return view('produk/p-multiguna');
});
//Produk-2
/*------------------------------------------*/
Route::get('/produk/detail/3/pembiayaan-mikro', function () {
    return view('produk/p-mikro');
});
//Produk-3
/*------------------------------------------*/
Route::get('/produk/detail/4/pembiayaan-konstruksi-dan-pengadaan-barang-jasa', function () {
    return view('produk/p-konstruksi-b-j');
});
//Produk-4
/*------------------------------------------*/
Route::get('/produk/detail/5/custom-bond', function () {
    return view('produk/custom-bond');
});
//Produk-5
/*------------------------------------------*/
Route::get('/produk/detail/6/kontra-bank-garansi', function () {
    return view('produk/kontra-bank-garansi');
});
//Produk-6
/*------------------------------------------*/
Route::get('/produk/detail/7/letter-of-credit', function () {
    return view('produk/p-letter-of-credit');
});
//Produk-7
/*------------------------------------------*/
Route::get('/produk/detail/8/surety-bond', function () {
    return view('produk/surety-bond');
});
//Produk-8


/*------------------------------------------*/
//Mitra
/*------------------------------------------*/
Route::get('/mitra-kerja', function () {
    return view('mitra/mitra');
});

/*------------------------------------------*/
//Media
/*------------------------------------------*/
//artikel & Berita
/*------------------------------------------*/
Route::get('/media/artikel-berita', function () {
    return view('media/all-artikel-berita');
});
/*------------------------------------------*/
//artikel-berita 05
/*------------------------------------------*/
Route::get('/media/artikel-berita/read/05/terkait-uu-penjaminan-ini-sikap-aaui', function () {
    return view('media/read/05/terkait-uu-penjaminan-ini-sikap-aaui');
});
/*------------------------------------------*/
//artikel-berita 04
/*------------------------------------------*/
Route::get('/media/artikel-berita/read/04/audiensi-dengan-dpr-ri-asippindo-harapkan-uu-penjaminan-bisa-diterapkan-tahun-2019', function () {
    return view('media/read/04/audiensi-dengan-dpr-ri-asippindo-harapkan-uu-penjaminan-bisa-diterapkan-tahun-2019');
});
/*------------------------------------------*//*------------------------------------------*/
//artikel-berita 03
/*------------------------------------------*/
Route::get('/media/artikel-berita/read/03/5-hal-yang-harus-anda-pahami-tentang-asuransi-keuangan-surety-bond', function () {
    return view('media/read/03/5-hal-yang-harus-anda-pahami-tentang-asuransi-keuangan-surety-bond');
});
/*------------------------------------------*/

//kegiatan
/*------------------------------------------*/
//All Kegiatan
/*------------------------------------------*/
Route::get('/media/kegiatan', function () {
    return view('media/all-kegiatan');
});
/*------------------------------------------*/
//Kegiatan ke-1
/*------------------------------------------*/
Route::get('/media/kegiatan/01/focus-menggelar-acara-2nd-Anniversary', function () {
    return view('media/kegiatan/1/kegiatan-1');
});
/*------------------------------------------*/
//Kegiatan ke-2
/*------------------------------------------*/

Route::get('/media/kegiatan/02/focus-menerimaan-penghargaan-dari-askrindo', function () {
    return view('media/kegiatan/2/kegiatan-2');
});

/*------------------------------------------*/
//Hubungi Kami
/*------------------------------------------*/
//layanan pelanggan
/*------------------------------------------*/
Route::get('/layanan-pelanggan', function () {
    return view('hubungi-kami/layanan-pelanggan');
});
/*------------------------------------------*/
//tata cara pengaduan
/*------------------------------------------*/
Route::get('/tata-cara-pengaduan', function () {
    return view('hubungi-kami/tata-cara-pengaduan');
});
/*------------------------------------------*/
//FAQ
/*------------------------------------------*/
Route::get('/FAQ', function () {
    return view('hubungi-kami/faq');
});
/*------------------------------------------*/
//SEARCH
/*------------------------------------------*/
Route::any('/cari',function(){
    $cari = Input::get ( 's' );
    if($cari == 'custom bond')
        return view('/search/search-custom-bond', ['name' => $cari]);
    else if ($cari == 'pembiayaan umum')
        return view('/search/search-pembiayaan-umum', ['name' => $cari]);
    else if ($cari == 'pembiayaan multiguna')
        return view('/search/search-pembiayaan-multiguna', ['name' => $cari]);
    else if ($cari == 'pembiayaan mikro')
        return view('/search/search-pembiayaan-mikro', ['name' => $cari]);
    else if ($cari == 'pembiayaan konstruksi')
        return view('/search/search-pembiayaan-konstruksi', ['name' => $cari]);
    else if ($cari == 'kontra bank garansi')
        return view('/search/search-kontra-bank-garansi', ['name' => $cari]);
    else if ($cari == 'letter of credit')
        return view ('/search/search-letter-of-credit', ['name' => $cari]);
    else if ($cari == 'surety bond')
        return view ('/search/search-surety-bond', ['name' => $cari]);
    else if ($cari == 'tentang asuransi surety bond')
        return view ('/search/search-artikel', ['name' => $cari]);
    else
        return view ('/search/tidak-ditemukan', ['name' => $cari]);
});


