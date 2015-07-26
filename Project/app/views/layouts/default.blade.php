<!DOCTYPE html>
<html>
<head>
	<title>Co 4 la</title>
	<!-- <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme.css"> -->
	{{HTML::style('css/bootstrap.css')}}
	{{HTML::style('css/mystyle.css')}}
	{{HTML::script('http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js')}}
	{{HTML::script('http://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js')}}
	{{HTML::script('js/myscript.js')}}
</head>
<body>
	<div class="container container-fluid col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
		<div class="img-cover">
			@include('layouts.partial.cover-image')
		</div>
		<div class="nav-bar-content">
			@include('layouts.partial.navbar')
		</div>
		<div class="contents">
			@yield('contents')
		</div>
	</div>
	<div class="footer col-xs-12 col-md-12 col-sm-12">
		@include('layouts.partial.footer')
	</div>
</body>
</html>