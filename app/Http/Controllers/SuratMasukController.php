<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IncomingLetter;

class SuratMasukController extends Controller
{
    // Menampilkan semua data surat masuk
    public function index()
    {
        $suratMasuk = IncomingLetter::all();

        return view('surat-masuk.index', compact('suratMasuk'));
    }

    // Menampilkan form tambah surat masuk
    public function create()
    {
        return view('surat-masuk.create');
    }

    // Menyimpan data surat masuk
    public function store(Request $request)
    {
        $request->validate([
            'nomor_surat' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'pengirim' => 'required|string|max:255',
            'perihal' => 'required|string|max:255',
        ]);

        IncomingLetter::create([
            'nomor_surat' => $request->nomor_surat,
            'tanggal' => $request->tanggal,
            'pengirim' => $request->pengirim,
            'perihal' => $request->perihal,
        ]);

        return redirect()->route('surat-masuk.index')
            ->with('success', 'Surat masuk berhasil ditambahkan.');
    }

    // Menampilkan detail surat masuk
    public function show($id)
    {
        $suratShow = IncomingLetter::findOrFail($id);

        return view('surat-masuk.show', compact('suratShow'));
    }

    // Menampilkan form edit surat masuk
    public function edit($id)
    {
        $surat = IncomingLetter::findOrFail($id);

        return view('surat-masuk.edit', compact('surat'));
    }

    // Memperbarui data surat masuk
    public function update(Request $request, $id)
    {
        $request->validate([
            'nomor_surat' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'pengirim' => 'required|string|max:255',
            'perihal' => 'required|string|max:255',
        ]);

        $surat = IncomingLetter::findOrFail($id);

        $surat->update([
            'nomor_surat' => $request->nomor_surat,
            'tanggal' => $request->tanggal,
            'pengirim' => $request->pengirim,
            'perihal' => $request->perihal,
        ]);

        return redirect()->route('surat-masuk.index')
            ->with('success', 'Surat masuk berhasil diperbarui.');
    }

    // Menghapus data surat masuk
    public function destroy($id)
    {
        $surat = IncomingLetter::findOrFail($id);

        $surat->delete();

        return redirect()->route('surat-masuk.index')
            ->with('success', 'Surat masuk berhasil dihapus.');
    }
}
