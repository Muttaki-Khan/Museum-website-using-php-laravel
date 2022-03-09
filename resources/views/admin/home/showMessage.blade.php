@extends('admin.master')

@section('title')
	Message
@endsection

@section('content-heading')
	Unread Messages
	
@endsection
@section('mainContent')

                <div class="card">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                          <th scope="col">Serial</th>
                                          <th scope="col">Name</th>
                                          <th scope="col">Email</th>
                                          <th scope="col">Mobile</th>
                                          <th scope="col">Message</th>
                                          <th scope="col">Action</th>                                     
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $i=0;
                                        ?>
                                      @if($msg->count() > 0)
                                        @foreach($msg as $msg)
                                        <tr>
                                            <th scope="row">{{ ++$i }}</th>

                                            <td>{{ $msg->name }}</td>
                                            <td>{{ $msg->email }}</td>
                                            <td>{{ $msg->mobile }}</td>
                                            <td>{{ $msg->message }}</td>
                                            <td>
                                                <a href="{!! route('msg.delete', ['id'=>$msg->id]) !!}" class="btn btn-success">Read</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                      @else
                                          <tr>
                                            <th colspan="5" class="text-center">No message yet</th>
                                          </tr>
                                      @endif
                                    </tbody>
                                </table>
                </div>

@endsection