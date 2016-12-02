<ul class="nav nav-tabs">
	<li class="nav-item">
		<a class="nav-link active" href="{{ url('/home') }}">Dashboard</a>
	</li>

	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
		Companies</a>
		<ul class="dropdown-menu">
			<li><a class="dropdown-item" href="{{ url('companies/list-companies') }}">list companies</a></li>
			<li><a class="dropdown-item" href="{{ url('companies/add-companies') }}">add companies</a></li>
		</ul>
	</li>

	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
		Departments</a>
		<ul class="dropdown-menu">
			<li><a class="dropdown-item" href="{{ url('departments/list-departments') }}">list departments</a></li>
			<li><a class="dropdown-item" href="{{ url('departments/add-departments') }}">add departments</a></li>
		</ul>
	</li>

	<li class="nav-item dropdown">
		<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
		Titles</a>
		<ul class="dropdown-menu">
			<li><a class="dropdown-item" href="{{ url('titles/list-titles') }}">list titles</a></li>
			<li><a class="dropdown-item" href="{{ url('titles/add-titles') }}">add titles</a></li>
		</ul>
	</li>

</ul>