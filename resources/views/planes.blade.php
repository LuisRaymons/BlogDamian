<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://drive.google.com/thumbnail?id=1ixS5X6Y2Zvu0owjucv04X33-KDXziwE4"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Promociones</title>
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
                                <a class="nav-link active" href="planes">Planes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contacto">Contacto</a>
                            </li>
                        </ul>
                    </div>
            </div>
        </nav>
    </div>
    
    <h3 style="color:#ffffff; font-size:30vh; text-align:center; padding-top:10%;">Nuestros Planes</h3>
    <p style="color:white;">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, numquam quasi. Nemo aspernatur ipsa nam corporis tenetur officia aperiam. Incidunt fugit sed maiores quod quia. Omnis voluptate deserunt quod quas!
    </p>
</div>
<div class="container" style="margin-top: 5%;">
    
    <div id="promociones-card">
        <div class="card bg-dark" style="width: 36rem; margin-right:2%; color:white;">
            <div class="card-header"> Basico </div>
            <div class="card-body">
                <h5 class="card-title">$450.00</h5>
                <p class="card-text">
                        <li class="elementor-icon-list-item">
                            <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span>
                            <span class="elementor-icon-list-text">20 Fotografias digitales</span>
                        </li>
                        <li class="elementor-icon-list-item">
                            <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span>
                            <span class="elementor-icon-list-text">1 Hora de sessiones</span>
                        </li>
                </p>
                <button class="btn btn-primary" onclick="quieropaquete('basico')">Lo quiero</button>
            </div>
            <div class="card-footer text-muted">Valido asta agotar existencia</div>
        </div>

        <div class="card bg-dark" style="width: 36rem; margin-right:2%; color:white;">
            <div class="card-header"> Estandar </div>
            <div class="card-body">
                <h5 class="card-title">$1250.00</h5>
                <p class="card-text">
                        <li class="elementor-icon-list-item">
                            <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span>
                            <span class="elementor-icon-list-text">40 Fotografias</span>
                        </li>
                        <li class="elementor-icon-list-item">
                            <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span>
                            <span class="elementor-icon-list-text">3 Horas de Sessiones</span>
                        </li>
                </p>
                <button class="btn btn-primary" onclick="quieropaquete('estandar')">Lo quiero</button>
            </div>
            <div class="card-footer text-muted">Valido asta 13 de Enero del 2028</div>
        </div>
    </div>

    @include('footer')
</div>



</body>
</html>

<style>
      #img4principal{
        background-image: url("https://drive.google.com/thumbnail?id=1RB5XUnlpkqXm85qqguk0LAI6fwM3zWWp");
        width: 100%;
        height: 90vh;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }
    #navbarSupportedContent{
        margin-left: 50%;
    }
    body{
        background-color:#060709;
    }
    #nav-menu{
        background-color:#060709;
        color:white;
    }
    #servicedetalle{
        background-color:#212529;
        color:white;
    }
    #servicedetalle > li > a{
        background-color:#212529;
        color:white;
    }
    #servicedetalle > li > a:hover{
        background-color:#212529;
        color:#d2d2d2;
    }
    #imgicondamian{
        width: 120px;
        height: 40px;
    }

    #promociones-card{
        display: flex;
        align-items: flex-end;
    }
    .elementor-icon-list-item{
        list-style: none;
    }
    
</style>

<script>
    $("#nav-menu").css("background-color","transparent");

    function quieropaquete(tipopaquete){
        console.log(tipopaquete);
        document.location.href = "";
        document.location.href = "contacto?paquete=" + tipopaquete;
    }
</script>