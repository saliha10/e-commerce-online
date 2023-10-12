@extends('template')
@section('content')
<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="{{URL('/')}}">Home</a></span> / <span>Men</span></p>
					</div>
				</div>
			</div>
		</div>

		<div class="breadcrumbs-two">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs-img" style="background-image: url(img2/cover-img-1.jpg);">
							<h2>Men's</h2>
						</div>
						<div class="menu text-center">
							<p><a href="{{URL('/Shopping')}}">New Arrivals</a> <a href="{{URL('/Shopping')}}">Best Sellers</a> <a href="{{URL('/Shopping')}}">Extended Width</a> <a href="{{URL('/Shopping')}}">Sale</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-featured">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 text-center">
						<div class="featured">
							<div class="featured-img featured-img-2" style="background-image: url(img2/casual.jpeg);">
								<h2>Casuals</h2>
								<p><a href="{{URL('/Shopping')}}" class="btn btn-primary btn-lg">Shop now</a></p>
							</div>
						</div>
					</div>
					<div class="col-sm-4 text-center">
						<div class="featured">
							<div class="featured-img featured-img-2" style="background-image: url(img2/party.jpeg);">
								<h2>Formal</h2>
								<p><a href="{{URL('/Shopping')}}" class="btn btn-primary btn-lg">Shop now</a></p>
							</div>
						</div>
					</div>
					<div class="col-sm-4 text-center">
						<div class="featured">
							<div class="featured-img featured-img-2" style="background-image: url(img2/Sports.jpeg);">
								<h2>Sports</h2>
								<p><a href="{{URL('/Shopping')}}" class="btn btn-primary btn-lg">Shop now</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-product">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
						<h2>VIEW ALL MEN PRODUCTS</h2>
					</div>
				</div>
				<div class="row row-pb-md">
					<div class="col-md-3 col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="{{URL('/Shopping')}}" class="prod-img">
								<img src="img2/item-1.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="{{URL('/Shopping')}}">Men's Boots Shoes Maca</a></h2>
								<span class="price">$150.00</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="{{URL('/Shopping')}}" class="prod-img">
								<img src="img2/item-2.jpeg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="{{URL('/Shopping')}}">Men's Minam Meaghan</a></h2>
								<span class="price">$140.00</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="{{URL('/Shopping')}}" class="prod-img">
								<img src="img2/item-3.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="{{URL('/Shopping')}}">Men's Taja Commissioner</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="{{URL('/Shopping')}}" class="prod-img">
								<img src="img2/item-4.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="{{URL('/Shopping')}}">Russ Men's Sneakers</a></h2>
								<span class="price">$149.00</span>
							</div>
						</div>
					</div>
					<div class="w-100"></div>
					<div class="col-md-3 col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="{{URL('/Shopping')}}" class="prod-img">
								<img src="img2/item-5.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="{{URL('/Shopping')}}">Men's Boots Shoes Maca</a></h2>
								<span class="price">$159.00</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="{{URL('/Shopping')}}" class="prod-img">
								<img src="img2/item-6.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="{{URL('/Shopping')}}">Men's Boots Shoes Maca</a></h2>
								<span class="price">$149.00</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="{{URL('/Shopping')}}" class="prod-img">
								<img src="img2/item-7.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="{{URL('/Shopping')}}">Men's Boots Shoes Maca</a></h2>
								<span class="price">$129.00</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="{{URL('/Shopping')}}" class="prod-img">
								<img src="img2/item-8.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="{{URL('/Shopping')}}">Men's Boots Shoes Maca</a></h2>
								<span class="price">$199.00</span>
							</div>
						</div>
					</div>
					<div class="w-100"></div>
					<div class="col-md-3 col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="{{URL('/Shopping')}}" class="prod-img">
								<img src="img2/item-9.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="{{URL('/Shopping')}}">Men's Boots Shoes Maca</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="{{URL('/Shopping')}}" class="prod-img">
								<img src="img2/item-10.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="{{URL('/Shopping')}}">Men's Boots Shoes Maca</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="{{URL('/Shopping')}}" class="prod-img">
								<img src="img2/item-11.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="{{URL('/Shopping')}}">Men's Boots Shoes Maca</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="{{URL('/Shopping')}}" class="prod-img">
								<img src="img2/item-12.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="{{URL('/Shopping')}}">Men's Boots Shoes Maca</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
					<div class="w-100"></div>
					<div class="col-md-3 col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="{{URL('/Shopping')}}" class="prod-img">
								<img src="img2/item-13.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="{{URL('/Shopping')}}">Men's Boots Shoes Maca</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="{{URL('/Shopping')}}" class="prod-img">
								<img src="img2/item-14.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="{{URL('/Shopping')}}">Men's Boots Shoes Maca</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="{{URL('/Shopping')}}" class="prod-img">
								<img src="img2/item-15.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="{{URL('/Shopping')}}">Men's Boots Shoes Maca</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="{{URL('/Shopping')}}" class="prod-img">
								<img src="img2/item-16.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="{{URL('/Shopping')}}">Men's Boots Shoes Maca</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="block-27">
		               <ul>
			               <li><a href="{{URL('/Shopping')}}"><i class="ion-ios-arrow-back"></i></a></li>
		                  <li class="active"><span>1</span></li>
		                  <li><a href="{{URL('/Shopping')}}">2</a></li>
		                  <li><a href="{{URL('/Shopping')}}">3</a></li>
		                  <li><a href="{{URL('/Shopping')}}">4</a></li>
		                  <li><a href="{{URL('/Shopping')}}">5</a></li>
		                  <li><a href="{{URL('/Shopping')}}"><i class="ion-ios-arrow-forward"></i></a></li>
		               </ul>
		            </div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-partner">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
						<h2><b>TRUSTED BRANDs PARTENERS</b></h2>
					</div>
				</div>
				<div class="row">
					<div class="col partner-col text-center">
						<img src="img2/brand-1.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
					</div>
					<div class="col partner-col text-center">
						<img src="img2/brand-2.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
					</div>
					<div class="col partner-col text-center">
						<img src="img2/brand-3.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
					</div>
					<div class="col partner-col text-center">
						<img src="img2/brand-4.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
					</div>
					<div class="col partner-col text-center">
						<img src="img2/brand-5.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
					</div>
				</div>
			</div>
		</div>
@endsection
