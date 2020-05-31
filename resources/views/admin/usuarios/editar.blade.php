@extends ('admin.template.main')

@section ('title', 'Edicion de usuarios')

@section ('contents')

<h1 align="center">Editamos Usuario </h1>

	@if (session('mensaje'))
  		<div class="alert alert-success">
    		{{ session('mensaje') }}
  		</div>
	@endif

<form method="post" action=" {{ route('actualizar_usuario', $users->id) }}">
	@method ('put')
	@csrf

  @error('email')
    <div class="alert alert-danger">
        Los campos son obligatorios
    </div>
  @enderror

  
  <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value= "{{ ($users->nombre) }}" >

  <input type="text" name="apellido" placeholder="Apellido" class="form-control mb-2" value= "{{ ($users->apellido) }}">

  <input type="text" name="password" placeholder="Password" class="form-control mb-2" value= "{{ ($users->password) }}">

  <input type="text" name="email" placeholder="E mail" class="form-control mb-2" value= "{{ ($users->email) }}">

  <button class="btn btn-warning" type="submit">Editar Usuario </button>

</form>

