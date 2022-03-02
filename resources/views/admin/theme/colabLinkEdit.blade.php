@extends('admin.master')

@section('title')
	Colab Link
@endsection

@section('content-heading')
	Colab Link
    <br>
    {{ Session::get('message')}}
@endsection

@section('mainContent')
		<div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                {!! Form::open(['url'=>'/theme/colablink/edit','method'=>'post', 'enctype'=>'multipart/form-data'])!!}

                                    
                                <div class="form-group">
                                            <label>Colab Link</label>
                                            <textarea class="form-control" name="colablink" placeholder="Enter description"> </textarea>
                                        </div>
                                         

                                <div class="form-group">

                                <input type="submit" class="btn btn-block btn-primary">

                                </div>
                                {!! Form::close() !!}


                                </div>

                            </div>


@endsection