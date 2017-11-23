			
	@extends('layouts.dashboard')
	@section('content')
			<ol class="breadcrumb">
				  <li><a href="/dashboard">Home</a></li>	  
				  <li class="active">Mis Datos</li>
				</ol>
			<div class="formulario container col-sm-7 col-sm-offset-3 col-md-7 col-md-offset-3">
					<form method="POST" action="editUser" class="sombra form">
						<legend>
							<h2 class="text-center">Información de la cuenta</h2>
						</legend>

						<div class="form-group">						
							<div class="input-group">
						      	<div class="input-group-addon">
									<span><i class="fa fa-user-circle-o fa-lg" aria-hidden="true"></i></span>
						      	</div>
						      	<input type="hidden" name="_token" value="{{ csrf_token() }}">
						      	<input class="form-control" type="text"  name="name" placeholder="Nombre Completo o Rázon Social" required value="{{ $user->name }}">					      	
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
						      	<input class="form-control" type="tel"  name="telefono" placeholder="Teléfono" value="{{ $user->telefono }}">
							</div>
							<small>Ingrese su número de teléfono</small>
						</div>
						<div class="form-group">						
							<div class="input-group">
						      	<div class="input-group-addon">
									<span><i class="fa fa-unlock-alt fa-lg" aria-hidden="true"></i></span>
						      	</div>
						      	<input class="form-control" type="password" name="password"  placeholder="Contraseña">					      	
							</div>
							<small>Ingrese su Contraseña</small>
						</div>
					<button type="Submit" class="btn" id="guardar">Guardar</button>
				</form>
		</div>
@stop