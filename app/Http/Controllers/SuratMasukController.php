<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\IncomingLetter;

class SuratMasukController extends Controller
{
    public function index()
    {
        $suratMasuk = IncomingLetter::all();
        return view('surat-masuk.index', compact('suratMasuk'));
    }

    public function create()
    {
        return view('surat-masuk.create');
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'nomor_surat' => 'required',
        'tanggal' => 'required|date',
        'pengirim' => 'required',
        'perihal' => 'required',
    ]);

    $surat = IncomingLetter::findOrFail($id);
    $surat->update($request->all());

    return redirect()->route('surat-masuk.index');
}
    public function destroy($id)
{
    $surat = IncomingLetter::findOrFail($id);
    $surat->delete();

    return redirect()->route('surat-masuk.index');
}
    public function store(Request $request)
{
    $request->validate([
        'nomor_surat' => 'required',
        'tanggal' => 'required|date',
        'pengirim' => 'required',
        'perihal' => 'required',
    ]);

    IncomingLetter::create($request->all());

    return redirect()->route('surat-masuk.index');
}
    public function show($id)
    {
        $surat = IncomingLetter::findOrFail($id);
        return view('surat-masuk.show', compact('surat'));
    }
}