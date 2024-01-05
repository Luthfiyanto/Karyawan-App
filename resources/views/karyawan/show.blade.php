<!-- resources/views/karyawan/show.blade.php -->

@extends('layouts.app') <!-- You can extend your base layout if you have one -->

@section('content')
    <h1>Karyawan Details</h1>

    <div>
        <p><strong>Nomor Induk:</strong> {{ $karyawan->nomor_induk }}</p>
        <p><strong>Nama:</strong> {{ $karyawan->nama }}</p>
        <p><strong>Alamat:</strong> {{ $karyawan->alamat }}</p>
        <p><strong>Tanggal Lahir:</strong> {{ $karyawan->tanggal_lahir }}</p>
        <p><strong>Tanggal Bergabung:</strong> {{ $karyawan->tanggal_bergabung }}</p>

        <!-- Add other attributes as needed -->

        <a href="{{ route('karyawan.index') }}" class="btn btn-primary">Back to Karyawan List</a>
    </div>
@endsection
