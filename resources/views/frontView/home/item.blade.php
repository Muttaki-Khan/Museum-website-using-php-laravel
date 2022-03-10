


@extends('frontView.master')

@section('title_area')
        Item
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


<?php 
    $i=0;
     ?>
    <div class="panel-body">
        <h1 class="{{$font}}" style="font-size:1.5vw;">Item</h1>
        
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th class="{{$font}}">SI.</th>
                                        <th class="{{$font}}">Item Name</th>
                                        <th class="{{$font}}">Category Name</th>
                                        <th class="{{$font}}">Code</th>
                                        <th class="{{$font}}">Picture</th>
                                        <th class="{{$font}}">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($items as $item)
                                    <tr>
                                        <td class="{{$font}}">{{++$i}}</td>
                                        <td class="{{$font}}">{{$item->itemName}}</td>
                                        <td class="{{$font}}">{{$item->catName}}</td>
                                        <td class="{{$font}}">{{$item->itemCode}}</td>
                                        <td><img src="{{$item->pic}}" width="180"alt-"no pic"></td>
                                         <td class="{{$font}}"><a href="{{url('/'.$item->id)}}">View</a> </td>

                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                        </div>
 
                        
@endsection