<div>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>        
    @endif
    <form class="ps-product__review" wire:submit.prevent="store" method="post">
        <h4>ADD YOUR REVIEW</h4>
        <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                <div class="form-group">
                  <label>Subject<span>*</span></label>
                  <input class="form-control" wire:model="subject" type="text" placeholder="Subject">
                  @error('subject')<span class="text-danger">{{$message}}</span>@enderror
                </div>                
                <div class="form-group">
                    @error('rate')<span class="text-danger">{{$message}}</span>@enderror
                    <label>Your rating<span></span></label>
                    <div class="input-rating">
                        <div class="stars">
                            <input type="radio" wire:model="rate" id="star5" value="5"/><label for="star5"></label>
                            <input type="radio" wire:model="rate" id="star4" value="4"/><label for="star4"></label>
                            <input type="radio" wire:model="rate" id="star3" value="3"/><label for="star3"></label>
                            <input type="radio" wire:model="rate" id="star2" value="2"/><label for="star2"></label>
                            <input type="radio" wire:model="rate" id="star1" value="1"/><label for="star1"></label>
                        </div>
                    </div>
                  @livewireScripts
                </div>
              </div>
              <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ">
                <div class="form-group">
                  <label>Your Review:</label>
                  <textarea class="form-control" wire:model="review" rows="6"></textarea>
                  @error('review')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group">
                    @auth
                        <button type="submit" class="ps-btn ps-btn--sm">Submit<i class="ps-icon-next"></i></button> 
                    @else
                        <a href="/login" class="primary-btn">For Submit Review,Please Login</a>           
                    @endauth
                  
                </div>
              </div>
        </div>
        
      </form>
</div>
