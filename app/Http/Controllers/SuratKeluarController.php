<?php

namespace App\Http\Controllers;

class SuratKeluarController extends Controller
{
    private function dataSurat()
    {
        return [
            1 => ['id' => 1, 'nomor_surat' => '001/REK/X/2026', 'tanggal' => '15-10-2026',
                  'tujuan' => 'Kementerian Pendidikan', 'perihal' => 'Laporan Kegiatan'],
            2 => ['id' => 2, 'nomor_surat' => '002/REK/X/2026', 'tanggal' => '16-10-2026',
                  'tujuan' => 'Fakultas Teknik', 'perihal' => 'Pemberitahuan Jadwal'],
            3 => ['id' => 3, 'nomor_surat' => '003/REK/X/2026', 'tanggal' => '19-10-2026',
                  'tujuan' => 'LPM', 'perihal' => 'Permohonan Data Akreditasi'],
        ];
    }

    public function index()
    {
        $surat = $this->dataSurat();
        return view('surat-keluar.index', compact('surat'));
    }

    public function show($id)
    {
        $suratShow = $this->dataSurat()[$id] ?? null;
        return view('surat-keluar.show', compact('suratShow'));
    }
}