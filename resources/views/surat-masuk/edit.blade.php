@extends('layouts.app')

@section('title', 'Edit Surat Masuk')

@section('content')
<h1>Edit Surat Masuk</h1>

<form action="{{ route('surat-masuk.update', $surat->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nomor Surat</label><br>
    <input type="text" name="nomor_surat" value="{{ $surat->nomor_surat }}"><br><br>

    <label>Tanggal</label><br>
    <input type="date" name="tanggal" value="{{ $surat->tanggal }}"><br><br>

    <label>Pengirim</label><br>
    <input type="text" name="pengirim" value="{{ $surat->pengirim }}"><br><br>

    <label>Perihal</label><br>
    <input type="text" name="perihal" value="{{ $surat->perihal }}"><br><br>

    <button type="submit">Update</button>
</form>
@endsection