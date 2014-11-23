<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Westline Webworks Lesson</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	{{ HTML::style('css/style.css') }}

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	{{ HTML::script('js/page.js') }}
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<a href="/" class="navbar-brand">Westline Webworks Lesson</a>
			</div>
		</div>
	</nav>

	<div class="container page">

		@yield('content')

	</div>

</body>
</html>
