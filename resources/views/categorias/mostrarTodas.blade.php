@extends ('layouts.app') 
@section ('title', 'Mostrar Categorias')
@section ('contents')
<h1 align="center"> Categorias Disponibles</h1>

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
        
        <th scope="col">Acciones</th>
      </tr>
    </thead>

  <tbody>
  	@foreach($cates as $item)
      <tr>
        <th scope="row">
          {{ $item->id }}
        </th>   
        <td>  
          
            {{ $item->nombre }}
          
        </td>
        
        <td>
         
          <form   action=" {{ route('eliminar_categoria', $item) }}" 
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
