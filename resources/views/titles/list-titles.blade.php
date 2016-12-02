@extends('layouts.dashboard')

@section('dashboard')
<h1 class="display-4">titles</h1>
<hr>
	@foreach ($titles as $title)
	<span class="lead text-primary"><strong>{{ $title->name }}</strong></span>
	<ul class="list-inline">
		<li class="list-inline-item">User: {{ $title->user->name }}</li>
		<li class="list-inline-item"><a href="{{ url('titles/edit-titles')}}/{{ $title->id }}">Edit</a></li>
		<li class="list-inline-item"><a href="{{ url('titles/deletetitle')}}/{{ $title->id }}">Delete</a></li>
	</ul>
	<hr>
	@endforeach
@endsection