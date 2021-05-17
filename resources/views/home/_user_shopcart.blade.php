<div class="ps-content pt-80 pb-80">
    <div class="ps-container">
      <div class="ps-cart-listing">
        <table class="table ps-cart__table">
          <thead>
            <tr>
              <th>All Products</th>
              <th style="text-align: center;vertical-align: middle;">Price</th>
              <th style="text-align: center;vertical-align: middle;">Size</th>
              <th style="text-align: center;vertical-align: middle;">Quantity</th>
              <th style="text-align: center;vertical-align: middle;">Total</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($datalist as $rs)
              <tr>
                <td>
                  @if ($rs->product->image)
                    <a class="ps-product__preview" href="{{route('product',['id'=>$rs->product->id,'slug'=>$rs->product->slug])}}"><img class="mr-15" style="width: 100px" src="{{Storage::url($rs->product->image)}}" alt=""> {{$rs->product->title}}</a>
                  @endif                  
                </td>
                <td style="text-align: center;vertical-align: middle;">${{$rs->product->price}}</td>
                <td style="text-align: center;vertical-align: middle;">{{$rs->size}}</td>
                <td style="text-align: center;vertical-align: middle;">
                  <form action="{{route('user_shopcart_update',['id'=>$rs->id])}}" method="POST">
                    @csrf
                    <div class="form-group--number">
                      <input class="form-control" name="quantity" type="number" value="{{$rs->quantity}}" min="1" max="{{$rs->product->quantity}}" onchange="this.form.submit()">
                     
                    </div>
                  </form>
                  
                </td>
                <td style="text-align: center;vertical-align: middle;">${{$rs->product->price*$rs->quantity}}</td>
                <td style="text-align: center;vertical-align: middle;">
                  <a class="ps-remove" href="{{route('user_shopcart_delete',['id'=>$rs->id])}}"  onclick="return confirm('Delete ! Are you sure?')"></a>
                </td>
              </tr>
            @endforeach
            
            
          </tbody>
        </table>
        <div class="ps-cart__actions">
          <div class="ps-cart__promotion">            
            <div class="form-group">
              <button class="ps-btn ps-btn--gray">Continue Shopping</button>
            </div>
          </div>
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
            <form action="{{route('user_order_add')}}" method="POST">
              @csrf
              <input type="hidden" type="text" name="total" value="{{$total}}">
              <button class="ps-btn" >Process to checkout<i class="ps-icon-next"></i></button>  
            </form>
                      
          </div>
        </div>
      </div>
    </div>
  </div>