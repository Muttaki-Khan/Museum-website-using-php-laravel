@extends('admin.master')

@section('title')
	exhibition Manage
@endsection

@section('content-heading')
	Event Manage
	<br>
    {{ Session::get('message')}}
@endsection

@section('mainContent')
	
		

	<div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SI.</th>
                                        <th>Announcement</th>
                                      
                                       
                                        <th>Control</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php 
                                		$i=0;

                                	 ?>
                                	@foreach($exhibition as $singleexhibition)
                                    <tr class="odd gradeX">
                                        <td>{{++$i}}</td>
                                        <td>{{$singleexhibition->introduction}} </td>
										

                                        
                                        <td class="center"><a href="{{url('/exhi/edit/'.$singleexhibition->id)}}"></a>|<a href="{{url('/exhi/delete/'.$singleexhibition->id)}}">Delete</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                         
                        </div>

@endsection