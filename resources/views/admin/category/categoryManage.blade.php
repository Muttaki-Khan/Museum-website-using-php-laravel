@extends('admin.master')

@section('title')
	Category Manage
@endsection

@section('content-heading')
	Category Control Area
	<br>
    {{ Session::get('message')}}
@endsection

@section('mainContent')
	
		

	<div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SI.</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                       
                                        <th>Control</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php 
                                		$i=0;

                                	 ?>
                                	@foreach($category as $singleCategory)
                                    <tr class="odd gradeX">
                                        <td>{{++$i}}</td>
                                        <td>{{$singleCategory->categoryName}} </td>
										<td>{{$singleCategory->description}}</td>

                                        
                                        <td class="center"><a href="{{url('/category/edit/'.$singleCategory->id)}}">Edit</a>|<a href="{{url('/category/delete/'.$singleCategory->id)}}">Delete</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                         
                        </div>

@endsection