<ul class="nav nav-tabs">
	<li class="nav-item">
		<a class="nav-link active" href="{{ url('/home') }}">Dashboard</a>
	</li>

	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
		Companies</a>
		<ul class="dropdown-menu">
			<li><a class="dropdown-item" href="{{ url('companies') }}">list companies</a></li>
			<li><a class="dropdown-item" href="{{ url('companies/create') }}">add companies</a></li>
		</ul>
	</li>

	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
		Departments</a>
		<ul class="dropdown-menu">
			<li><a class="dropdown-item" href="{{ url('departments') }}">All departments</a></li>
			<li><a class="dropdown-item" href="{{ url('departments/create') }}">Add departments</a></li>
		</ul>
	</li>

	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
		Titles</a>
		<ul class="dropdown-menu">
			<li><a class="dropdown-item" href="{{ url('titles') }}">list titles</a></li>
			<li><a class="dropdown-item" href="{{ url('titles/create') }}">add titles</a></li>
		</ul>
	</li>

	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
		Employees</a>
		<ul class="dropdown-menu">
			<li><a class="dropdown-item" href="{{ url('employees') }}">list employees</a></li>
			<li><a class="dropdown-item" href="{{ url('employees/create') }}">add employees</a></li>
		</ul>
	</li>
	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
		Pensions</a>
		<ul class="dropdown-menu">
			<li><a class="dropdown-item" href="{{ url('pensions') }}">list pensions</a></li>
			<li><a class="dropdown-item" href="{{ url('pensions/create') }}">add pensions</a></li>
		</ul>
	</li>

</ul>