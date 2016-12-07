@extends('layouts.dashboard')

@section('dashboard')
<h1 class="display-4">All Employees</h1>
<hr>
	@foreach ($employees as $employee)
	<span class="lead text-primary"><strong>{{ $employee->fname }}&nbsp;{{ $employee->lname }}</strong></span>
	<ul class="list-inline">
		<li class="list-inline-item">User: {{ $employee->user->name }}</li>
		<li class="list-inline-item"><a href="{{ url('employees')}}/{{ $employee->id }}/edit">Edit</a></li>
		<li class="list-inline-item">
			<form role="form" action="{{ url('employees')}}/{{ $employee->id }}" method="post">
				{{ csrf_field() }}
				<input type="submit" class="btn btn-link" value="Delete" />
				{{ method_field('DELETE') }}
			</form>
		</li>
	</ul>
	<hr>
	@endforeach
@endsection