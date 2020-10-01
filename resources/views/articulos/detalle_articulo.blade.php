@extends ('layouts.app') 
@section ('title', 'Detalles')
@section ('contents')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
				<div class="card-header d-flex justify-content-between align-items-center">
    				<span>
                        <h2>Detalles de Articulo<h2>
                    </span>
				</div>
				<div class="card-body">    

				 Id: {{ $art->id }} <br>
				 Nombre: {{ $art->nombre }} <br>
				 Cantidad: {{ $art->cantidad }} <br>
				 Precio: {{ $art->precio }} <br>
				 <!-- traigo nombre de rol desde user -->
				 Categoria: {{ $cates[ ($art->categorias_id)-1 ]->nombre }} <br>

				</div>
			</div>
		</div>
	</div>
</div>	
@endsection