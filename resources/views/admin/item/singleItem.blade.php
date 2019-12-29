@extends('admin.master')

@section('title')
	Item View
@endsection

@section('content-heading')
	Item Details

@endsection

@section('mainContent')
	<img src="{{asset($item->pic)}} " width="300"><br><hr>
	<h4>Name:</h4>{{$item->itemName}}<br>
	<h4>Category:</h4>{{$item->catName}}<br>
	<h4>Code:</h4>{{$item->itemCode}}<br>
	<p><h4>Information:</h4>{{$item->information}}<br></p>


@endsection	