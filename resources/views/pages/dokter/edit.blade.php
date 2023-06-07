@extends('layout.master')

@section('judul')Dokter
@endsection

@section('content')
<form action="/dokter/{{$dokter->nip}}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label>Nomor Induk Pegawai</label>
        <input type="number" class="form-control @error('title') is-invalid @enderror " name="nip" value="{{$dokter->nip}}" disabled>
    </div>

    

    <div class="form-group">
        <label>Nama Dokter</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror " name="nama_dokter" value="{{$dokter->nama_dokter}}">
    </div>

    @error('nama_dokter')
    <div class="alert alert-danger" role="alert">
        {{ ($message) }}
    </div>
    @enderror


    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
