@extends ('admin.template.main')

@section('title', 'Nosotros somos')



<h1> Equipo de trabajo </h1><br>


	@foreach  ($equipo as $item)

		<h4>{{ $item }}</h4><br>

	@endforeach



