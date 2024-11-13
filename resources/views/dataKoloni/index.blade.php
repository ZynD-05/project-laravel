@extends('layouts.app')
  
@section('title', 'Data Koloni')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Daftar Koloni</h1>
        <a href="{{ route('dataKoloni.create') }}" class="btn btn-primary">Tambah Data</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Jenis Koloni</th>
                <th>Tanggal Pengadaan</th>
                <th>Riwayat Panen</th>
                <th>Catatan Kesehatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>+
            @if($dataKoloni->count() > 0)
                @foreach($dataKoloni as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->jeniskoloni }}</td>
                        <td class="align-middle">{{ $rs->tanggalPengadaan }}</td>
                        <td class="align-middle">{{ $rs->riwayatPanen }}</td>
                        <td class="align-middle">{{ $rs->catatanKesehatan }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('dataKoloni.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('dataKoloni.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('dataKoloni.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Data Koloni Tidak ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection