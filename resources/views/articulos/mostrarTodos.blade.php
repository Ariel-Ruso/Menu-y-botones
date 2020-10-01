@extends ('layouts.app') 
@section ('title', 'Mostrar articulos')
@section ('contents')
<h1 align="center"> Articulos Disponibles</h1>

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
        <th scope="col">Cantidad</th>
        <th scope="col">Precio</th>
        <th scope="col">Categoria</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>

  <tbody>
  	@foreach($arts as $item)
      <tr>
        <th scope="row">
          {{ $item->id }}
        </th>   
        <td>  
          <a href=" {{ route('detalle_articulo', $item) }}">
            {{ $item->nombre }}
          </a>
        </td>
        <td>
          {{ $item->cantidad }}
        </td>
        <td>
          {{ $item->precio }}
        </td>
        <td>
          {{ $cates[ ($item->categorias_id)-1 ]->nombre }}
          
        </td>
        <td>
          <a  href="{{ route ('editar_articulo', $item) }}" 
              class="btn btn-warning btn s-m">
                Editar 
          </a>
          <form   action=" {{ route('eliminar_articulo', $item) }}" 
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

</form>

@endsection
