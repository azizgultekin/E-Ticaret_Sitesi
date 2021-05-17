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
      </table>
    </div>
    <div class="" style="position: relative;margin: auto;">
      @include('profile.show')
    </div>
  </div>
    

</div>
@endauth