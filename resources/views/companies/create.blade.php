@extends('layouts.dashboard')

@section('dashboard')
<h1 class="display-4">Add a new company</h1>
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

<form action="{{ url('companies') }}" role="form" method="POST">
	{{ csrf_field() }}
	<div class="form-group row">
		<label for="name" class="col-sm-2 form-control-label">Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" placeholder="Name">
		</div>
	</div>
	<div class="form-group row">
		<label for="address" class="col-sm-2 form-control-label">Address</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="address" name="address" placeholder="Address">
		</div>
	</div>
	<div class="form-group row">
		<label for="contacts" class="col-sm-2 form-control-label">Contacts</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="contacts" name="contacts" placeholder="Contacts">
		</div>
	</div>
	<div class="form-group row">
		<label for="submit" class="col-sm-2 form-control-label"></label>
		<div class="col-sm-10">
		<button type="submit" class="btn btn-primary" id="submit">Add Company</button>
		</div>
	</div>
</form>
<hr>
@endsection