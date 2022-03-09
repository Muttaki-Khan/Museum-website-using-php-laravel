@extends('admin.master')

@section('title')
	Category
@endsection

@section('content-heading')
	Category

    <br>
    {{ Session::get('message')}}
@endsection

@section('mainContent')
	<div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    
                                    	{!! Form::open(['url'=>'/category/save','method'=>'post','role'=>'form'])!!}
                                        <div class="form-group">
                                            <label>Category Name</label>
                                            <input class="form-control" name="name">
                                        
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description" placeholder="Enter description"> </textarea>
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