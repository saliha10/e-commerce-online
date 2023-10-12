@php
use App\Models\Contact;
$contact = Contact::latest('id')->first();
@endphp
<style>
    body{
        background-color: #E5B80B;
    }
.title{
    text-align: center;
    background-color: blue;
    color: white;
}
.section-title{
    text-align: center;
    background-color: blue;
    color: white;
}
.card-box{
    background-color: #800000;
    color: whitesmoke;
    text-align: center;
    justify-content: center;
    align-items: center;
}
.btn{
    background-color: blue;
    color: white;
    width: 30%
}
    </style>

  <section class="shop-container-fluid">
    <h1 class="title">SHOPPING CART FOR YOU</h1>
    <h1 class="section-title">ITEMS</h1>
    <div class="card-box">
        <form action="{{ route('cart.add')}}" method="POST">
            @csrf

            <div id="cart-items" class="row">
                @isset($product)
                <input type="number" name="product_id" hidden value="{{$product['id']}}">
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="{{$product['photo']}}" alt="Product Image">
                        <div class="card-body">
                            <h3 class="card-title" style="color: white;"><b>{{$product['product_name']}}</b></h3>
                            <p class="card-text">{{$product['product_description']}}</p>
                            <span class="price" style="color: red;">${{$product['price']}}</span>
                            <p class="btn-holder">
                                Select Quantity:
                                <input type="number" name="customer_quantity" class="number form-control">
                                <br><br>
                                <button type="submit" class="btn btn-primary">Add to Cart</button>
                            </p>
                        </div>
                    </div>
                </div>
                @endisset
            </div>
        </form>


  </section>
