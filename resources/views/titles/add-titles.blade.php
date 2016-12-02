@extends('layouts.dashboard')

@section('dashboard')
<h1 class="display-4">Add title</h1>
<hr>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ url('titles/addtitle') }}" role="form" method="POST">
	{{ csrf_field() }}
	<div class="form-group row">
		<label for="name" class="col-sm-2 form-control-label">Department</label>
		<div class="col-sm-10">
			<select id="department" name="department" class="form-control">
				@foreach($department as $department)
					<option value="{{ $department->id }}">{{ $department->name }}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="form-group row">
		<label for="name" class="col-sm-2 form-control-label">Title Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" placeholder="Name">
		</div>
	</div>
	<div class="form-group row">
		<label for="salary" class="col-sm-2 form-control-label">Salary</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="salary" name="salary" placeholder="Salary">
		</div>
	</div>
	<div class="form-group row">
		<label for="submit" class="col-sm-2 form-control-label"></label>
		<div class="col-sm-10">
		<button type="submit" class="btn btn-primary" id="submit">Add title</button>
		</div>
	</div>
	<input type="hidden" name="user" id="user" value="{{ Auth::user()->id }}">
</form>
<hr>
@endsection