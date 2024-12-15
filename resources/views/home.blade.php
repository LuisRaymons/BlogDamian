@extends('master')
@section('title','Home Page')
@section('content')

<div class="container" >
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
</div>

<div class="container" style="margin-top:2%;">
    <div class="row">
        <div class="col">
            <h2 id="titulo2">Fotografias para bodas</h2>
            <p id="p1">
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
</div>

<div class="container">
    <div class="row">
        <h3 style="color:#ffffff;font-size: 62px;">Servicios</h3>
        <div class="col" id="img1principal">
            <h3 style="color:#ffffff;font-size: 50px; padding-top: 90%;">Quinceñera</h3>
            <p style="color:#ffffff;font-size: 20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, deserunt aliquid! Dolor inventore id iste dignissimos, veniam modi. 
               Maiores vel necessitatibus ex aspernatur praesentium magni illum quae asperiores ipsum minus?
            </p>
        </div>
        <div class="col" id="img2principal">
        <h3 style="color:#ffffff;font-size: 50px; padding-top: 90%;">Profesional</h3>
            <p style="color:#ffffff;font-size: 20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, deserunt aliquid! Dolor inventore id iste dignissimos, veniam modi. 
               Maiores vel necessitatibus ex aspernatur praesentium magni illum quae asperiores ipsum minus?
            </p>
        </div>
        <div class="col" id="img3principal">
        <h3 style="color:#ffffff;font-size: 50px; padding-top: 90%;">Bodas</h3>
            <p style="color:#ffffff;font-size: 20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, deserunt aliquid! Dolor inventore id iste dignissimos, veniam modi. 
               Maiores vel necessitatibus ex aspernatur praesentium magni illum quae asperiores ipsum minus?
            </p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <h3 style="color:#ffffff;font-size: 62px;">Servicios</h3>
        <div class="col-8" id="img4principal">
        </div>
        <div class="col-4">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur necessitatibus eos odio dolore est nobis sed minima, 
            rerum tempora fuga iure, ducimus commodi pariatur! Minima, aliquam? Aliquam, vitae dolore! Ipsa?
        </div>
    </div>
</div>


<style>
    #containerprincipalimagen{
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(rgba(4, 9, 30, 0.4), rgba(4, 9, 30, 0.4)),
            url("img/img/DJI_0587-2.jpg");
        background-size: cover;
        background-position: center;
    }
    #nameprincipal{
        color: #ffffff;
        font-size: 72px;
        line-height: 1em;
    }
    #titulo2{
        color: #ffffff;
        font-size: 50px;
        line-height: 1em;
    }
    #p1{
        color: #ffffff;
        font-size: 17px;
        line-height: 1em;
    }
    #imgboda1:hover{
        -webkit-transform:scale(1.3);transform:scale(1.3);
    }
    #imgboda2:hover{
        -webkit-transform:scale(1.3);transform:scale(1.3);
    }
    #img1principal{
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(rgba(4, 9, 30, 0.4), rgba(4, 9, 30, 0.4)),
            url("img/img/DJI_0747.jpg");
        background-size: cover;
        background-position: center;
    }
    #img2principal{
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(rgba(4, 9, 30, 0.4), rgba(4, 9, 30, 0.4)),
            url("img/img/IMG_0706.jpg");
        background-size: cover;
        background-position: center;
    }
    #img3principal{
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(rgba(4, 9, 30, 0.4), rgba(4, 9, 30, 0.4)),
            url("img/img/IMG_1821-Edit-Edit.jpg");
        background-size: cover;
        background-position: center;
    }
    #img4principal{
        width: 65%;
        height: 100vh;
        background-image: linear-gradient(rgba(4, 9, 30, 0.4), rgba(4, 9, 30, 0.4)),
            url("img/img/_MG_7034.jpg");
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }
   
</style>

@endsection