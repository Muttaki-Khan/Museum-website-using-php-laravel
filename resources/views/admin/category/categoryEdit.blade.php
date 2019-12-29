@extends('admin.master')

@section('title')
	Category Edit
@endsection

@section('content-heading')
	Category Edit
	
@endsection

@section('mainContent')
		<div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    
                                    	{!! Form::open(['url'=>'/category/edit','method'=>'post', 'name'=>'editForm' ,'role'=>'form'])!!}
                                        <div class="form-group">
                                            <label>Category Name</label>
                                            <input class="form-control" name="name" value="{{$category->categoryName}}">
                                        
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description"  placeholder="Enter description"> {{$category->description}} </textarea>
                                        </div>
                                        

                                        <input type="hidden" name="categoryId" value='{{$category->id}}'>

                                        </div>
                                        <div class="form-group">
                                        	<input type="submit" class="btn btn-block btn-primary">
                                        </div>	
                                    {!! Form::close() !!}

                                    
                                </div>
                            </div>


@endsection