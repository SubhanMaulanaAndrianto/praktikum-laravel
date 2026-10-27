<?php

namespace App\Http\Controllers;

use App\Models\OutgoingLetter;

class SuratKeluarController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel outgoing_letters di MySQL
        $surat = OutgoingLetter::all();
        return view('surat-keluar.index', compact('surat'));
    }

    public function show($id)
    {
        // Mencari data berdasarkan ID atau menampilkan halaman 404 jika tidak ditemukan
        $suratShow = OutgoingLetter::findOrFail($id);
        return view('surat-keluar.show', compact('suratShow'));
    }
}