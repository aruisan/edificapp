@extends('layouts.dashboard')
@section('content')
<div class="container">
	<div class="row">
				<ol class="breadcrumb">
				  <li><a href="/dashboard">Home</a></li>
				   <li><a href="/misProyectos">Mis Proyectos</a></li>
				   <li><a href="/misProyectos/{{ $id }}">Ver Proyecto</a></li>			  
				  <li class="active">Subir Imagenes al proyecto</li>
				</ol>

		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="panel-primary panel">
				<div class="panel-heading">
					<h3 class="text-center">Cuadro para Subir imagenes</h3>
				</div>

				{!!Form::open([
					'url' => '/subirimagenes',
					'files' => 'true',
					'class' => 'dropzone',
					'id' => 'my-dropzone',
					'method' => 'POST'
				])!!}
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="proyecto" value="{{ $id }}">
				{!! Form::close()!!}	
			</div>
		</div>

	</div>


</div>
@stop

@section('css')
	{!! Html::style('../dropzone/dist/dropzone.css') !!}
	@stop
	@section('js')
	{!! Html::script('../dropzone/dist/dropzone.js') !!}
	<script>
		Dropzone.options.myDropzone = {
            autoProcessQueue: true,
            uploadMultiple: true,
            maxFilezise: 10,
            maxFiles: 2,

        };

    </script>
	@stop