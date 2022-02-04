
@extends('frontView.master')


@section('title_area')
		Emuseum
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

<div class="banner-grid">
	<div id="visual">
			<div class="slide-visual">
				<!-- Slide Image Area (1000 x 424) -->
				<ul class="slide-group">
					<li><img class="img-responsive" src="{{$img1}}" alt="Dummy Image" /></li>
					<li><img class="img-responsive" src="{{$img2}}" alt="Dummy Image" /></li>
					<li><img class="img-responsive" src="{{$img3}}" alt="Dummy Image" /></li>
				</ul>


				<!-- Slide Description Image Area (316 x 328) -->
				<!-- <div class="script-wrap">
					<ul class="script-group">
						<li><div class="inner-script"><img class="img-responsive" src="{{ asset('frontEnd') }}/images/UM.55.244.jpg" alt="Dummy Image" /></div></li>
						<li><div class="inner-script"><img class="img-responsive" src="{{ asset('frontEnd') }}/images/UM.55.268.jpg" alt="Dummy Image" /></div></li>
						<li><div class="inner-script"><img class="img-responsive" src="{{ asset('frontEnd') }}/images/UM.57.11.jpg" alt="Dummy Image" /></div></li>
					</ul>
					<div class="slide-controller">
						<a href="#" class="btn-prev"><img src="{{ asset('frontEnd') }}/images/btn_prev.png" alt="Prev Slide" /></a>
						<a href="#" class="btn-play"><img src="{{ asset('frontEnd') }}/images/btn_play.png" alt="Start Slide" /></a>
						<a href="#" class="btn-pause"><img src="{{ asset('frontEnd') }}/images/btn_pause.png" alt="Pause Slide" /></a>
						<a href="#" class="btn-next"><img src="{{ asset('frontEnd') }}/images/btn_next.png" alt="Next Slide" /></a>
					</div>
				</div> -->
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	<script type="text/javascript" src="{{ asset('frontEnd') }}/js/pignose.layerslider.js"></script>
	<script type="text/javascript">
	//<![CDATA[
		$(window).load(function() {
			$('#visual').pignoseLayerSlider({
				play    : '.btn-play',
				pause   : '.btn-pause',
				next    : '.btn-next',
				prev    : '.btn-prev'
			});
		});
	//]]>
	</script>

</div>
@endsection

@section('mainContent')
<div class="soft_new_arrivals">
	<div class="container">
		<h3><span>new </span>collection</h3>
		<p>This are the items........</p>
		<div class="new_grids">
			<div class="col-md-4 new-gd-left">
				<img class="imghome" src="{{ asset('frontEnd') }}/images/UM.55.268.jpg" alt="soft-men22" />
				<div class="wed-brand simpleCart_shelfItem">
					<h4><a href="item">Latest Collections</a></h4>
					
					
				</div>
			</div>
			<div class="col-md-4 new-gd-middle">
				<img class="imghome" src="{{ asset('frontEnd') }}/images/UM.55.244.jpg" alt="soft-men21" />
				<div class="wed-brandtwo simpleCart_shelfItem">
					<h4></h4>
					
				</div>
				
			</div>
			<div class="col-md-4 new-gd-left">
				<img class="imghome" src="{{ asset('frontEnd') }}/images/UM.57.11.jpg" alt="soft-men21" />
				<div class="wed-brandtwo simpleCart_shelfItem">
					
					<h4><a href="item">Local Collection</a></h4>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //content -->

<!-- content-bottom -->


<!-- //content-bottom -->
<!-- product-nav -->

<div class="product-easy">
	<div class="container">
		
		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true   // 100% fit in a container
								});
							});
							
		</script>
		<div class="sap_tabs">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Latest Items</span></li> 
					<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Special Items</span></li> 
					<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Collections</span></li> 
				</ul>				  	 
				

@endsection