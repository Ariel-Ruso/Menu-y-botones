@extends('admin.template.main')

@section('title', 'Crear usuario')

@section('content')

{!! Form::open() !!}
	
			
		<div class="form-group ", align="center">
			{!!Form::label('Nombre') !!}	
			
			{!!Form::text('name', null, ['class' =>'form-control', 'placeholder' => 'Nombre del usuario']) !!}
		</div>

		<div class="form-group ", align="center">
			{!!Form::label('Correo') !!}
			
			{!!Form::text('mail', null, ['class' =>'form-control', 'placeholder' => 'Tu email']) !!}	
		</div>

		<div class="form-group ", align="center">
			{!!Form::label('Contraseña') !!}
			
			{!!Form::text('Password', null, ['class' => 'form-control', 'placeholder' => '******']) !!}
		</div>
		<div class="btn", align="center" >
			{!!Form::button ('Confirma', ['class' => 'form-control', 'btn btn-primary  btn-lg']) !!}
		</div>

	
{!! Form::close() !!}

@stop





