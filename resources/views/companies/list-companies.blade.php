@extends('layouts.dashboard')

@section('dashboard')
<h1 class="display-4">Companies</h1>
<hr>
	@foreach ($companies as $company)
	<a href="{{url('departments/list-departments/')}}/{{$company->id}}"><span class="lead text-primary"><strong>{{ $company->name }}</strong></span></a>
	<ul class="list-inline">
		<li class="list-inline-item">Address: {{ $company->address }}</li>
		<li class="list-inline-item">Contacts: {{ $company->contacts }}</li>
		<li class="list-inline-item"><a href="{{ url('companies/edit-companies')}}/{{ $company->id }}">Edit</a></li>
		<li class="list-inline-item"><a href="{{ url('companies/deletecompany')}}/{{ $company->id }}">Delete</a></li>
	</ul>
	<hr>
	@endforeach
@endsection