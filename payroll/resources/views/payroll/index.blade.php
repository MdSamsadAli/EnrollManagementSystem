@extends('layouts.app')

@section('content')

	<div class="col-lg-12">
        <h1 class="page-header">Payroll: Employee Name
		{{-- <h1 class="page-header">Payroll : {{ $employee->name }}	 --}}
			{{-- <input type="text" id="filterInput" onkeyup="filterFunction()" placeholder="Search Employees...."> --}}
		{{-- </h1>	 --}}
	</div>
    <a href="{{route('payroll.create')}}" class="btn btn-primary">created</a>
	{{-- <a href="{{ route('payrolls.create', ['id'=>$employee->id]) }}" class="btn btn-primary">Create</a> --}}
    <a href="#" class="btn btn-danger">Recycle Bin </a>
	{{-- <a href="{{ route('payrolls.bin') }}" class="btn btn-danger">Recycle Bin</a> --}}

	<br>
	<br>

	{{-- @if($employee->full_time) --}}
		<p><b>Full-Time</b> :  Yes</p>
        <p><b>Base Salary</b>: salary</p>
		{{-- <p><b>Base Salary</b>: {{ $employee->role->salary }}</p> --}}
	{{-- @else --}}
		<p><b>Part-Time<b> : Yes</p>
		<br>
		<p><b>Base Salary<b>: 0</p>
	{{-- @endif --}}
		

	<br>

	<table class= "table table-hover" id="filterTable">
		<thead>	
			<th>Date-issued</td>
			<th>Over-Time</th>
			<th>Hours</th>
			<th>Rate</th>
			<th>Gross</th>
			<th>Download</th>
			<th>Edit</th>	
			<th>Trash</th>
		</thead>		
			
		<tbody>
			{{-- @if($employee->payrolls->count()> 0) --}}
				{{-- @foreach($employee->payrolls as $payroll) --}}
					<tr>		
						<td>
                            created_at-
                            {{-- {{ $payroll->created_at->toDateString() }} --}}
						<td>
                            Overtime
							{{-- @if($payroll->over_time) --}}
								<p><b>Yes</b></p>				
							{{-- @else --}}
								<p><b>No</b></p>							
							{{-- @endif			 --}}
						</td>
						{{-- <td>{{ $payroll->hours }}</td> --}}
                        <td>Hours</td>
						{{-- <td>{{ $payroll->rate }}</td> --}}
                        <td>rate</td>
						{{-- <td>{{ $payroll->gross }}</td> --}}
                        <td>gross</td>
						
						<td>
                            <a href="#" class="btn btn-info">pdf</a>
                            {{-- <a href="{{ route('singlepayroll.pdf', ['id'=>$payroll->id]) }}" class="btn btn-info">PDF</a> --}}
                        </td>
						<td>
                            <a href="#" class="btn btn-success">Edit</a>
							{{-- <a href="{{ route('payrolls.edit', ['id' => $payroll->id]) }}" class="btn btn-success">Edit</a> --}}
						</td>
						<td>
                            <form action="#">
							{{-- <form action="{{ route('payrolls.destroy', ['id' => $payroll->id]) }}" method="POST"> --}}
								{{-- {{csrf_field() }} --}}
								{{-- {{method_field('DELETE')}} --}}
								<button class="btn btn-danger">Bin</button>
							</form>
						</td>
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