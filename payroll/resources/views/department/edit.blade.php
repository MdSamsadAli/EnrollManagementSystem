@extends('layouts.app')

@section('content')
	
<div class="panel panel-default col-lg-8">
	<div class="panel-heading">
		<b>Edit Department</b> {{$department->name}}
   </div>
   <div class="panel-body">
		<form action ="{{route('department.update', $department->id)}}" method="POST">
			@csrf
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" class="form-contorl" value="{{$department->name}}">
			</div>
			
			<div class="form-group">
				<div class="text-center">
					<button class ="btn.btn.success" type="submit">Update Department</button>
				</div>
			</div>
			
		</form>	
	</div>
</div>

@endsection