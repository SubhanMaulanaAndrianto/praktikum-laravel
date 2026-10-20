@extends('layout.app')

@section('title', 'Detail Surat Keluar')

@section('content')

    <h1>Halaman Detail Surat Keluar</h1>

    @if ($suratShow)
        <p><strong>Nomor Surat:</strong> {{ $suratShow['nomor_surat'] }}</p>
        <p><strong>Tanggal:</strong> {{ $suratShow['tanggal'] }}</p>
        <p><strong>Tujuan:</strong> {{ $suratShow['tujuan'] }}</p>
        <p><strong>Perihal:</strong> {{ $suratShow['perihal'] }}</p>
    @else
        <p>Data surat tidak ditemukan.</p>
    @endif

    <a href="{{ route('surat-keluar.index') }}">Kembali</a>

@endsection