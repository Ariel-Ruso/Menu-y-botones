@extends ('layouts.app')

@section('title', 'Nosotros somos')

@section('contents')


<h1 align= "center"> Equipo de trabajo </h1><br>

	@foreach  ($equipo as $item)

		<h4>{{ $item }}</h4><br>

	@endforeach


@endsection
