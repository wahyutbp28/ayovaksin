@extends('layout.master')

@section('judul')
Halaman Lokasi Vaksin
@endsection

<@push('scripts')
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
<a href="/lokasi/create" class="btn btn-primary my-3">Add</a>
<table class="table table-hover" id="example1">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Lokasi Vaksin</th>
        <th scope="col">Action</th>
        
      </tr>
    </thead>
    <tbody>
      @forelse($lokasi as $key=>$val)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$val->lokasi}}</td>
        <td>
          <form action="/lokasi/{{$val->id}}" method ="POST">
            @csrf
            @method('delete')
            <a href="/lokasi/{{$val->id}}/edit" class ="btn btn-warning btn-sm">Edit</a>
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