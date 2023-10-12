@extends('admin/admintemplate')
@section('content')
<style>
    .shop-content{
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, auto));
  gap: 1.5rem;
  align-items: center;
  justify-content: center;
}
.img_thumbnail {
    position: relative;
    padding: 0px;
    margin-bottom: 20px;
    justify-content: center;
    align-items: center;
}
.img_thumbnail img {
  width: 100%;
  height: 40%;
  justify-content: center;
  align-items: center;
  list-style-image: center;
}
.img_thumbnail .caption{
    margin: 7px;
    text-align: center;
}
.cart-items{
  position: relative;
  gap: 1.5rem;
  align-items: center;
  justify-content: center;
}
.cart-items:hover{
  padding: 10px;
  border: 1px solid var(--text-color);
  transition: 0.6s;
  align-items: center;
  justify-content: center;
}
.h4{
    color: crimson;
}
.p{
    color: #800000;
}
</style>

  <h1 class="bg-white text-center mt-1 mb-0">PRODUCTS</h1>
<div class="container">
<div class="row">
@foreach ($products as $product)

<div class="col-xs-18 col-sm-6 col-md-4" style="margin-top:10px;">
<div class="shop-content">
<div id="cart-items">
<div class="img_thumbnail productlist">
<img src="{{ $product['photo'] }}" class="img-fluid w-40 h-30">
<div class="caption">
<h4>{{ $product->product_name }}</h4>
<p>{{ $product->product_description }}</p>
<p><strong>Price: </strong> ${{ $product->price }}</p>
<a href="{{url('/admin/delete-product/' . $product['id'])}}" class="btn rounded-pill btn-icon btn-danger">
    <span class="tf-icons bx bx-trash-alt"></span></a>
    <a href="{{url('/admin/edit-product/' . $product['id'])}}" class="btn rounded-pill btn-icon btn-primary">
      <span class="tf-icons bx bx-pencil"></span></a>
 <!-- <p class="btn-holder">
// <a href="{{url('add-to-cart', $product->id)}}" class="btn btn-primary btn-block text-center" role="button">Add to cart</a>
// </p> -->
</div>
</div>
</div>
</div>
</div>
@endforeach
</div>
</div>
@endsection
