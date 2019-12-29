@extends('admin.master')

@section('title')
	Item Manage
@endsection

@section('content-heading')
	Item Manage
    <hr>
    <h3 style="color: green;">{{Session::get('message')}}</h3>

@endsection

@section('mainContent')
	

	
	<?php 
	$i=0;
	 ?>
	<div class="panel-body">
		Total item: {{$items->total()}}<br>
		Item per page: {{$items->perPage()}}<br>
		Item on this page: {{$items->count()}}<br>
		Page no: {{$items->currentPage()}}<br>
		Item from {{$items->firstItem()}} to {{$items->lastItem()}}<br>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SI.</th>
                                        <th>Item Name</th>
                                        <th>Category Name</th>
                                        <th>Code</th>
                                        <th>Picture</th>
                                        <th>Information</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($items as $item)
                                	<tr>
                                		<td>{{++$i}}</td>
                                		<td>{{$item->itemName}}</td>
                                		<td>{{$item->catName}}</td>
                                		<td>{{$item->itemCode}}</td>
                                		<td><img src="{{asset($item->pic)}}" width="60"alt-"no pic"></td>
                                		
                                		<td>{{$item->information}}</td>
                                		<td><a href="{{url('/item/view/'.$item->id)}}" target="_blank">View</a></td>
                                		
                                	</tr>
                                	@endforeach
                                </tbody>
                            </table>
                            {{$items->links()}}
                        </div>
@endsection