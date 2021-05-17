<div class="ps-checkout pt-80 pb-80">
    <div class="ps-container">
      <form class="ps-checkout__form" action="{{route('user_order_store')}}" method="POST">
        @csrf
        <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
                <div class="ps-checkout__billing">
                  <h3>Billing Detail</h3>
                        <div class="form-group form-group--inline">
                          <label>First Name<span>*</span>
                          </label>
                          <input name="name" class="form-control" type="text" value="{{Auth::User()->name}}" placeholder="Name & Surname">
                        </div>
                        <div class="form-group form-group--inline">
                          <label>Email<span>*</span>
                          </label>
                          <input name="email" class="form-control" type="email"  value="{{Auth::User()->email}}" placeholder="E-Mail">
                        </div>
                        <div class="form-group form-group--inline">
                          <label>Address<span>*</span>
                          </label>
                          <input name="address" class="form-control" type="text"  value="{{Auth::User()->address}}" placeholder="Address">
                        </div>                        
                        <div class="form-group form-group--inline">
                          <label>Phone<span>*</span>
                          </label>
                          <input name="phone" class="form-control" type="text"  value="{{Auth::User()->phone}}" placeholder="Phone Number">
                        </div>                        
                  <div class="form-group">
                    <div class="ps-checkbox">
                      <input class="form-control" type="checkbox" id="cb01">
                      <label for="cb01">Create an account?</label>
                    </div>
                  </div>
                  <h3 class="mt-40"> Addition information</h3>
                  <div class="form-group form-group--inline textarea">
                    <label>Order Notes</label>
                    <textarea class="form-control" rows="5" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                <div class="ps-checkout__order">
                  <header>
                    <h3>Your Order</h3>
                  </header>
                  <div class="content">
                    <table class="table ps-checkout__products">
                      <thead>
                        <tr>
                          <th class="text-uppercase">Total</th>
                          <th class="text-uppercase">${{$total}}</th>
                        </tr>
                      </thead>                      
                    </table>
                  </div>
                  <footer>
                    <h3>Payment Detail</h3>
                    <div class="form-group cheque">
                      <div class="ps-radio">
                        <input class="form-control"  name="total" value="{{$total}}" checked>
                        <label for="rdo01">Total: ${{$total}}</label>                        
                      </div>
                      <div class="form-group form-group--inline">
                        <label>Name & Surname<span>*</span>
                        </label>
                        <input name="cardname" class="form-control" type="text"  value="{{Auth::User()->name}}" placeholder="Name & Surname">
                      </div>
                      <div class="form-group form-group--inline">
                        <label>Card Number<span>*</span>
                        </label>
                        <input name="cardnumber" class="form-control" type="text"  value="" placeholder="Card Number">
                      </div>                        
                      <div class="form-group form-group--inline">
                        <label>Valide Dates(mm/yy)<span>*</span>
                        </label>
                        <input name="dates" class="form-control" type="text"  value="" placeholder="Valide Dates mm/yy">
                      </div> 
                      <div class="form-group form-group--inline">
                        <label>Secret Key<span>*</span>
                        </label>
                        <input name="keys" class="form-control" type="text"  value="" placeholder="Secret Key">
                      </div>                       
                        <h3>FREE SHIPPING</h3><br>
                        <button class="ps-btn ps-btn--fullwidth">Place Order<i class="ps-icon-next"></i></button>
                    </div>                    
                  </footer>
                </div>                
              </div>
        </div>
      </form>
    </div>
  </div>