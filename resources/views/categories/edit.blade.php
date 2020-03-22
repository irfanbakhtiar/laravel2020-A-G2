@extends('layouts.master')

@section('top')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.css') }}">

    <!-- Custom styles for this page -->
    <link href="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('template/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('template/js/demo/datatables-demo.js') }}"></script>
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Category</h1><br>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
  </div>
  <div class="card-body">
    <div class="table-responsive">
    @foreach ($category as $ctg)
    <form action="{{action('CategoryController@update', $ctg->id_kategori)}}" method="POST" class="needs-validation" novalidate>
        @method('PATCH')
        {{ csrf_field() }}
		    <input type="hidden" name="id" value="{{ $ctg->id_kategori }}">
        <input type="hidden" placeholder="nama" name="old_name" value="{{ $ctg->nama_kategori }}">
        <label>Nama Kategori :</label>
        <input type="text" class="form-control" placeholder="Masukan Nama Kategori" name="nama_kategori" value="{{ $ctg->nama_kategori }}" required>
        <div class="invalid-feedback">
            Harap masukkan Nama Kategori.
        </div>
        </div><br>
        <input type="submit" class="btn btn-primary" value="Edit Data">
        <a href="/categories" class="btn btn-outline-primary">Kembali</a>
    </form>
    @endforeach
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->


@endsection