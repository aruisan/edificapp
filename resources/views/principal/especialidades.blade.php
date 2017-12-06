			
@extends('layouts.principal')
@section('content')
			<div class="container-fluid directorio" id="directorio">
				<h2>DIRECTORIO DE ESPECIALISTAS</h2>
				@foreach($especialidades as $especialidad)
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						
						<div class="panel">
							<div class="panel-body">
								<img src="{{ asset('/uploads/especialidad/'.$especialidad->ruta/*aca llamamos la ruta de la imagen*/) }}">
							</div>
							<div class="panel-footer">
								<h6>
									<a href="" class="@if($especialidad->id%2 == 0 /*con este if le digo que si es par le coloque la calse az*/)
														az
													  @endif btn btn-block">
										{{ $especialidad->nombre /*aca llamamos el nombre*/}}
									</a>
								</h6>
							</div>
						</div>
						
					</div>
				@endforeach
			</div>
			<center>{!! $especialidades->render() !!}</center>

@stop