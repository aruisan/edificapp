<!-- Modal Cliente-->
		<div class="modal fade" id="registro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <img src="{{ asset('img/logo-header.png') }}" alt="Logo Edificapp">
		        <h4 class="modal-title titulo-modal myModalLabel"></h4>
		      </div>
		      <div class="modal-body">
		      		<div>
	      				<a href="/auth_facebook" id="btn-facebook" class="btn btn-lg btn-block" role="button"><i class="fa fa-facebook-official" aria-hidden="true"></i>Registrarse con Facebook</a>
	      			</div>

	      			<div>
	      				<a href="auth_google" id="btn-google" class="btn btn-lg btn-block" role="button"><i class="fa fa-google-plus" aria-hidden="true"></i>Registrarse con Google</a>
	      			</div>

		      		<legend>
			    		Crear una Cuenta
			    	</legend>
		      		<form action="/registrar" method="POST" class="form">
			      		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			      		<input type="hidden" name="rol" id="rol">
						<div class="form-group">
							<div class="input-group">
						      	<div class="input-group-addon">
									<span><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></span>
						      	</div>
						      	<input class="form-control" type="email" name="email" placeholder="Email">
							</div>
							<small>Digite su correo electrónico</small>
						</div>
						
						<div class="form-group">						
							<div class="input-group">
						      	<div class="input-group-addon">
									<span><i class="fa fa-unlock-alt fa-lg" aria-hidden="true"></i></span>
						      	</div>
						      	<input id="pass" class="form-control" type="password" name="password" placeholder="password" required>					      	
							</div>
							<small>Digite su Contraseña</small>
						</div>
						<div class="form-group">						
							<div class="input-group">
						      	<div class="input-group-addon">
									<span><i class="fa fa-unlock-alt fa-lg" aria-hidden="true"></i></span>
						      	</div>
						      	<input id="repass" class="form-control" type="password"  placeholder="re-password" required>					      	
							</div>
							<small>Repita la Contraseña</small>
						</div>
						<div class="resp_pass"></div>
						<div class="form-group">
				        		<input type="submit"  id="crear" class="btn crear" value="Crea Tu Cuenta">
						</div>
			      	</form>			       
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal Cliente-->

		<!-- Modal Login-->
		<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        <img src="{{ asset('img/logo-header.png') }}" alt="Logo Edificapp">
		        <h4 class="modal-title  myModalLabel">Ingresa a tu Cuenta</h4>
		      </div>
		      <div class="modal-body">
		      		<div>
	      				<a href="/auth_facebook" id="btn-facebook" class="btn btn-lg btn-block" role="button"><i class="fa fa-facebook-official" aria-hidden="true"></i>Iniciar Sesion con Facebook</a>
	      			</div>

	      			<div>
	      				<a href="auth_google" id="btn-google" class="btn btn-lg btn-block" role="button"><i class="fa fa-google-plus" aria-hidden="true"></i>Iniciar Sesion con Google</a>
	      			</div>
	      			<legend>
			    		Iniciar Sesion
			    	</legend>
		      		<form action="/login" method="POST" class="form">
		      			<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<div class="input-group">
						      	<div class="input-group-addon">
									<span><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></span>
						      	</div>
						      	<input class="form-control" type="email" name="email" placeholder="Email">
							</div>
							<small>Digite su correo electrónico</small>
						</div>
						
						<div class="form-group">						
							<div class="input-group">
						      	<div class="input-group-addon">
									<span><i class="fa fa-unlock-alt fa-lg" aria-hidden="true"></i></span>
						      	</div>
						      	<input class="form-control" type="password" name="password" placeholder="Contraseña" required>					      	
							</div>
							<small>Digite su Contraseña</small>
						</div>
						<input type="submit" class="btn" id="crear" value="Acceder">
			      	</form>
		      	
		      </div>
		    </div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal Login-->