<!DOCTYPE html>
<html>
<head>
	<title>Layout- @yield('title')</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		 <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
		  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>
<body>
	@section('navbar')
	<nav class="navbar navbar-expand-sm bg-dark">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a id="index" class="navbar-brand" href="{{url('welcome')}}">welcome</a>
				</li>
				<li class="nav-item">
				<a id="index" class="navbar-brand" href="{{url('about')}}">About</a>
				</li>
				<li class="nav-item">
				<a id="index" class="navbar-brand" href="{{url('test')}}">Test</a>
				</li>
				<li class="nav-item">
				<a id="index" class="navbar-brand" href="{{url('myinfo')}}">My Info</a>
				</li>
			</ul>
		
	</nav>
	@show

</body>
</html>