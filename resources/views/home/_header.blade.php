@php 
$setting=App\Http\Controllers\HomeController::getsetting();
@endphp
@php
$parentCategories=\App\Http\Controllers\HomeController::categorylist();
@endphp
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<div class="header--sidebar"></div>
<header class="header">
      <div class="header__top">
        <div class="container-fluid">
          <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">           
                    <p>@yield('description') </p>
                </div>
                
                  <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="header__actions">
                      @auth
                      <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                          <li></i><a href="{{route('myprofile')}}"><ion-icon style="margin-right: 10px;margin-left: -5px" name="person-outline"></ion-icon>   My Account</a></li>
                          <li><a href="{{route('logout')}}"><ion-icon style="margin-right: 10px;margin-left: -5px" name="log-out-outline"></ion-icon> Logout</a></li>
                        </ul>
                      </div>

                        @endauth
                        @guest
                            <a href="/login">Login</a>
                            <a href="/register">Register</a>
                        @endguest
                        <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language<i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu">
                            <li><a href="#">English</a></li>
                            <li><a href="#">Turkish</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>  
          </div>
        </div>
      </div>
      <nav class="navigation">
        <div class="container-fluid">
          <div class="navigation__column left">
            <div class="header__logo"><a class="ps-logo" href="{{route('home_index')}}"><img src="{{asset('assets')}}/images/logo.png" alt=""></a></div>
          </div>
          <div class="navigation__column center">                  
                <ul class="main-menu menu">
                  <li class="menu-item menu-item-has-children dropdown"><a href="{{route('home_index')}}">Home</a></li>
                  @foreach ($parentCategories as $rs)                  
                    <li class="menu-item menu-item-has-children has-mega-menu"><a>{{$rs->title}}</a>                      
                      <div class="mega-menu">
                        <div class="mega-wrap">
                          <div class="mega-column">
                          </div>                                                
                              @if (count($rs->children))                                       
                                    @include('home.categorytree',['children'=>$rs->children]); 
                              @endif
                          <div class="mega-column">
                          </div>                       
                      </div>
                    </li>  
                    
                  @endforeach
                  <li class="menu-item menu-item-has-children dropdown"><a href="{{route('home_contact-us')}}">Contact</a></li>               
                </ul>
          </div>
          <div class="navigation__column right">
            <form class="ps-search--header" action="{{route('getproduct')}}" method="post">
              @csrf
              @livewire('search')              
              <button type="submit" class="search-btn"><i class="ps-icon-search"></i></button>
            </form>
            @livewireScripts
            @php
                $countshopcart=\App\Http\Controllers\ShopcartController::countshopcart();
            @endphp
            <div class="ps-cart"><a class="ps-cart__toggle" href="{{route('user_shopcart')}}"><span><i>{{$countshopcart}}</i></span><i class="ps-icon-shopping-cart"></i></a>
              
            </div>
            <div class="menu-toggle"><span></span></div>
          </div>
        </div>
      </nav>
    </header>
    <div class="header-services">
      <div class="ps-services owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
      </div>
    </div>