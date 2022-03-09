@extends('admin.master')

@section('title')
	Footer Image entry
@endsection

@section('content-heading')
	Footer Image Banner

    <br>
    {{ Session::get('message')}}
@endsection

@section('mainContent')
	<div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                       {!! Form::open(['url'=>'/theme/footimage/edit','method'=>'post', 'enctype'=>'multipart/form-data'])!!}

                                        <div class="form-group">
                                            
                                            <strong>Slideshow images</strong><br>
                                            <strong>Recommended size 300KB-600KB</strong><br>

                                            <strong>Recommended Dimesion 600 Height x 1200 width</strong><br>

                                            <input type="file" name="footimg">
                                            

                                        </div>                                        
                                        <div class="form-group">
                                        	<input type="submit" class="btn btn-block btn-primary">
                                        </div>	
                                        </div>
                                        
                                    {!! Form::close() !!}
                                </div>
                            </div>

@endsection