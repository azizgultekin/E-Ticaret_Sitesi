@extends('layouts.admin')

@section('title', 'Orders')

@section('content')
       <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Order List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Orders</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
            <table id="example1" class="table table-bordered table-striped" style="width: 100%">
                <thead>
                <tr>
                    <th style="text-align: center;vertical-align: middle; text-transform: uppercase"><h5>Id</h5> </th>
                    <th style="text-align: center;vertical-align: middle; text-transform: uppercase"><h5>User</h5> </th>
                    <th style="text-align: center;vertical-align: middle;text-transform: uppercase"><h5>Name</h5> </th>
                    <th style="text-align: center;vertical-align: middle;text-transform: uppercase"><h5>Phone</h5> </th>
                    <th style="text-align: center;vertical-align: middle;text-transform: uppercase"><h5>Address</h5> </th>
                    <th style="text-align: center;vertical-align: middle;text-transform: uppercase"><h5>Total</h5> </th>
                    <th style="text-align: center;vertical-align: middle;text-transform: uppercase"><h5>Date</h5> </th>
                    <th style="text-align: center;vertical-align: middle;text-transform: uppercase"><h5>Status</h5> </th>
                    <th style="text-align: center;vertical-align: middle;text-transform: uppercase"><h5> Actions</h5></th>

                </tr>
                </thead>
                <tbody>
                @include('home.message')
                @foreach ( $datalist as $rs)
                    <tr>
                        <td style="text-align: center;vertical-align: middle;">{{ $rs->id}}</td>
                        <td style="text-align: center;vertical-align: middle;">{{ $rs->user->name}}</td>
                        <td style="text-align: center;vertical-align: middle;">{{ $rs->name}}</td>
                        <td style="text-align: center;vertical-align: middle;">{{ $rs->phone}}</td>
                        <td style="text-align: center;vertical-align: middle;">{{ $rs->address}}</td>
                        <td style="text-align: center;vertical-align: middle;">{{ $rs->total}}</td>
                        <td style="text-align: center;vertical-align: middle;">{{ $rs->created_at}}</td>
                        <td style="text-align: center;vertical-align: middle;">{{ $rs->status}}</td>
                        <td style="text-align: center;vertical-align: middle;">
                            <a href="{{route('admin_order_show',['id' => $rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=1000,height=800')">
                            <ion-icon name="create-outline"></ion-icon></a> 
                        </td>
                    </tr>
                @endforeach
            </table>  
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
