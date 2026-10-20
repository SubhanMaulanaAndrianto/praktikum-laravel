@extends('layout.app')

@section('title', 'Surat Keluar')

@section('content')

    <h1>Halaman Surat Keluar</h1>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No Urut</th>
                <th>Nomor Surat</th>
                <th>Tanggal</th>
                <th>Tujuan</th>
                <th>Perihal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($surat as $s)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $s['nomor_surat'] }}</td>
                    <td>{{ $s['tanggal'] }}</td>
                    <td>{{ $s['tujuan'] }}</td>
                    <td>{{ $s['perihal'] }}</td>
                    <td>
                        <a href="{{ route('surat-keluar.show', $s['id']) }}">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection