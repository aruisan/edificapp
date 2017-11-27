
@extends('layouts.dashboard')
@section('content')
        <div class="container">
            <div class="content">
                <div class="col-md-12 col-md-5 col-md-6 col-lg-6">
                    <b class="title">Estamos trabajando</b>
                    <b class="title">pagina Fuera de Servicio</b>
                </div>
                 <div class="col-md-12 col-md-7 col-md-6 col-lg-6">
                    <img src="/img/trabajando.gif" class="img-rounded">
                </div>
            </div>
        </div>
@stop
@section('css')
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 10;
                padding:10;
                width: 100%;
                color: #777;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }
            img{
                width: 80%;
            }
        </style>
@stop