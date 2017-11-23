			
@extends('layouts.principalForm')
@section('content')
			<form action="dashboard" method="POST" class="form sombra">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<legend>
							<h2 class="text-center">Información de la cuenta</h2>
						</legend>

						<div class="form-group">						
							<div class="input-group">
						      	<div class="input-group-addon">
									<span><i class="fa fa-user-circle-o fa-lg" aria-hidden="true"></i></span>
						      	</div>
						      	<input class="form-control" type="text" name="name"  placeholder="Nombre Completo o Rázon Social" required value="{{ $user->name }}">					      	
							</div>
							<small>Ingrese su Nombre Completo o Rázon Social</small>
						</div>
						<div class="form-group">
							<div class="input-group">
						      	<div class="input-group-addon">
									<span><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></span>
						      	</div>
						      	<input class="form-control" type="email" name="email" placeholder="Email" value="{{ $user->email }}">
							</div>
							<small>Ingrese su correo electrónico</small>
						</div>
						<div class="form-group">
							<div class="input-group">
						      	<div class="input-group-addon">
									<span><i class="fa fa-phone fa-lg" aria-hidden="true"></i></span>
						      	</div>
						      	<input class="form-control" type="tel" name="tel" placeholder="Teléfono" value="{{ $user->telefono }}">
							</div>
							<small>Ingrese su número de teléfono</small>
						</div>
						<div class="form-group">						
							<select class="form-control" name="rol">
								<option>especialista</option>
								<option>cliente</option>
							</select>
							<small>Tipo de Usuario</small>
						</div>
					<input type="submit" value="Guardar" class="btn btn-primary">
				</form>
@stop