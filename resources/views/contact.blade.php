@extends('master')
@section('CSS')
<link rel="stylesheet" href="../css/contact.css">
@stop
@section('title','Contacto')
@section('content')

<div id="containerimagencontactprincipal">
    <h1>Contáctanos</h1>
</div>

<div class="container">

    <div class="row">
        <div class="col">
            <div class="card" style="background-color:black; color:white;">
                <div class="card-body" style="text-align:center;">
                    <i class="fa-solid fa-envelope fa-2xl" style="margin-bottom:10%;"></i>
                    <h5 class="card-title">Correo</h5>
                    <p class="card-text">informes@fotografodamian.com</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="background-color:black; color:white;">
                <div class="card-body" style="text-align:center;">
                <i class="fa-solid fa-phone-volume fa-2xl" style="margin-bottom:10%;"></i>
                    <h5 class="card-title">Teléfono</h5>
                    <p class="card-text">3313029472</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="background-color:black; color:white;">
                <div class="card-body" style="text-align:center;">
                    <i class="fa-solid fa-map-location-dot fa-2xl" style="margin-bottom:10%;"></i>
                    <h5 class="card-title">Ubicación</h5>
                    <p class="card-text">Guadalajara Jalisco</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col" id="formulariocontrato">
            <form action="" class="row g-3">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label" style="color:#ffffff;">Nombre</label>
                    <input type="text" class="form-control" id="inputname">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label" style="color:#ffffff;">Apellidos</label>
                    <input type="text" class="form-control" id="inputlastname">
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label" style="color:#ffffff;">Correo</label>
                    <input type="email" class="form-control" id="inputemail">
                </div>   
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label" style="color:#ffffff;">Teléfono</label>
                    <input type="phone" class="form-control" id="inputphone">
                </div>     
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label" style="color:#ffffff;">Tipo de paquete</label>
                    <select name="paquetepromo" class="form-control" id="inputtype">
                        <option value="">Seleccione una opcion de paquete</option>
                        <option value="xvpaquete1">XV AÑOS. PAQUETE 1</option>
                        <option value="xvpaquete2">XV AÑOS. PAQUETE 2</option>
                        <option value="xvpaquete3">XV AÑOS. PAQUETE 3</option>
                    </select>
                </div>            
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label" style="color:#ffffff;">Comentario</label>
                    <textarea class="form-control" name="commentarioname" id="commentarioname" rows="8"></textarea>
                </div>

                <button type="button" class="btn btn-outline-primary btn-lg" id="btnenviarcorreo">Enviar mensaje</button>
            </form>
        </div>
    </div>
</div>


<script>
    $(document).ready(function (e) {
        var urlactual = window.location.search;

        if(urlactual == "?paquete=xvpaquete1"){
            $('select').val('xvpaquete1');
            desplazarformulario();
        } else if(urlactual == "?paquete=xvpaquete2"){
            $('select').val('xvpaquete2');
            desplazarformulario();
        } else if(urlactual == "?paquete=xvpaquete3"){
            $('select').val('xvpaquete3');
            desplazarformulario();
        }
    });

    $("#btnenviarcorreo").click(function(e){

        var name = $("#inputname").val;
        var lasname = $("#inputlastname").val;
        var email = $("#inputemail").val;
        var phone = $("#inputphone").val;
        var name = $("#inputname").val;
        var name = $("#inputname").val;

        $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            url: "/EnviarCorreo",
            type: "POST",
            data: {"emailTo" : "lrva1994@hotmail.com"},
            success: function(response) { 
                console.log("----------------------success---------------------");
                console.log(response);                          
            },
            error: function(jqXHR, textStatus, errorThrown){
                console.log("----------------------error---------------------");
                console.log(jqXHR);
            }
        });
    });

    function desplazarformulario(){
        $('html, body').animate({
            scrollTop: $('#formulariocontrato').offset().top
        }, 'slow');
    }

</script>

@include('footer')

@endsection

