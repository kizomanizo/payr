@extends('layouts.dashboard')

@section('dashboard')
<h1 class="display-4">Add department</h1>
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

<form action="{{ url('departments/editdepartment') }}/{{ $department->id }}" role="form" method="POST">
	{{ csrf_field() }}
	<div class="form-group row">
	<fieldset disabled="">
		<label for="company" class="col-sm-2 form-control-label">Company</label>
		<div class="col-sm-10">
			<select id="company" name="company" class="form-control">
					<option value="{{ $department->company_id }}" selected="">{{ $department->company->name }}</option>
			</select>
		</div>
	</fieldset>
	</div>
	<div class="form-group row">
		<label for="name" class="col-sm-2 form-control-label">Dept Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ $department->name }}">
		</div>
	</div>
	<div class="form-group row">
		<label for="submit" class="col-sm-2 form-control-label"></label>
		<div class="col-sm-10">
		<button type="submit" class="btn btn-primary" id="submit">Edit Department</button>
		</div>
	</div>
	<input type="hidden" name="user" id="user" value="{{ $department->user_id }}">
	<input type="hidden" name="created_at" id="created_at" value="{{ $department->created_at }}">
	<input type="hidden" name="id" id="id" value="{{ $department->id }}">
	{{ method_field('PUT') }}
</form>
<hr>
@endsection