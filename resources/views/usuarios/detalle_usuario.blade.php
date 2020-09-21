@extends ('layouts.app') 

@section ('title', 'Detalles')

@section ('contents')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
				<div class="card-header d-flex justify-content-between align-items-center">
    				<span><h2>Detalles de Usuario<h2></span>
				</div>
				<div class="card-body">    

				 Id: {{ $users->id }} <br>
				 Usuario: {{ $users->Nombre }} <br>
				 Apellido: {{ $users->Apellido }} <br>
				 Correo: {{ $users->Correo }} <br>
				 Rol: {{ $users->Rol }} <br>

				</div>
			</div>
		</div>
	</div>
</div>


	
@endsection








