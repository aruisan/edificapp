	@extends('layouts.dashboard')
	@section('content')
		<section>
			<ol class="breadcrumb">
				  <li><a href="/dashboard">Home</a></li>	  
				  <li class="active">Mis Calificaciones</li>
			</ol>
			<div class="formulario container col-sm-7 col-sm-offset-1 col-md-7 col-md-offset-1">
				<div class="container">
					<h2 class="text-center">Calificaciónes</h2>

					<div class="valoracion container text-center">
						<div class="col-sm-6 col-md-6">
							<h3>Valoración Promedio del Especialista</h3>
							<p>4.3 <small>/5</small></p>
							<ul class="list-unstyled list-inline">
								<li>
									<input type="checkbox" id="checkbox5" name="checkbox[]">
						  	 		<label for="checkbox5">1</label>
						  		</li>
								<li>
									<input type="checkbox" id="checkbox6" name="checkbox[]">
						  	 		<label for="checkbox6">2</label>
								</li>
								<li>
									<input type="checkbox" id="checkbox7" name="checkbox[]">
						  	 		<label for="checkbox7">3</label>
								</li>
								<li>
									<input type="checkbox" id="checkbox8" name="checkbox[]">
						  	 		<label for="checkbox8">4</label>
								</li>
								<li>
									<input type="checkbox" id="checkbox9" name="checkbox[]">
						  	 		<label for="checkbox9">5</label>
								</li>
							</ul>
							<div>
								<i class="fa fa-handshake-o fa-2x" aria-hidden="true"></i>Total clientes:250
							</div>
						</div>

						<div class="barras col-sm-6 col-md-6">
							<div class="pull-left">
								5<i class="fa fa-star" aria-hidden="true"></i>
							</div>
							<div class="progress progress-striped active">
							  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
							    <span class="sr-only">40% Complete (success)</span>
							  </div>
							</div>
							<div class="pull-left">
								4<i class="fa fa-star" aria-hidden="true"></i>
							</div>
							<div class="progress progress-striped active">
							  <div class="progress-bar progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
							    <span class="sr-only">20% Complete</span>
							  </div>
							</div>
							<div class="pull-left">
								3<i class="fa fa-star" aria-hidden="true"></i>
							</div>
							<div class="progress progress-striped active">
							  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
							    <span class="sr-only">20% Complete</span>
							  </div>
							</div>
							<div class="pull-left">
								2<i class="fa fa-star" aria-hidden="true"></i>
							</div>
							<div class="progress progress-striped active">
							  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
							    <span class="sr-only">60% Complete (warning)</span>
							  </div>
							</div>
							<div class="pull-left">
								1<i class="fa fa-star" aria-hidden="true"></i>
							</div>
							<div class="progress progress-striped active">
							  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
							    <span class="sr-only">80% Complete (danger)</span>
							  </div>
							</div>
					</div><!--barras-->
				</div><!--valoración-->

					<div class="number-counters">
						<!-- first count item -->
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
							<div class="counters-item">
								<i class="fa fa-clock-o fa-3x"></i>
								<strong class="count">50</strong>
								<!-- Set Your Number here. i,e. data-to="56" -->
								<p>Cantidad de vistas del perfil para cotizar</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
							<div class="counters-item">
								<i class="fa fa-users fa-3x"></i>
								<strong class="count">15</strong>
								<!-- Set Your Number here. i,e. data-to="56" -->
								<p>Acumulado de cotizaciones solicitadas</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
							<div class="counters-item">
								<i class="fa fa-rocket fa-3x"></i>
								<strong class="count">20</strong>
								<!-- Set Your Number here. i,e. data-to="56" -->
								<p> Acumulado de Visitas </p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
							<div class="counters-item">
								<i class="fa fa-trophy fa-3x"></i>
								<strong class="count">18</strong>
								<!-- Set Your Number here. i,e. data-to="56" -->
								<p>Acumulado de cotizaciones completadas</p>
							</div>
						</div>
						<!-- end first count item -->
				
					</div>
				</div>
			</section> <!--section calificaciones-->
		</div>
	@stop