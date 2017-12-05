<!Doctype html>

<html lang="ES">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Edificapp</title>

    	<!--Llamamos al archivo css a través de CDN-->
    	{!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') !!}
    	
    	{!! Html::style('../css/style.css') !!}
    	{!! Html::style('../css/oskrStyle.css') !!}

    	{!! Html::style('../css/jquery.steps.css') !!}
    	@yield('css')
    	<!-- Llamamos al css de la libreria select2-->
    	{!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css') !!}

    	<!-- Llamamos al css de la libreria owlcarousel-->
    	{!! Html::style('../css/owl.carousel.css') !!}
    	{!! Html::style('../css/owl.theme.default.css') !!}
	</head>

	<body>
		<div class="conten">

			<header>
				<h1 hidden=>Edificapp</h1>
					
				<div class="container bar-sup">
					<div class="col-xs-12 col-sm-4 col-md-6">
						<a href="index.html">
							<img src="{{ asset('img/logo-header.png') }}" alt="Logo Edificapp">
						</a>				
					</div>

					<div class="col-xs-12 col-sm-8 col-md-6">
						<ul>
							<div class="dropdown">
							  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><img class="img-circle" src="{{ Auth::user()->avatar }}" width="30"> Bienvenido {{ Auth::user()->name }}
							  <span class="caret"></span></button>
							  <ul class="dropdown-menu">
							    <li><a href="/miCuenta"><i class="fa fa-user-circle" aria-hidden="true"></i> Editar mi Perfil </a></li>
								<li><a href="/salir"><i class="fa fa-reply"></i> Salir</a></li>
							  </ul>
							</div>								
						</ul>						
					</div>					
				</div> <!--container bar-sup-->	
				<nav class="navbar" role="navigation" id="navbar" data-spy="affix" data-offset-top="500">
					<div class="container-fluid navegacion">
						<div class="container">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
			                        <span class="sr-only">Toggle navigation</span>
			                        <i class="fa fa-bars fa-2x"></i>
			                        
			                    </button>
							</div><!--navbar-header-->									
							
							<div class="collapse navbar-collapse" id="collapse">
								<ul class="nav navbar-nav navbar-right">
									<li><a href="/"><i class="fa fa-home fa-fw" aria-hidden="true"></i>Inicio</a></li>
									<li><a href="#directorio">Directorio de Especialistas</a></li>
									<li><a href="../cliente/cliente.html">Solicita Cotización</a></li>
									<li><a href="#inicio">Ideas Inspiradoras</a></li>
									<li><a href="#inicio">Blog</a></li>
									<li><a href="#inicio">Ayuda</a></li>
								</ul>
							</div> <!--collapse-->
						</div>	

					</div><!--container navegacion-->
				</nav>
				<!--fin Barra Navegación-->				
			</header>

			<div class="container-fluid" id="enlace">
				<div class="container">
					<div class="col-sm-6 col-md-6">
						<p>¿QUIERES QUE TU PERFIL COMO ESPECIALISTA SEA EL MAS VISTO?</p>
					</div>
					<div class="col-sm-6 col-md-6">
						<a href="membresia" class="btn btn-lg col-md-12" role="button">Conoce nuestros planes</a>
					</div>		
				</div>
			</div> <!--container enlace-->
			@include('alertas.errors')
			@include('alertas.success')

			<div class="barra-lateral">
				<section>
					<aside>
						<div class="user-info text-center">
							<i class="fa fa-caret-square-o-left fa-3x text-center botonCerrar" aria-hidden="true">Ocultar</i>
						</div><!--user info-->
						<nav class="navbar" role="navigation" id="navbar">
							<div class="navegacion">
									<div class="navbar-header">
										<a class="navbar-brand" href="#inicio"><h1></h1></a>
									</div><!--navbar-header aside-->									

									<div>
										<ul class="nav">
											<li><a href="/dashboard"><i class="fa fa-home fa-fw"></i>DashBoard</a></li>
										@if (Auth::user()->rol == "especialista")
											<li><a href="/misEspecializaciones">Mis Especialidades</a></li>
											<li><a href="/misContratos">Mis Contratos</a></li>
											<li><a href="/misCalificaciones">Mis Calificaciones</a></li>
											<li><a href="/misProyectos">Mis Proyectos</a></li>
											<li><a href="/contratos">Encuentra Contratos</a></li>
											<li><a href="/membresia">Membresia</a></li>
										@endif
											<li><a href="/misCotizaciones">Crea un proyecto</a></li>
											<li><a href="/especialistas">Encuentra Especialistas</a></li>
										</ul>
									</div> <!--collapse aside-->
							</div><!--container navegacion aside-->
						</nav>
					<!--fin Barra Navegación aside-->
					</aside>
				</section>
			</div><!-- barra lateral-->
			
			<div class="contenido">	
				<i class="boton fa fa fa-caret-square-o-right fa-3x cerrar"></i>
					@yield('content')
			</div><!--contenido-->

		<!-- JQuery CDN-->
		{!! Html::script('https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js') !!}
    	<script>
			$('#especializacion').change(function(event){
				$.get("/misEspecializaciones/actividades/"+event.target.value+"", function(response, especializaciones){
					$('#actividades').empty();
					for(i=0; i<response.length; i++){
						//console.log("<option values='"+response[i].id+"'>"response[i].nombre+"</option>");
						$('#actividades').append("<option value='"+response[i].id+"'>"+response[i].nombre+"</option>");
					}
				});
			});
		</script>
    	
    	<!-- Latest compiled and minified JavaScript -->
    	{!! Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') !!}

		<!--Llamamos al archivo Font Awesome CDN-->
		{!! Html::script('https://use.fontawesome.com/bb6d0f8827.js') !!}

    	<!--Llamamos al archivo datatables CDN-->
    	{!! Html::script('https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js') !!}
    	{!! Html::script('https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js') !!}
    	<script type="text/javascript">
    		$(document).ready(function()
    		{
			    $('#tabla').DataTable({
			    	"language": {
					    "sProcessing":     "Procesando...",
					    "sLengthMenu":     "Mostrar _MENU_ registros",
					    "sZeroRecords":    "No se encontraron resultados",
					    "sEmptyTable":     "Ningún dato disponible en esta tabla",
					    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
					    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
					    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
					    "sInfoPostFix":    "",
					    "sSearch":         "Buscar:",
					    "sUrl":            "",
					    "sInfoThousands":  ",",
					    "sLoadingRecords": "Cargando...",
					    "oPaginate": {
					        "sFirst":    "Primero",
					        "sLast":     "Último",
					        "sNext":     "Siguiente",
					        "sPrevious": "Anterior"
					    },
					    "oAria": {
					        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
					        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
					    }
					}
			    });
			} );
    	</script>

    	<!--script select2-->	
    	{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js') !!}

		<!--script steps-->	
		{!! Html::script('../js/jquery.steps.js') !!}

		<!--script owlcarousel-->
		{!! Html::script('../js/owl.carousel.js') !!}
		{!! Html::script('../js/javascript.js') !!}	
		@yield('js')
		<!--script maps-->

		
	</body>

</html>

