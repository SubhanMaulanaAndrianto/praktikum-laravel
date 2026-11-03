
@extends('layouts.app')

@section('title', 'Tambah Surat Keluar')

@section('content')

<h1>Tambah Surat Keluar</h1>

<form action="{{ route('surat-keluar.store') }}" method="POST">
    @csrf

    <label>Nomor Surat</label><br>
    <input type="text" name="nomor_surat"><br><br>

    <label>Tanggal</label><br>
    <input type="date" name="tanggal"><br><br>

    <label>Tujuan</label><br>
    <input type="text" name="tujuan"><br><br>

    <label>Perihal</label><br>
    <input type="text" name="perihal"><br><br>

    <button type="submit">Simpan</button>
</form>

@endsection
