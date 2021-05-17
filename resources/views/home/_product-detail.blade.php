
<div class="test">
    <div class="container">
      <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
            </div>
      </div>
    </div>
  </div>
  <div class="ps-product--detail pt-60">
    <div class="ps-container">
      <div class="row">
        <div class="col-lg-10 col-md-12 col-lg-offset-1">
          <div class="ps-product__thumbnail">
            <div class="ps-product__preview">
              <div class="ps-product__variants">
                
                @foreach ($datalist as $rs)
                  <div class="item"><img src="{{Storage::url($rs->image)}}" alt=""></div>
                @endforeach                
              </div>
            </div>
            <div class="ps-product__image">
              @foreach ($datalist as $rs)
              <div class="item"><img class="zoom" src="{{Storage::url($rs->image)}}" alt="" data-zoom-image="{{Storage::url($rs->image)}}"></div>
              
              @endforeach   
            </div>
          </div>
          <div class="ps-product__thumbnail--mobile">
            <div class="ps-product__main-img"><img src="{{asset('assets')}}/images/shoe-detail/1.jpg" alt=""></div>
            <div class="ps-product__preview owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="20" data-owl-nav="true" data-owl-dots="false" data-owl-item="3" data-owl-item-xs="3" data-owl-item-sm="3" data-owl-item-md="3" data-owl-item-lg="3" data-owl-duration="1000" data-owl-mousedrag="on"><img src="{{asset('assets')}}/images/shoe-detail/1.jpg" alt=""><img src="{{asset('assets')}}/images/shoe-detail/2.jpg" alt=""><img src="{{asset('assets')}}/images/shoe-detail/3.jpg" alt=""></div>
          </div>
          @php
              $avgrev = \App\Http\Controllers\HomeController::avrgreview($data->id);
              $countreview = \App\Http\Controllers\HomeController::countreview($data->id);
           @endphp
            <div class="ps-product__info">
              <div class="ps-product__rating">
                
                
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
                    <br>
                    <h5> Rate: {{$avgrev*1.0}}</h5>
                  </div>            
               <a>({{$countreview}} reviews)</a>
              </div>
              
                <h1>{{$data->title}}</h1>
                <p class="ps-product__category"><a href="#"> Men shoes</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p>
                <h3 class="ps-product__price">${{$data->price}} <del>${{$data->price*2.5}}</del></h3>
                <div class="ps-product__block ps-product__quickview">
                  <h4>Description</h4>
                  <p>{{$data->description}}</p>
                </div>
                
                <div class="ps-product__block ps-product__size">
                  <form action="{{route('user_shopcart_add',['id'=>$data->id])}}" method="POST">
                    @csrf
                                       
                      @if ($data->category->parent_id==4 ||$data->category->parent_id==18)
                        <h4>CHOOSE SIZE&emsp;&emsp;QUANTİTY </h4><br>
                        <div class="form-group">
                        <input  class="form-control" name="size" type="number" value="5" max="10">
                        </div> &emsp;&emsp;
                      @else
                      <h4>CHOOSE SIZE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; QUANTİTY </h4><br>  
                        <select  class="ps-select selectpicker" name="size">
                          <option value="XS">XS</option>
                          <option value="S">S</option>
                          <option value="M">M</option>
                          <option value="L">L</option>
                          <option value="XL">XL</option>
                        </select> 
                                            
                      @endif
                      
                       
                      <div class="form-group">
                        <input  class="form-control" name="quantity" type="number" value="1" max="{{$data->quantity}}">
                      </div>
                    <tr>
                      <td>@include('home.message')</td>
                    </tr>
                    <div class="ps-product__shopping"><button class="ps-btn mb-10" type="Submit"  >Add to cart<i class="ps-icon-next"></i></button>
                      <div class="ps-product__actions"><a class="mr-10" href="whishlist.html"><i class="ps-icon-heart"></i></a><a href="compare.html"><i class="ps-icon-share"></i></a></div>
                    </div>
                  </form>
                </div>
                  
              
            </div>
          
          <div class="clearfix"></div>
          <div class="ps-product__content mt-50">
            <ul class="tab-list" role="tablist">
              <li class="active"><a href="#tab_01" aria-controls="tab_01" role="tab" data-toggle="tab">Overview</a></li>
              <li><a href="#tab_02" aria-controls="tab_02" role="tab" data-toggle="tab">Review</a></li>
              
              <li><a href="#tab_04" aria-controls="tab_04" role="tab" data-toggle="tab">ADDITIONAL</a></li>
            </ul>
          </div>
          <div class="tab-content mb-60">
            <div class="tab-pane active" role="tabpanel" id="tab_01">
              <p>{!!$data->detail!!} </p>
              <p>Sweet roll soufflé oat cake apple pie croissant. Pie gummi bears jujubes cake lemon drops gummi bears croissant macaroon pie. Fruitcake tootsie roll chocolate cake Carrot cake cake bear claw jujubes topping cake apple pie. Jujubes gummi bears soufflé candy canes topping gummi bears cake soufflé cake. Cotton candy soufflé sugar plum pastry sweet roll..</p>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab_02">
              <p class="mb-20">1 review for <strong>Shoes Air Jordan</strong></p>
              @foreach ($reviews as $rs)
                <div class="ps-review">
                  <div class="ps-review__thumbnail"><img style=" width:50%;height: 100%;"  src="{{asset('storage')}}/{{$rs->user->profile_photo_path}}" alt=""></div>
                  <div class="ps-review__content">
                    <header>
                      <div class="review-rating">
                        @if ($rs->rate==1) 
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        
                        @elseif ($rs->rate==2) 
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        
                        @elseif ($rs->rate==3) 
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        
                        @elseif ($rs->rate==4) 
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        
                        @elseif ($rs->rate==5) 
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        @endif
                      </div>                      
                      <p><br> By<a href=""> {{$rs->user->name}}</a> {{$rs->created_at}}</p>
                    </header>
                    <h5 style="text-transform: uppercase;" >{{$rs->subject}}</h5><br><p>{{$rs->review}}</p>
                  </div>
                </div>
              @endforeach
              
              @livewire('review', ['id' => $data->id])
            </div>            
            <div class="tab-pane" role="tabpanel" id="tab_04">
              <div class="form-group">
                <textarea class="form-control" rows="6" placeholder="Enter your addition here..."></textarea>
              </div>
              <div class="form-group">
                <button class="ps-btn" type="button">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  