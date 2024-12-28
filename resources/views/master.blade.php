<!DOCTYPE html>
<html>
<head lang="en">
    <meta name="viewport">
    <link rel="icon" href="img/icons/logoDamian.ico"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    @yield('CSS')
    <title>
        @yield('title')
    </title>
  
</head>
<body>
    <div class="container">
        <div class="row">
            <!-- <nav class="navbar navbar-dark navbar-expand-lg bg-body-tertiary" id="nav-menu"> -->
            <nav class="navbar navbar-dark navbar-expand-lg bg-body-tertiary" id="nav-menu">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">
                        <img src="img/icons/logoDamian2.ico" id="imgicondamian"/>
                    </a>                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Inicio</a>
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
                            <a class="nav-link" href="contacto">Contacto</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>
            @yield('content')
        </div>
    </div>
</body>
</html>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
@yield('JS')


<style>
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
</style>