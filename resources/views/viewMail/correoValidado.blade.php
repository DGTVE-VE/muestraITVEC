@extends('layouts.app')

@section('content')
Correo Validado

<div class="row" style="margin-top: 5%;">
    <a href="{{url('indexRed')}}">
        <!--<img class="responsive center-block" src="imagenes/red/footer/activacionexitosa.jpg">-->
        {{ HTML::image('imagenes/red/footer/activacionexitosa.jpg','activacion exitosa', array('class'=>'responsive center-block'))}}
    </a>
</div>

@endsection
