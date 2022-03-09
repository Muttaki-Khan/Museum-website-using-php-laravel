@extends('admin.master')

@section('title')
	exhibition Edit
@endsection

@section('content-heading')
	Event Edit
	
@endsection

@section('mainContent')
		<div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    
                                    	{!! Form::open(['url'=>'/exhi/edit','method'=>'post', 'name'=>'editForm' ,'role'=>'form'])!!}
                                        <div class="form-group">
                                            <label>Announcement</label>
                                            <textarea class="form-control" name="introduction"  placeholder="Enter description"> {{$exhibition->introduction}} </textarea>
                                        
                                        </div>
                                        
                                        

                                        

                                        </div>
                                        <div class="form-group">
                                        	<input type="submit" class="btn btn-block btn-primary">
                                        </div>	
                                    {!! Form::close() !!}
                                    <script type="text/javascript">
                                        document.forms['exhibitionEditForm'].elements['exhibitionId'].value='{{$exhibition->exhibitionId}}'</script>

                                    
                                </div>
                            </div>


@endsection