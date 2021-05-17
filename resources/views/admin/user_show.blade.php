<!-- Google font -->
<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">
<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="{{ asset('assets')}}/css/bootstrap.min.css" />
<!-- Slick -->
<link type="text/css" rel="stylesheet" href="{{ asset('assets')}}/css/slick.css" />
<link type="text/css" rel="stylesheet" href="{{ asset('assets')}}/css/slick-theme.css" />
<!-- nouislider -->
<link type="text/css" rel="stylesheet" href="{{ asset('assets')}}/css/nouislider.min.css" />
<!-- Font Awesome Icon -->
<link rel="stylesheet" href="{{ asset('assets')}}/css/font-awesome.min.css">
<!-- Custom stlylesheet -->
<link type="text/css" rel="stylesheet" href="{{ asset('assets')}}/css/style.css" />
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

<title> {{$data->name}}</title>
<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">User Detail</h3>
            @include('home.message')
        </div>
        <div class="card-body">


            <!-- form start -->

            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">

                    <tr>
                        <th rowspan="8" align="center" valign="center">

                            @if ($data->profile_photo_path)
                                <img src="{{ Storage::url($data->profile_photo_path)}}" height="50" style="border-radius: 10px" alt="">
                            @endif
                        </td>


                    </tr>
                    <tr>
                        <th>Name</th><td>{{ $data->name}}</td>
                    </tr>
                    <tr>
                        <th>Email</th><td>{{ $data->email}}</td>
                    </tr>
                    <tr>
                        <th>Phone</th><td>{{ $data->phone}}</td>
                    </tr>
                    <tr>
                        <th>Adress</th><td>{{ $data->address}}</td>
                    </tr>
                    <tr>
                        <th>Date</th><td>{{ $data->created_at}}</td>
                    </tr>

                    <tr>
                        <th>Roles</th>
                        <td>
                            <table>
                                @foreach($data->roles as $row)
                                    <tr>
                                        <td>{{ $row->name }}</td>
                                        <td>
                                            <a href="{{route('admin_user_role_delete', ['userid' => $data->id,'roleid'=>$row->id])}}"  onclick="return confirm('Delete ! Are you sure?')" > <ion-icon name="trash-outline"></ion-icon></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>


                        </td>
                    </tr>

                    <tr>
                        <th>Add Role</th>
                        <td>
                            <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post"  enctype="multipart/form-data">
                                @csrf

                                <select name="roleid">
                                    @foreach($datalist as $rs)
                                        <option value="{{ $rs->id}}">{{ $rs->name}}</option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn btn-primary">Add Role</button>
                            </form>

                        </td>
                    </tr>


                </table>

            </div>
            <!-- /.card-body -->
            </form>
            <!-- /.card-body -->
            <div class="card-footer">
                ..
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