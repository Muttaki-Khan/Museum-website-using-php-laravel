@extends('frontView.master')

@section('title_area')
		Gallery
@endsection



@section('css_js')
		<link href="{{ asset('frontEnd') }}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- pignose css -->
<link href="{{ asset('frontEnd') }}/css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />


<!-- //pignose css -->
<link href="{{ asset('frontEnd') }}/css/style1.css" rel="stylesheet" type="text/css" media="all" />

<!-- js -->
<script type="text/javascript" src="{{ asset('frontEnd') }}/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- cart -->
	<script src="{{ asset('frontEnd') }}/js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
	<script type="text/javascript" src="{{ asset('frontEnd') }}/js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="{{ asset('frontEnd') }}/js/jquery.easing.min.js"></script>	

@endsection

@section('feature')
      <font face = "Times New Roman" size = "3" style="font-size:3vw;">Gallery</font><br />
<section class="gallery-area">
		<div class="container">
			<div class="row align-items-center">
			@foreach($img as $img)
				<div class="col-lg-5 col-md-6 col-sm-6">
					<div class="single-gallery">
						<div class="overlay"></div>
						<figure>
							<img src="{{asset($img->pic)}}" alt="img" width="400" height="250">
						</figure>
						<div class="icon">
							<a href="{{asset($img->pic)}}" class="photo-gallery-pop-up">
								<span class="lnr lnr-cross"></span>
							</a>
						</div>
					</div>
				</div>
			@endforeach
			</div>
		</div>
	</section>
@endsection