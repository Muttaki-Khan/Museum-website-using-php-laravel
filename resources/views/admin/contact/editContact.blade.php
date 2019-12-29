@extends('admin.master')

@section('title')
	Contact
@endsection

@section('content-heading')
	Contact Edit
	
@endsection
@section('mainContent')

<!------ Include the above in your HEAD tag ---------->

<div class="container contact">
	<div class="row">
		<div class="col-md-6">
			<div class="contact-form">
				<form action="{{route('contact.update',['id'=> $contact->id]) }}" method="post">
					{{ csrf_field() }}
				<div class="form-group">
						<label for="inputNumber">Phone 1:</label>
						<input type="number" class="form-control" name="phn1" value="{{ $contact->contact1 }}">
				</div>
				<div class="form-group">
						<label for="inputNumber">Phone 2:</label>
						<input type="number" class="form-control" name="phn2" value="{{ $contact->contact2 }}">
				</div>
				<div class="form-group">
						<label for="inputNumber">Phone 3:</label>
						<input type="number" class="form-control" name="phn3" value="{{ $contact->contact3 }}">
				</div>
				<div class="form-group">
						<label for="inputEmail">Email 1:</label>
						<input type="email" class="form-control" name="email1" value="{{ $contact->email1 }}">
				</div>
				<div class="form-group">
						<label for="inputEmail">Email 2:</label>
						<input type="email" class="form-control" name="email2" value="{{ $contact->email3 }}">
				</div>
				<div class="form-group">
				  <label for="comment">Address:</label>
					<textarea class="form-control" rows="5" name="address" >{{ $contact->address }}</textarea>
				</div>
				<div class="form-group">        
				  	<div class="text-center">
						<button type="submit" class="btn btn-info">Submit</button>
					</div>
				</div>
			</form>
			</div>
		</div>
	</div>
</div>

@endsection