@extends('layouts.app')
@section('title', 'Detail Surat Masuk')
@section('content')
<h1>Detail Surat Masuk</h1>
<p><strong>Nomor:</strong> {{ $surat->nomor_surat }}</p>
<p><strong>Tanggal:</strong> {{ $surat->tanggal }}</p>
<p><strong>Pengirim:</strong> {{ $surat->pengirim }}</p>
<p><strong>Perihal:</strong> {{ $surat->perihal }}</p>
<p><strong>Keterangan:</strong> {{ $surat->keterangan ?? '-' }}</p>
<a href="{{ route('surat-masuk.index') }}">Kembali ke daftar</a>
@endsection