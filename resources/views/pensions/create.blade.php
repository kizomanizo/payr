@extends('layouts.dashboard')

@section('dashboard')
<h1 class="display-4">Add pension</h1>
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

<form action="{{ url('pensions') }}" role="form" method="POST">
	{{ csrf_field() }}

	<div class="form-group row">
		<label for="name" class="col-sm-2 form-control-label">Pension Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" placeholder="Pension Name">
		</div>
	</div>
	<div class="form-group row">
		<label for="rate" class="col-sm-2 form-control-label">Deduction Rate</label>
		<div class="col-sm-10">
			<div class="input-group">
				<input type="text" class="form-control" id="rate" name="rate" placeholder="e.g. 10 for 10%">
				<span class="input-group-addon">%</span>
			</div>	
		</div>
	</div>
	<div class="form-group row">
		<label for="submit" class="col-sm-2 form-control-label"></label>
		<div class="col-sm-10">
		<button type="submit" class="btn btn-primary" id="submit">Add Pension</button>
		</div>
	</div>
</form>
<hr>
@endsection