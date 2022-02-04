@extends('admin.master')

@section('title')
	Text color Edit
@endsection

@section('content-heading')
	Text color Edit
    <br>
    {{ Session::get('message')}}
@endsection

@section('mainContent')
		<div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                {!! Form::open(['url'=>'/theme/textcolor/edit','method'=>'post', 'enctype'=>'multipart/form-data'])!!}

                                    
                                <label for="cars">Choose color:</label>

                                <select name="textcolor" id="textcolor">
                                <option value="textcolor1 ">White</option>
                                <option value="textcolor2  ">Black</option>
                                <option value="textcolor3 ">Green</option>
                                <option value="textcolor4 ">Orange</option>
                                <option value="textcolor5  ">Purple</option>
                                <option value="textcolor6 ">Blue</option>
                                <option value="textcolor7 ">Light blue</option>

                                <div class="form-group">

                                <input type="submit" class="btn btn-block btn-primary">

                                </div>
                                {!! Form::close() !!}


                                </div>

                            </div>


@endsection