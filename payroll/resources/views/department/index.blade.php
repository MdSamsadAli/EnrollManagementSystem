@extends('layouts.app')
@section('content')
   <hr>	
	<h1 class="text-center">Departments</h1>	
	<hr>		
	<a href="{{route('department.create')}}" class="btn btn-primary">Create</a>
	<div class="flash-msg">
		@if(Session::has('msg'))
		<p style="background: green; color: white;">
			{{Session::get('msg')}}
		</p>
		@endif
	</div>
	<table class= "table table-hover">
		<thead>
			<th>Department name</th>			
			<th>Edit</th>			
			<th>Delete</th>							
		</thead>		
		<tbody>
			@if($departments->count() > 0)
				@foreach($departments as $department)
					<tr>
						<td>
							{{$department->name}}
						</td>
						<td>
                            <a href="{{route('department.edit', $department->id)}}" class="btn btn-xs btn-info">department Edit</a>
						</td>
						<td>
							<a href="{{route('department.destroy', $department->id)}}" class="btn btn-xs btn-danger">Delete</a>
						</td>
					</tr>
				@endforeach
			@else
				<tr> 
					<th colspan="5" class="text-center">No Departments yet</th>
				</tr>
			@endif		
		</tbody>	
	</table>

	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
		<script>
		setTimeout((event) => {
			$(".flash-msg").slideUp();
		}, 2000);

		</script>
@endsection