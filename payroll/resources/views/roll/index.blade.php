@extends('layouts.app')


@section('content')
    <hr>	
		<h1 class="text-center">Roles</h1>	
	<hr> 

    <a href="{{route('roll.create')}}" class="btn btn-primary">Create </a>
		
	<table class= "table table-hover">
		<thead>
			<th>Name</th>
			<th>Department</th>
			<th>Salary</th>
			<th>Edit</th>
			<th>Trash</th>
		</thead>	
			
		<tbody>
			@if($roll->count()> 0)
				@foreach($roll as $roll)
					<tr>						
						<td>
							{{$roll->name}}
						</td>
						<td>
							{{$roll->department}}
						</td>
						<td>
							{{ $roll->salary }}
						</td>	
						<td>
                            <a href="{{route('roll.edit', $roll->id)}}" class="btn btn-xs btn-info">Edit</a>
						</td>
						<td>
							<a href="{{route('roll.destroy', $roll->id)}}" class="btn btn-xs btn-danger">Delete</a>

						</td>
					</tr>
				@endforeach
			@else
				<tr> 
					<th colspan="5" class="text-center">Empty</th>
				</tr>
			@endif
		</tbody>
	</table>
    <div class="text-center">rolllinks</div>
@endsection