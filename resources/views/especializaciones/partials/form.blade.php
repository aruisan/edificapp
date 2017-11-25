
	<legend><h2 class="text-center">Ingresa Una nueva actividad a tus Especialidades</h2></legend>	
		<div class="form-group">
			{!! Form::label('especializacion', 'Especialidades que realiza', ['for' => 'especializacion'] ) !!}
			<div class="input-group">
				<div class="input-group-addon">
					<span><i class="fa fa-briefcase fa-lg" aria-hidden="true"></i></span>
				</div>
				{!! Form::select('especializacion', $especializaciones, null, ['placeholder'=>'Selecciona una especializacion', 'class' => 'especialidades form-control', 'style' => "width: 100%", 'required'] ) !!}  
			</div>
		</div><br>

		<div class="form-group">
			{!! Form::label('actividad', 'Seleccione la actividad a desempeñar', ['for' => 'actividad'] ) !!}
			<div class="input-group">
				<div class="input-group-addon">
					<span><i class="fa fa-building fa-lg" aria-hidden="true"></i></span>
				</div>
				{!! Form::select('actividad',['placeholder'=>'Selecciona una especializacion'],null,['id'=>'actividades', 'class' => 'especialidades form-control', 'style' => "width: 100%"]) !!} 
			</div>
		</div><br>

		<div class="form-group">
			{!! Form::label('actividad', 'Seleccione la actividad a desempeñar', ['for' => 'actividad'] ) !!}
			<div class="input-group">
				<div class="input-group-addon">
					<span><i class="fa fa-building fa-lg" aria-hidden="true"></i></span>
				</div>
				{!! Form::date('tiempo', \Carbon\Carbon::now(), ['class' => 'form-control']) !!} 
			</div>
		</div>

