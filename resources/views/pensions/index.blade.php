@extends('layouts.dashboard')

@section('dashboard')
<h1 class="display-4">All Pensions</h1>
<hr>
	@foreach ($pensions as $pension)
	<span class="lead text-primary"><strong>{{ $pension->name }}</strong></span>
	<ul class="list-inline">
		<li class="list-inline-item">User: {{ $pension->rate*100 }}%</li>
		<li class="list-inline-item">User: {{ $pension->user->name }}</li>
		<li class="list-inline-item"><a href="{{ url('pensions')}}/{{ $pension->id }}/edit">Edit</a></li>
		<li class="list-inline-item">
			<form role="form" action="{{ url('pensions')}}/{{ $pension->id }}" method="post">
				{{ csrf_field() }}
				<input type="submit" class="btn btn-link" value="Delete" />
				{{ method_field('DELETE') }}
			</form>
		</li>
	</ul>
	<hr>
	@endforeach
@endsection