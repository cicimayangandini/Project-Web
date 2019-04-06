<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{!! asset('css/cici.css') !!}">
</head>
<body>
	<header>
		@include('layout.header')
	</header>
	
	<ul class="nav flex-column">
		@section('sidebar')
			<li class="nav-item">
			<a class="nav-link active" href="#">HTML</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">CSS</a>
			</li>
			<li class="nav-item">
			<a class="nav-link active" href="#">JS</a>
			</li>
		@show
	</ul>

		@show
	</ul>
	
	<div class="container">
		@yield('content')
	</div>
</body>
</html>