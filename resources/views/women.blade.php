@extends('template')
@section('content')
<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="{{URL('/')}}">Home</a></span> / <span>Women</span></p>
					</div>
				</div>
			</div>
		</div>

		<div class="breadcrumbs-two">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs-img" style="background-image: url(img2/women\ background.jpg);">
							<h2>Women's</h2>
						</div>
						<div class="menu text-center">
							<p><a href="#">New Arrivals</a> <a href="#">Best Sellers</a> <a href="#">Extended Widths</a> <a href="#">Sale</a></p>
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
							<div class="featured-img featured-img-2" style="background-image: url(img2/casual\ women.jpeg);">
								<h2>Casuals</h2>
								<p><a href="{{URL('/Shopping')}}" class="btn btn-primary btn-lg">Shop now</a></p>
							</div>
						</div>
					</div>
					<div class="col-sm-4 text-center">
						<div class="featured">
							<div class="featured-img featured-img-2" style="background-image: url(img2/Formal\ Sandles.jpeg);">
								<h2>Formal</h2>
								<p><a href="{{URL('/Shopping')}}" class="btn btn-primary btn-lg">Shop now</a></p>
							</div>
						</div>
					</div>
					<div class="col-sm-4 text-center">
						<div class="featured">
							<div class="featured-img featured-img-2" style="background-image: url(img2/Sports\ for\ women.jpeg);">
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
					<div class="col-lg-3 col-xl-3">
						<div class="row">
							<div class="col-sm-12">
								<div class="side border mb-1">
									<h3>Brand</h3>
									<ul>
										<li><a href="https://www.nike.com/">Nike</a></li>
										<li><a href="https://www.adidas.com/us">Adidas</a></li>
										<li><a href="https://www.merrell.com/US/en/home">Merrel</a></li>
										<li><a href="https://www.gucci.com/us/en/">Gucci</a></li>
										<li><a href="https://www.skechers.com/">Skechers</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="side border mb-1">
									<h3>Size/Width</h3>
									<div class="block-26 mb-2">
										<h4>Size</h4>
					               <ul>
					                  <li><a href="{{URL('/Shopping')}}">7</a></li>
					                  <li><a href="{{URL('/Shopping')}}">7.5</a></li>
					                  <li><a href="{{URL('/Shopping')}}">8</a></li>
					                  <li><a href="{{URL('/Shopping')}}">8.5</a></li>
					                  <li><a href="{{URL('/Shopping')}}">9</a></li>
					                  <li><a href="{{URL('/Shopping')}}">9.5</a></li>
					                  <li><a href="{{URL('/Shopping')}}">10</a></li>
					                  <li><a href="{{URL('/Shopping')}}">10.5</a></li>
					                  <li><a href="{{URL('/Shopping')}}">11</a></li>
					                  <li><a href="{{URL('/Shopping')}}">11.5</a></li>
					                  <li><a href="{{URL('/Shopping')}}">12</a></li>
					                  <li><a href="{{URL('/Shopping')}}">12.5</a></li>
					                  <li><a href="{{URL('/Shopping')}}">13</a></li>
					                  <li><a href="{{URL('/Shopping')}}">13.5</a></li>
					                  <li><a href="{{URL('/Shopping')}}">14</a></li>
					               </ul>
					            </div>
					            <div class="block-26">
										<h4>Width</h4>
					               <ul>
					                  <li><a href="{{URL('/Shopping')}}">M</a></li>
					                  <li><a href="{{URL('/Shopping')}}">W</a></li>
					               </ul>
					            </div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="side border mb-1">
									<h3>Style</h3>
									<ul>
										<li><a href="{{URL('/Shopping')}}">Slip Ons</a></li>
										<li><a href="{{URL('/Shopping')}}">Boots</a></li>
										<li><a href="{{URL('/Shopping')}}">Sandals</a></li>
										<li><a href="{{URL('/Shopping')}}">Lace Ups</a></li>
										<li><a href="{{URL('/Shopping')}}">Oxfords</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="side border mb-1">
									<h3>Colors</h3>
									<ul>
										<li><a href="{{URL('/Shopping')}}">Black</a></li>
										<li><a href="{{URL('/Shopping')}}">White</a></li>
										<li><a href="{{URL('/Shopping')}}">Blue</a></li>
										<li><a href="{{URL('/Shopping')}}">Red</a></li>
										<li><a href="{{URL('/Shopping')}}">Green</a></li>
										<li><a href="{{URL('/Shopping')}}">Grey</a></li>
										<li><a href="{{URL('/Shopping')}}">Orange</a></li>
										<li><a href="{{URL('/Shopping')}}">Cream</a></li>
										<li><a href="{{URL('/Shopping')}}">Brown</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="side border mb-1">
									<h3>Material</h3>
									<ul>
										<li><a href="{{URL('/Shopping')}}">Leather</a></li>
										<li><a href="{{URL('/Shopping')}}">Suede</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="side border mb-1">
									<h3>Technologies</h3>
									<ul>
										<li><a href="{{URL('/Shopping')}}">BioBevel</a></li>
										<li><a href="{{URL('/Shopping')}}">Groove</a></li>
										<li><a href="{{URL('/Shopping')}}">FlexBevel</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-9 col-xl-9">
						<div class="row row-pb-md">
							<div class="col-lg-4 mb-4 text-center">
								<div class="product-entry border">
									<a href="{{URL('/Shopping')}}" class="prod-img">
										<img src="img2/women1" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
									<div class="desc">
										<h2><a href="{{URL('/Shopping')}}">Women's Boots Shoes Maca</a></h2>
										<span class="price">$139.00</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4 mb-4 text-center">
								<div class="product-entry border">
									<a href="{{URL('/Shopping')}}" class="prod-img">
										<img src="img2/item-2.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
									<div class="desc">
										<h2><a href="{{URL('/Shopping')}}">Women's Minam Meaghan</a></h2>
										<span class="price">$139.00</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4 mb-4 text-center">
								<div class="product-entry border">
									<a href="{{URL('/Shopping')}}" class="prod-img">
										<img src="img2/women3.jpeg" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
									<div class="desc">
										<h2><a href="{{URL('/Shopping')}}">Women's Taja Commissioner</a></h2>
										<span class="price">$139.00</span>
									</div>
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-lg-4 mb-4 text-center">
								<div class="product-entry border">
									<a href="{{URL('/Shopping')}}" class="prod-img">
										<img src="img2/women4" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
									<div class="desc">
										<h2><a href="{{URL('/Shopping')}}">Russ Women's Sneakers</a></h2>
										<span class="price">$159.00</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4 mb-4 text-center">
								<div class="product-entry border">
									<a href="{{URL('/Shopping')}}" class="prod-img">
										<img src="img2/women5" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
									<div class="desc">
										<h2><a href="{{URL('/Shopping')}}">Women's Boots Shoes Maca</a></h2>
										<span class="price">$149.00</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4 mb-4 text-center">
								<div class="product-entry border">
									<a href="{{URL('/Shopping')}}" class="prod-img">
										<img src="img2/women6" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
									<div class="desc">
										<h2><a href="{{URL('/Shopping')}}">Women's Boots Shoes Maca</a></h2>
										<span class="price">$139.00</span>
									</div>
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-lg-4 mb-4 text-center">
								<div class="product-entry border">
									<a href="{{URL('/Shopping')}}" class="prod-img">
										<img src="img2/women7" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
									<div class="desc">
										<h2><a href="{{URL('/Shopping')}}">Women's Boots Shoes Maca</a></h2>
										<span class="price">$139.00</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4 mb-4 text-center">
								<div class="product-entry border">
									<a href="{{URL('/Shopping')}}" class="prod-img">
										<img src="img2/women8" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
									<div class="desc">
										<h2><a href="{{URL('/Shopping')}}">Women's Boots Shoes Maca</a></h2>
										<span class="price">$139.00</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4 mb-4 text-center">
								<div class="product-entry border">
									<a href="{{URL('/Shopping')}}" class="prod-img">
										<img src="img2/women9" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
									<div class="desc">
										<h2><a href="{{URL('/Shopping')}}">Women's Boots Shoes Maca</a></h2>
										<span class="price">$139.00</span>
									</div>
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-lg-4 mb-4 text-center">
								<div class="product-entry border">
									<a href="{{URL('/Shopping')}}" class="prod-img">
										<img src="img2/women10" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
									<div class="desc">
										<h2><a href="{{URL('/Shopping')}}">Women's Boots Shoes Maca</a></h2>
										<span class="price">$139.00</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4 mb-4 text-center">
								<div class="product-entry border">
									<a href="{{URL('/Shopping')}}" class="prod-img">
										<img src="img2/women11.jpeg" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
									<div class="desc">
										<h2><a href="{{URL('/Shopping')}}">Women's Boots Shoes Maca</a></h2>
										<span class="price">$139.00</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4 mb-4 text-center">
								<div class="product-entry border">
									<a href="{{URL('/Shopping')}}" class="prod-img">
										<img src="img2/women12" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
									<div class="desc">
										<h2><a href="{{URL('/Shopping')}}">Women's Boots Shoes Maca</a></h2>
										<span class="price">$139.00</span>
									</div>
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-lg-4 mb-4 text-center">
								<div class="product-entry border">
									<a href="{{URL('/Shopping')}}" class="prod-img">
										<img src="img2/women13" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
									<div class="desc">
										<h2><a href="{{URL('/Shopping')}}">Women's Boots Shoes Maca</a></h2>
										<span class="price">$139.00</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4 mb-4 text-center">
								<div class="product-entry border">
									<a href="{{URL('/Shopping')}}" class="prod-img">
										<img src="img2/women14.jpeg" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
									<div class="desc">
										<h2><a href="{{URL('/Shopping')}}">Women's Boots Shoes Maca</a></h2>
										<span class="price">$139.00</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4 mb-4 text-center">
								<div class="product-entry border">
									<a href="{{URL('/Shopping')}}" class="prod-img">
										<img src="img2/women15.jpeg" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
									<div class="desc">
										<h2><a href="{{URL('/Shopping')}}">Women's Boots Shoes Maca</a></h2>
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
				                  <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
				               </ul>
				            </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-partner">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
						<h2>Trusted Partners</h2>
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
