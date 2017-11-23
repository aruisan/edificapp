	<legend><h2 class="text-center">Completa Tu Cuenta Especialista</h2></legend>	
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
			<div class="input-group">
				<div class="input-group-addon">
					<span><i class="fa fa-building fa-lg" aria-hidden="true"></i></span>
				</div>
				<textarea rows="3" class="form-control" name="detalles">
			</textarea>
			</div>
		</div>
		<label id="label-terminos"><input type="radio" value="5" id="terminos">Al continuar acepta los <a href="{{ asset('uploads/docs/PoliticasDeProteccionDeDatos.pdf') }}"  target="_blank"> Terminos y condiciones.</a></label><br>


