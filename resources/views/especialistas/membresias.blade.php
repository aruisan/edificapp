	@extends('layouts.dashboard')
	@section('content')
	<section class="container">
				<div class="contenido">
				<ol class="breadcrumb">
				  <li><a href="/">Home</a></li>	  
				  <li class="active">Membresias</li>
				</ol>
				<section class="container">
					<h2 class="text-center">Membresias</h2>
					<div class="membresias owl-carousel owl-theme">
						<div class="panel panel-warning">
						  <div class="panel-heading">
							    <input type="checkbox" id="checkbox1" name="checkbox[]"/>
							    <label for="checkbox1"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Freemium</a></label>				
						  </div>
						  <table class="table">
						    	<tbody class="collapse in" id="collapseOne">
						    		<tr>
							    		<td>Especialidades Inscritas:</td>
							    		<td>2 Especialidades</td> 
							    	</tr>
							    	<tr>
							    		<td>Galería de Proyectos:</td>
							    		<td>2 Proyectos (de hasta 6 Imágenes cada uno)</td>
							    	</tr>
							    	<tr>
							    		<td>Visibilidad:</td>
							    		<td>Baja, después de los especialistas Premium</td>
					    		    </tr>
							    	<tr>
							    		<td>Calificación de clientes:</td>
							    		<td><i class="fa fa-times fa-lg"></i></td> 
							    	</tr>
							    	<tr>
							    		<td>Sellos:</td>
							    		<td><i class="fa fa-times fa-lg"></i></td> 
							    	</tr>
							    	<tr>
							    		<td>Prioridad atención a Aliados:</td>
							    		<td><i class="fa fa-times fa-lg"></i></td> 
							    	</tr>
							    	<tr>
							    		<td>Tarifa:</td>
							    		<td>Gratis</td> 
							    	</tr>
						    	</tbody>
						    	
						    </table>
						</div><!--panel-->
						
						<div class="panel panel-warning">
						  <div class="panel-heading">
						  	 <input type="checkbox" id="checkbox2" name="checkbox[]">
						  	 <label for="checkbox2"><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Premium Light (Silver)</a></label>
						  </div>
						   <table class="table">
						    	<tbody class="collapse in" id="collapseTwo">
						    		<tr>
							    		<td>Especialidades Inscritas:</td>
							    		<td>8 Especialidades</td> 
							    	</tr>
							    	<tr>
							    		<td>Galería de Proyectos:</td>
							    		<td>5 Proyectos (de hasta 10 Imágenes cada uno)</td>
							    	</tr>
							    	<tr>
							    		<td>Visibilidad:</td>
							    		<td>Notable, Aparición preferente sobre los Freemium en los listados filtrados</td>
					    		    </tr>
							    	<tr>
							    		<td>Calificación de clientes:</td>
							    		<td><i class="fa fa-check fa-lg"></i></td> 
							    	</tr>
							    	<tr>
							    		<td>Sellos:</td>
							    		<td><i class="fa fa-check fa-lg"></i></td> 
							    	</tr>
							    	<tr>
							    		<td>Prioridad atención a Aliados:</td>
							    		<td><i class="fa fa-times fa-lg"></i></td> 
							    	</tr>
							    	<tr>
							    		<td>Tarifa:</td>
							    		<td></td> 
							    	</tr>
						    	</tbody>
						    	
						    </table>
						</div><!--panel-->
						
						<div class="panel panel-warning">
						  <div class="panel-heading">
						  	 <input type="checkbox" id="checkbox3" name="checkbox[]">
						  	 <label for="checkbox3"><a data-toggle="collapse" data-parent="#accordion" href="#collapseTree">Premium Gold</a></label>
						  </div>
						  <table class="table">
						    	<tbody class="collapse in" id="collapseTree">
						    		<tr>
							    		<td>Especialidades Inscritas:</td>
							    		<td>Ilimitadas</td> 
							    	</tr>
							    	<tr>
							    		<td>Galería de Proyectos:</td>
							    		<td>16 Proyectos (de hasta 15 Imágenes cada uno)</td>
							    	</tr>
							    	<tr>
							    		<td>Visibilidad:</td>
							    		<td>Alta, Aparición prioritaria combinada con la membresía Premium Alliance</td>
					    		    </tr>
							    	<tr>
							    		<td>Calificación de clientes:</td>
							    		<td><i class="fa fa-check fa-lg"></i></td> 
							    	</tr>
							    	<tr>
							    		<td>Sellos:</td>
							    		<td><i class="fa fa-check fa-lg"></i></td> 
							    	</tr>
							    	<tr>
							    		<td>Prioridad atención a Aliados:</td>
							    		<td><i class="fa fa-times fa-lg"></i></td> 
							    	</tr>
							    	<tr>
							    		<td>Tarifa:</td>
							    		<td></td> 
							    	</tr>
						    	</tbody>
						    </table>
						</div><!--panel-->
						
						<div class="panel panel-warning">
						  <div class="panel-heading">
						  	 <input type="checkbox" id="checkbox4" name="checkbox[]">
						  	 <label for="checkbox4"><a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Premium Alliance</a></label>
						  </div>
						  <div class="panel-body collapse" id="collapseFour">
						    <ul>
						    	<li>Especialidades Inscritas: Ilimitadas</li>
						    	<li>Galería de Proyectos: 16 Proyectos (de hasta 15 Imágenes cada uno)</li>
						    	<li>Visibilidad: Alta, Aparición prioritaria para Clientes de la plataforma y exclusiva para clientes de Aliados</li>
						    	<li>Calificación de clientes: si</li>
						    	<li>Sellos: si*</li>
						    	<li>Prioridad atención a Aliados: si</li>
						    	<li>Tarifa: Gratis</li>
						    </ul>
						  </div>
						  <table class="table">
						    	<tbody class="collapse in" id="collapseFour">
						    		<tr>
							    		<td>Especialidades Inscritas:</td>
							    		<td>Ilimitadas</td> 
							    	</tr>
							    	<tr>
							    		<td>Galería de Proyectos:</td>
							    		<td>16 Proyectos (de hasta 15 Imágenes cada uno)</td>
							    	</tr>
							    	<tr>
							    		<td>Visibilidad:</td>
							    		<td>Alta, Aparición prioritaria para Clientes de la plataforma y exclusiva para clientes de Aliados</td>
					    		    </tr>
							    	<tr>
							    		<td>Calificación de clientes:</td>
							    		<td><i class="fa fa-check fa-lg"></i></td> 
							    	</tr>
							    	<tr>
							    		<td>Sellos:</td>
							    		<td><i class="fa fa-check fa-lg"></i></td> 
							    	</tr>
							    	<tr>
							    		<td>Prioridad atención a Aliados:</td>
							    		<td><i class="fa fa-check fa-lg"></i></td> 
							    	</tr>
							    	<tr>
							    		<td>Tarifa:</td>
							    		<td></td> 
							    	</tr>
						    	</tbody>
						    </table>
						</div><!--panel-->

					</div><!--membresias-->
					
				</section> <!--section membresias-->	
			</div><!--contenido-->
	@stop