<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3>Edit Review</h3>
                </div>
                <div class="col-sm-6">
                    
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Review Detail</h3>
                @include('home.message')
            </div>
            <div class="card-body">


                <!-- form start -->
                <form role="form" action="{{route('admin_review_update',['id'=>$data->id])}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <tr>
                                <th>Id</th> <td>{{ $data->id}}</td>
                            </tr>
                            <tr>
                                <th>Name</th><td>{{ $data->user->name}}</td>
                            </tr>
                            <tr>
                                <th>Product</th>  <td>{{ $data->product->title}}</td>
                            </tr>
                            <tr>
                                <th>Subject</th>  <td>{{ $data->subject}}</td>
                            </tr>
                            <tr>
                                <th>Review</th><td>{{ $data->review}}</td>
                            </tr>
                            <tr>
                                <th>Rate</th>   <td>{{ $data->rate}}</td>
                            </tr>
                            <tr>
                                <th>Ip</th>   <td>{{ $data->IP}}</td>
                            </tr>
                            <tr>
                                <th>Created Date </th>   <td>{{ $data->created_at}}</td>
                            </tr>
                            <tr>
                                <th>Updated Date </th>   <td>{{ $data->updated_at}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    <select name="status">
                                        <option selected>{{ $data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update Review</button>
                                    </div>
                                </td>
                            </tr>
                        </table>
    
                    </div>
                    <!-- /.card-body -->
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
<!-- Fonts-->
<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets')}}/plugins/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('assets')}}/plugins/ps-icon/style.css">
<!-- CSS Library-->
<link rel="stylesheet" href="{{asset('assets')}}/plugins/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="{{asset('assets')}}/plugins/owl-carousel/assets/owl.carousel.css">
<link rel="stylesheet" href="{{asset('assets')}}/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
<link rel="stylesheet" href="{{asset('assets')}}/plugins/slick/slick/slick.css">
<link rel="stylesheet" href="{{asset('assets')}}/plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
<link rel="stylesheet" href="{{asset('assets')}}/plugins/Magnific-Popup/dist/magnific-popup.css">
<link rel="stylesheet" href="{{asset('assets')}}/plugins/jquery-ui/jquery-ui.min.css">
<link rel="stylesheet" href="{{asset('assets')}}/plugins/revolution/css/settings.css">
<link rel="stylesheet" href="{{asset('assets')}}/plugins/revolution/css/layers.css">
<link rel="stylesheet" href="{{asset('assets')}}/plugins/revolution/css/navigation.css">
<!-- Custom-->
<link rel="stylesheet" href="{{ asset('assets')}}/css/style.css">