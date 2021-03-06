@extends('layouts.app')


@section('content')
	<div class="col-lg-12">
		<h1 class="page-header">New Employee</h1>
	</div>
	
	<form action="{{ route('employee.store') }}" method="POST">
			{{ csrf_field() }}
		
		<div class="form-group col-md-6">
			<label for="name">Name: </label>
			<input type="text" name="name" class="form-control">		
		</div>
		
		<div class="form-group col-md-6">
			<label for="email">Email: </label>
			<input type="email" name="email" class="form-control">		
		</div>
		
		<div class="form-group col-md-12">
			<label for="street">Street: </label>
			<input type="text" name="street" class="form-control">		
		</div>
		
		<div class="form-group col-md-6">
			<label for="town">Town: </label>
			<input type="text" name="town" class="form-control">		
		</div>
		
		<div class="form-group col-md-4">
			<label for="city">City: </label>
			<input type="text" name="city" class="form-control">		
		</div>
		
		<div class="form-group col-md-2">
			<label for="country">Country: </label>
			<input type="text" name="country" class="form-control">		
		</div>		
				
		<div class="form-group col-md-6">
			<label for="role">Select a Role</label>
			<select name="roll_name"  cols="5" rows="5" class="form-control">
				@foreach($roll as $roll)
					<option value="{{ $roll->name}}">{{ $roll->name }}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group col-md-6">
			<label for="role">Select a Department</label>
			<select name="department"  cols="5" rows="5" class="form-control">
				@foreach($departments as $department)
					<option value="{{ $department->name}}">{{ $department->name }}</option>
				@endforeach
			</select>
		</div>
		
		<div class="form-group col-md-6">
			<label for="full_time">Position:</label>
			<select id="full_time" name="position" class="form-control">
				<option value="Full-Time">Full-Time</option>
				<option value="Part-Time">Part-Time</option>					
			</select>
		</div>
		
		<div class="text-center">
			<button class="btn btn-success" type="submit" >Create</button>
		</div>
	</form>

	@endsection