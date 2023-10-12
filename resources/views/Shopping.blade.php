@extends('template')
@section('content')
<!DOCTYPE html>
<html>
<head>
  <title>CART</title>
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@600&display=swap');
  *{
    font-family: 'poppins', sans-serif;
    margin: 0;
    padding: 0;
    scroll-padding-top: 2rem;
    scroll-behavior: smooth;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
  }
  .shop-container-fluid{
    background-color: goldenrod;
  }
:root {
  --main-color: #8eeaf7;
  --text-color: white;
  --bg-color: blue;
}
.section-title{
  font-size: 2.5rem;
  font-weight: 400;
  text-align: center;
  margin-bottom: 1.5rem;
}
.shop{
  margin-top: 2rem;
}
.shop-content{
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, auto));
  gap: 1.5rem;
}
.product-title{
  font-size: 1.1rem;
  font-weight: 400;
  text-transform: uppercase;
  margin-bottom: 0.5rem;
}
.price{
  font-weight: 800;
}
.add-cart{
  position: absolute;
  bottom: 0;
  right: 0;
  background: var(--bg-color);
  padding: 10px;
  cursor: pointer;
}
.add-cart:hover{
  background: hsl(249, 32%, 17%);
}
.cart{
  position: absolute;
  bottom: 0;
  right: 0;
  margin-left: 80%;
  margin-bottom: 162%;
  width: 250px;
  min-height: 100vh;
  padding: 25px;
  background: var(--main-color);
  box-shadow: -2px 0 4px hsl(0 4% 15%/10%);
  transition: 0.3s;
}
.cart.active{
  right: 0;
}
.cart-title{
  text-align: center;
  font-size: 1.5rem;
  font-weight: 600;
  margin-top: 2rem;
  color: #800000;
}
.cart-box{
  display: grid;
  grid-template-columns: 32% 50% 18%;
  align-items: center;
  gap: 1rem;
  margin-top: 1rem;
}
.img-fluid{
  width: 80%;
  height: 80%;
  object-fit: contain;
  padding: 5px;

}
.detail-box{
  display: grid;
  row-gap: 0.5rem;
}
.cart-product-title{
  font-size: 1rem;
  text-transform: uppercase;
  color: #800000;
}
.cart-price{
  font-weight: 1000;
  color: #800000;
}
.cart-quantity{
  border: 1px solid var(--text-color);
  outline-color: #800000;
  width: 2.4rem;
  text-align: center;
  font-size: 1rem;
}
#close-cart{
  position: absolute;
  top: 1rem;
  right: 0.8rem;
  background-color: #800000;
  cursor: pointer;
}
.total{
  display: flex;
  justify-content: flex-end;
  margin-top: 1.5rem;
  border-top: 1px solid var(--text-color);
}
.total title{
  font-size: 1rem;
  font-weight: 600;
}
.total-price{
  margin-left: 0.5rem;
}
.btn-buy{
  display: flex;
  margin: 1.5rem auto 0 auto;
  padding: 12px 20px;
  border: none;
  background-color: #800000;
  color: white;
  font-size: 1rem;
  font-weight: 600;
  cursor: pointer;
}
.btn-buy:hover{
  background-color: blue;
}
.trash{
  background-color: red;
  overflow: hidden;
  position: absolute;
  cursor: pointer;
  margin-top: 60px;
  height: 40px;
}
.cart-btn{
  background-color: deepskyblue;
  color: #800000;
  width: 30%;
  margin-top: 5px;
  padding-left: 1px;
}
.cart-btn:hover{
 background-color: chartreuse;
}
.quantity{
  width: 30%;
  background-color: burlywood;
  padding-left: 1px;
}

.pro-qty {
	height: 50px;
	width: 150px;
	border: 1px solid #ebebeb;
	border-radius: 50px;
	padding: 0 20px;
	overflow: hidden;
	display: inline-block;
}

.pro-qty .qtybtn {
	font-size: 14px;
	color: #666666;
	cursor: pointer;
	float: left;
	width: 12px;
	line-height: 46px;
}

.pro-qty input {
	font-size: 14px;
	color: #666666;
	font-weight: 500;
	border: none;
	float: left;
	width: 84px;
	text-align: center;
	height: 48px;
}
  </style>
   <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>
<body>
 {{-- <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAPdJREFUSEvt1TFKA1EUheFv3EKwsBGsrN2BsTFdmuAeBCuxERtFG7Gw0j2kSicYCHEFFq5AGytxB6IE3iDM8HKTCSFNpnrMve/85525M1NY8lUsWd+sgB6OcZAMjfCAQWRwFsAdzjJCl7iaBokAR+gngWs8pvUJLtL6EMMcJAK8Yg+nuK+ITAA3eEanKeAHG9jEV0VkC5/4Rqsp4DdtzJ00qtemaIz9aDKC+gvaZU/VWeloQca/8RygvB9FUK3X+lcOmDequU+wBtTeg2hqosjWzyBKSBjRB7ZDmekN79jJfYu6uMVuQ8gbzvGUAzTUzW+L/mgLA/8AfTkzGXPdr4UAAAAASUVORK5CYII=" width="5%" height="5%" align="left"/></h1> --}}
  {{-- <h1 class="bg-primary text-white text-center">SHOPPING CART FOR YOU<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAPdJREFUSEvt1TFKA1EUheFv3EKwsBGsrN2BsTFdmuAeBCuxERtFG7Gw0j2kSicYCHEFFq5AGytxB6IE3iDM8HKTCSFNpnrMve/85525M1NY8lUsWd+sgB6OcZAMjfCAQWRwFsAdzjJCl7iaBokAR+gngWs8pvUJLtL6EMMcJAK8Yg+nuK+ITAA3eEanKeAHG9jEV0VkC5/4Rqsp4DdtzJ00qtemaIz9aDKC+gvaZU/VWeloQca/8RygvB9FUK3X+lcOmDequU+wBtTeg2hqosjWzyBKSBjRB7ZDmekN79jJfYu6uMVuQ8gbzvGUAzTUzW+L/mgLA/8AfTkzGXPdr4UAAAAASUVORK5CYII="width="5%" height="5%" align="right"/></h1> --}}
  <section class="shop-container-fluid">
    <h1 class="section-title bg-primary text-white">ITEMS</h1>
   <div class="shop-content">
    <form action="{{ route('cart.add') }}" method="POST">

                @csrf
                <div id="cart-items" class="row">
        @foreach($products as $product)
        <input type="number" name="product_id" hidden value="{{$product['id']}}">
        <div class="col-md-3">
            <img class="img-fluid pl-1" src="{{$product['photo']}}">
        <h3 class="product-title" style="color: #800000;"><b><a href="{{ route('complete', ['id' => $product['id']]) }}">{{$product['product_name']}}</a></b></h3>
        {{-- <p>{{$product['product_description']}}</p> --}}
        <span class="price" style="color: red;">${{$product['price']}}</span>
        </div>

        @endforeach
    </div>
    </form>
  </section>

</body>
</html>
@endsection
