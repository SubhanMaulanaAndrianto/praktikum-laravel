@extends('layouts.app')

@section('title', 'Edit Surat Keluar')

@section('content')

<h1>Edit Surat Keluar</h1>

<form action="{{ route('surat-keluar.update', $surat->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nomor Surat</label><br>
    <input type="text" name="nomor_surat" value="{{ $surat->nomor_surat }}"><br><br>

    <label>Tanggal</label><br>
    <input type="date" name="tanggal" value="{{ $surat->tanggal }}"><br><br>

    <label>Tujuan</label><br>
    <input type="text" name="tujuan" value="{{ $surat->tujuan }}"><br><br>

    <label>Perihal</label><br>
    <input type="text" name="perihal" value="{{ $surat->perihal }}"><br><br>

    <label>Keterangan</label><br>
    <textarea name="keterangan">{{ $surat->keterangan }}</textarea><br><br>

    <button type="submit">Update</button>
</form>

@endsection