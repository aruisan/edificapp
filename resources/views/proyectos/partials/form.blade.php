	<legend><h2 class="text-center">Creacion de Proyectos</h2></legend>	
		<div class="form-group">
			{!! Form::label('nombre', 'titulo proyecto', ['for' => 'nombre'] ) !!}
			<div class="input-group">
				<div class="input-group-addon">
					<span><i class="fa fa-briefcase fa-lg" aria-hidden="true"></i></span>
				</div>
				{!! Form::text('nombre', null , ['class' => 'form-control', 'placeholder' => 'Titulo del proyecto' ]  ) !!} 
			</div>
		</div><br>

		<div class="form-group">
			{!! Form::label('descripcion', 'descripcion del proyecto', ['for' => 'descripcion'] ) !!}
			<textarea rows="4" class="form-control" name="descripcion">
			</textarea>
		</div><br>

		<div class="form-group">
			{!! Form::label('detalles', 'Detalles del proyecto', ['for' => 'detalles'] ) !!}
			<textarea rows="3" class="form-control" name="detalle">
			</textarea>
		</div>
		<label id="label-terminos"><input type="radio" value="5" id="terminos">Al continuar acepta los <a href="{{ asset('uploads/docs/PoliticasDeProteccionDeDatos.pdf') }}"  target="_blank"> Terminos y condiciones.</a></label><br>


