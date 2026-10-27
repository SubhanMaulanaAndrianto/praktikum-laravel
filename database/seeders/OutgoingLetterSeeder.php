<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutgoingLetterSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nomor_surat' => '001/OUT/X/2026',
                'tanggal'     => '2026-10-05',
                'tujuan'      => 'Dinas Pendidikan',
                'perihal'     => 'Permohonan Izin Kerjasama',
                'keterangan'  => 'Surat permohonan kerjasama praktikum',
            ],
            [
                'nomor_surat' => '002/OUT/X/2026',
                'tanggal'     => '2026-10-06',
                'tujuan'      => 'PT Teknologi Nusantara',
                'perihal'     => 'Undangan Pembicara',
                'keterangan'  => 'Undangan seminar teknologi',
            ],
            [
                'nomor_surat' => '003/OUT/X/2026',
                'tanggal'     => '2026-10-07',
                'tujuan'      => 'Kementerian Kominfo',
                'perihal'     => 'Pengajuan Proposal',
                'keterangan'  => 'Pengajuan hibah penelitian',
            ],
        ];

        foreach ($data as $surat) {
            DB::table('outgoing_letters')->updateOrInsert(
                ['nomor_surat' => $surat['nomor_surat']],
                $surat + ['created_at' => now(), 'updated_at' => now()]
            );
        }
    }
}