@extends('layouts.dashboard')
@section('content')
@include('alertas.request')

	<div class="contenido">
		<ol class="breadcrumb">
			<li><a href="/dashboard">Home</a></li>
			<li><a href="/misEspecializaciones">Especialidades</a></li>		  
			<li class="active">Editar {{ $datos->especializacion }}/{{ $datos->actividad }}</li>
		</ol>

		<div class="formulario container col-sm-7 col-sm-offset-3 col-md-7 col-md-offset-3">
	    	{!! Form::open(['route' => ['misEspecializaciones.update', $datos->id], 'method' => 'PUT', 'id' => 'cotizaciones', 'class' => 'sombra form']) !!}
	       		<fieldset>
		        	@include('especializaciones.partials.formEdit')
		     		<div class="form-group">
						{!! Form::submit('Guardar', ['class' => 'btn btn-block btn-success']) !!}
					</div>
				</fieldset>
	    	{!! Form::close() !!}
	    </div>
	</div>

@endsection
	