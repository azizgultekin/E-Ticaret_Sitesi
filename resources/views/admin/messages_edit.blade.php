<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Edit Message</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                    <h3 class="card-title">Message Detail</h3>
                    @include('home.message')
                </div>
                <div class="card-body">


                    <!-- form start -->
                    <form role="form" action="{{route('admin_message_update',['id'=>$data->id])}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;">Id</th>
                                        <td>{{$data->id}}</td>
                                    </tr>
                                    <tr>
                                        <th style="text-align: center;vertical-align: middle;">Name</th>
                                        <td>{{$data->name}}</td>
                                    </tr>
                                    <tr><th style="text-align: center;vertical-align: middle;">Email</th>
                                        <td>{{$data->email}}</td>
                                    </tr>
                                    <tr><th style="text-align: center;vertical-align: middle;">Phone</th>
                                        <td>{{$data->phone}}</td>
                                    </tr>
                                    <tr>   <th style="text-align: center;vertical-align: middle;">Subject</th>
                                        <td>{{$data->subject}}</td>
                                    </tr>
                                    <tr><th style="text-align: center;vertical-align: middle;">Message</th>
                                    <td>{{$data->message}}</td>
                                    </tr>
                                    <tr><th style="text-align: center;vertical-align: middle;">Admin Note</th>
                                        <td><textarea id="note" name="note" >{{$data->note}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td><td>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Update Product</button>
                                            </div>
                                            </td></td>
                                    </tr>
                                    
                                </thead>
                                
                               
                            </table>
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