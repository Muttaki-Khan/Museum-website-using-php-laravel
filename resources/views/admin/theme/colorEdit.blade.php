@extends('admin.master')

@section('title')
	color Edit
@endsection

@section('content-heading')
	color Edit
    <br>
    {{ Session::get('message')}}
@endsection

@section('mainContent')
		<div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                {!! Form::open(['url'=>'/theme/color/edit','method'=>'post', 'enctype'=>'multipart/form-data'])!!}

                                    
                                <label for="cars">Choose color:</label>

                                <select name="color" id="color">
                                <option value="blue-theme">Blue</option>
                                <option value="green-theme">Green</option>
                                <option value="red-theme">Red</option>
                                <option value="orange-theme">Orange</option>
                                <option value="purple-theme">Purple</option>
                                <option value="white-theme">White</option>
                                <option value="navy-theme">Navy Blue</option>
                                <option value="maroon-theme">Maroon</option>
                                <option value="brown-theme">Brown</option>
                                <option value="olive-theme">Olive</option>
                                <option value="pink-theme">Pink</option>
                                <option value="lime-theme">Lime</option>
                                <option value="magenta-theme">Magenta</option>
                                <option value="yellow-theme">Yellow</option>
                                <option value="cyan-theme">Cyan</option>
                                <option value="mint-theme">Mint</option>

                                <div class="form-group">

                                <input type="submit" class="btn btn-block btn-primary" >

                                </div>
                                {!! Form::close() !!}


                                </div>

                            </div>


@endsection