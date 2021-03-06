@extends ('layouts.app') 
@section ('title', 'Edicion de usuarios')
@section ('contents')

<h1 align="center">Editar Usuario </h1>

  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Usuario # {{$users-> id }}</span>
                    <a  href="{{ route('mostrarTodos')}}" 
                        class="btn btn-primary btn-sm">
                          Volver ...
                    </a>
                </div>

                <div class="card-body">     
                  @if ( session('mensaje') )
                    <div class="alert alert-success">{{ session('mensaje') }}</div>
                  @endif

                  <form  action="{{ route('actualizar_usuario', $users->id) }}" method="POST">
                    @method ('put')
	                  @csrf
                    <input
                      type="text"
                      name="nombre"
                      placeholder= {{ $users->nombre }}
                      class="form-control mb-2"
                    />                  
                    
                    <input
                      type="text"
                      name="apellido"
                      placeholder={{ $users->apellido }}
                      class="form-control mb-2"
                    />
                    <input
                      type="text"
                      name="correo"
                      placeholder={{ $users->correo }}
                      class="form-control mb-2"
                    />
                    
                      <div class="form-row align-items-center">
                        <div class="col-auto my-1">
                          <label class="mr-sm-2" for="inlineFormCustomSelect">Rol</label>
                          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name= "rol">
                            <option selected>
                                {{ $roles[ ($users->rols_id)-1 ]->nombre }}
                            </option>
                            @foreach($roles as $item)
                              <option value= "{{ $item->id }}" >
                                 {{ $item->nombre }}
                              </option>
                            @endforeach
                          </select>
                          <br>
                      </div>
                                        
                    <button class="btn btn-primary btn-block" type="submit">Editar</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


