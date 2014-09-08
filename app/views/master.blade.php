<!doctype html>
<html lang="en">
<head>
	<meta charset='UTF-8'>
	<title> {{ $title }}</title>
	{{HTML::style ('css/bootstrap.css')}}
	{{HTML::style ('js/bootstrap.js')}}
	{{HTML::style ('js/jquery.js')}}
</head>
<body>
	<div class="row-fluid">	
		<div class="span12 well">
			<h1>Login Page | FCE</h1>

		</div>

	</div>
	<div class="row-fluid">
		<div class="span3">
			<ul class="nav-list">
				@if(Auth::user())
				<li class="nav-header">{{ ucwords (Auth::user()->username)}}</li>
				<li>{{HTML::link('post', 'Add Post')}}</li>
				<li>{{HTML::link('logout', 'Logout')}}</li>
				@else
				<li>{{HTML::link('login', 'Login')}}</li>
				@endif
			</ul>
		</div>
		<div class="span9">
			@yield('content')			
		</div>
	</div>
</body>
</html> 