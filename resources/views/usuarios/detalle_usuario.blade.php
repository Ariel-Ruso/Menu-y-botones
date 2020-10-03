@extends ('layouts.app') 
@section ('title', 'Detalles')
@section ('contents')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
				<div class="card-header d-flex justify-content-between align-items-center">
					<span>
						<h2>Detalles de Usuario<h2>
					</span>
					<a  href="{{ route('mostrarTodos')}}" 
                        class="btn btn-primary btn-sm">
                          Volver ...
                    </a>
				</div>
				<div class="card-body">    

				 Id: {{ $users->id }} <br>
				 Usuario: {{ $users->nombre }} <br>
				 Apellido: {{ $users->apellido }} <br>
				 Correo: {{ $users->correo }} <br>
				 <!-- traigo nombre de rol desde user -->
				 Rol: {{ $roles[ ($users->rols_id)-1 ]->nombre }} <br>

				</div>
			</div>
		</div>
	</div>
</div>


	
@endsection








