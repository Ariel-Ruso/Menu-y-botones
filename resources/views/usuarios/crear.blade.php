@extends ('layouts.app') 

@section('contents')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Agregar Usuario</span>
                    <a href="{{route('bienvenidos')}}" class="btn btn-primary btn-sm">Volver ...</a>
                </div>

                <div class="card-body">     
                  @if ( session('mensaje') )
                    <div class="alert alert-success">{{ session('mensaje') }}</div>
                  @endif

                  <form  action="{{route('crear_usuario2')}}" method="POST">
                    @csrf
                    <input
                      type="text"
                      name="nombre"
                      placeholder="Nombre"
                      class="form-control mb-2"
                    />                  
                    
                    <input
                      type="text"
                      name="apellido"
                      placeholder="Apellido"
                      class="form-control mb-2"
                    />
                    <input
                      type="text"
                      name="rol"
                      placeholder="Rol"
                      class="form-control mb-2"
                    />
                    <input
                      type="text"
                      name="correo"
                      placeholder="Correo"
                      class="form-control mb-2"
                    />
                    @error('nombre')
                      <div class="alert alert-danger">
                          Nombre es obligatorio
                      </div>
                    @enderror
                    <button class="btn btn-primary btn-block" type="submit">Agregar</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





