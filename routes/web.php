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
//Produk-3
/*------------------------------------------*/
Route::get('/produk/detail/5/custom-bond', function () {
    return view('produk/custom-bond');
});
//Produk-4
/*------------------------------------------*/
Route::get('/produk/detail/6/kontra-bank-garansi', function () {
    return view('produk/kontra-bank-garansi');
});
//Produk-5
/*------------------------------------------*/
Route::get('/produk/detail/7/pembiayaan-pemilikan-rumah', function () {
    return view('produk/p-pemilikan-rumah');
});

/*------------------------------------------*/
//Mitra
/*------------------------------------------*/
Route::get('/mitra-perusahaan', function () {
    return view('mitra/mitra');
});

/*------------------------------------------*/
//Media
/*------------------------------------------*/
//artikel & Berita
/*------------------------------------------*/
Route::get('media/artikel-berita', function () {
    return view('media/all-artikel-berita');
});
/*------------------------------------------*/
//kegiatan
/*------------------------------------------*/
Route::get('media/kegiatan', function () {
    return view('media/all-kegiatan');
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
