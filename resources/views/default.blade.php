<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Style -->
	<link rel="stylesheet" href="{{ asset('/bootstrap-3.3.5/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/public.css') }}">
	<!-- Fonts -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

</head>

<body class="main-back-color">
	<div id="main-content" class="container-fluid">
		<header>
		</header>
		<main class="col-xs-12 sub-color-1 round-corners">
			@yield('content')
		</main>

		<footer>
		</footer>
	</div>

	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script src="{{ asset('/bootstrap-3.3.5/js/bootstrap.min.js') }}"></script>
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	<script src="{{ asset('/js/ajax.js') }}"></script>
	<script src="{{ asset('/js/global.js') }}"></script>
	
</body>

</html>
