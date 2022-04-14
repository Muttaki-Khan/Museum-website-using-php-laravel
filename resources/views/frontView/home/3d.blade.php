@extends('frontView.master')

@section('title_area')
		Staff
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
<div class="panel-body">
<form action="https://sketchfab.com/3d-models/mandarin-duck-kendi-um-31503e7195594b9bad11c676ad83b247" target="_blank">
     <p class="{{$font}}"> Muzium Seni Asia, UM <input type="submit" value="Model 1"  /></p><br>
</form>

<form action="https://sketchfab.com/3d-models/avoidbodykendium-7d8935457f6e4baca74e77594dc64391" target="_blank">
     <p class="{{$font}}"> Muzium Seni Asia, UM <input type="submit" value="Model 2" /></p><br>
</form>

<form action="https://sketchfab.com/3d-models/texturedmesh-361c129ad7684e60916b1287919b4af9" target="_blank">
     <p class="{{$font}}"> Perbadanan Adat Melayu & Warisan Negeri Selangor  <input type="submit" value="Model 1" /></p><br>
</form>


</div>
@endsection