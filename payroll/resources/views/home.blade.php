@extends('layouts.app')

@section('content')
	<hr>	
		<h1 class="text-center">Dashboard</h1>	
	<hr>
		
	<div class="col-lg-3 text-center">
		<div class="panel panel-default">
			<div class="panel-heading">Payroll issued</div>
			<div class="panel-body">payrollcount</div>		
		</div>
	</div>
	
	<div class="col-lg-3 text-center">
		<div class="panel panel-info">
			<div class="panel-heading">Employee Count</div>
			<div class="panel-body">{{$employees->count()}}</div>		
		</div>
	</div>
	
	<div class="col-lg-3 text-center">
		<div class="panel panel-primary">
			<div class="panel-heading">Role Count</div>
			<div class="panel-body">{{$rolls->count()}}</div>		
		</div>
	</div>
	
	<div class="col-lg-3 text-center">
		<div class="panel panel-success">
			<div class="panel-heading">Department</div>
			<div class="panel-body">{{$departments->count()}}</div>		
		</div>
	</div>
	
	<hr>
	
	<h3>Latest Employees</h3>
	
	<table class= "table table-hover">
		<thead>	
			<tr>
				<th>Date Added</td>
				<th>Name</th>
				<th>Email</th>
				<th>Role</th>
				<th>Department</th>
			</tr>
		</thead>		
			
		<tbody>
			@if($employees->count()> 0)
				@foreach($employees as $employee)
					{{-- @dd($employee) --}}
					<tr>		
						<td>
							{{$employee->created_at}}
						</td>
						<td>{{$employee->name}}</td>
						<td>{{$employee->email}}</td>
						<td>{{$employee->role}}</td>
						<td>{{$employee->department}}</td>
						
					</tr>
				@endforeach
			@else 
				<tr> 
					<th colspan="5" class="text-center">Empty</th>
				</tr>
			@endif
		</tbody>							
	</table>
	
	<hr>
	
	<h3>Latest issued payroll</h3>
	
	<table class= "table table-hover">
		<thead>	
			<tr>
				<th>Date-issued</td>
				<th>Name</th>
				<th>Over-Time</th>
				<th>Hours</th>
				<th>Rate</th>
				<th>Gross</th>
			</tr>
		</thead>		
			
		<tbody>
			{{-- @if($payrolls->count()> 0) --}}
				{{-- @foreach($payrolls as $payroll) --}}
					<tr>		
						<td>created_at</td>
						<td>employee_name </td>
						<td>
                            over_time
							{{-- @if($payroll->over_time)
								<p><b>Yes</b></p>				
							@else
								<p><b>No</b></p>							
							@endif				 --}}
						</td>
                        <td>Hours</td>
                        <td>Hours</td>
                        <td>Hours</td>
					</tr>
				{{-- @endforeach --}}
			{{-- @else --}}
				<tr> 
					<th colspan="5" class="text-center">Empty</th>
				</tr>
			{{-- @endif --}}
		</tbody>							
	</table>
@endsection

