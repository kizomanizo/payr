@extends('layouts.dashboard')

@section('dashboard')
<h1 class="display-4">Companies</h1>
<hr>
	@foreach ($companies as $company)
	<a href="{{url('departments')}}/{{$company->id}}"><span class="lead text-primary"><strong>{{ $company->name }}</strong></span></a>
	<ul class="list-inline">
		<li class="list-inline-item">Address: {{ $company->address }}</li>
		<li class="list-inline-item">Contacts: {{ $company->contacts }}</li>
		<li class="list-inline-item"><a href="{{ url('companies')}}/{{ $company->id }}/edit">Edit</a></li>
		<li class="list-inline-item align-right">
			<form role="form" action="{{ url('companies')}}/{{ $company->id }}" method="post">
				{{ csrf_field() }}
				<input type="submit" class="btn btn-link" value="Delete" />
				{{ method_field('DELETE') }}
			</form>
		</li>
	</ul>
	<hr>
	@endforeach
@endsection