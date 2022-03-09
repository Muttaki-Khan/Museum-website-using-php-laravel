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
            <div class="col-md-8 col-md-offset-3">
<img src= "{{$item->pic}}" width="400"><br><hr>
	<h2 class="{{$font}}">Name: {{$item->itemName}}</h2>
	<h2 class="{{$font}}">Category: {{$item->catName}}</h2>
	<h2 class="{{$font}}">Code: {{$item->itemCode}}</h2><br>
	<p class="{{$font}}"><h2 class="{{$font}}">Information:</h2> {{$item->information}}<br></p>

 </div>
            </div>
        </div>
@endsection	
