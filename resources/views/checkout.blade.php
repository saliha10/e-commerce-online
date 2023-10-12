@extends('template')
@section('content')
<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <form action="/checkout" method="post" class="checkout__form">
            @csrf
            <div class="row">
                <div class="col-lg-8">
                    <h5 class="text-center bg-primary text-white">Shipping Details</h5>
                    <div class="row bg-primary text-white">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="first_name">First Name <span>*</span></label>
                                <input type="text" id="first_name" name="first_name" class="form-control" required>
                                @error('first_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="last_name">Last Name <span>*</span></label>
                                <input type="text" id="last_name" name="last_name" class="form-control" required>
                                @error('last_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="country">Country <span>*</span></label>
                                <input type="text" id="country" name="country" class="form-control" required>
                                @error('country')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="address">Address <span>*</span></label>
                                <input type="text" id="address" name="address" class="form-control" required>
                                <input type="text" placeholder="Apartment, suite, unit, etc. (optional)" class="mt-2 form-control">
                                @error('address')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="city">Town/City <span>*</span></label>
                                <input type="text" id="city" name="city" class="form-control" required>
                                @error('city')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="zip">Postcode/Zip <span>*</span></label>
                                <input type="text" id="zip" name="zip" class="form-control" required>
                                @error('zip')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone <span>*</span></label>
                                <input type="text" id="phone" name="phone" class="form-control" required>
                                @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="email">Email <span>*</span></label>
                                <input type="email" id="email" name="email" class="form-control" required>
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="notes">Additional Notes</label>
                                <input type="text" placeholder="Note about your order, e.g., special note for delivery" id="notes" name="notes" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

                <section>
                    <div class="container">
                        <form>
                            <div class="row">
                                <div class="col-lg-14 ml-3">
                                    <div class="checkout__order text-white" style="background-color: #800000">
                                        <h5 class="text-center bg-primary text-white">Your Order</h5>
                                        <div class="checkout__order__product">
                                            <ul class="list-unstyled">
                                                @php
                                                $total = 0;
                                                @endphp
                                                <li class="d-flex justify-content-between align-items-center">
                                                    <span class="top__text">Product</span>
                                                    <span class="top__text__right">Total</span>
                                                </li>
                                                @foreach($products as $product)
                                                <li class="d-flex justify-content-between align-items-center">
                                                    <img src="{{ $product['photo'] }}" width="100" height="90" alt="">
                                                    <b class="ml-3" style="font-size: 20px;">x {{ $cartItems[$product['id']]['quantity'] }}</b>
                                                    <span>
                                                        @php
                                                        $price = $product['price'] * $cartItems[$product['id']]['quantity'];
                                                        @endphp
                                                        ${{ number_format($price, 2, '.', ',') }}
                                                    </span>
                                                </li>
                                                @php
                                                $total += $price;
                                                @endphp
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="checkout__order__total">
                                            <ul class="list-unstyled">
                                                <li class="d-flex justify-content-between align-items-center">
                                                    Total <span>$ {{ number_format($total, 2, '.', ',') }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="checkout__order__widget">
                                            <p>Payment Method: &NonBreakingSpace;&NonBreakingSpace;&NonBreakingSpace;&NonBreakingSpace; Cash on Delivery</p>
                                        </div>
                                        <button type="submit" class="site-btn btn btn-primary mb-0"><b>Place Order</b></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>

<!-- Checkout Section End -->
<div class="container">
    <br><br>
</div>
@endsection
