@extends('layout.master')

@section('judul')
    Form Tambah Data Dokter
@endsection

@section('content')
<form action="/dokter" method="POST">
    @csrf


    <div class="form-group">
        <label>Nomor Induk Pegawai</label>
        <input type="number" class="form-control @error('title') is-invalid @enderror " name="nip">
    </div>

    @error('nip')
    <div class="alert alert-danger" role="alert">
        {{ ($message) }}
    </div>
    @enderror

    <div class="form-group">
        <label>Nama Dokter</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror " name="nama_dokter">
    </div>

    @error('nama_vaksin')
    <div class="alert alert-danger" role="alert">
        {{ ($message) }}
    </div>
    @enderror


    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
