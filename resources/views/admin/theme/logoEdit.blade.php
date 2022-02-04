@extends('admin.master')

@section('title')
	logo Entry
@endsection

@section('content-heading')
	logo Entry

    <br>
    {{ Session::get('message')}}
@endsection

@section('mainContent')
	<div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                       {!! Form::open(['url'=>'/theme/logo/edit','method'=>'post', 'enctype'=>'multipart/form-data'])!!}

                                        <div class="form-group">
                                            
                                            <strong>Logo</strong>
                                            <label>Choose Here</label>
                                            <input type="file" name="logo">


                                        </div>                                        
                                        <div class="form-group">
                                        	<input type="submit" class="btn btn-block btn-primary">
                                        </div>	
                                        </div>
                                        
                                    {!! Form::close() !!}
                                </div>
                            </div>

@endsection