@extends('admin.master')

@section('title')
	Item Edit
@endsection

@section('content-heading')
	Item Edit

@endsection

@section('mainContent')
    <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    
                                        {!! Form::open(['url'=>'/item/edit','method'=>'post', 'enctype'=>'multipart/form-data' , 'name'=> 'itemEditForm' ])!!}
                                        <div class="form-group">
                                            <label>Item Name</label>
                                            <input type="text" class="form-control"
                                             value="{{$item->itemName}}"  name="name">
                                        
                                        </div>
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select name="categoryId" class="form-control">
                                            @foreach($categories as $category)    
                                            <option value='{{$category->id}}'>{{$category->categoryName}}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                       <div class="form-group">
                                            <label>Item Code</label>
                                           <input class="form-control"
                                             value="{{$item->itemCode}}"
                                           name="code">
                                        
                                        </div>
                                         <div class="form-group">
                                            <label>Picture</label>
                                            <input type="file" class="form-control" name="pic">
                                        
                                        </div>



                                        <div class="form-group">
                                            <label>Information</label>
                                            <textarea class="form-control"
                                          

                                            name="information" placeholder="Enter description">{{$item->information}} </textarea>
                                        </div>

                                        
                                        <input type="hidden" name="item_id" value="{{$item->id}}">
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-block btn-primary">
                                        </div>  
                                     {!! Form::close() !!}
                                </div>
                                <script type="text/javascript">
                                    	document.forms['itemEditForm'].elements['categoryId'].value='{{$item->categoryId}}'</script>
                            </div>
                            </div>

@endsection