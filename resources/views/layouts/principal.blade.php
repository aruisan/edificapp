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
						<ul class="nav">
							<li>
								<i class="fa fa-map-marker fa-2x fa-border" aria-hidden="true"></i>
								<p>Ubicación <br><small><a href="">Todas</a></small></p>	
								
							</li>
							<li>
								<i class="fa fa-vcard fa-2x fa-border" aria-hidden="true"></i>
								<p>Registrese <br><small><a href="" data-toggle="modal" data-target="#registro" id="cliente" class="llamar_registro">Cliente</a> | <a href="" data-toggle="modal" data-target="#registro" id="especialista" class="llamar_registro">Especialista</a></small></p>	
								
							</li>
							<li>
								<i class="fa fa-user fa-2x fa-border" aria-hidden="true"></i>
								<p>Ingresar <br><small><a href="" data-toggle="modal" data-target="#login">Login</a></small></p>	
								
							</li>									
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
						<p>¿Quiere hacer realidad la casa de sus sueños?</p>
					</div>
					<div class="col-sm-6 col-md-6">
						<a href="misCotizaciones" class="btn btn-lg col-md-12" role="button">Solicitar Cotización</a>
					</div>		
				</div>
			</div> <!--container enlace-->

			<div class="container-fluid directorio" id="directorio">
				<h2>DIRECTORIO DE PROFESIONALES</h2>

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
						<h5><a href="modal/modal.html" data-toggle="modal" data-target="#terminos">Términos y condiciones</a></h5>
						<p><a href="modal/modal.html" data-toggle="modal" data-target="#politica">Politica de Protección de Datos</a></p>
						
					</div>
				</div><!-- container piepag-->	
			</footer>

			<!-- Modal Términos y Condiciones-->
			<div class="modal fade" id="terminos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        <img src="{{ asset('img/logo-header.png') }}" alt="Logo Edificapp">
			        <h4 class="modal-title" id="myModalLabel">Términos y condiciones</h4>
			      </div>
			      <div class="modal-body">
			       <p>Este Sitio web es operado por Sicap SAS, con NIT 901.063.265-3 y Matrícula Mercantil: 980345-16 con domicilio en Calle 25 Norte No. 2BisN -09 de Cali (Valle del Cauca) y correo electrónico info@sicap.co, quien es el representante y propietario de la marca Edificapp. Las relaciones que se deriven de la prestación de los servicios contenidos en el Sitio web, están sometidas a la legislación y la jurisdicción Colombiana</p>

					<b>Términos y Condiciones</b>
					<p>Estos términos de servicio ("Términos", "Acuerdo") son un acuerdo entre Sicap SAS ("Sicap SAS ", "nosotros", "nos" o "nuestro") y usted ("el Usuario", "usted" o "su"). Este Acuerdo pone en adelante los términos generales y las condiciones de uso del sitio web http: //www.edificapp.com y cualquiera de sus productos o servicios (en conjunto, "Edificapp.com", "el Sitio web" o "Servicios").</p>

					<b>Cuentas y Membresías</b>
					<p>Usted debe tener al menos 18 años para usar este Sitio web. Ingresando y haciendo uso de Edificapp.com y estando de acuerdo a estos Términos, usted garantiza que tiene al menos 18 años de edad. Si usted crea una cuenta en Edificapp.com, usted es responsable de mantener la seguridad de su cuenta y es totalmente responsable de todas las actividades que ocurren bajo la cuenta y cualquier otra acción tomada en conexión con ello.</p>

					<p>El suministro de información de contacto falsa, de cualquier clase, puede causar la eliminación de su cuenta. Usted debe notificarnos inmediatamente de cualquier uso no autorizado de su cuenta o cualquier otra violación de seguridad. No estaremos obligados por ningún acto u omisión de su parte, incluyendo daños y perjuicios de ninguna clase incurridos como consecuencia de tales actos u omisiones. Podemos suspender, deshabilitar, o suprimir su cuenta (o cualquier parte de la misma) si determinamos que usted ha violado cualquier disposición de este Acuerdo o que su conducta o el contenido de su cuenta, tenderían a dañar nuestra reputación y buena voluntad. Si eliminamos su cuenta por los motivos precedentes, no podrá registrarse de nuevo para nuestros Servicios. Podemos bloquear su dirección de correo electrónico y la dirección de protocolo de Internet para prevenir registros futuros.</p>

					<b>Contenido de usuario</b>
					<p>No somos dueños de ningún dato, información o material ("el Contenido") que usted suministra a Edificapp.com durante la utilización del Servicio. Usted tendrá la responsabilidad exclusiva de la precisión, la calidad, la integridad, la legalidad, la fiabilidad, y los derechos de propiedad intelectual o el derecho al uso de todo el Contenido presentado. Podemos, pero no tenemos ninguna obligación a supervisar el Contenido cargado en Edificapp.com o creado por usted utilizando nuestros Servicios. A no ser que expresamente usted nos lo permita, su uso de Edificapp.com no nos concede la licencia para usar, reproducir, adaptar, modificar, publicar o distribuir el Contenido creado por usted o almacenado en su cuenta de usuario para hacer mercadeo, comercializar o cualquier objetivo similar. Pero usted nos concede el permiso de tener acceso, copiar, distribuir, almacenar, transmitir, reformatear, mostrar y realizar el Contenido de su cuenta de usuario, únicamente como requerimiento para el objetivo de proporcionarle los Servicios. Sin limitar cualquiera de las representaciones o garantías, tenemos el derecho, aunque no la obligación, a, en nuestro juicio propio, rechazar o quitar cualquier Contenido que, en nuestra razonable opinión, viola cualquiera de nuestras políticas o es de cualquier modo dañino o desagradable.</p>

					<b>Facturación y pagos</b>
					<p>Usted pagará todos los derechos o cargos a su cuenta conforme a los honorarios, gastos, y términos de facturación vigentes en el momento en que se adeuda una cuenta o cargo. Si permite la renovación automática para los Servicios a los que usted se ha suscrito, el valor será cargado automáticamente conforme al término que usted seleccionó. Si a nuestro juicio, su compra constituye una transacción de alto riesgo, requeriremos una copia de su identificación con fotografía válida suministrada por el gobierno, y posiblemente una copia de un extracto de cuenta reciente para la tarjeta debito o crédito usada para la compra. Nos reservamos el derecho de cambiar nuestros servicios en cualquier momento.</p>

					<b>Exactitud de información</b>
					<p>Ocasionalmente puede haber información en nuestro sitio web que contenga errores tipográficos, inexactitudes u omisiones que pueden relacionarse con descripciones de servicios, precios, disponibilidad, promociones y ofertas. Nos reservamos el derecho de corregir en cualquier momento sin previo aviso cualquier error, inexactitud u omisión, y de cambiar o actualizar información o cancelar órdenes si cualquier información en el Sitio Web o en cualquier sitio web relacionado es inexacta (Incluso después de haber enviado su pedido). No asumimos ninguna obligación de actualizar, enmendar o aclarar información en el Sitio Web, incluyendo, sin limitación, información de precios, excepto según lo requerido por la ley. Ninguna actualización especificada o fecha de actualización aplicada en Edificapp.com debe ser tomada para indicar que toda la información en el Sitio Web o en cualquier sitio web relacionado ha sido modificado o actualizado.</p>

					<b>Servicios de terceros</b>
					<p>Si decide habilitar, acceder o utilizar servicios de terceros, se le informará que el acceso y uso de estos otros servicios se rige exclusivamente por los términos y condiciones de dichos servicios y no respaldamos, ni nos hacemos responsables de estos, y no hacemos representaciones de ningún aspecto de esos otros servicios, incluyendo, sin limitación, su contenido o la forma en que manejan los datos (incluyendo sus datos) o cualquier interacción entre usted y el proveedor de los otros servicios. Usted renuncia irrevocablemente a cualquier reclamación contra Sicap SAS con respecto a dichos otros servicios. Sicap SAS no es responsable de ningún daño o pérdida causada o supuestamente causada en relación con su habilitación, acceso o uso de estos servicios, o su dependencia de las prácticas de privacidad, los procesos de seguridad de datos u otras políticas de estos otros servicios. Es posible que se le solicite que se registre en otros servicios en sus respectivos sitios web. Al habilitar cualquier otro servicio, está autorizando expresamente a Sicap SAS a revelar sus datos según sea necesario para facilitar el uso o habilitación de dicho otro servicio.</p>

					<b>Copias de Seguridad (Backups)</b>
					<p>Realizamos copias de seguridad periódicas del Sitio Web y del Contenido y haremos todo lo posible para asegurar la integridad y exactitud de estas copias de seguridad. En caso de fallo de hardware o pérdida de datos, restauraremos automáticamente las copias de seguridad para minimizar el impacto y el tiempo de inactividad.</p>

					<b>Enlaces a otros sitios web</b>
					<p>Aunque este Edificapp.com puede tener enlaces a otros sitios web, no estamos directa o indirectamente, implicando ninguna aprobación, asociación, patrocinio, respaldo o afiliación con ningún sitio web enlazado, a menos que se establezca específicamente en este documento. No somos responsables de examinar o evaluar, y no garantizamos las ofertas de ninguna empresa o persona o el contenido de sus sitios web. No asumimos ninguna responsabilidad por los actos, productos, servicios y contenidos de terceros. Usted debe revisar cuidadosamente las declaraciones legales y otras condiciones de uso de cualquier sitio web al que acceda a través de un enlace desde este sitio web. Su vinculación a otras páginas fuera del sitio u otros sitios web es bajo su propio riesgo.</p>

					<b>Publicidad</b>
					<p>Durante el uso de Edificapp.com, puede entrar en contacto o participar en promociones de anunciantes o patrocinadores que muestren sus productos o servicios a través del sitio web. Cualquier actividad, y cualquier término, condiciones, garantías o representaciones asociadas con tal actividad, es únicamente entre usted y el tercero aplicable. No tendremos ninguna responsabilidad u obligación por tal contacto, compra o promoción entre usted y cualquier tercero.</p>

					<b>Prohibiciones</b>
					<p>Además de otros términos establecidos en el Acuerdo, está prohibido utilizar el Edificapp.com o su contenido: (a) para cualquier propósito ilícito; (b) solicitar a otros que realicen o participen en actos ilícitos; (c) violar cualquier regulación, reglamento, ley u ordenanza local, estatal o internacional; (d) infringir o violar nuestros derechos de propiedad intelectual o los derechos de propiedad intelectual de terceros; (e) acosar, abusar, insultar, dañar, difamar, calumniar, desacreditar, intimidar o discriminar por motivos de género, orientación sexual, religión, origen étnico, raza, edad, nacionalidad o discapacidad; (f) suministrar información falsa o engañosa; (g) cargar o transmitir virus o cualquier otro tipo de código malicioso que sea o pueda ser usado de cualquier manera que afecte la funcionalidad o operación del Servicio o de cualquier sitio web relacionado, otros sitios web o Internet; (h) recoger o rastrear la información personal de terceros; (i) hacer spam, phishing, pharming, web spider, web crawling o web scraping; (j) para cualquier propósito obsceno o inmoral; O (k) interferir o eludir las características de seguridad del Servicio o cualquier sitio web relacionado, otros sitios web o Internet. Nos reservamos el derecho de terminar la utilización del Servicio o de cualquier sitio web relacionado, por violar cualquiera de los usos prohibidos.</p>

					<b>Derechos de propiedad intelectual</b>
					<p>Este Acuerdo no transfiere de Sicap SAS a usted ninguna propiedad intelectual de Sicap SAS o de terceros, y todos los derechos, títulos e intereses sobre dichos bienes permanecerán (como entre las partes) exclusivamente con Sicap SAS. Todas las marcas registradas, marcas de servicio, gráficos y logotipos utilizados en conexión con Edificapp.com o sus Servicios, son marcas comerciales o marcas registradas de Sicap SAS. Otras marcas comerciales, marcas de servicio, gráficos y logotipos utilizados en conexión con nuestro Sitio Web o Servicios pueden ser marcas comerciales de terceros. El uso de Edificapp.com y sus Servicios no le otorga ningún derecho ni licencia para reproducir o utilizar de cualquier otra forma, las marcas comerciales de Sicap SAS o de terceros.</p>

					<b>Limitación de responsabilidad</b>
					<p>En la mayor medida permitida por la ley aplicable, en ningún caso Sicap SAS, sus afiliados, funcionarios, directores, empleados, agentes, proveedores o licenciatarios serán responsables ante cualquier persona por (a): cualquier cobertura indirecta, incidental, especial, punitiva o daños consecuentes (incluyendo, sin limitación, daños por lucro cesante, ingresos, ventas, fondo de comercio, uso o contenido, impacto en negocios, interrupción de negocios, pérdida de ahorros anticipados, pérdida de oportunidad de negocio) Incluyendo, sin limitación, contrato, responsabilidad extracontractual, garantía, incumplimiento de obligaciones legales, negligencia o de otro tipo, incluso si Sicap SAS ha sido informada de la posibilidad de tales daños o podría haber previsto tales daños. En la medida de lo permitido por la ley aplicable, la responsabilidad global de Sicap SAS y sus afiliados, funcionarios, empleados, agentes, proveedores y licenciatarios, relacionada con los servicios estará limitada a un monto mayor equivalente de mil pesos COP o cualquier cantidad efectivamente pagada en efectivo Por usted a Sicap SAS para el período anterior de un mes antes del primer evento o suceso que da lugar a dicha responsabilidad. Las limitaciones y exclusiones también se aplican si este recurso no le compensa totalmente por cualquier pérdida o falla de su propósito esencial.</p>

					<b>Cambios y enmiendas</b>
					<p>Nos reservamos el derecho de modificar en cualquier momento este Acuerdo o sus políticas relacionadas con el Sitio web o Servicios, efectiva tras la publicación de una versión actualizada de este Acuerdo en el sitio web. Cuando lo hagamos revisaremos la fecha actualizada al final de esta página. El uso continuado del Sitio Web después de cualquier cambio, constituirá su consentimiento para tales cambios.</p>

					<b>Aceptación de estos términos</b>
					<p>Usted reconoce que ha leído este Acuerdo y está de acuerdo con todos sus términos y condiciones. Al usar el Sitio Web o sus Servicios, usted acepta estar obligado por este Acuerdo. Si no acepta cumplir con los términos de este Acuerdo, no está autorizado para utilizar o acceder al Sitio Web y sus Servicios.</p>

					<b>Contáctenos</b>
					<p>Si tiene alguna pregunta sobre este Acuerdo, póngase en contacto con nosotros.</p>

					<p>Este documento fue actualizado por última vez el 21 de Junio de 2017</p>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Save changes</button>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->


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
		      		<form action="/registrar" method="POST" class="sombra form">
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
		        <h4 class="modal-title text-primary myModalLabel">Ingresa a tu Cuenta</h4>
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
		      		<form action="/login" method="POST" class="sombra form">
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

