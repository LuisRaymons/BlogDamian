@extends('master')
@section('CSS')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"/>
<link rel="stylesheet" href="../css/home.css">
@stop
@section('title','Home Page')
@section('content')

<div class="container" loading=”lazy” id="divprincipal">
    <div class="row">
        <div class="col">
            <h1 id="nameprincipal">Fotografía Damian</h1>
            <button type="button" class="btn btn-outline-primary btn-lg">
                <a href="acerca" style="text-decoration:none;">Mas acerca de mi</a>
            </button>
        </div>
        <div class="col" id="containerprincipalimagen">
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h2 class="titulo2">Fotografias para bodas</h2>
            <p class="p1">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi cupiditate enim at, sapiente ratione, 
                magni voluptatum iure neque nesciunt et repellat? Quam vitae quas nisi officiis natus architecto? Soluta, quia?
            </p>
        </div>
        <div class="col">
            <img src="img/img/_MG_6792.jpg" alt="No se encontro la imagen" width="90%" height="90%" id="imgboda1"/>
        </div>
        <div class="col">
            <img src="img/img/_MG_6798.jpg" alt="No se encontro la imagen" width="90%"  height="90%" id="imgboda2"/>
        </div> 
    </div>

    <div class="row">
        <h3 class="titulo2">Servicios</h3>
        <div class="col" id="img1principal">
            <h3 class="titulo2">Quinceñera</h3>
            <p class="p1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, deserunt aliquid! Dolor inventore id iste dignissimos, veniam modi. 
               Maiores vel necessitatibus ex aspernatur praesentium magni illum quae asperiores ipsum minus?
            </p>
        </div>
        <div class="col" id="img2principal">
        <h3 class="titulo2">Profesional</h3>
            <p class="p1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, deserunt aliquid! Dolor inventore id iste dignissimos, veniam modi. 
               Maiores vel necessitatibus ex aspernatur praesentium magni illum quae asperiores ipsum minus?
            </p>
        </div>
        <div class="col" id="img3principal">
        <h3 class="titulo2">Bodas</h3>
            <p class="p1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, deserunt aliquid! Dolor inventore id iste dignissimos, veniam modi. 
               Maiores vel necessitatibus ex aspernatur praesentium magni illum quae asperiores ipsum minus?
            </p>
        </div>
    </div>

    <div class="row">
        <h3 class="titulo2">Servicios</h3>
        <div class="col-8" id="img4principal">
        </div>
        <div class="col-4 p1">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur necessitatibus eos odio dolore est nobis sed minima, 
            rerum tempora fuga iure, ducimus commodi pariatur! Minima, aliquam? Aliquam, vitae dolore! Ipsa?
        </div>
    </div>

    <div class="row">
        <div class="col-4 p1" >
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur necessitatibus eos odio dolore est nobis sed minima, 
            rerum tempora fuga iure, ducimus commodi pariatur! Minima, aliquam? Aliquam, vitae dolore! Ipsa?
        </div>
        <div class="col-8" id="img5principal">
        </div>
    </div>

    <div class="row">
        <div class="col-8" id="img6principal">
        </div>        
        <div class="col-4 p1">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur necessitatibus eos odio dolore est nobis sed minima, 
            rerum tempora fuga iure, ducimus commodi pariatur! Minima, aliquam? Aliquam, vitae dolore! Ipsa?
        </div>
    </div>

    

</div>

@include('footer')

<style>
    .test {
        background-color: red;
    }
</style>



@endsection