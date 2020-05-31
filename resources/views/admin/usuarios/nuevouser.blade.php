@extends ('admin.template.main')

@section('title', 'Alta user')

@section('contents')

<h1 align="center"> Usuario nuevo </h1>

@if (session('mensaje'))
	<div class="alert alert-success">
		{{ session(mensaje) }}
	</div>
@endif

<form method="">
	@csrf
	<input type="text" name="name" placeholder="Nombre" class="form-control mb-2">
	<input type="text" name="email" placeholder="E mail" class="form-control mb-2">

	<button class="btn btn-primary" type="submit">Agregar Usuario </button>

</form>

