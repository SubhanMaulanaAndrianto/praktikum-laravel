<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function index() {
        //return 'Halaman surat masuk dari controller';
        return view('surat-masuk.index');
    }

    public function show($id) {
        return 'Detail Surat Masuk Dengan ID:' .$id;
    }
}
//mencari projek sistem informasi yang di pandu oleh laravel kemudian
//dipelajari dicari di pustaka koding jika tidak , cari yang lain