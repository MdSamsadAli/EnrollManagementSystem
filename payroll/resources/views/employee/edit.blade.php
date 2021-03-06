@extends('layouts.app')


@section('content')

	<div class="col-lg-12">
		<h1 class="page-header">Update Employee: {{ $employees->name }}</h1>
	</div>
		
	<form action="{{ route('employee.update', $employees->id)}}" method="POST">
			{{ csrf_field() }}
			
		<div class="form-group col-md-6">
			<label for="name">Name: </label>
			<input type="text" name="name" value="{{$employees->name}}" class="form-control">		
		</div>
		
		<div class="form-group col-md-6">
			<label for="email">Email: </label>
			<input type="email" name="email" value="{{$employees->email}}" class="form-control">		
		</div>
		
		<div class="form-group col-md-12">
			<label for="street">Street: </label>
			<input type="text" name="street" value="{{ $employees->street}}" class="form-control">		
		</div>
		
		<div class="form-group col-md-6">
			<label for="town">Town: </label>
			<input type="text" name="town" value="{{ $employees->street }}" class="form-control">		
		</div>
		
		<div class="form-group col-lg-4">
			<label for="city">City: </label>
			<input type="text" name="city" value="{{ $employees->city}}" class="form-control">		
		</div>
		
		<div class="form-group col-md-2">
			<label for="country">Country: </label>
			<input type="text" name="country"  value= "{{ $employees->country}}" class="form-control">		
		</div>

		<div class="form-group col-md-2">
			<label for="country">Role: </label>
			<input type="text" name="role"  value= "{{ $employees->role}}" class="form-control">		
		</div>

		<div class="form-group col-md-2">
			<label for="country">Department: </label>
			<input type="text" name="department"  value= "{{ $employees->department}}" class="form-control">		
		</div>

		<div class="form-group col-md-2">
			<label for="country">Position: </label>
			<input type="text" name="position"  value= "{{ $employees->position}}" class="form-control">		
		</div>
		
		{{-- <div class="form-group col-lg-6">
			<label for="role">Select a Role</label>
			<select name="role_id"  cols="5" rows="5" class="form-control">
				@foreach($roles as $role)
					<option value="{{ $role->id}}"
						@if($employee->role->id == $role->id)
							selected							
						@endif						
					>{{ $role->name }}</option>
				@endforeach
			</select>
		</div> --}}
					
		{{-- <div class="form-group col-lg-6">
			<label for="full_time">Position:	</label>
			<select name="full_time" id="full_time" class="form-control">
				<option value="1">Full-Time</option>
				<option value="0">Part-Time</option>					
			</select>
		</div> --}}
		
		<div class="text-center">
			<button class="btn btn-success" type="submit" >Update Changes</button>
		</div>
	</form>

@endsection