@auth

<div class="ps-content" style="padding-bottom: 5rem;padding-top: 5rem;">
    <div class="ps-container ps-section--offer">
      <div class="" style="max-width: 100%;width: 15%" >
        <table class="table ps-cart__table" style="max-width: 100%;padding-top: 5rem">
          <tbody>
           
            <tr>
              <td><ul style="text-align: center"><a href="{{route('myprofile')}}">My Profile</a></ul> </td>            
            </tr>
            <tr>
              <td><ul style="text-align: center"><a href="{{route('user_orders')}}">My Orders</a></ul> </td>          
            </tr>
            <tr>
              <td><ul style="text-align: center"><a href="{{route('myreviews')}}">My Reviews</a></ul> </td>
              
            </tr>
            <tr>
              <td><ul style="text-align: center"><a href="{{route('user_shopcart')}}">My ShopChart</a></ul> </td>
              
            </tr>
            <tr>
              <td><ul style="text-align: center"><a href="{{route('logout')}}">Logout</a></ul> </td>             
            </tr>
            @php
              $userRoles=Auth::user()->roles->pluck('name');
            @endphp
            @if ($userRoles->contains('admin'))
              <tr>
                <td><ul style="text-align: center"><a href="{{route('admin_home')}}" target="_blank">Admin Panel</a></ul> </td>
              </tr>
            @endif
            
            <tr>
              <td> </td>           
            </tr>
          </tbody>
        </table>
        


      </div>
      <div class="" style="position: relative;margin: auto;">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th style="text-align: center;vertical-align: middle; text-transform: uppercase"><h5>Id</h5> </th>
                <th style="text-align: center;vertical-align: middle;text-transform: uppercase"><h5>Product</h5> </th>
                <th style="text-align: center;vertical-align: middle;text-transform: uppercase"><h5>Subject</h5> </th>
                <th style="text-align: center;vertical-align: middle;text-transform: uppercase"><h5>Review</h5> </th>
                <th style="text-align: center;vertical-align: middle;text-transform: uppercase"><h5>Rate</h5> </th>
                <th style="text-align: center;vertical-align: middle;text-transform: uppercase"><h5>Status</h5> </th>
                <th style="text-align: center;vertical-align: middle;text-transform: uppercase"><h5>Date</h5> </th>

                <th style="text-align: center;vertical-align: middle;text-transform: uppercase"><h5> Actions</h5></th>

            </tr>
            </thead>
            <tbody>
            @include('home.message')
            @foreach ( $datalist as $rs)
                <tr>
                    <td style="text-align: center;vertical-align: middle;">{{ $rs->id}}</td>

                    <td style="text-align: center;vertical-align: middle;"> <a href="{{route('product',['id' => $rs->product->id,'slug' => $rs->product->slug ])}}" target="_blank">
                            {{ $rs->product->title}} </a>
                    </td>
                    <td style="text-align: center;vertical-align: middle;">{{ $rs->subject}}</td>
                    <td style="text-align: center;vertical-align: middle;">{{ $rs->review}}</td>
                    <td style="text-align: center;vertical-align: middle;">{{ $rs->rate}}</td>
                    <td style="text-align: center;vertical-align: middle;">{{ $rs->status}}</td>
                    <td style="text-align: center;vertical-align: middle;">{{ $rs->created_at}}</td>


                    <td style="text-align: center;vertical-align: middle;">
                        <a href="{{route('user_review_delete', ['id' => $rs->id])}}"  onclick="return confirm('Delete ! Are you sure?')" > <ion-icon name="trash-outline"></ion-icon></a>

                    </td>
                </tr>
            @endforeach
        </table>       
      </div>
    </div>
      
  
  </div>
       
@endauth