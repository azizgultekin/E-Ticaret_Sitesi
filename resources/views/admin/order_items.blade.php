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
                <form role="form" action="{{route('admin_order_update',['id'=>$data->id])}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <tr>
                                <th>Id</th> <td>{{ $data->id}}</td>
                            </tr>
                            <tr>
                                <th>User</th><td>{{ $data->user->name}}</td>
                            </tr>
                            <tr>
                                <th>Name</th><td>{{ $data->name}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>  <td>{{ $data->email}}</td>
                            </tr>
                            <tr>
                                <th>Address</th>  <td>{{ $data->address}}</td>
                            </tr>
                            <tr>
                                <th>Review</th><td>{{ $data->phone}}</td>
                            </tr>
                            <tr>
                                <th>Total</th>   <td>{{ $data->total}}</td>
                            </tr>
                            <tr>
                                <th>IP</th>   <td>{{ $data->IP}}</td>
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
                                        <option>Accepted</option>
                                        <option>Canceled</option>
                                        <option>Shipping</option>
                                        <option>Complated</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Admin Note:</th>
                                <td>
                                    <textarea name="note" cols="20" rows="3">{{ $data->note}}</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update Order</button>
                                    </div>
                                </td>
                            </tr>
                        </table>

                </form>
                        <table class="table ps-cart__table">
                            <thead>
                              <tr>
                                <th>All Products</th>
                                <th style="text-align: center;vertical-align: middle;">Price</th>
                                <th style="text-align: center;vertical-align: middle;">Quantity</th>
                                <th style="text-align: center;vertical-align: middle;">Status</th>
                                <th style="text-align: center;vertical-align: middle;">Admin Note</th>
                                <th style="text-align: center;vertical-align: middle;">Total</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($datalist as $rs)
                              <form role="form" action="{{route('admin_order_item_update',['id'=>$rs->id])}}" method="post"  enctype="multipart/form-data">
                                @csrf
                                <tr>
                                    <td>
                                        @if ($rs->product->image)
                                        <a class="ps-product__preview" href="{{route('product',['id'=>$rs->product->id,'slug'=>$rs->product->slug])}}"><img class="mr-15" style="width: 100px" src="{{Storage::url($rs->product->image)}}" alt=""> {{$rs->product->title}}</a>
                                        @endif                  
                                    </td>
                                    <td style="text-align: center;vertical-align: middle;">${{$rs->product->price}}</td>
                                    <td style="text-align: center;vertical-align: middle;">{{$rs->quantity}}</td>
                                    
                                    
                                        <td style="text-align: center;vertical-align: middle;">
                                            <select name="status">
                                                <option selected>{{ $rs->status}}</option>
                                                <option>Accepted</option>
                                                <option>Canceled</option>
                                                <option>Shipping</option>
                                                <option>Complated</option>
                                            </select>
                                        </td>
                                        <td><textarea name="note" cols="15">{{ $rs->note}}</textarea></td>
                                        <td><input type="submit" name="" id="" value="Update"></td>
                                               
                                       
                                    <td style="text-align: center;vertical-align: middle;">${{$rs->product->price*$rs->quantity}}</td>     
                                </tr>
                            </form>
                              @endforeach
                              
                              
                            </tbody>
                          </table>
                          <div class="ps-cart__total">
                            @php
                                $total=0;
                            @endphp
                            @foreach ($datalist as $rs)
                              @php
                                  $total=$total+$rs->product->price*$rs->quantity
                              @endphp   
                                      
                            @endforeach     
                            <h3>Total Price: <span> ${{$total}}</span></h3>  
                          </div>
    
                    </div>
                    <!-- /.card-body -->
                




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