
@extends('layouts.dashboard')
@section('content')

<ol class="breadcrumb">
                  <li><a href="/dashboard">Home</a></li>      
                  <li class="active">Mis Proyectos</li>
</ol>
<section class="wrapper">
    <div class="container-fostrap">
        <div>
            <img src="{{ Auth::user()->avatar }}" class="fostrap-logo img-circle"/>
            <h3 class="heading">
                proyectos de {{ Auth::user()->name }} <a href="/misProyectos/create/" class="btn btn-primary">Nuevo proyecto</a>
            </h3>
        </div>
        <br>
        <div class="content">
            <div class="container">
                <div class="row">

                @foreach($datos_tabla as $data)
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="card">
                            <a class="img-card" href="">
                    @foreach($fotos as $foto)
                        @if( $foto->proyecto_id == $data->id)
                            <img src="{{ asset('uploads/'.$foto->ruta) }}"/>
                        @endif
                    @endforeach
                        <img src="{{ asset('uploads/docs/imagenblanco.jpg') }}"/>
                            </a>
                            <div class="card-content">
                                <h4 class="card-title">
                                    <a href=""> {{ $data->nombre }}
                                  </a>
                                </h4>
                                <p class="">
                                    {!! Str::words($data->descripcion, 35) !!}

                                </p>
                            </div>
                            <div class="card-read-more">
                                <a href="{{ url('/misProyectos/'.$data->id)}}" class="btn btn-warning btn-block">
                                    Ver Proyecto
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

                </div>
            </div>
        </div>
    </div>
</section>


@stop