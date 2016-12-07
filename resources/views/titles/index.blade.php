@extends('layouts.dashboard')

@section('dashboard')
<h1 class="display-4">All Titles</h1>
<hr>
	@foreach ($titles as $title)
	<span class="lead text-primary"><strong>{{ $title->name }}</strong></span>
	<ul class="list-inline">
		<li class="list-inline-item">User: {{ $title->user->name }}</li>
		<li class="list-inline-item"><a href="{{ url('titles')}}/{{ $title->id }}/edit">Edit</a></li>
		<li class="list-inline-item">
			<form role="form" action="{{ url('titles')}}/{{ $title->id }}" method="post">
				{{ csrf_field() }}
				<input type="submit" class="btn btn-link" value="Delete" />
				{{ method_field('DELETE') }}
			</form>
		</li>
	</ul>
	<hr>
	@endforeach
@endsection