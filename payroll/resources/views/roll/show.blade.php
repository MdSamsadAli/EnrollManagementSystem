@extends('layouts.app')


@section('content')
    <div class="col-lg-12">
		@foreach($roll as $roll)
		@if($roll->name == $employee->role)
			<h1 class="page-header">Role:{{$roll->name}} </h1>
			<h2>Salary: {{$roll->salary}}</h2>
		@endif
		@endforeach
	</div>
	<br>
	<table class= "table table-hover">
		<thead>
			<th>Employee</th>
			<th>Email</th>
			<th>Full-Time</th>
			<th>Department</th>
		</thead>
		<tbody>
			@if($roll->count() > 0)
				{{-- @foreach($roll as $roll) --}}
					<tr>
						{{-- @foreach($employees as $employee) --}}
							<td>{{ $employee->name }}</td>
							<td>{{ $employee->email }}</td>
						{{-- @endforeach --}}
						<td>
							fulltime
							{{-- @if($roll->full_time)
								<p> Yes</p>
							@else
								<p>Part-Time</p>
							@endif --}}
						</td>
						@foreach($departments as $department)
							<td>{{$department->name}}</td>
						@endforeach
					</tr>
				{{-- @endforeach --}}
			@else
				<tr> 
					<th colspan="5" class="text-center">No Employee assigned to this role yet</th>
				</tr>
			@endif		
		</tbody>	
	</table>
		
@endsection