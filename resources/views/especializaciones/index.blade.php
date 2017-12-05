	@extends('layouts.dashboard')
	@section('content')

		<ol class="breadcrumb">
				  <li><a href="/dashboard">Home</a></li>	  
				  <li class="active">Especialidades</li>
				</ol>
		<div class="formulario container col-sm-7 col-sm-offset-3 col-md-7 col-md-offset-3">
			<br>
			<a class="btn btn-primary pull-right" href="{{ url('/misEspecializaciones/create') }}" role="button"><span class="glyphicon glyphicon-plus"></span> Especialidad</a>
			<br>

			<table class="table table-bordered cell-border table-hover" id="tabla">
				 <thead>
	                <tr class="active">
	                    <th class="text-center">ID</th>
	                    <th class="text-center">Especialidad</th>
	                    <th class="text-center">Actividad</th>
	                    <th class="text-center">Experiencia</th>
	                    <th class="text-center"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></th>
	                    <th class="text-center"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
	                </tr>
	            </thead>

	            <tbody>
    			@foreach($datos_tabla as $data)
                	<tr>
	                    <td class="text-center">{{ $data->id }}</td>
	                    <td class="text-center">{{ $data->especializacion }}</td>
	                    <td class="text-center">{{ $data->actividad }}</td>
	                    <td class="text-center">{{ \Carbon\Carbon::parse($data->tiempo)->age }} años y {{ \Carbon\Carbon::now()->month - \Carbon\Carbon::parse($data->tiempo)->month }} meses </td>
	    	
	                    <td>
	                        <a href="{{ url('/misEspecializaciones/'.$data->id.'/edit')}}" class="btn btn-info btn-xs">
	                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
	                        </a> 
	                    </td>
	                    <td>
	                    	<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#eliminarRegistro" >
	                    		<span class="glyphicon glyphicon-remove" aria-hidden="true" id="$data->id"></span>
	                    	</button>
	                    </td>
	
                	</tr>
    			@endforeach
            	</tbody>
			</table>
		</div>

		<div class="modal fade" id="eliminarRegistro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <img src="{{ asset('img/logo-header.png') }}" alt="Logo Edificapp">
		        <h4 class="modal-title titulo-modal myModalLabel">Confirmar Eliminacion</h4>
		      </div>
		      <div class="modal-body " id="form-eliminar">
		      	  
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal Cliente-->
		<p>¿desea elminar El registro?. </p> 
		<form action="misEspecializaciones/destroy" method="DELETE">
			
		</form>

		{!! Form::open(['route' => ['misEspecializaciones.destroy'], 'method' => 'DELETE']) !!}	
	              <button type="submit" class="btn btn-danger btn-xs">
	                Eliminar
	              </button>
	     {!! Form::close() !!}  
	@stop

	@section('js')
	<script type="text/javascript">
		
	</script>
	@stop