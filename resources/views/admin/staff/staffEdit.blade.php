@extends('admin.master')

@section('title')
	staff Edit
@endsection

@section('content-heading')
	staff Edit

@endsection

@section('mainContent')
    <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    
                                        {!! Form::open(['url'=>'/staff/edit','method'=>'post', 'enctype'=>'multipart/form-data' , 'name'=> 'staffEditForm' ])!!}
                                        <div class="form-group">
                                            <label>staff Name</label>
                                            <input type="text" class="form-control"
                                             value="{{$staff->staffName}}"  name="name">
                                        
                                        </div>
                                        
                                       <div class="form-group">
                                            <label>staff Rank</label>
                                            <input class="form-control"
                                             value="{{$staff->staffRank}}"
                                           name="rank">
                                        
                                        </div>
                                         <div class="form-group">
                                            <label>Picture</label>
                                            <input type="file" class="form-control" name="pic">
                                        
                                        </div>



                                        <div class="form-group">
                                            <label>Email</label>
                                            <textarea class="form-control"
                                          

                                            name="email" placeholder="Enter email">{{$staff->Email}} </textarea>
                                        </div>

                                        <input type="hidden" name="staff_id" value="{{$staff->id}}">
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-block btn-primary">
                                        </div>  
                                    {!! Form::close() !!}
                                </div>
                                <script type="text/javascript">
                                    	document.forms['staffEditForm'].elements['staffId'].value='{{$staff->staffId}}'</script>
                            </div>
                            </div>

@endsection