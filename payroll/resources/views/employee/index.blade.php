@extends('layouts.app')


@section('content')

	<hr>	
		<h1 class="text-center">Employees</h1>	
	<hr> 
        <a href="{{route('employee.create')}}" class="btn btn-primary">Create</a>
	
	<br>
	<br>
	<table class= "table table-hover" id="filterTable">
		<thead>					
			<th>Name</th>
			<th>Email</th>
			<th>Role</th>
			<th>Edit</th>	
			<th>Trash</th>
		</thead>		
			
		<tbody>
			@if($employees->count()> 0)
				@foreach($employees as $employee)
					<tr>
                        <td>
							{{$employee->name}}
						</td>								
                        <td>
							{{$employee->email}}
						</td>
                        <td>
							{{$employee->role}}
						</td>
						<td>
                            <a href="{{route('employee.edit', $employee->id)}}">edit</a>
						</td>
						<td>
							<a href="{{route('employee.destroy', $employee->id)}}" class="btn btn-danger">Bin</a>
						</td>
						<td>
                            <a href="{{route('roll.show', $employee->id)}}">Payroll Show</a>
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
    <div class="text-center">EmployeesLinks</div>
@endsection