@extends('frontView.master')

@section('title_area')
		Item View
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
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
<img src="{{asset($item->pic)}} " width="300"><br><hr>
	<h3>Name:</h3>{{$item->itemName}}<br>
	<h3>Category:</h3>{{$item->catName}}<br>
	<h3>Code:</h3>{{$item->itemCode}}<br>
	<p><h3>Information:</h3>{{$item->information}}<br></p>

 </div>
            </div>
        </div>
@endsection	
