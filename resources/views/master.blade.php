<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="https://drive.google.com/thumbnail?id=1ixS5X6Y2Zvu0owjucv04X33-KDXziwE4"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"/>
    <link rel="stylesheet" href="../css/master.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    @yield('CSS')
    <title>
        @yield('title')
    </title>
  
</head>
<body>
    <div>
        <div>
            <!-- <nav class="navbar navbar-dark navbar-expand-lg bg-body-tertiary" id="nav-menu"> -->
                <nav class="navbar navbar-expand-sm fixed-top navbar-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/">
                            <img src="https://drive.google.com/thumbnail?id=1ixS5X6Y2Zvu0owjucv04X33-KDXziwE4" id="imgicondamian"/>
                        </a>                    
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="btntoggle">
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
                                    <li><a class="dropdown-item nav-link" href="xvpaquete1">XV AÑOS. PAQUETE 1</a></li>
                                    <li><a class="dropdown-item nav-link" href="xvpaquete2">XV AÑOS. PAQUETE 2</a></li>
                                    <li><a class="dropdown-item nav-link" href="xvpaquete3">XV AÑOS. PAQUETE 3</a></li>
                                </ul>
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

<script>
    document.querySelectorAll(".nav-link").forEach((link) => {
        if (link.href === window.location.href) {
            $("nav").find(".active").removeClass("active");

            link.classList.add("active");
            link.setAttribute("aria-current", "page");
        }
    });
</script>


@yield('JS')