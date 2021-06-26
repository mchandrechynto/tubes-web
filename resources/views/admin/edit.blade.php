@extends('admin.layouts.master')
@section('title', 'Edit')
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
          <li class="breadcrumb-item"><a href="{{ route('order-admin.index') }}">Order</a></li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Edit Order</h3>
      </div>
      <!-- /.card-header -->
      <form action="{{ route('order-admin.update', [$order->id]) }}" method="POST">
        @CSRF
        @method('put')
        <div class="card-body">
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="note">Order Description</label>
                <textarea name="note" class="form-control @error('note') is-invalid @enderror" rows="5" placeholder="Enter to changes order information" value="{{ $order->note }}"></textarea>
                <small class="text-danger">@error('note') {{$message}} @enderror</small>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
        <div class="card-footer">
          <div class="d-flex justify-content-end">
            <a href="{{ route('order-admin.index') }}" class="m-1 btn btn-outline-danger">Back</a>
            <button type="submit" class="m-1 btn btn-success">Update</button>
          </div>
        </div>
      </form>
    </div><!-- /.container-fluid -->
</section><!-- /.content -->
@endsection