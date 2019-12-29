@extends('admin.master')

@section('title')
	staff View
@endsection

@section('content-heading')
	staff Details

@endsection

@section('mainContent')
	<img src="{{asset($staff->pic)}} " width="300"><br><hr>
	<h4>Name:</h4>{{$staff->staffName}}<br>
	
	<h4>Rank:</h4>{{$staff->staffRank}}<br>
	<p><h4>Email:</h4>{{$staff->Email}}<br></p>


@endsection	