@php 
$setting=App\Http\Controllers\HomeController::getsetting();
@endphp
@php
$parentCategories=\App\Http\Controllers\HomeController::categorylist();
@endphp
<div class="ps-footer bg--cover" >
  <div class="ps-footer__content">
    <div class="ps-container">
      <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
              <aside class="ps-widget--footer ps-widget--info">
                <header><a class="ps-logo"></a>
                  <h3 class="ps-widget__title">Address Office</h3>
                </header>
                <footer>
                  <p><strong>{{$setting->address}}</strong></p>
                  <p>Email: <a href='mailto:{{$setting->email}}'>{{$setting->email}}</a></p>
                  <p>Phone: {{$setting->phone}}</p>
                  <p>Fax: {{$setting->fax}}</p>
                </footer>
              </aside>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
              <aside class="ps-widget--footer ps-widget--link">
                <header>
                  <h3 class="ps-widget__title">Find Our store</h3>
                </header>
                <footer>
                  <ul class="ps-list--link">
                    <li><a href="#">Coupon Code</a></li>
                    <li><a href="#">SignUp For Email</a></li>
                    <li><a href="#">Site Feedback</a></li>
                    <li><a href="#">Careers</a></li>
                  </ul>
                </footer>
              </aside>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
              <aside class="ps-widget--footer ps-widget--link">
                <header>
                  <h3 class="ps-widget__title">Get Help</h3>
                </header>
                <footer>
                  <ul class="ps-list--line">
                    <li><a href="#">Order Status</a></li>
                    <li><a href="#">Shipping and Delivery</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">Payment Options</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>
                </footer>
              </aside>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
              <aside class="ps-widget--footer ps-widget--link">
                <header>
                  <h3 class="ps-widget__title">Products</h3>
                </header>
                <footer>
                  <ul class="ps-list--line">
                    <li>
                      @foreach ($parentCategories as $rs)
                      
                        @if (count($rs->children)) 
                          @include('home.footercategorytree',['children'=>$rs->children])
                        @endif
                      
                      @endforeach
                    </li>
                  </ul>
                </footer>
              </aside>
            </div>
      </div>
    </div>
  </div>
  <div class="ps-footer__copyright">
    <div class="ps-container">
      <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
              <p>&copy; <a href="{{route('home_contact-us')}}">ENAZ</a>, Inc. All rights Resevered | {{$setting->company}}</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
              <ul class="ps-social">
                @if ($setting->facebook!=null)<li><a href="{{$setting->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a></li>@endif
                @if ($setting->youtube!=null)<li><li><a href="{{$setting->youtube}}" target="_blank"><i class="fa fa-youtube"></i></a></li></li>@endif
                @if ($setting->twitter!=null)<li><li><a href="{{$setting->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a></li></li>@endif                
                @if ($setting->instagram!=null)<li><a href="{{$setting->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a></li>@endif
               
              </ul>
            </div>
      </div>
    </div>
  </div>
</div>

    

@livewireScripts