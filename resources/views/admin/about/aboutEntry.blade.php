@extends('admin.master')

@section('title')
	About Entry
@endsection

@section('content-heading')
	About Entry

    <br>
    {{ Session::get('message')}}
@endsection

@section('mainContent')
	<div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    
                                    	{!! Form::open(['url'=>'/about/entry','method'=>'post','role'=>'form'])!!}
                                         <div class="form-group">
                                            <label>Introduction</label>
                                            <textarea class="form-control" name="introduction" placeholder="Enter description"> </textarea>
                                        </div>
                                         <div class="form-group">
                                            <label>Goals</label>
                                            <textarea class="form-control" name="goals" placeholder="Enter description"> </textarea>
                                        </div>
                                        <div class="form-group">
                                        <input type="hidden"  name="user_id">
                                        </div>

                                        
                                        <div class="form-group">
                                        <input type="submit" class="btn btn-block btn-primary">
                                        </div>	
                                    {!! Form::close() !!}
                                </div>
                            </div>

                            
                        
@endsection