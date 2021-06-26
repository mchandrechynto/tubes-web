@extends('admin.layouts.master')
@section('title', 'Order')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Order</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Order</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Order DataTables</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0" style="height: 500px;">
            <table id="table-orders" class="table table-head-fixed">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Gender</th>
                  <th>Address</th>
                  <th>Order Description</th>
                  <th>Time</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($order as $order)
                <tr>
                  <td>{{ $order->id }}</td>
                  <td>{{ $order->name }}</td>
                  <td>{{ $order->email }}</td>
                  <td>{{ $order->gender }}</td>
                  <td>{{ $order->address }}</td>
                  <td>{{ $order->note }}</td>
                  <td>{{ $order->created_at->format('l, d F Y') }}</td>
                  <td>
                    <form class="float-left m-1" action="{{ route('order-admin.destroy', [$order->id]) }}" method="POST">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-success"><i class="fas fa-check"></i></button>
                    </form>
                    <a href="{{ route('order-admin.edit', [$order->id]) }}" class="btn btn-warning float-left m-1"><i class="fas fa-edit" style="color: white"></i></a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row-->
  </div><!-- /.container-fluid -->
</section><!-- /.content -->
@endsection