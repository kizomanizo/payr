@extends('layouts.dashboard')

@section('dashboard')
<h1 class="display-4">Edit a title</h1>
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

<form action="{{ url('titles') }}/{{ $title->id }}" role="form" method="POST">
	{{ csrf_field() }}
	<div class="form-group row">
	<fieldset disabled="">
		<label for="department" class="col-sm-2 form-control-label">Department</label>
		<div class="col-sm-10">
			<select id="department" name="department" class="form-control">
					<option value="{{ $title->department_id }}" selected="">{{ $title->department->name }}</option>
			</select>
		</div>
	</fieldset>
	</div>
	<div class="form-group row">
		<label for="name" class="col-sm-2 form-control-label">Title Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ $title->name }}">
		</div>
	</div>
	<div class="form-group row">
		<label for="salary" class="col-sm-2 form-control-label">Salary</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="salary" name="salary" placeholder="Salary" value="{{ $title->salary }}">
		</div>
	</div>
	<div class="form-group row">
		<label for="submit" class="col-sm-2 form-control-label"></label>
		<div class="col-sm-10">
		<button type="submit" class="btn btn-primary" id="submit">Edit title</button>
		</div>
	</div>
	<input type="hidden" name="created_at" id="created_at" value="{{ $title->created_at }}">
	<input type="hidden" name="id" id="id" value="{{ $title->id }}">
	{{ method_field('PUT') }}
</form>
<hr>
@endsection