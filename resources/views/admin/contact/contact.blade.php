@extends('admin.master')

@section('title')
	Contact
@endsection

@section('content-heading')
	Contact
	
@endsection

@section('mainContent')

<!------ Include the above in your HEAD tag ---------->

<div class="container contact">
	<div class="row">
		<div class="col-md-6">
			<div class="contact-form">
				<form action="{{url('newInfo2')}}" method="post">
					{{ csrf_field() }}
				<div class="form-group">
						<label for="inputNumber">Phone 1:</label>
						<input type="number" class="form-control" name="phn1" required>
				</div>
				<div class="form-group">
						<label for="inputNumber">Phone 2:</label>
						<input type="number" class="form-control" name="phn2" required>
				</div>
				<div class="form-group">
						<label for="inputNumber">Phone 3:</label>
						<input type="number" class="form-control" name="phn3" required>
				</div>
				<div class="form-group">
						<label for="inputEmail">Email 1:</label>
						<input type="email" class="form-control" name="email1" required>
				</div>
				<div class="form-group">
						<label for="inputEmail">Email 2:</label>
						<input type="email" class="form-control" name="email2" required>
				</div>
				
				<div class="form-group">
				  <label for="comment">Address:</label>
					<textarea class="form-control" rows="5" name="address"></textarea>
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