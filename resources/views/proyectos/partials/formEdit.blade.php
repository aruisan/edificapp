	
	<legend><h2 class="text-center">Editar  Proyecto</h2></legend>	
		<div class="form-group">
			{!! Form::label('nombre', 'titulo proyecto', ['for' => 'nombre'] ) !!}
			<div class="input-group">
				<div class="input-group-addon">
					<span><i class="fa fa-briefcase fa-lg" aria-hidden="true"></i></span>
				</div>
				{!! Form::text('nombre',  $datos->nombre, ['class' => 'form-control', 'placeholder' => 'Titulo del proyecto' ]  ) !!} 
			</div>
		</div><br>

		<div class="form-group">
			{!! Form::label('descripcion', 'descripcion del proyecto', ['for' => 'descripcion'] ) !!}
			<textarea rows="4" class="form-control" name="descripcion">{{ $datos->descripcion }}
			</textarea>
		</div><br>

		<div class="form-group">
			{!! Form::label('detalles', 'Detalles del proyecto', ['for' => 'detalles'] ) !!}
			<div class="input-group">
				<div class="input-group-addon">
					<span><i class="fa fa-building fa-lg" aria-hidden="true"></i></span>
				</div>
				<textarea rows="3" class="form-control" name="detalle">{{ $datos->detalle }}
			</textarea>
			</div>
		</div>
