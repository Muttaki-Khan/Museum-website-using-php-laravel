@extends('admin.master')

@section('title')
	Theme Manage
@endsection

@section('content-heading')
	Website Theme Control Area
	<br>
    {{ Session::get('message')}}
@endsection

@section('mainContent')
	
		

	<div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                    <a href="{{url('/theme/color/edit/'.$user)}}" class="button" style="color:white; width:25%"> Change Theme Color</a>
                                    </tr><br>

                                    <tr>
                                    <a href="{{url('/theme/logo/edit/'.$user)}}" class="button" style="color:white; width:25%">Change Logo</a>
                                    </tr><br>

                                    <tr>
                                    <a href="{{url('/theme/font/edit/'.$user)}}" class="button" style="color:white; width:25%">Change Font</a>
                                    </tr>


                                    <tr>
                                    <a href="{{url('/theme/textcolor/edit/'.$user)}}" class="button" style="color:white; width:25%">Change Font Color</a>
                                    </tr><br>

                                    <tr>
                                    <a href="{{url('/theme/image/edit/'.$user)}}" class="button" style="color:white; width:25%">Home Page Image</a>
                                    </tr>

                                    <tr>
                                    <a href="{{url('/theme/footimage/edit/'.$user)}}" class="button" style="color:white; width:25%">Footer Banner Image</a>
                                    </tr>

                                    <tr>
                                    <a href="{{url('/theme/mapimage/edit/'.$user)}}" class="button" style="color:white; width:25%">Change Map Image</a>
                                    </tr><br>

                                    <tr>
                                    <a href="{{url('theme/colablink/edit/'.$user)}}" class="button" style="color:white; width:25%">Google Colab</a>
                                    </tr>

                                </thead>


                             
                                
                            </table>
                         
                        </div>

@endsection
<style>
.button {
  display: inline-block;
  padding: 15px 25px;
  background:#005a57;
  margin: 9px;
  font-size: 19px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  border: none;
  border-radius: 15px;
  box-shadow: 0 5px #999;
}
</style>