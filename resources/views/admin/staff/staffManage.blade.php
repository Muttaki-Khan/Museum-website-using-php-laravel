@extends('admin.master')

@section('title')
	staff Manage
@endsection

@section('content-heading')
	staff Manage
    <hr>
    <h3 style="color: green;">{{Session::get('message')}}</h3>

@endsection

@section('mainContent')
	

	
	<?php 
	$i=0;
	 ?>
	<div class="panel-body">
		
		
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SI.</th>
                                        <th>Name</th>
                                        
                                        <th>Rank</th>
                                        <th>Picture</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $i=0;

                                     ?>
                                    @foreach($staff as $singlestaff)
                                    <tr class="odd gradeX">
                                        <td>{{++$i}}</td>
                                        <td>{{$singlestaff->staffName}} </td>
                                        <td>{{$singlestaff->staffRank}}</td>
                                        <td><img src="{{asset($singlestaff->pic)}}" width="60"alt-"no pic"></td>
                                        
                                        <td>{{$singlestaff->Email}}</td>

                                        
                                        <td class="center"><a href="{{url('/staff/edit/'.$singlestaff->id)}}">Edit</a>|<a href="{{url('/staff/delete/'.$singlestaff->id)}}">Delete</td>
                                    </tr>
                                    @endforeach
                                </tbody>

                               
                            </table>
                            
                        </div>
@endsection