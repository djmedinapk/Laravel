<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Ingresar | Panel Administrador</title>
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body class="login-body">
	 <div id="wrapper">
		 <section class="content">
		 	@include('flash::message')

		 	 @yield('content')
		 </section>

		<!-- Footer-Pies de PAgina-->
		 @include('admin.templates.partials.footer')
	</div>
	
	<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
	<script src="{{asset('plugins/jquery/js/jquery-3.3.1.js')}}"></script>
    <script>
		$('div.alert').not('.alert-important').delay(6000).fadeOut(350);
	</script>
</body>
</html>