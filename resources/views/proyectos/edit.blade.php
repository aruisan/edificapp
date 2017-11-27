@extends('layouts.dashboard')
@section('content')
@include('alertas.request')

	<div class="contenido">
		<ol class="breadcrumb">
			<li><a href="/dashboard">Home</a></li>
			<li><a href="/misProyectos">Mis Proyectos</a></li>		  
			<li class="active">Editar Proyecto</li>
		</ol>
		<div id="resp-terminos"></div>
		<div class="formulario container col-sm-7 col-sm-offset-3 col-md-7 col-md-offset-3">
	    	{!! Form::open([ 'route' => ['misProyectos.update', $datos->id], 'method' => 'PUT', 'id' => 'cotizaciones', 'class' => 'form sombra' ]) !!}                
	       		<fieldset>
		        	@include('proyectos.partials.formEdit')
		     		<div class="form-group">
		     			<input type="submit" value="guardar" class="btn btn-block btn-success">
					</div>
				</fieldset>
	    	{!! Form::close() !!}
	    </div>
	</div>

@endsection

@section('css')
<link rel="stylesheet" href="/assets/trumbowyg/dist/ui/trumbowyg.min.css">
@stop

@section('js')
<script src="/assets/trumbowyg/dist/trumbowyg.min.js"></script>
<script type="text/javascript" src="/assets/trumbowyg/dist/langs/es.min.js"></script>
<script type="text/javascript">
	//libreria editor texto
	$('textarea').trumbowyg({
		lang: 'es',
	});
	</script>
@endsection