@extends ('layouts.app') 

@section ('title', 'Crear usuarios')

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
                      name="correo"
                      placeholder="Correo"
                      class="form-control mb-2"
                    />
                    
                    <!-- <input

                      type="text"
                      name="rol"
                      placeholder="Rol" -->

                      <div class="form-row align-items-center">
                        <div class="col-auto my-1">
                          <label class="mr-sm-2" for="inlineFormCustomSelect">Rol</label>
                          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name= "rol">
                            <option selected>Elegir...</option>
                            <option value="Admin">Admin</option>
                            <option value="Encargado">Encargado</option>
                            <option value="Vendedor">Vendedor</option>
                            <option value="Almacen">Almacen</option>
                          </select>
                          <br>

                      </div>
                      

                                        
                    <button class="btn btn-primary btn-block" type="submit">Agregar</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





