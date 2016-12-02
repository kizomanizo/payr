@extends('layouts.dashboard')

@section('dashboard')
<h1 class="display-4">Departments</h1>
<hr>
	@foreach ($departments as $department)
	<a href="{{url('titles/list-titles/')}}/{{$department->id}}"><span class="lead text-primary"><strong>{{ $department->name }}</strong></span></a>
	<ul class="list-inline">
		<li class="list-inline-item">User: {{ $department->user->name }}</li>
		<li class="list-inline-item"><a href="{{ url('departments/edit-departments')}}/{{ $department->id }}">Edit</a></li>
		<li class="list-inline-item"><a href="{{ url('departments/deletedepartment')}}/{{ $department->id }}">Delete</a></li>
	</ul>
	<hr>
	@endforeach
@endsection