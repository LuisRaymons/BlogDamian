@extends('master')
@section('CSS')
<link rel="stylesheet" href="../css/about.css">
@stop
@section('title','Acerca de')
@section('content')

<div class="container" id="divprincipalabout">
    <div class="row" id="containerimagenaboutprincipal">
        <h1 id="titleprincipal">Acerca de</h1>
        <div class="row">
            <div class="col">
                <h5>Hola mi nombre es Damian</h5>
                <p>
                    Soy Fotógrafo profesional apasionado por capturar momentos únicos, en tierra y desde las alturas. Ya sea para eventos, retratos o paisajes, mi objetivo es contar tu historia de forma creativa y hermosa. Cada imagen es una obra de arte.
                </p>
            </div>
            <div class="col">
                <img src="img/img/acercaprincipal2.jpg" alt="No se encontro la imagen" id="imgprincipal">
            </div>
        </div>
    </div>

    <div class="row">
        <h4 id="title-proyect">Nuestros proyectos</h4>
        <div id="slider">
                <figure>
                    <img src="img/img/slider/2/slider1.jpg" alt="" class="carouselabout">
                    <img src="img/img/slider/2/slider2.jpg" alt="" class="carouselabout">

                    <img src="img/img/slider/2/slider3.jpg" alt="" class="carouselabout">
                    <img src="img/img/slider/2/slider1.jpg" alt="" class="carouselabout">

                    <img src="img/img/slider/2/slider2.jpg" alt="" class="carouselabout">
                    <img src="img/img/slider/2/slider1.jpg" alt="" class="carouselabout">

                </figure>
            </div>
    </div>
</div>

@include('footer')

@endsection
