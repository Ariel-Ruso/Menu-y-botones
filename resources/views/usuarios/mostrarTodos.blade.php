@extends ('layouts.app') 
@section ('title', 'Mostrar usuarios')
@section ('contents')
<h1 align="center"> Usuarios Disponibles</h1>

@if (session('mensaje'))
  <div class="alert alert-success">
    {{ session('mensaje') }}
  </div>
@endif

<form>
  <br><br>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Direccion</th>
        <th scope="col">Correo</th>
        <th scope="col">Rol</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>

    <tbody>
      @foreach($users as $item)
      <tr>
        <th scope="row">{{ $item->id }}</th>   
        <td>  
          <a href=" {{ route('detalle_usuario', $item) }}">
            {{ $item->nombre }}
          </a>
        </td>
        <td>
          {{ $item->apellido }}
        </td>
        <td>
          {{ $item->direccion }}
        </td>
        <td>
          {{ $item->correo }}
        </td>
        <td>
          {{ $roles[ ($item->rols_id)-1 ]->nombre }}
        </td>
        <td>
          <a href="{{ route ('editar_usuario', $item) }}" class="btn btn-warning btn s-m">Editar 
          </a>

          <form action=" {{ route('eliminar_usuario', $item->id) }} " 
                method="Post" 
                class="d-inline" >
              @method ('DELETE')
              @csrf
              <button class="btn btn-danger btn s-m" 
                      type="submit" > 
                        Eliminar         
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
@endsection
