<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OutgoingLetter extends Model
{
    protected $fillable = [
        'nomor_surat',
        'tanggal',
        'tujuan',
        'perihal',
        'keterangan',
    ];
}