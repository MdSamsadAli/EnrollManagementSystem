@extends('layouts.app')


@section('content')

	<div class="panel panel-default">
		<div class="panel-heading">
			Edit Role : 
		</div>
	   
	   <div class="panel-body">
			<form action ="{{ route('roll.update', $roll->id)}}" method="POST">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" value="{{$roll->name}}" class="form-control">
				</div>
				
				<div class="form-group">
					<label for="salary">Salary</label>
					<input type="number" name="salary" value="{{$roll->salary}}" class="form-control">
				</div>
				
				<div class="form-group">
					<label for="department">Select a department</label>
					<select name="department_name" id="department"  cols="5" rows="5" class="form-control">
						@foreach ($departments as $department)
						<option value="{{ $department->name }}"
							selected							
					   >{{ $department->name }}
					</option>
						@endforeach
							
					</select>
				</div>
				
				<div class="form-group">
					<div class="text-center">
						<button class ="btn.btn.success" type="submit">Update</button>
					</div>
				</div>
			</form>	
	    </div>
	</div>
    
@endsection

