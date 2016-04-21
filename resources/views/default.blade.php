<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Virtual Wallet</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<link rel="stylesheet" href="{{ asset('/bootstrap-3.3.5/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/public.css') }}">
	<!-- Fonts -->
	<link rel="stylesheet" href="{{ asset('/font-awesome-4.4.0/css/font-awesome.min.css') }}">
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="{{ asset('/bootstrap-3.3.5/js/bootstrap.min.js') }}"></script>
	<!-- Date picker -->
	<script type="text/javascript" src="{{ asset('/js/moment.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/bootstrap-datetimepicker.min.js') }}"></script>
	<!-- Js -->
	<script type="text/javascript" src="{{ asset('/js/global.js') }}"></script>
</head>

<body>
	
	<header class="row">
		<div class = "inner-header">
			
		</div>
	</header>

	<div id="main" class="row">
		<div class="inner-main">
			<div class="container">
				{{-- @include('flash::message') --}}
			</div>
			<div class="row">
				<div class="container">
					<h1>Virtual Wallet</h1>
					<hr>
					@yield('content')
				</div>
			</div>
		{{-- 	<br/> --}}
			@include('errors.form_list_errors')
		</div>
	</div>

	<footer>
		@include('footer')
	</footer>
</body>

</html>
