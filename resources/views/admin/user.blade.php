@extends('layouts.admin')

@section('title', 'User List')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Users</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Users</li>
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
                    <a href="{{route('admin_product_add')}}"  type="button" class="btn btn-block bg-gradient-primary" style="width: 200px">Add Product</a>
                </div>
                <div class="card">

                    <!-- /.card-header -->
                    <div class="card-body">

                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th style="text-align: center;vertical-align: middle;">Id</th>
                                <th style="text-align: center;vertical-align: middle;"></th>
                                <th style="text-align: center;vertical-align: middle;">Name</th>
                                <th style="text-align: center;vertical-align: middle;">E-Mail</th>
                                <th style="text-align: center;vertical-align: middle;">Phone</th>
                                <th style="text-align: center;vertical-align: middle;">Address</th>
                                <th style="text-align: center;vertical-align: middle;">Roles</th>                                
                                <th style="width: 5px;text-align: center;vertical-align: middle;" colspan="2" > Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ( $datalist as $rs)
                                <tr>
                                    <td style="text-align: center;vertical-align: middle;">{{ $rs->id}}</td>
                                    <td style="text-align: center;vertical-align: middle;">
                                        @if ($rs->profile_photo_path)
                                            <img src="{{Storage::url($rs->profile_photo_path)}}" height="50" style="border-radius: 10px" alt="">
                                        @endif
                                        
                                    </td>
                                    <td style="text-align: center;vertical-align: middle;">{{ $rs->name}}</td>
                                    <td style="text-align: center;vertical-align: middle;">{{ $rs->email}}</td>
                                    <td style="text-align: center;vertical-align: middle;">{{ $rs->phone}}</td>
                                    <td style="text-align: center;vertical-align: middle;">{{ $rs->address}}</td>
                                    <td style="text-align: center;vertical-align: middle;">
                                        @foreach ($rs->roles as $row)
                                            {{$row->name}}                                            
                                        @endforeach
                                        <a href="{{route('admin_user_roles',['id'=>$rs->id])}}"  onclick="return !window.open(this.href, '','top=100 left=300 width=1100,height=700')">
                                            <ion-icon name="add-circle-outline"></ion-icon>
                                        </a>
                                    </td>
                                    <td style="text-align: center;vertical-align: middle;"><a href="{{route('admin_user_edit', ['id' => $rs->id])}}" ><ion-icon name="create-outline"></ion-icon></a></td>                                    
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->



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

@section('footer')
    
    <!-- DataTables  & Plugins -->
<script src="{{asset('assets')}}/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('assets')}}/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('assets')}}/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('assets')}}/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('assets')}}/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('assets')}}/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('assets')}}/admin/plugins/jszip/jszip.min.js"></script>
<script src="{{asset('assets')}}/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('assets')}}/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('assets')}}/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('assets')}}/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('assets')}}/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="{{asset('assets')}}/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection