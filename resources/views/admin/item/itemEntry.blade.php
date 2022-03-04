@extends('admin.master')

@section('title')
	Item Entry
@endsection

@section('content-heading')
	Item Entry
	<hr>
    <h4 style="color: green;">{{Session::get('message')}}</h4>

@endsection

@section('mainContent')
    <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    
                                        {!! Form::open(['url'=>'/item/entry','method'=>'post','enctype'=>'multipart/form-data'])!!}
                                        <div class="form-group">
                                            <label>Item Name</label>
                                            <input type="text" class="form-control" name="name">
                                        
                                        </div>
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select name="categoryId" class="form-control">
                                            @foreach($categories as $category)    
                                            <option value='{{$category->id}}'>{{$category->categoryName}}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                       <div class="form-group">
                                            <label>Item Code</label>
                                            <input class="form-control" name="code">
                                        
                                        </div>
                                         <div class="form-group">
                                            <label>Picture</label>
                                            <input type="file" class="form-control" name="pic">
                                        
                                        </div>

                                        <div class="form-group">
                                        <input type="hidden"  name="user_id">
                                        </div>


                                        <div class="form-group">
                                            <label>Information</label>
                                            <textarea class="form-control" name="information" placeholder="Enter description"> </textarea>
                                        </div>

                                        
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-block btn-primary">
                                        </div>  
                                     {!! Form::close() !!}
                                </div>
                            </div>
                            </div>

@endsection