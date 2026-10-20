<?php

namespace App\Http\Controllers;

class SuratMasukController extends Controller
{
    private function dataSurat()
    {
        return [
            1 => ['id' => 1, 'nomor_surat' => '001/FT/X/2026', 'tanggal' => '13-10-2026',
                  'pengirim' => 'Fakultas Teknik', 'perihal' => 'Undangan Rapat'],
            2 => ['id' => 2, 'nomor_surat' => '002/BAA/X/2026', 'tanggal' => '14-10-2026',
                  'pengirim' => 'BAA', 'perihal' => 'Edaran Akademik'],
            3 => ['id' => 3, 'nomor_surat' => '003/LPM/X/2026', 'tanggal' => '18-10-2026',
                  'pengirim' => 'LPM', 'perihal' => 'Sosialisasi Pedoman'],
        ];
    }

    public function index()
    {
        $surat = $this->dataSurat();
        return view('surat-masuk.index', compact('surat'));
    }

    public function show($id)
    {
        $suratShow = $this->dataSurat()[$id] ?? null;
        return view('surat-masuk.show', compact('suratShow'));
    }
}