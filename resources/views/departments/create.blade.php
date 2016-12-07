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

<form action="{{ url('departments') }}" role="form" method="post">
	{{ csrf_field() }}
	<div class="form-group row">
		<label for="name" class="col-sm-2 form-control-label">Company</label>
		<div class="col-sm-10">
			<select id="company" name="company" class="form-control">
				@foreach($companies as $company)
					<option value="{{ $company->id }}">{{ $company->name }}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="form-group row">
		<label for="name" class="col-sm-2 form-control-label">Dept Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" placeholder="Name">
		</div>
	</div>
	<div class="form-group row">
		<label for="submit" class="col-sm-2 form-control-label"></label>
		<div class="col-sm-10">
		<button type="submit" class="btn btn-primary" id="submit">Add Department</button>
		</div>
	</div>
</form>
<hr>
@endsection