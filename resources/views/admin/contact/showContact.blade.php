@extends('admin.master')

@section('title')
	Contact
@endsection

@foreach($contact as $contact)
@endforeach

@section('content-heading')
	Contact Info

<script>
  function confirmToDelete(){
    var var1 = confirm("Are you sure to delete this permanently?");
    if(var1 == true){
      return true;
    }
    else{
      return false;
    }
  }
</script>
	<div class="text-right">
		<a href="{!! route('contact.edit', ['id'=>$contact->id]) !!}" class="btn btn-info">Edit</a>
		<a href="{!! route('contact.delete', ['id'=>$contact->id]) !!}" class="btn btn-danger" onclick="return confirmToDelete()">Delete</a>
	</div>	
	
@endsection

@section('mainContent')
					<div class="section-title relative">
						<h2>
							Address:<br>
						</h2>
						<div class="mb-20">	
							<p>{{ $contact->address }}</p>
						</div>
						<h2>
							Number:<br>
						</h2>
						<div class="mb-20">
							<p>{{ $contact->contact1 }}</p>
							<p>{{ $contact->contact2 }}</p>
							<p>{{ $contact->contact3 }}</p>
						</div>
						<h2>
							Email:<br>
						</h2>
						<div class="mail">
							<p>{{ $contact->email1 }}</p>
							<p>{{ $contact->email3 }}</p>
						</div>
					</div>
@endsection