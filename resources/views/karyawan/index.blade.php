<!-- resources/views/karyawan/index.blade.php -->

@extends('layouts.app') <!-- You can extend your base layout if you have one -->

@section('content')
<section class="m-5 p-3">

  <h1>Karyawan List</h1>
  
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table border shadow-sm p-10 m-3">
        <thead>
            <tr>
                <th>Nomor Induk</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Tanggal Bergabung</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($karyawanList as $karyawan)
                <tr class="p-4">
                    <td>{{ $karyawan->nomor_induk }}</td>
                    <td>{{ $karyawan->nama }}</td>
                    <td>{{ $karyawan->alamat }}</td>
                    <td>{{ $karyawan->tanggal_lahir }}</td>
                    <td>{{ $karyawan->tanggal_bergabung }}</td>
                    <td>
                      <a href="{{ route('karyawan.show', $karyawan->nomor_induk) }}" class="btn btn-info">Show</a>
                      <a href="{{ route('karyawan.edit', $karyawan->nomor_induk) }}" class="btn btn-warning">Edit</a>
                      <form action="{{ route('karyawan.destroy', $karyawan->nomor_induk) }}" method="post" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this karyawan?')">Delete</button>
                      </form>
                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="6">No karyawan data available</td>
                </tr>
                @endforelse
              </tbody>
    </table>
  </section>
@endsection
