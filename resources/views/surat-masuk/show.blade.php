@extends('layout.app')

@section('title', 'Detail Surat Masuk')

@section('content')

    <h1>Halaman Detail Surat Masuk</h1>

    @if ($suratShow)
        <p><strong>Nomor Surat:</strong> {{ $suratShow['nomor_surat'] }}</p>
        <p><strong>Tanggal:</strong> {{ $suratShow['tanggal'] }}</p>
        <p><strong>Pengirim:</strong> {{ $suratShow['pengirim'] }}</p>
        <p><strong>Perihal:</strong> {{ $suratShow['perihal'] }}</p>
    @else
        <p>Data surat tidak ditemukan.</p>
    @endif

    <a href="{{ route('surat-masuk.index') }}">Kembali</a>

@endsection