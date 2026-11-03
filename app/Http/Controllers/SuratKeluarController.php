<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OutgoingLetter;

class SuratKeluarController extends Controller
{
    public function index()
    {
        $surat = OutgoingLetter::all();
        return view('surat-keluar.index', compact('surat'));
    }

    public function create()
    {
        return view('surat-keluar.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_surat' => 'required',
            'tanggal' => 'required|date',
            'tujuan' => 'required',
            'perihal' => 'required',
            'keterangan' => 'nullable',
        ]);

        OutgoingLetter::create($request->all());

        return redirect()->route('surat-keluar.index');
    }

    public function show($id)
    {
        $suratShow = OutgoingLetter::findOrFail($id);
        return view('surat-keluar.show', compact('suratShow'));
    }

    public function edit($id)
    {
        $surat = OutgoingLetter::findOrFail($id);
        return view('surat-keluar.edit', compact('surat'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nomor_surat' => 'required',
            'tanggal' => 'required|date',
            'tujuan' => 'required',
            'perihal' => 'required',
            'keterangan' => 'nullable',
        ]);

        $surat = OutgoingLetter::findOrFail($id);
        $surat->update($request->all());

        return redirect()->route('surat-keluar.index');
    }

    public function destroy($id)
    {
        $surat = OutgoingLetter::findOrFail($id);
        $surat->delete();

        return redirect()->route('surat-keluar.index');
    }
}
