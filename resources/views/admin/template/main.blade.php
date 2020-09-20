<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		@yield('title', 'default') | Panel  
	</title>
	<link rel="stylesheet" href="{{ asset('plugins/css/bootstrap.css') }}">

		<form>
			<a href="{{route('bienvenidos')}}" class="btn btn-primary">Inicio</a>
			<a href="{{ route ('mostrarTodos') }}" class="btn btn-primary">Mostrar Usuarios</a>
			<a href="{{ route ('crear_usuario') }}" class="btn btn-primary">Crear usuario</a>
			<a href="{{route('nosotros')}}" class="btn btn-primary">Nosotros</a>
			
		</form>


</head>

<body>
	
	<section>

		@yield('content')
		
		
	</section>

	<script src= " {{ asset('plugins/jquery/js/jquery-3.4.1.js') }}">
	</script>	
	<script src= " {{ asset('plugins/bootstrap/bootstrap.js') }}">		
	</script>

</body>
</html>