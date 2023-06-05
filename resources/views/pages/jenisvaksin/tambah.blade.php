@extends('layout.master')

@section('judul')
    Form Tambah Data Vaksin
@endsection

@section('content')
<form action="/jenisvaksin" method="POST">
    @csrf

    <div class="form-group">
        <label>Nama Vaksin</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror " name="nama_vaksin">
    </div>

    @error('nama_vaksin')
    <div class="alert alert-danger" role="alert">
        {{ ($message) }}
    </div>
    @enderror


    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
