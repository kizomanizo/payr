@extends('layouts.dashboard')

@section('dashboard')
<h1 class="display-4">Departments</h1>
<hr>
	@foreach ($departments as $department)
	<a href="{{url('titles')}}/{{$department->id}}"><span class="lead text-primary"><strong>{{ $department->name }}</strong></span></a>
	<ul class="list-inline">
		<li class="list-inline-item">User: {{ $department->user->name }}</li>
		<li class="list-inline-item"><a href="{{ url('departments')}}/{{ $department->id }}/edit">Edit</a></li>
		<li class="list-inline-item">
			<form role="form" action="{{ url('departments')}}/{{ $department->id }}" method="post">
				{{ csrf_field() }}
				<input type="submit" class="btn btn-link" value="Delete" />
				{{ method_field('DELETE') }}
			</form>
		</li>
	</ul>
	<hr>
	@endforeach
@endsection