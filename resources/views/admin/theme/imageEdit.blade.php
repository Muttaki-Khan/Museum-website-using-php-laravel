@extends('admin.master')

@section('title')
	Image entry
@endsection

@section('content-heading')
	Home page image slideshow

    <br>
    {{ Session::get('message')}}
@endsection

@section('mainContent')
	<div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                       {!! Form::open(['url'=>'/theme/image/edit','method'=>'post', 'enctype'=>'multipart/form-data'])!!}

                                        <div class="form-group">
                                            
                                            <strong>Slideshow images</strong><br>
                                            <strong>Recommended Size is 50KB-200KB</strong><br>
                                            <strong>Recommended Dimesion 700x400</strong><br>


                                            <label>Choose Image 1</label>
                                            <input type="file" name="img1">
                                            <label>Choose Image 2</label>
                                            <input type="file" name="img2">
                                            <label>Choose Image 3</label>
                                            <input type="file" name="img3">


                                        </div>                                        
                                        <div class="form-group">
                                        	<input type="submit" class="btn btn-block btn-primary">
                                        </div>	
                                        </div>
                                        
                                    {!! Form::close() !!}
                                </div>
                            </div>

@endsection