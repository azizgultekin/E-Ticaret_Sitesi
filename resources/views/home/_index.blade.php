
  <div class="ps-section--features-product ps-section masonry-root pt-100 pb-100">
    <div class="ps-container">
      <div class="ps-section__header mb-50">
        <h3 class="ps-section__title" data-mask="features">- Features Products</h3>
        
      </div>
      <div class="ps-section__content pb-50">
        <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">
          <div class="ps-masonry">
            <div class="grid-sizer"></div>
            @foreach ($daily as $rs)            
              <div class="grid-item ">
                <div class="grid-item__content-wrapper">
                  <div class="ps-shoe mb-30">
                    <div class="ps-shoe__thumbnail">
                      <div class="ps-badge"><span>New</span></div>
                      <div class="ps-badge ps-badge--sale ps-badge--2nd"><span>-35%</span></div><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img style="height: 390px" data-bgfit="contain" src="{{Storage::url($rs->image)}}" alt=""><a class="ps-shoe__overlay" href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}"></a>
                    </div>
                    <div class="ps-shoe__content">
                      <div class="ps-shoe__variants">
                        <div class="ps-shoe__variant normal">                          
                            <img style="width: 40px" href="" src="{{Storage::url($rs->image)}}" alt="">                        
                        </div>
                        @php
                          $avgrev = \App\Http\Controllers\HomeController::avrgreview($rs->id);
                          $countreview = \App\Http\Controllers\HomeController::countreview($rs->id);
                        @endphp
                        <div class="review-rating">                   
                          @if($avgrev<1.5)
                          <i class="fa fa-star "></i>
                          <i class="fa fa-star-o "></i>
                          <i class="fa fa-star-o "></i>
                          <i class="fa fa-star-o "></i>
                          <i class="fa fa-star-o "></i>
                          
                          @elseif ($avgrev<2.5)
                          <i class="fa fa-star "></i>
                          <i class="fa fa-star "></i>
                          <i class="fa fa-star-o "></i>
                          <i class="fa fa-star-o "></i>
                          <i class="fa fa-star-o "></i>
                          
                          @elseif ($avgrev<3.5)
                          <i class="fa fa-star "></i>
                          <i class="fa fa-star "></i>
                          <i class="fa fa-star "></i>
                          <i class="fa fa-star-o "></i>
                          <i class="fa fa-star-o "></i>
                          
                          @elseif ($avgrev<4.5)
                          <i class="fa fa-star "></i>
                          <i class="fa fa-star "></i>
                          <i class="fa fa-star "></i>
                          <i class="fa fa-star "></i>
                          <i class="fa fa-star-o "></i>
                          
                          @elseif ($avgrev<=5)
                          <i class="fa fa-star "></i>
                          <i class="fa fa-star "></i>
                          <i class="fa fa-star "></i>
                          <i class="fa fa-star "></i>
                          <i class="fa fa-star "></i>
                          @endif
                        </div>            
                      </div>
                      <div class="ps-shoe__detail"><a class="ps-shoe__name" href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}">{{($rs->title)}}</a>
                        <p class="ps-shoe__categories">{{($rs->title)}}<a href="#"></a></p><span class="ps-shoe__price">
                          <del>${{($rs->price+100)}}</del> ${{($rs->price)}}</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>    
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ps-section--offer">
    <div style="width: 100% " class=""><a class="ps-offer"><img style="" src="{{asset('assets')}}/images/banner/jdi.jpg" alt=""></a></div>
    
  </div>
  <div class="ps-section--sale-off ps-section pt-80 pb-40">
    <div class="ps-container">
      <div class="ps-section__header mb-50">
        <h3 class="ps-section__title" data-mask="Sale off">- Hot Deal Today</h3>
      </div>
      <div class="ps-section__content">
        <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
                <div class="ps-hot-deal">
                  <h3>Nike DUNK Max 95 OG</h3>
                  <p class="ps-hot-deal__price">Only:  <span>£155</span></p>
                  <ul class="ps-countdown" data-time="December 13, 2017 15:37:25">
                    <li><span class="hours"></span><p>Hours</p></li>
                    <li class="divider">:</li>
                    <li><span class="minutes"></span><p>minutes</p></li>
                    <li class="divider">:</li>
                    <li><span class="seconds"></span><p>Seconds</p></li>
                  </ul><a class="ps-btn" href="#">Order Today<i class="ps-icon-next"></i></a>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
                <div class="ps-hotspot"><a class="point first active" href="javascript:;"><i class="fa fa-plus"></i>
                    <div class="ps-hotspot__content">
                      <p class="heading">JUMP TO HEADER</p>
                      <p>Dynamic Fit Collar en la zona del tobillo que une la parte inferior de la pierna y el pie sin reducir la libertad de movimiento.</p>
                    </div></a><a class="point second" href="javascript:;"><i class="fa fa-plus"></i>
                    <div class="ps-hotspot__content">
                      <p class="heading">JUMP TO HEADER</p>
                      <p>Dynamic Fit Collar en la zona del tobillo que une la parte inferior de la pierna y el pie sin reducir la libertad de movimiento.</p>
                    </div></a><a class="point third" href="javascript:;"><i class="fa fa-plus"></i>
                    <div class="ps-hotspot__content">
                      <p class="heading">JUMP TO HEADER</p>
                      <p>Dynamic Fit Collar en la zona del tobillo que une la parte inferior de la pierna y el pie sin reducir la libertad de movimiento.</p>
                    </div></a><img src="{{asset('assets')}}/images/hot-deal.png" alt=""></div>
              </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ps-section ps-section--top-sales ps-owl-root pt-80 pb-80">
    <div class="ps-container">
      <div class="ps-section__header mb-50">
        <div class="row">
              <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                <h3 class="ps-section__title" data-mask="BEST SALE">- Top Sales</h3>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                <div class="ps-owl-actions"><a class="ps-prev" href="#"><i class="ps-icon-arrow-right"></i>Prev</a><a class="ps-next" href="#">Next<i class="ps-icon-arrow-left"></i></a></div>
              </div>
        </div>
      </div>
      <div class="ps-section__content">
        <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
          @foreach ($topsales as $rs)
              
         
            <div class="ps-shoes--carousel">
              <div class="ps-shoe">
                <div class="ps-shoe__thumbnail">
                  <div class="ps-badge"><span>New</span></div><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="{{Storage::url($rs->image)}}" alt=""><a class="ps-shoe__overlay" href="{{route('product',['id'=>$rs->id,'slug'=>$rs->slug])}}"></a>
                </div>
                <div class="ps-shoe__content">
                  <div class="ps-shoe__variants">                    
                    <div class="ps-shoe__variant normal">
                      
                        <img src="{{Storage::url($rs->image)}}" alt="">
                      
                    </div>
                    @php
                          $avgrev = \App\Http\Controllers\HomeController::avrgreview($rs->id);
                          $countreview = \App\Http\Controllers\HomeController::countreview($rs->id);
                        @endphp
                        <div class="review-rating">                   
                          @if($avgrev<1.5)
                          <i class="fa fa-star "></i>
                          <i class="fa fa-star-o "></i>
                          <i class="fa fa-star-o "></i>
                          <i class="fa fa-star-o "></i>
                          <i class="fa fa-star-o "></i>
                          
                          @elseif ($avgrev<2.5)
                          <i class="fa fa-star "></i>
                          <i class="fa fa-star "></i>
                          <i class="fa fa-star-o "></i>
                          <i class="fa fa-star-o "></i>
                          <i class="fa fa-star-o "></i>
                          
                          @elseif ($avgrev<3.5)
                          <i class="fa fa-star "></i>
                          <i class="fa fa-star "></i>
                          <i class="fa fa-star "></i>
                          <i class="fa fa-star-o "></i>
                          <i class="fa fa-star-o "></i>
                          
                          @elseif ($avgrev<4.5)
                          <i class="fa fa-star "></i>
                          <i class="fa fa-star "></i>
                          <i class="fa fa-star "></i>
                          <i class="fa fa-star "></i>
                          <i class="fa fa-star-o "></i>
                          
                          @elseif ($avgrev<=5)
                          <i class="fa fa-star "></i>
                          <i class="fa fa-star "></i>
                          <i class="fa fa-star "></i>
                          <i class="fa fa-star "></i>
                          <i class="fa fa-star "></i>
                          @endif
                        </div>  
                  </div>
                  <div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.html">${{($rs->title)}}</a>
                    <p class="ps-shoe__categories"><a href="#">${{($rs->price)}}</a></p><span class="ps-shoe__price"></span>
                  </div>
                </div>
              </div>
            </div> 
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <div style="width: 100% " class=""><a class="ps-offer"><img style="" src="{{asset('assets')}}/images/banner/walkthetalk.jpg" alt=""></a></div>
  <div hidden class="ps-home-testimonial bg--parallax pb-80" data-background="{{asset('assets')}}/images/banner/walkthetalk.jpg">
    <div class="container">
      <div class="owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">
        
        <div class="ps-testimonial">
          <div class="ps-testimonial__thumbnail"><img src="{{asset('assets')}}/images/banner/walkthetalk.jpg" alt=""><i class="fa fa-quote-left"></i></div>
          
        </div>
        <div class="ps-testimonial">
          <div class="ps-testimonial__thumbnail"><img src="{{asset('assets')}}/images/banner/walkthetalk.jpg" alt=""><i class="fa fa-quote-left"></i></div>
          <header> 
          </header>
          <footer>            
          </footer>
        </div>
      </div>
    </div>
  </div>  
  <div class="ps-home-contact">
    <div id="contact-map" data-address="New York, NY" data-title="BAKERY LOCATION!" data-zoom="17"></div>
    <div class="ps-home-contact__form">
      <header>
        <h3>Contact Us</h3>
        <p>Learn about our company profile, communityimpact, sustainable motivation, and more.</p>
      </header>
      <footer>
        <form action="product-listing.html" method="post">
          <div class="form-group">
            <label>Name<span>*</span></label>
            <input class="form-control" type="text">
          </div>
          <div class="form-group">
            <label>Email<span>*</span></label>
            <input class="form-control" type="email">
          </div>
          <div class="form-group">
            <label>Your message<span>*</span></label>
            <textarea class="form-control" rows="4"></textarea>
          </div>
          <div class="form-group text-center">
            <button class="ps-btn">Send Message<i class="fa fa-angle-right"></i></button>
          </div>
        </form>
      </footer>
    </div>
  </div>