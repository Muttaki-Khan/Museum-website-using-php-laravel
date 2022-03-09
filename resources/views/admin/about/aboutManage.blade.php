@extends('admin.master')

@section('title')
	About Manage
@endsection

@section('content-heading')
	About Manage
	<br>
    {{ Session::get('message')}}
@endsection

@section('mainContent')
	
		

	<div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SI.</th>
                                        <th>Introduction</th>
                                        <th>Goals</th>
                                       
                                        <th>Control</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php 
                                		$i=0;

                                	 ?>
                                	@foreach($about as $singleAbout)
                                    <tr class="odd gradeX">
                                        <td>{{++$i}}</td>
                                        <td>{{$singleAbout->introduction}} </td>
										<td>{{$singleAbout->goals}}</td>

                                        
                                        <td class="center"><a href="{{url('/about/edit/'.$singleAbout->id)}}"></a>|<a href="{{url('/about/delete/'.$singleAbout->id)}}">Delete</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                         
                        </div>

@endsection