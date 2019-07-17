@extends('admin.layouts.master')

@section('title')

@endsection

@section('content')
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
              <tr>
                <th>STT</th>
                <th>ID</th>
                <th>TÊN SẢN PHẨM </th>
                <th>AVATAR</th>
                <th>Mieu ta </th>
                <th>so luong</th>
                <th>gia</th>
                 <th>gia khuyen mai</th>
                 <th>chinh sua</th>
              </tr>
        </thead>
        <tbody>
              @foreach($product as $key => $value)
                <tr>
                  <td>{{ $key++ }}</td>
                  <td>{{ $value->id }}</td>
                  <td>{{ $value->name }}</td>
                  <td><img style="width: 20%; height: 20%" src="{{ asset('assets/admin/img') . '/' . $value->avatar }}"></td>
                  <td>{{ $value->description }}</td>
                  <td>{{ $value->quantity }}</td>
                  <td>{{ $value->price }}</td>
                   <td>{{ $value->promotional }}</td>
                   <td>
                    <button type="button" class="btn btn-primary" title="{{ "sua".$value->name }}">
                      <i class="fas fa-plus"></i>
                    them
                    </button>
                    <button type="button" class="btn btn-danger delete" title="{{ "xoa".$value->name }}">
                      <i class="fas fa-backspace"></i>
                    xoa
                    </button>

                    {{-- <button type="button" class="btn btn-warning">sua</button>
                    <button type="button" class="btn btn-danger">xoa</button> --}}
                  </td>
                </tr>
              @endforeach
        </tbody>
    </table>
    {{-- <div class="pull-right">{{ $product->link() }}</div> --}}
    </div>
  </div>
</div>

</div>
@endsection