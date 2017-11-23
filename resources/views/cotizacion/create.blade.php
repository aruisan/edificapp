		@extends('layouts.dashboard')
		@section('content')
			<div class="formulario container col-sm-7 col-sm-offset-3 col-md-7 col-md-offset-3">
				<form>
					<fieldset>
						<legend>
							<h2 class="text-center">COTIZANDO TU SUEÑO</h2>
						</legend>			      		
			      		<div class="form-group col-sm-6 col-md-6">
							<label>Escoja la especialidad que requiere</label>
							<div class="input-group">
						      	<div class="input-group-addon">
									<span><i class="fa fa-briefcase fa-lg" aria-hidden="true"></i></span>
						      	</div>
						      	<select form="#cotizaciones" class="especialidades form-control" name="especialidad" style="width: 100%">
		  							<option value="ARQ">Arquitectos</option>
		  							<option value="DBARQ">Dibujantes Arquitectónicos</option>
		  							<option value="CONS">Construcción</option>
		  							<option value="PINT">Pintores</option>
		  							<option value="MAES">Maestros de Contrucción</option> 
		  							<option value="ALB">Albañiles</option> 
		  							<option value="REMO">Remodelación</option>
		  							<option value="CLIV">Construcción Liviana</option>
		  							<option value="CARP">Carpinteros</option>
		  							<option value="ELECT">Electricistas</option>
		  							<option value="PLOM">Plomeros</option>
		  							<option value="PMAD">Pisos de Madera</option>
		  							<option value="PVIN">Pisos de Vinilo y PVC</option>
		  							<option value="PDEC">Pisos y Concreto Decorativo</option>		
		  							<option value="PAPEL">Papel de Colgadura y Alfombras</option>		
		  							<option value="CORT">Cortinas y Persianas</option>			
		  							<option value="ILUM">Iluminación LED</option>
		  							<option value="DISIN">Diseño de Interiores</option>
		  							<option value="COC">Cocinas</option>
		  							<option value="CARPM">Carpintería Metálica</option>
		  							<option value="CARPVC">Carpintería en PVC</option>
		  							<option value="IMP">Impermeabilización</option>
		  							<option value="AIRE">Aire Acondicionado - Climatización</option>
		  							<option value="JARD">Jardineros</option>
		  							<option value="FACH">Fachadas</option>
		  							<option value="PARA">Parasoles y Toldos</option>
		  							<option value="PISCI">Piscinas y Zonas Húmedas</option>
		  							<option value="DOMO">Domótica - Casas Inteligentes</option>
		  							<option value="TOPO">Topografía</option>
		  							<option value="ESTSU">Estudios de Suelo</option>
		  							<option value="DISET">Diseño Estructural</option>
		  							<option value="DISHI">Diseño Hidráulico, Sanitario y Sistemas Contra Incendios</option>
		  							<option value="DISEL">Diseño Eléctrico</option>
		  							<option value="GAS">Servicios de GAS</option>
		  							<option value="AVAL">Avalúos</option>
		  							<option value="ASESO">Asesorías - Gestión de Subsidios, Permisos y Licencias</option>
								</select>					      	
							</div>
						</div>
						<!--<div class="form-group">
							<div class="input-group">
						      	<div class="input-group-addon">
									<span><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></span>
						      	</div>
						      	<select  name="actividades" multiple id="actividades"></select>
							</div>
							<small>Ingrese su correo electrónico</small>
						</div>-->
						<div class="form-group col-sm-6 col-md-6">
							<label>Seleccione la actividad a desempeñar</label>
							<div class="input-group">
						      	<div class="input-group-addon">
									<span><i class="fa fa-building fa-lg" aria-hidden="true"></i></span>
						      	</div>
						      	<select class="actividades form-control" name="actividades" multiple style="width: 100%">
						      		<optgroup label="Arquitectos">
						      			<option>Diseño Arquitectónico</option>
						      		</optgroup>
						      		<optgroup label="Dibujantes Arquitectónicos">
						      			<option>Dibujo Arquitectónico</option>
						      			<option>Dibujos 3D y Render</option>
						      		</optgroup>
						      		<optgroup label="Construcción">
						      			<option>Gerencia de Proyectos de Construcción</option>
						      			<option>Construcción Tradicional</option>
						      			<option>Casas Prefabricadas</option>
						      			<option>Cabañas de Madera</option>
						      			<option>Demolición</option>
						      			<option>Excavaciones y Movimientos de Tierra</option>
						      			<option>Pisos en Concreto</option>
						      			<option>Pavimentos</option>
						      			<option>Estructuras Metálicas</option>
						      			<option>Techos y Cubiertas</option>
						      			<option>Recolección de Escombros</option>
						      			<option>Pozos profundos</option>
						      		</optgroup>
						      	</select>
							</div> 
						</div>

						<div class="form-group">
						 	<label>Lugar donde necesita que se ejecute la actividad</label>
						 	<div id="map"></div>
						 </div> 

						<div class="form-group col-sm-4 col-md-4"">						
							<label>Fecha limite para obtener la cotización</label>
							<div class="input-group">
						      	<div class="input-group-addon">
									<span><i class="fa fa-calendar fa-lg" aria-hidden="true"></i></span>
						      	</div>
						      	<input class="form-control" type="date"  placeholder="Fecha de visita" required>					      	
							</div>
							<small>Tener en cuenta si se debe realizar visita previa</small>
						</div>
						<div class="form-group col-sm-4 col-md-4"">						
							<label>Fecha estimada para realizar la actividad</label>
							<div class="input-group">
						      	<div class="input-group-addon">
									<span><i class="fa fa-calendar fa-lg" aria-hidden="true"></i></span>
						      	</div>
						      	<input class="form-control" type="date"  placeholder="Fecha de visita" required>					      	
							</div>
						</div>

						<div class="form-group col-sm-4 col-md-4"">
							<label>Tamaño del proyecto (en m2 o metros lineales)</label>
							<div class="input-group">
						      	<div class="input-group-addon">
									<span><i class="fa fa-arrows fa-lg" aria-hidden="true"></i></span>
						      	</div>
						      	<input class="form-control" type="tel"  placeholder="Teléfono">
							</div>
						</div>

						<div class="form-group col-sm-12">						
							<label>Descripción del proyecto</label>	
							<div class="input-group">
						      	<div class="input-group-addon">
									<span><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></span>
						      	</div>
						      	<textarea class="form-control" rows="4" placeholder="Descripción del proyecto"></textarea>
						  	</div>
						  	<small>Menos de 300 palabras</small>
						 </div>
					</fieldset><!--Cotizando tu sueño-->			 
			    </form>
	</div>
	@stop