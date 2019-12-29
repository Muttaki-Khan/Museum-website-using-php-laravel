@extends('admin.master')

@section('title')
	About Edit
@endsection

@section('content-heading')
	About Edit
	
@endsection

@section('mainContent')
		<div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    
                                    	{!! Form::open(['url'=>'/about/edit','method'=>'post', 'name'=>'editForm' ,'role'=>'form'])!!}
                                        <div class="form-group">
                                            <label>Introduction</label>
                                            <textarea class="form-control" name="introduction"  placeholder="Enter description"> {{$about->introduction}} </textarea>
                                        
                                        </div>
                                        <div class="form-group">
                                            <label>Goals</label>
                                            <textarea class="form-control" name="goals"  placeholder="Enter description"> {{$about->goals}} </textarea>
                                        </div>
                                        

                                        

                                        </div>
                                        <div class="form-group">
                                        	<input type="submit" class="btn btn-block btn-primary">
                                        </div>	
                                    {!! Form::close() !!}
                                    <script type="text/javascript">
                                        document.forms['aboutEditForm'].elements['aboutId'].value='{{$about->aboutId}}'</script>

                                    
                                </div>
                            </div>


@endsection