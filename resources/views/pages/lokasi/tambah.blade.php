@extends('layout.master')

@section('judul')
    Form Tambah Lokasi Vaksin
@endsection

@section('content')
<form action="/lokasi" method="POST">
    @csrf

    <div class="form-group">
        <label>Lokasi Vaksin</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror " name="lokasi">
    </div>

    @error('lokasi')
    <div class="alert alert-danger" role="alert">
        {{ ($message) }}
    </div>
    @enderror


    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
