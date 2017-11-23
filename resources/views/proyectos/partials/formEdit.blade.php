	
		<div class="form-group">
			{!! Form::label('especializacion', 'Especialidades que realiza', ['for' => 'especializacion'] ) !!}
			<div class="input-group">
				<div class="input-group-addon">
					<span><i class="fa fa-briefcase fa-lg" aria-hidden="true"></i></span>
				</div>
				{!! Form::select('especializacion', $especializaciones, null, ['placeholder'=>'Selecciona una especializacion', 'class' => 'form-control', 'id' => 'especializacion'] ) !!}  
			</div>
		</div><br>

		<div class="form-group">
			{!! Form::label('actividad', 'Seleccione la actividad a desempeñar', ['for' => 'actividad'] ) !!}
			<div class="input-group">
				<div class="input-group-addon">
					<span><i class="fa fa-building fa-lg" aria-hidden="true"></i></span>
				</div>
				<select name="actividad" class="form-control" id="actividades">
					<option value="{{ $datos->actividad_id }}">{{ $datos->actividad }}</option>
				</select>
			</div>
		</div><br>


		<div class="experiencia">
			<div class="form-group col-sm-6">
				{!! Form::label('age', 'Años de experiencia', ['for' => 'age'] ) !!}						
				<div class="input-group">
					<div class="input-group-addon">
						<span><i class="fa fa-calendar fa-lg" aria-hidden="true"></i></span>
					</div>
					{!! Form::text('age', $datos->age , ['class' => 'form-control', 'placeholder' => 'años de experiencia en la actividad' ]  ) !!}
				</div>
			</div>

			<div class="form-group col-sm-6">	
				{!! Form::label('mes', 'Meses de experiencia', ['for' => 'mes'] ) !!}					
				<div class="input-group">
					<div class="input-group-addon">
						<span><i class="fa fa-calendar fa-lg" aria-hidden="true"></i></span>
					</div>
					{!! Form::text('mes', $datos->mes , ['class' => 'form-control', 'placeholder' => 'meses de experiencia en la actividad' ]  ) !!}     	
				</div>
			</div>
		</div>