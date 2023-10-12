@extends('template')
@section('content')
<div class="cart">
      <h2 class="cart-title text-white bg-primary" align="center">Your Cart</h2>
      @foreach($products as $product)
      <div class="cart-content">
        <div class="cart-box bg-#800000">
        <img class="cart-img  w-40 h-30" src="{{$product['photo']}}">
        <div class="detail-box">
            <div class="cart-product-title">
                <img src="{{$product['photo']}}" alt="{{$product['product_name']}}">
            </div>
          <div class="cart-product-title"><h2>{{$product['product_name']}}</h2></div>
          <div class="cart-price">${{$product['price']}}</div>
          <div class="cart-quantity">{{ $cartItems[$product['id']]['quantity'] }}</div>
          @endforeach
        </div>

        <!--trash-->
        <box-icon name='trash' class="remove"></box-icon>
        </div>
      </div>
      <button type="button" class="btn-buy btn-flat ml-2"><a href="{{'/shopping'}}" style="color: blue">Continue Shopping</a></button> &NonBreakingSpace;
    <!--Buy Button-->
    <button type="button" class="btn-buy btn-danger"><a href="{{'/checkout'}}" style="color: white">Proceed to checkout</a></button>
        <!--Close Cart-->
        <box-icon name='window-close' id="close-cart"></box-icon>
  </div>
  <br>



@endsection
