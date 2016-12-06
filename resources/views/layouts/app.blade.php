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


		<script src="/js/app.js" charset="utf-8"></script>
		<script src="/js/script.js" charset="utf-8"></script>
	</body>
</html>
