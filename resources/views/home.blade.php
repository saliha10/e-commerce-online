@extends('template')
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(img2/@1.jpg);">
			   		<div class="overlay"></div>
			   	</li>
			   	<li style="background-image: url(img2/@2.jpeg);">
			   		<div class="overlay"></div>
			   	</li>
			   	<li style="background-image: url(img2/@3.jfif)">
			   		<div class="overlay"></div>
			   	</li>
                   <li style="background-image: url(img2/@4.jpg)">
                    <div class="overlay"></div>
                </li>
                <li style="background-image: url(img2/@6.jfif)">
                    <div class="overlay"></div>
                </li>
                <li style="background-image: url(img2/@6.jpg)">
                    <div class="overlay"></div>
                </li>
			  	</ul>
		  	</div>
		</aside>
        <div class="row"></div>
<!-- <section class="featured section-gap mt-0" id="featured">
    <div class="custom-container">
        <div class="flex-slider col-sm-12" style="display: flex; flex-direction: row;">
            <div class="featured-img col-sm-6">
                <a href="{{URL('/men')}}">
                    <img src="img2/@7.jfif" alt="Image 1" style="border-radius: 50%; width: 100%; height: auto; max-height: 100%;">
                </a>
            </div>
            <div class="featured-img col-sm-6">
                <a href="{{URL('/women')}}">
                    <img src="img2/@8.jfif" alt="Image 2" style="border-radius: 50%; width: 100%; height: auto; max-height: 100%;">
                </a>
            </div>
        </div>
    </div>
</section> -->

<br/>
<br/><br/>
<br/>
<br/>
<!--Start Service Area-->
<section class="service-area section-gap mt-0" id="service">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 pb-40 header-text">
                <h2 style="color: #800000" ><b></b>SOME SERVICES THAT MADE US UNIQUE<b></b></h2>
                <p style="color: #800000"><b> Smartwatches & Footwear brought best quality for you</b></p>
            </div>
        </div>
        <div class="row">
            @foreach($services as $service)
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <h4  style="color: #800000;">{{$service["title"]}}</h4>
                    <p  style="color: #800000; font-weight: 600;">{{$service["description"]}}</p>
                </div>
            </div>
                @endforeach
</section>
<!-- End Service Area-->
<!-- Start Feature Area-->
        {{-- <div class="container-fluid pt-5 pb-3">
			<h1 class="section-title position-relative text-uppercase text-center text-white mx-xl-5 mb-4" >Featured Products</span></h1>
			<div class="row px-xl-5">
                @foreach($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
					<div class="product-item bg-light mb-4">
						<div class="product-img position-relative overflow-hidden">
							<img class="img-fluid w-100" src="{{$product['photo']}}" alt="">
						</div>
						<div class="text-center py-4">
							<a class="h6 text-decoration-none text-truncate" href="{{ route('complete', ['id' => $product['id']]) }}">{{$product['product_name']}}</a>
							<div class="d-flex align-items-center justify-content-center mt-2">
								<h5>${{$product['price']}}</h5>
							</div>
						</div>
					</div>
				</div>
                @endforeach

			</div>
		</div> --}}
        <div class="container-fluid pt-5 pb-3" style="background-color: goldenrod;">
            <h1 class="section-title position-relative text-uppercase text-center text-white mx-xl-5 mb-4" >Featured Products</h1>
            <div class="row px-xl-5">
                @foreach($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    @if($product['product_feature'] == 'yes')
                    <div class="product-item bg-light mb-4" style="width: 100%; height: 100%;">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{$product['photo']}}" alt="">
                        </div>
                        <div class="text-center py-4">
                            {{-- @if($product['product_feature'] == 'yes') --}}
                            <a class="h6 text-decoration-none text-truncate" href="{{ route('complete', ['id' => $product['id']]) }}">{{$product['product_name']}}</a>
                           {{-- @endif --}}
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>${{$product['price']}}</h5>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
<!--End Best Sellers Area-->
<!--Start FAQ AREA-->  
<section class="faq-area section-gap" id="faq">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-10">
				<div class="title text-center">
					<h1 class="mb-10" style="color: #800000;">Frequently Asked Questions</h1>
					<p style="color: #800000;">Feel freely & asked question about our website.</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-start">
			<div class="col-lg-6 faq-left">
				<div id="accordion">
				  <div class="card">
					<div class="card-header" id="headingOne">
					  <h5 class="mb-0">
						<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
<p>Personal & Professional? Account choose while signing up?</p>
						</button>
					  </h5>
					</div>
					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
					  <div class="card-body">
<p>Professional accounts are accounts that are created for a business or at an enterprise level, whereas Personal accounts are created for learning and experimenting with AWS services. We recommend opting in for a Professional account for managing production workloads and business critical dependencies. For all other activities, we recommend signing up for a Personal account.</p>
					  </div>
					</div>
				  </div>
				  <div class="card">
					<div class="card-header" id="headingTwo">
					  <h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
<p>What if I don't like the product I ordered?</p>
						</button>
					  </h5>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
					  <div class="card-body">
<p>When you shop with us, you get a 60-day return policy. The product must be unused for us to accept the return. If it is obvious that the returned product has been used or damaged, we will refund up to 50% of the purchase price. With the exception of damaged items, engraved products cannot be returned or exchanged. </p>
					  </div>
					</div>
				  </div>
				  <div class="card">
					<div class="card-header" id="headingThree">
					  <h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
<p>Do you sell second hand Shoe or Footwear?</p>
						</button>
					  </h5>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
					  <div class="card-body">
<p>No. All our Footwear varieties are new.</p>
					  </div>
					</div>
				  </div>
				  <div class="card">
					<div class="card-header" id="headingThree">
					  <h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
<p>How do I determine my shoe size accurately?</p>
						</button>
					  </h5>
					</div>
					<div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
					  <div class="card-body">
<p>Determining the right shoe size is essential for a comfortable fit. Follow these steps to measure your foot accurately:
<br>
	Find a blank piece of paper, a pen, and a ruler.<br>
	Place the paper on a hard surface and position your foot on it.<br>
	Trace the outline of your foot with the pen, ensuring the pen is perpendicular to the paper.<br>
	Use the ruler to measure the distance from the heel to the longest toe on your tracing. This measurement is your foot length.</p>
					  </div>
					</div>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>
		<!--END FAQ AREA-->
@endsection