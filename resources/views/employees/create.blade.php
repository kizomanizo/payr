@extends('layouts.dashboard')

@section('dashboard')
<h1 class="display-4">Add an employee</h1>
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
		<label for="name" class="col-sm-2 form-control-label">Title</label>
		<div class="col-xs-4">
			<label> Company
			<select id="company" name="company" class="form-control col-xs-4">
				<option value="">First pick a company here</option>
				@foreach($companies as $company)
					<option value="{{ $company->id }}">{{ $company->name }}</option>
				@endforeach
			</select>
			</label>	
		</div>

		<div class="col-xs-3">
		<label> Department
			<select id="department" name="department" class="department form-control col-xs-3">
					<option value="" class="col-xs-4">Then department here</option>
					<option value=""></option>
			</select>
		</label>	
		</div>

		<div class="col-xs-3">
			<label>Title
			<select id="title" name="title" class="form-control col-xs-3">
					<option value="">titles will load here</option>
			</select>
			</label>	
		</div>

	</div>

	<div class="form-group row">
		<label for="fname" class="col-sm-2 form-control-label">First Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="fname" name="fnamey" placeholder="First Name">
		</div>
	</div>

	<div class="form-group row">
		<label for="sname" class="col-sm-2 form-control-label">Second Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="sname" name="sname" placeholder="Second Name">
		</div>
	</div>

	<div class="form-group row">
		<label for="lname" class="col-sm-2 form-control-label">Last Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
		</div>
	</div>

	<div class="form-group row">
		<label for="pension" class="col-sm-2 form-control-label">Pension</label>
			<div class="col-sm-10 form-check">
			@foreach($pensions as $pension)
		  		<label class="form-check-label label-inline radio-inline">
		    	<input class="form-check-input" type="radio" name="pension"
	           id="pension" value="{{ $pension->id }}" checked>{{ $pension->name }}
	        	</label>&nbsp;&nbsp;
			@endforeach		
			</div>
	</div>

	<div class="form-group row">
		<label for="submit" class="col-sm-2 form-control-label"></label>
		<div class="col-sm-10">
		<button type="submit" class="btn btn-primary" id="submit">Add Employee</button>
		</div>
	</div>
</form>
<hr>

<script>
    $('#company').on('change', function(e){
        console.log(e);
        var company_id = e.target.value;
 
        $.get('{{ url('employees') }}/add-employees/ajax-state?company_id=' + company_id, function(data) {
            console.log(data);
            $('#department').empty();
            $.each(data, function(index,subCatObj){
                $('#department').append("<option value='"+subCatObj.id+"'>"+subCatObj.name+"</option>");
            });
        });
    });
</script>
<script>
    $('#department').on('change', function(e){
        console.log(e);
        var department_id = e.target.value;
 
        $.get('{{ url('employees') }}/add-employees/ajax-department?department_id=' + department_id, function(data) {
            console.log(data);
            $('#title').empty();
            $.each(data, function(index,subCatObj){
                $('#title').append("<option value='"+subCatObj.id+"'>"+subCatObj.name+"</option>");
            });
        });
    });
</script>
@endsection