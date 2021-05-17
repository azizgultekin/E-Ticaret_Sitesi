@extends('layouts.admin')

@section('title', 'Edit User')
@section('javascript')

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Edit User</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit User</li>
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
                </div>
                <div class="card-body">
                    <!-- form start -->
                    @include('home.message')
                    <form role="form" action="{{route('admin_product_update',['id'=>$data->id])}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">                            

                            <div class="form-group">
                                <label >Name</label>
                                <input type="text" id="title" name="title"  value="{{$data->name}}" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >E-Mail</label>
                                <input type="text" name="keywords" value="{{$data->email}}" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >Phone</label>
                                <input type="text" name="description"  value="{{$data->phone}}" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >Address</label>
                                <input type="number" name="price" value="{{$data->address}}" class="form-control"   >
                            </div>
                            <div class="form-group">
                                <label >Image</label>
                                <input type="file" name="imagr" class="form-control"><br>
                                @if ($data->profile_photo_path)
                                    <img src="{{Storage::url($data->profile_photo_path)}}" height="200" style="border-radius:10px" alt="">                                    
                                @endif
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update User</button>
                        </div>
                    </form>




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