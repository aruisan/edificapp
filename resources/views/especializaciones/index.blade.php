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

			<table class="table table-bordered cell-border table-hover" id="tabla" data-toggle="dataTable" data-form="deleteForm">
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

						{!! Form::model($data, ['method' => 'delete', 'route' => ['misEspecializaciones.destroy', $data->id], 'class' =>'form-inline form-delete']) !!}
                   		{!! Form::hidden('id', $data->id) !!}
                    	{!! Form::submit(trans('X'), ['class' => 'btn btn-xs btn-danger delete', 'name' => 'delete_modal']) !!}
                    	{!! Form::close() !!}
	                    </td>
	
                	</tr>
    			@endforeach
            	</tbody>
			</table>
		</div>

		<div class="modal" id="confirm">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		                <h4 class="modal-title">COnfirmacion para Borrar</h4>
		            </div>
		            <div class="modal-body">
		                <p class="text-center">¿estas seguro de borrar esta Especialidad?</p>
		            </div>
		            <div class="modal-footer">
		                <button type="button" class="btn btn-sm btn-danger" id="delete-btn">Aceptar</button>
		                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancelar</button>
		            </div>
		        </div>
		    </div>
		</div>

	@stop

	@section('js')
	<script type="text/javascript">
		$('table[data-form="deleteForm"]').on('click', '.form-delete', function(e){
		    e.preventDefault();
		    var $form=$(this);
		    $('#confirm').modal({ backdrop: 'static', keyboard: false })
		        .on('click', '#delete-btn', function(){
		            $form.submit();
		        });
		});
	</script>
	@stop