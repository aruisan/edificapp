@extends('layouts.dashboard')
@section('content')
@include('alertas.request')

	<div class="contenido">
		<ol class="breadcrumb">
			<li><a href="/dashboard">Home</a></li>
			<li><a href="/misEspecializaciones">Especialidades</a></li>		  
			<li class="active">Nueva Actividad</li>
		</ol>

		<div class="formulario container col-sm-7 col-sm-offset-3 col-md-7 col-md-offset-3">
	    	{!! Form::open([ 'route' => 'misEspecializaciones.store', 'method' => 'POST', 'id' => 'cotizaciones', 'class' => 'sombra form']) !!}
	       		<fieldset>
		        	@include('especializaciones.partials.form')
		     		<div class="form-group">
		     			<input type="submit" value="Guardar" class="btn btn-primary">
					</div>
				</fieldset>
	    	{!! Form::close() !!}
	    </div>
	</div>

@endsection
	
				
