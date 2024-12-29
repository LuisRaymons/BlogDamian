<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://drive.google.com/thumbnail?id=1ixS5X6Y2Zvu0owjucv04X33-KDXziwE4"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"/>
    <link rel="stylesheet" href="../css/about.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Acerca de Fotografo Damian</title>
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
                            <a class="nav-link active" href="acerca">Acerca de</a>
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
                            <a class="nav-link" href="contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
        </div>
    </nav>
    <h1 id="titleprincipal">Acerca de</h1>

        <div class="row">
            <div class="col">
                <h5>Lo mejor</h5>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, consequatur rerum vero, ab quis amet tempora, quidem voluptas necessitatibus ex fugiat ratione quia labore. Unde earum eos eaque corporis atque.
                </p>
            </div>
            <div class="col">
                <img src="https://drive.google.com/thumbnail?id=1FRTr9bIeYzB7jR0PClagC_-bj-Fvzrcy" alt="No se encontro la imagen" id="imgprincipal">
            </div>
        </div>

        <div class="row">
            <h4 id="title-proyect">Nuestros proyectos</h4>
            <div id="slider">
                    <figure>
                        <img src="https://drive.google.com/thumbnail?id=1lJxHpYLGBMHF28L3VfcvXtiZVlv49G5s" alt="" class="carouselabout">
                        <img src="https://drive.google.com/thumbnail?id=1qCRqOtz_CP4_CFC5acGN9EJbovjYmwqx" alt="" class="carouselabout">
                        <img src="https://drive.google.com/thumbnail?id=1l0nB_XcEW1UPzTwMQC38zC6HDMkO_E7V" alt="" class="carouselabout">
                        <img src="https://drive.google.com/thumbnail?id=1sUhZYPQEqjamUDYpJbOGVOPctWU3C-Ok" alt="" class="carouselabout">
                        <img src="https://drive.google.com/thumbnail?id=1bPeftnoaNJo2Nfsf4skD4VM-nZ9fUmgs" alt="" class="carouselabout">
                        <img src="https://drive.google.com/thumbnail?id=1YxLMNocKgzmPp0NmURzmcxOeJkno3kxL" alt="" class="carouselabout">
                    </figure>
                </div>
        </div>

        @include('footer') 
    </div>

</div>

</body>
</html>

<script>
    $("#nav-menu").css("background-color","transparent");
</script>