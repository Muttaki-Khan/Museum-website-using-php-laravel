@extends('admin.master')

@section('title')
	font Edit
@endsection

@section('content-heading')
	font Edit
    <br>
    {{ Session::get('message')}}
@endsection

@section('mainContent')
		<div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                {!! Form::open(['url'=>'/theme/font/edit','method'=>'post', 'enctype'=>'multipart/form-data'])!!}

                                <div class="form-group">

                                <label for="cars">Choose font:</label>

                                <select name="font" id="font">
                                <option value="font1">Times New Roman</option>
                                <option value="font2">Arial</option>
                                <option value="font3">Calibri</option>
                                <option value="font4">Arial Black</option>
                                <option value="font5">Cooper Black</option>
                                <option value="font6">Stencil</option>
                                </div>

                                <div class="form-group">
                                <input type="submit" value="Submit">

                                </div>
                                {!! Form::close() !!}

                                    
                                </div>
                            </div>


@endsection