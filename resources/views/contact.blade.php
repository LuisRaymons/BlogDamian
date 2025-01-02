<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://drive.google.com/thumbnail?id=1ixS5X6Y2Zvu0owjucv04X33-KDXziwE4"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"/>
    <link rel="stylesheet" href="../css/contact.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Contacto</title>
</head>
<body>
<div class="col-8" id="img4principal">
    <div class="container">
        <nav class="navbar navbar-dark navbar-expand-lg bg-body-tertiary" id="nav-menu">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/">
                            <img src="https://drive.google.com/thumbnail?id=1ixS5X6Y2Zvu0owjucv04X33-KDXziwE4" id="imgicondamian"/>
                        </a>                    
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="acerca">Acerca de</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="Servicios" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Servicios
                                </a>
                                <ul class="dropdown-menu" id="servicedetalle">
                                    <li><a class="dropdown-item" href="#">Fotografía y video aéreo</a></li>
                                    <li><a class="dropdown-item" href="#">Fotografía para retrato</a></li>
                                    <li><a class="dropdown-item" href="#">Fotografía para cumpleaños</a></li>
                                    <li><a class="dropdown-item" href="#">Fotografía para bodas</a></li>
                                    <li><a class="dropdown-item" href="#">Fotografía para Quinceñera</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="planes">Planes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="contacto">Contacto</a>
                            </li>
                        </ul>
                    </div>
            </div>
        </nav>
    </div>
    <h1>Contactanos</h1>
    
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
                    <h5 class="card-title">Telefono</h5>
                    <p class="card-text">3313029472</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="background-color:black; color:white;">
                <div class="card-body" style="text-align:center;">
                    <i class="fa-solid fa-map-location-dot fa-2xl" style="margin-bottom:10%;"></i>
                    <h5 class="card-title">Ubicacion</h5>
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
                    <input type="text" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label" style="color:#ffffff;">Apellidos</label>
                    <input type="text" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label" style="color:#ffffff;">Correo</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>   
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label" style="color:#ffffff;">Telefono</label>
                    <input type="phone" class="form-control" id="inputEmail4">
                </div>     
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label" style="color:#ffffff;">Tipo de paquete</label>
                    <select name="paquetepromo" class="form-control" id="paquetepromo">
                        <option value="">Seleccione una opcion de paquete</option>
                        <option value="basic">Basico</option>
                        <option value="standar">Estandar</option>
                    </select>
                </div>            
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label" style="color:#ffffff;">Comentario</label>
                    <textarea class="form-control" name="commentarioname" id="commentarioname"  rows="10"></textarea>
                </div>

                <button type="button" class="btn btn-outline-primary btn-lg">Enviar mensaje</button>
            </form>
        </div>
    </div>

    @include('footer')
</div>

</body>
</html>

<script>
    $("#nav-menu").css("background-color","transparent");

    $(document).ready(function (e) {
        var urlactual = window.location.search;

        if(urlactual == "?paquete=basico"){
            $('select').val('basic');
            desplazarformulario();
        } else if(urlactual == "?paquete=estandar"){
            $('select').val('standar');
            desplazarformulario();
        }
    });


    function desplazarformulario(){
        $('html, body').animate({
            scrollTop: $('#formulariocontrato').offset().top
        }, 'slow');
    }


</script>