<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://drive.google.com/thumbnail?id=1ixS5X6Y2Zvu0owjucv04X33-KDXziwE4"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"/>
    <link rel="stylesheet" href="../css/planes.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Planes</title>
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
    
    <h3>Nuestros Planes</h3>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, numquam quasi. Nemo aspernatur ipsa nam corporis tenetur officia aperiam. Incidunt fugit sed maiores quod quia. Omnis voluptate deserunt quod quas!
    </p>
</div>
<div class="container" style="margin-top: 5%;">
    
    <div id="promociones-card">
        <div class="card bg-dark cardstyle">
            <div class="card-header"> XV AÑOS. PAQUETE 1 </div>
            <div class="card-body">
                <h5 class="card-title">$</h5>
                <p class="card-text">
                        <li class="elementor-icon-list-item">
                            <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span>
                            <span class="elementor-icon-list-text">
                                Sesión previa de 45 minutos. Se entregan 20 fotografías digitales editadas y retocadas.
                            </span>
                        </li>
                        <li class="elementor-icon-list-item">
                            <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span>
                            <span class="elementor-icon-list-text">Ceremonia religiosa. Se entregan 40 fotografías digitales editadas.</span>
                        </li>
                        <li class="elementor-icon-list-item">
                            <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span>
                            <span class="elementor-icon-list-text">Recepción por 4 horas. Se entregan 150 fotografías digitales editadas.</span>
                        </li>
                        <li class="elementor-icon-list-item">
                            <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span>
                            <span class="elementor-icon-list-text">Video semblanza 3 a 5 min. Tomas de ceremonia y recepción, incluye tomas con Dron</span>
                        </li>
                        <li class="elementor-icon-list-item">
                            <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span>
                            <span class="elementor-icon-list-text">Servicio de Caballete. Se incluye fotografía impresa enmarcada, 50x60 cm. 
                            </span>
                        </li>
                        <li class="elementor-icon-list-item">
                            <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span>
                            <span class="elementor-icon-list-text">Impresión en 4x6 de 50 fotografías. </span>
                        </li>
                        <li class="elementor-icon-list-item">
                            <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span>
                            <span class="elementor-icon-list-text">Se entrega Cajita y USB. Con las fotografías impresas, video y fotografías digitales en la USB.  </span>
                        </li>
                </p>
                <button class="btn btn-primary" onclick="quieropaquete('xvpaquete1')">Lo quiero</button>
            </div>
            <div class="card-footer text-muted">Valido asta agotar existencia</div>
        </div>

        <div class="card bg-dark cardstyle">
            <div class="card-header"> XV AÑOS. PAQUETE 2 </div>
            <div class="card-body">
                <h5 class="card-title">$</h5>
                <p class="card-text">
                        <li class="elementor-icon-list-item">
                            <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span>
                            <span class="elementor-icon-list-text">
                                Sesión previa de 30 minutos. Se entregan 15 fotografías digitales editadas y retocadas.
                            </span>
                        </li>
                        <li class="elementor-icon-list-item">
                            <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span>
                            <span class="elementor-icon-list-text">Ceremonia religiosa. Se entregan 30 fotografías digitales editadas. </span>
                        </li>
                        <li class="elementor-icon-list-item">
                            <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span>
                            <span class="elementor-icon-list-text">Recepción por 4 horas. Se entregan 100 fotografías digitales editadas.</span>
                        </li>
                        <li class="elementor-icon-list-item">
                            <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span>
                            <span class="elementor-icon-list-text">Video semblanza 3 a 5 min. Tomas de ceremonia y recepción, incluye tomas con Dron.</span>
                        </li>
                        <li class="elementor-icon-list-item">
                            <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span>
                            <span class="elementor-icon-list-text">Servicio de Caballete. Se incluye fotografía impresa enmarcada, 50x60 cm.</span>
                        </li>
                        <li class="elementor-icon-list-item">
                            <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span>
                            <span class="elementor-icon-list-text">Impresión en 4x6 de 30 fotografías.</span>
                        </li>
                        <li class="elementor-icon-list-item">
                            <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span>
                            <span class="elementor-icon-list-text">Se entrega Cajita y USB. Con las fotografías impresas, video y fotografías digitales en la USB.</span>
                        </li>
                </p>
                <button class="btn btn-primary" onclick="quieropaquete('xvpaquete2')">Lo quiero</button>
            </div>
            <div class="card-footer text-muted">Valido asta agotar existencia</div>
        </div>

        <div class="card bg-dark cardstyle">
            <div class="card-header"> XV AÑOS. PAQUETE 3 </div>
            <div class="card-body">
                <h5 class="card-title">$</h5>
                <p class="card-text">
                        <li class="elementor-icon-list-item">
                            <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span>
                            <span class="elementor-icon-list-text">Sesión previa de 30 minutos. Se entregan 15 fotografías digitales editadas y retocadas.</span>
                        </li>
                        <li class="elementor-icon-list-item">
                            <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span>
                            <span class="elementor-icon-list-text">Ceremonia religiosa. Se entregan 30 fotografías digitales editadas.</span>
                        </li>
                        <li class="elementor-icon-list-item">
                            <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span>
                            <span class="elementor-icon-list-text">Recepción por 4 horas. Se entregan 100 fotografías digitales editadas</span>
                        </li>
                        <li class="elementor-icon-list-item">
                            <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span>
                            <span class="elementor-icon-list-text">Video semblanza 3 a 5 min. Tomas de ceremonia y recepción, incluye tomas con Dron.</span>
                        </li>
                        <li class="elementor-icon-list-item">
                            <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span>
                            <span class="elementor-icon-list-text">Servicio de Caballete. Se incluye fotografía impresa enmarcada, 50x60 cm.</span>
                        </li>
                        <li class="elementor-icon-list-item">
                            <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span>
                            <span class="elementor-icon-list-text">Impresión en 4x6 de 30 fotografías</span>
                        </li>
                        <li class="elementor-icon-list-item">
                            <span class="elementor-icon-list-icon"> <i aria-hidden="true" class="fas fa-check"></i> </span>
                            <span class="elementor-icon-list-text">Se entrega Cajita y USB. Con las fotografías impresas, video y fotografías digitales en la USB</span>
                        </li>
                </p>
                <button class="btn btn-primary" onclick="quieropaquete('xvpaquete3')">Lo quiero</button>
            </div>
            <div class="card-footer text-muted">Valido asta agotar existencia</div>
        </div>

        
    </div>

    @include('footer')
</div>

</body>
</html>

<script>
    $("#nav-menu").css("background-color","transparent");

    function quieropaquete(tipopaquete){
        document.location.href = "";
        document.location.href = "contacto?paquete=" + tipopaquete;
    }
</script>