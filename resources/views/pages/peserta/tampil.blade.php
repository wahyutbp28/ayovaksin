@extends('layout.master')

@section('judul')
Halaman Data Peserta
@endsection

@push('scripts')
<script src="{{asset('/template/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('/template/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endpush


@push('styles')
<link href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet"/>
@endpush



@section('content')
<a href="/peserta/create" class="btn btn-primary my-3">Add</a>
<table class="table table-hover" id="example1">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">NIK</th>
        <th scope="col">Nama Peserta</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Tempat Lahir</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">Alamat</th>
        <th scope="col">No.HP</th>
        <th scope="col">Action</th>
        
      </tr>
    </thead>
    <tbody>
      @forelse($peserta as $key=>$val)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$val->nik}}</td>
        <td>{{$val->nama}}</td>
        <td>{{$val->jk}}</td>
        <td>{{$val->tempat_lahir}}</td>
        <td>{{$val->tgl_lahir}}</td>
        <td>{{$val->alamat}}</td>
        <td>{{$val->no_hp}}</td>
        <td>
          <form action="/peserta/{{$val->nik}}" method ="POST">
            @csrf
            @method('delete')
            <a href="/peserta/{{$val->nik}}/edit" class ="btn btn-warning btn-sm">Edit</a>
            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
          </form>

        </td>
      </tr>
      @empty
      <tr>
        <td>Tidak Ada Data</td>
        
      </tr>
      @endforelse
    </tbody>
  </table>
  @endsection