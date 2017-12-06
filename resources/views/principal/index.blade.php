@extends('layouts.principal')
@section('content')
			<div class="container-fluid">
					<div class="carousel slide" data-ride="carousel" id="features">
						<ol class="carousel-indicators">
							
						</ol>
						<div class="carousel-inner fullheight">
							<div class="item active">
								<img src="{{ asset('img/carrousel1.jpg') }}" alt="img carousel 1">
							</div>
							<div class="item">
								<img src="{{ asset('img/ingreso.jpg') }}" alt="img carousel 2">
								<div class="carousel-caption col-xs-6 col-xs-offset-4 col-sm-3 col-sm-offset-5 col-md-3 col-md-offset-5">
									<p>¿QUIERES SER PARTE DEL GRUPO DE PROFESIONALES?</p>
									<a href="membresia" id="especialista" class="llamar_registro" data-toggle="modal" data-target="#registro">INGRESA AQUI</a>
								</div>
							</div>
						</div><!--carrousel-inner-->	

						<a class="left carousel-control" href="#features" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a class="right carousel-control" href="#features" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right">	</span>
						</a>
					</div> <!--carrousel-->
				</div><!--container carousel-->
			</header>

			<div class="container-fluid" id="enlace">
				<div class="container">
					<div class="col-sm-6 col-md-6">
						<p><h3><b>¿Quiere hacer realidad la casa de sus sueños?</b></h3></p>
					</div>
					<div class="col-sm-6 col-md-6">
						<a href="misCotizaciones" class="btn btn-lg col-md-12" role="button">Solicitar Especialista</a>
					</div>		
				</div>
			</div> <!--container enlace-->

			<div class="container-fluid directorio" id="directorio">
				<h2>DIRECTORIO DE ESPECIALISTAS</h2>

				<div class="col-sm-6 col-md-3">
					<img src="{{ asset('img/arquitectos.jpg') }}">
					<h4><a href="" class="btn btn-lg btn-block">ARQUITECTOS</a></h4>
				</div>

				<div class="col-sm-6 col-md-3">
					<img src="{{ asset('img/dibujantes.jpg') }}">
					<h4><a href="" class="az btn btn-lg btn-block">DIBUJANTES</a></h4>
				</div>

				<div class="col-sm-6 col-md-3">
					<img src="{{ asset('img/construccion.jpg') }}">
					<h4><a href="" class="btn btn-lg btn-block">CONSTRUCCIÓN</a></h4>
				</div>

				<div class="col-sm-6 col-md-3">
					<img src="{{ asset('img/pintores.jpg') }}">
					<h4><a href="" class="az btn btn-lg btn-block">PINTORES</a></h4>
				</div>
			</div><!--container directorio-->

			<center>
	          <a href="{{ asset('especialidades/publica') }}" class="btn btn-warning">
	             Ver Todas Las Especialidades
	          </a>
	        </center>


			<section class="container">
				<h2 class="text-center">Aliados</h2>
				<div class="aliados owl-carousel owl-theme">
					<div class="item">
						<img src="{{ asset('img/logo.png') }}">
					</div>
					<div class="item">
						<img src="{{ asset('img/logo.png') }}">
					</div>
					<div class="item">
						<img src="{{ asset('img/logo.png') }}">
					</div>
					<div class="item">
						<img src="{{ asset('img/logo.png') }}">
					</div>
					<div class="item">
						<img src="{{ asset('img/logo.png') }}">
					</div>
				</div>
			</section> <!--section membresias-->
@stop