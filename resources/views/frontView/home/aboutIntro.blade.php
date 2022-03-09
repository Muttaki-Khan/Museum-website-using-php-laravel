@extends('frontView.master')

@section('title_area')
		About
@endsection

@section('css_js')
		<link href="{{ asset('frontEnd') }}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- pignose css -->
<link href="{{ asset('frontEnd') }}/css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />


<!-- //pignose css -->
<link href="{{ asset('frontEnd') }}/css/style1.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="{{ asset('frontEnd') }}/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- cart -->
	<script src="{{ asset('frontEnd') }}/js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
	<script type="text/javascript" src="{{ asset('frontEnd') }}/js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="{{ asset('frontEnd') }}/js/jquery.easing.min.js"></script>	

@endsection

@section('feature')
		
	<div class="panel-body">
		      <font face = "Times New Roman" class="{{$font}}" size = "5" style="font-size:1.5vw;">Introduction</font><br/>

		
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                    @foreach($aboutIntro as $singleAbout)
                                    <tr class="odd gradeX">
                                        <td><h4 class="{{$font}}">{{$singleAbout->introduction}}</h4> </td>

                                        
                                        
                                    </tr>
                                    @endforeach

                                        
                                    </tr>
                                </thead>
                               

                               
                            </table>
                            
                        </div>
@endsection