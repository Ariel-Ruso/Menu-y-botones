@extends ('admin.template.main')

@section ('title', 'Detalle de user')

@section ('contents')

<h1 align="center"> Detalles de Usuario </h1><td>


	<h4> id: {{ $users->id }} </h4>
	<h4> usuario: {{ $users->nombre }} </h4>
	<h4> apellido: {{ $users->apellido }} </h4>
	<h4> email: {{ $users->email }} </h4>
	








