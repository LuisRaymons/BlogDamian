@extends('master')
@section('CSS')
<link rel="stylesheet" href="../css/paquete3xvview.css">
@stop
@section('title','Contacto')
@section('content')

<div id="containerimagenxvpaqueteprincipal">
    <div id="promociones-card">
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
    </div>
</div>

@include('footer')

@endsection

<script>
    function quieropaquete(tipopaquete){
        document.location.href = "";
        document.location.href = "contacto?paquete=" + tipopaquete;
    }
</script>