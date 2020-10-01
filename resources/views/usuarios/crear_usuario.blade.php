@extends ('layouts.app') 
@section ('title', 'Crear usuarios')
@section('contents')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Agregar Usuario</span>
                    <a href="{{ route('bienvenidos')}}" class="btn btn-primary btn-sm">
                        Volver ...
                    </a>
                </div>
                <div class="card-body">     
                  @if ( session('mensaje') )
                    <div class="alert alert-success">{{ session('mensaje') }}</div>
                  @endif

                  <form  action="{{ route('crear_usuario2')}}" method="POST">
                     @csrf
                    <div class="container" name="errores">
                        <!-- <div class="alert alert-success">
                          <ul>
                            @foreach ($errors->all() as $error)
                              <li> {{ $error}}
                            @endforeach
                          </ul> -->
                      @error('nombre')
                        <div class="alert alert-success">
                            Nombre obligatorio
                        </div>
                      @enderror
                      @error('apellido')
                        <div class="alert alert-success">
                            Apellido obligatorio
                        </div>
                      @enderror
                      @error('correo')
                        <div class="alert alert-success">
                            Correo obligatorio
                        </div>
                      @enderror
                      @error('direccion')
                        <div class="alert alert-success">
                            Direccion obligatoria
                        </div>
                      @enderror
                      @error('rols_id')
                        <div class="alert alert-success">
                            Rol obligatorio
                        </div>
                      @enderror
                    </div>
                    <div class="container" name="inputs">
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
                        name="direccion"
                        placeholder="Direccion"
                        class="form-control mb-2"
                      />
                      <input
                        type="text"
                        name="correo"
                        placeholder="Correo"
                        class="form-control mb-2"
                      />
                        <div class="form-row align-items-center">
                          <div class="col-auto my-1">
                            <select class="custom-select mr-sm-2" 
                                    id="inlineFormCustomSelect" 
                                    name= "rols_id">
                              <option selected>
                                  Rol...
                              </option>
                              @foreach($roles as $item)
                                <option value= "{{$item->id}}" >
                                  {{ $item->nombre }}
                                </option>
                              @endforeach
                            </select>
                            <br>
                        </div> 
                    </div>                              
                    <button class="btn btn-primary btn-block" type="submit">
                        Agregar
                    </button>
                  </form>
                </div>
              </div>
          </div>
        </div>
    </div>
</div>
@endsection





