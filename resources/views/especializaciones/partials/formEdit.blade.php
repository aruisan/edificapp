	
		<div class="form-group">
			{!! Form::label('especializacion', 'Especialidades que realiza', ['for' => 'especializacion'] ) !!}
			<div class="input-group">
				<div class="input-group-addon">
					<span><i class="fa fa-briefcase fa-lg" aria-hidden="true"></i></span>
				</div>
				{!! Form::select('especializacion', $especializaciones, null, ['placeholder'=>'Selecciona una especializacion', 'class' => 'especialidades form-control', 'style' => "width: 100%", 'id' => 'especializacion'] ) !!}  
			</div>
		</div><br>

		<div class="form-group">
			{!! Form::label('actividad', 'Seleccione la actividad a desempeñar', ['for' => 'actividad'] ) !!}
			<div class="input-group">
				<div class="input-group-addon">
					<span><i class="fa fa-building fa-lg" aria-hidden="true"></i></span>
				</div>
				<select name="actividad" class="especialidades form-control" id="actividades" style="width: 100%">
					<option value="{{ $datos->actividad_id }}">{{ $datos->actividad }}</option>
				</select>
			</div>
		</div><br>

		<div class="form-group">
			{!! Form::label('actividad', 'Seleccione la actividad a desempeñar', ['for' => 'actividad'] ) !!}
			<div class="input-group">
				<div class="input-group-addon">
					<span><i class="fa fa-building fa-lg" aria-hidden="true"></i></span>
				</div>
				{!! Form::date('tiempo', $datos->tiempo, ['class' => 'form-control']) !!} 
			</div>
		</div>