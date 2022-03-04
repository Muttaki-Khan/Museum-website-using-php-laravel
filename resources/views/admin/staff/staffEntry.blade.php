@extends('admin.master')

@section('title')
	staff Entry
@endsection

@section('content-heading')
	staff Entry
	<hr>
    <h4 style="color: green;">{{Session::get('message')}}</h4>

@endsection

@section('mainContent')
    <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    
                                        {!! Form::open(['url'=>'/staff/entry','method'=>'post','enctype'=>'multipart/form-data'])!!}
                                        <div class="form-group">
                                            <label>staff Name</label>
                                            <input type="text" class="form-control" name="name">
                                        
                                        </div>
                                        
                                       <div class="form-group">
                                            <label>staff Rank</label>
                                            <input class="form-control" name="rank">
                                        
                                        </div>
                                         <div class="form-group">
                                            <label>Picture</label>
                                            <input type="file" class="form-control" name="pic">
                                        
                                        </div>
                                        <div class="form-group">
                                        <input type="hidden"  name="user_id">
                                        </div>




                                        <div class="form-group">
                                            <label>Email</label>
                                            <textarea class="form-control" name="email" placeholder="Enter email"> </textarea>
                                        </div>

                                        
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-block btn-primary">
                                        </div>  
                                     {!! Form::close() !!}
                                </div>
                            </div>
                            </div>

@endsection