<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Microbiota</title>
		<link rel="stylesheet" href="/css/app.css">
	</head>
	<body class="dark-layout">
		<div id="wrap">
			@include('partials.header')

			<div id="content">
				@yield('content')
			</div>
			@include('partials.footer')
		</div>

	<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js" charset="utf-8"></script>
		<script src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js" charset="utf-8"></script>

		<script src="/js/script.js" charset="utf-8"></script>
	</body>
</html>
