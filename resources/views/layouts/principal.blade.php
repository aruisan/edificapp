<!Doctype html>

<html lang="ES">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Edificapp</title>

    	<!--Llamamos al archivo css a través de CDN-->
    	{!!Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')!!}

    	{!!Html::style('css/style.css')!!}

    	{!!Html::style('css/jquery.steps.css')!!}

    	<!-- Llamamos al libreria select2-->
    	{!!Html::style('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css')!!}

    	<!-- Llamamos al css de la libreria owlcarousel-->
    	{!!Html::style('css/owl.carousel.css')!!}
    	{!!Html::style('css/owl.theme.default.css')!!}		
	</head>

	<body>		
			<header>
				<div class="container bar-sup">
					<div class="col-xs-12 col-sm-4 col-md-6">
						<a href="index.html">
							<img src="{{ asset('img/logo-header.png') }}" alt="Logo Edificapp">
						</a>				
					</div>

					<div class="col-xs-12 col-sm-8 col-md-6">
						<ul class="nav menu-user">
							<li>
								<i class="fa fa-map-marker fa-2x fa-border" aria-hidden="true"></i>
								<p>Ubicación <br><small><a href="">Todas</a></small></p>	
							</li>
						@if(Auth::guest())
							<li>
								<i class="fa fa-vcard fa-2x fa-border" aria-hidden="true"></i>
								<p>Registrese <br><small><a href="" data-toggle="modal" data-target="#registro" id="cliente" class="llamar_registro">Cliente</a> | <a href="" data-toggle="modal" data-target="#registro" id="especialista" class="llamar_registro">Especialista</a></small></p>	
							</li>
							<li>
								<i class="fa fa-user fa-2x fa-border" aria-hidden="true"></i>
								<p>Ingresar <br><small><a href="" data-toggle="modal" data-target="#login">Login</a></small></p>	
							</li>	
							
						@else()
							<li class="dropdown">
							  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><img class="img-circle" src="{{ Auth::user()->avatar }}" width="30"> Bienvenido {{ Auth::user()->name }} <span class="caret"></span>
							</button>
							  	<ul class="dropdown-menu">
								    <li><a href="/miCuenta"><i class="fa fa-user-circle" aria-hidden="true"></i> Editar mi Perfil </a></li>
									<li><a href="/salir"><i class="fa fa-reply"></i> Salir</a></li>
								  </li>
								</ul>
							</li>		
						@endif								
						</ul>						
					</div>					
				</div> <!--container bar-sup-->				

				<nav class="navbar" role="navigation" id="navbar" data-spy="affix" data-offset-top="100">
					<div class="container-fluid navegacion">
						<div class="container">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
			                        <span class="sr-only">Toggle navigation</span>
			                        <i class="fa fa-bars fa-2x"></i>
			                        
			                    </button>
								<a class="navbar-brand" href="#inicio"><h1></h1></a>
							</div><!--navbar-header-->									
							
							<div class="collapse navbar-collapse" id="collapse">
								<ul class="nav navbar-nav navbar-right">
									<li><a href=""><i class="fa fa-home fa-fw" aria-hidden="true"></i>Inicio</a></li>
									<li><a href="#directorio">Directorio de Especialistas</a></li>
									<li><a href="cliente/cotizacion/cotizacion.html">Solicita Cotización</a></li>
									<li><a href="#inicio">Ideas Inspiradoras</a></li>
									<li><a href="especialista/cuenta/cuenta.html">Blog</a></li>
									<li><a href="#inicio">Ayuda</a></li>
								</ul>
							</div> <!--collapse-->
						</div>	

					</div><!--container navegacion-->
				</nav>
				<!--fin Barra Navegación-->
				@include('alertas.errors')
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

			<div class="col-xs-1 col-sm-1 col-md-2 col-lg-2"></div>
          	<div class="panel-group col-xs-10 col-sm-10 col-md-8 col-lg-8" id="accordion" role="tablist" aria-multiselectable="true">
	            <div class="panel panel-default">
	              <div class="panel-heading" role="tab" id="headingOne">
	                <h4 class="panel-title">
	                  <center>
	                  	<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="btn btn-warning">
	                   Ver Todas Las Especialidades
	                  	</a>
	                  </center>
	                </h4>
	              </div>
	              <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
	                <div class="panel-body">
	                  <p class="text-justify">
	                    @foreach($especializaciones as $especializacion)
	                    {!! '<em>('.$especializacion->nombre.'</em>) - ' !!}
	                    @endforeach
	                  </p> 
	                </div>
	              </div>
	            </div>
	        </div>



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


			<footer>
				<div class="container-fluid piepag">
					<div class="col-md-3">
						<h5>Servicios</h5>
						<ul class="fa-ul">
							<li><i  class="fa-li fa fa-address-book"></i>Directorio de Especialistas</li>
							<li><i  class="fa-li fa fa-book"></i>Blog</li>
							<li><i  class="fa-li fa fa-lightbulb-o"></i>Galería de Ideas</li>
							<li><i  class="fa-li fa fa-gears"></i>Soluciones de Ingeniería</li>
						</ul>
					</div>
					<div class="col-md-3">
						<h5>Registro</h5>
						<ul class="fa-ul">
							<li><i  class="fa-li fa fa-credit-card"></i>Clientes</li>
							<li><i  class="fa-li fa fa-wrench"></i>Especialistas</li>			
						</ul>
					</div>
					<div class="col-md-3">
						<h5>Ayuda</h5>
					</div>
					<div class="col-md-3">
						<h5><a href="modal/modal.html" data-toggle="modal" data-target="#terminos">Legal</a></h5>
						<p><a href="modal/modal.html" data-toggle="modal" data-target="#politica">Politica de Protección de Datos</a></p>
						
					</div>
				</div><!-- container piepag-->	
			</footer>

			@include('modals.juridica')
			@include('modals.user')

		<!-- JQuery CDN-->
		{!!Html::script('https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js') !!}
    	
    	<!-- Latest compiled and minified JavaScript -->
    	{!!Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') !!}
>

		<!--Llamamos al archivo Font Awesome CDN-->
		{!!Html::script('https://use.fontawesome.com/bb6d0f8827.js') !!}

    	<!--script select2-->
    	{!!Html::script('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js') !!}

		<!--script steps-->	
		{!!Html::script('js/jquery.steps.js') !!}

		<!--script owlcarousel-->	
		{!!Html::script('js/owl.carousel.js') !!}
		{!!Html::script('js/javascript.js') !!}

		<!--script maps-->
		{!!Html::script('https://maps.googleapis.com/maps/api/js?key=AIzaSyAA7eOJkGoZwWlSiCIbEltXu4ljUhw1Ftg&callback=initMap') !!}

		<script type="text/javascript">
			$('#pass, #repass').change(function(){
				var pass1 = $('#pass').val();
				var pass2 = $('#repass').val();
				if(pass1 == pass2){
					$('.resp_pass').show().html('<div class="alert alert-success text-center">las contraseñas si coinciden</div>');
					$('.crear').attr("disabled", false);
				}else{
					$('.resp_pass').show().html('<div class="alert alert-danger text-center">las contraseñas no son iguales</div>');
					$('.crear').attr("disabled", true);
				}
			});


			$('.llamar_registro').click(function(){ 
				var rol = $(this).attr('id');
				var titulo = "Cuenta "+rol;
				$('#rol').val(rol);
				$('.titulo-modal').text(titulo);
			});

		</script>
		
	</body>

</html>

