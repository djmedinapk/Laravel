<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>@yield('title','index') | Panel Administrador</title>
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/simple-sidebar.css')}}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body>
	 <div id="wrapper">
	 	<!-- sideBar-menu-->
		 @include('admin.templates.partials.sidebar')
		<!-- NavBar-menu-->
		 @include('admin.templates.partials.nav')
		 <section class="content">
		 	@include('flash::message')
		 	@include('admin.templates.partials.errors')
		 	 @yield('content')
		 </section>

		<!-- Footer-Pies de PAgina-->
		 @include('admin.templates.partials.footer')
	</div>
	
	<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
	<script src="{{asset('plugins/jquery/js/jquery-3.3.1.js')}}"></script>
	<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    <script>
		$('div.alert').not('.alert-important').delay(5000).fadeOut(350);
	</script>
</body>
</html>