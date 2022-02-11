@extends('admin.master')

@section('title')
	Map Image entry
@endsection

@section('content-heading')
	Map Image 

    <br>
    {{ Session::get('message')}}
@endsection

@section('mainContent')
	<div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                       {!! Form::open(['url'=>'/theme/mapimage/edit','method'=>'post', 'enctype'=>'multipart/form-data'])!!}

                                        <div class="form-group">
                                            
                                            <strong>Slideshow images</strong><br>
                                            <input type="file" name="mapimage">
                                            

                                        </div>                                        
                                        <div class="form-group">
                                        	<input type="submit" class="btn btn-block btn-primary">
                                        </div>	
                                        </div>
                                        
                                    {!! Form::close() !!}
                                </div>
                            </div>

@endsection