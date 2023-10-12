@extends('template')
@section('content')

<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="{{URL('/')}}">Home</a></span> / <span>About</span></p>
					</div>
				</div>
			</div>
		</div>
<div class="container-fluid" id="fluid">
	<!-- Start video-sec Area -->
	<section class="video-sec-area section-gap" id="about">
				<div class="container">
					<div class="row justify-content-center align-items-center ">
						<div class="col-lg-6 video-left">
							<h6>To blow your mind</h6>
							<h4>We’ve made a device that will change you</h4>
							<p><span>Now <b>Kazmi Timezone</b> will show you the best variety of smartwatches.</span></p>
							<p>
Website owner<b>:</b><a href="https://www.fiverr.com/fiverkazmyfor?up_rollout=true" Saliha Kazmi> Saliha Kazmi</a>
Hi, Saliha Kazmi is here. I have done BS in computer science. I am a content writer for all types of subjects and Web Developer. 
We sell the most sought smartwatches  some of the world’s most prominent brands. Our smartwatches are always competitively priced as we endeavour to restoring choice.
							</p>
							<a class="primary-btn" href="#">Start Now</a>
						</div>
						<div class="col-lg-6 video-right justify-content-center align-items-center d-flex">
							<div class="video-right">
								<!-- <iframe width="570" height="350" src="https://www.youtube.com/embed/7forDNn0S9A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>						 -->
								<iframe width="590" height="370" src="https://www.youtube.com/embed/7forDNn0S9A" title="Series 8 Smartwatch time setting and date" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
							</div>
					</div>
				</div>	
			</section>
			<!-- End video-sec Area -->
</div>

@endsection
