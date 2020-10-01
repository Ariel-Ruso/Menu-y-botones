@extends ('layouts.app') 
@section ('title', 'Crear categorias')
@section('contents')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>
                      Agregar Categoria
                    </span>
                    <a href="{{route('bienvenidos')}}" class="btn btn-primary btn-sm">
                        Volver ...
                    </a>
                </div>
                <div class="card-body">     
                  @if ( session('mensaje') )
                    <div class="alert alert-success">{{ session('mensaje') }}</div>
                  @endif
                  <form   action="{{ route('crear_categoria2') }}" 
                          method="POST"
                          >
                    @csrf
                    
                <div class="container" name= "errores">
                 @error('nombre')
                      <div class="alert alert-success">
                          Nombre obligatorio
                      </div>
                    @enderror
                   
                </div>
                <div class="container" name="etiquetas">
                    <input
                      type="text"
                      name="nombre"
                      placeholder="Nombre"
                      class="form-control mb-2"
                    />                  
                </div>                               
                    <button class="btn btn-primary btn-block" 
                            type="submit">
                      Agregar
                    </button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection