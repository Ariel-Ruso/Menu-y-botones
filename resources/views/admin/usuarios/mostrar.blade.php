@extends ('admin.template.main')

@section ('title', 'Detalle de user')

@section ('contents')

<h1 align="center"> Usuarios</h1>

@if (session('mensaje'))
  <div class="alert alert-success">
    {{ session('mensaje') }}
  </div>
@endif

<form method="post" action=" {{ route('usuario_nuevo') }}">

  @error('email')
    <div class="alert alert-danger">
        Email es obligatorio
    </div>
  @enderror

  @error('apellido')
    <div class="alert alert-danger">
        Apellido es obligatorio
    </div>
  @enderror

  @error('nombre')
    <div class="alert alert-danger">
        Nombre es obligatorio
    </div>
  @enderror

  @csrf
  <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" value= "{{ old('nombre') }}" >
  <input type="text" name="apellido" placeholder="Apellido" class="form-control mb-2" value= "{{ old('apellido') }}">
  <input type="text" name="password" placeholder="Password" class="form-control mb-2">
  <input type="text" name="email" placeholder="E mail" class="form-control mb-2" value= "{{ old('email') }}">

  <button class="btn btn-primary" type="submit">Agregar Usuario </button>

</form>

<form>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Email</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>

  <tbody>
  	@foreach($users as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>   
      <td>  
        <a href=" {{ route('detalle_usuario', $item) }}">
          {{ $item->nombre}}
        </a>
      </td>
      
      <td>{{$item->apellido}}</td>
      <td>{{$item->email}}</td>
      <td>
        <a href="{{ route ('usuarios_editar', $item) }}" class="btn btn-warning btn s-m">Editar 
        </a>

        <form action=" {{ route('usuarios_eliminar', $item) }} " method="Post" class="d-inline" >
            @method ('DELETE')
            @csrf
            <button class="btn btn-danger btn s-m" type="submit" > Eliminar         
            </button>
        </form>

      </td>
    </tr>
    <tr>
    @endforeach

      
  </tbody>
</table>
{{ $users->links() }}

</form>



			
			



