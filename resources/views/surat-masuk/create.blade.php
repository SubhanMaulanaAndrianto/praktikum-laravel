@extends('layouts.app')

@section('title', 'Tambah Surat Masuk')

@section('content')
<h1>Tambah Surat Masuk</h1>

<form action="{{ route('surat-masuk.store') }}" method="POST">
    @csrf

    <label>Nomor Surat</label><br>
    <input type="text" name="nomor_surat"><br><br>

    <label>Tanggal</label><br>
    <input type="date" name="tanggal"><br><br>

    <label>Pengirim</label><br>
    <input type="text" name="pengirim"><br><br>

    <label>Perihal</label><br>
    <input type="text" name="perihal"><br><br>

    <button type="submit">Simpan</button>
</form>
@endsection