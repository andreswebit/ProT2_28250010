<!-- barra de navegacion -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal')?>">
                <!-- logo de la empresa -->
                <img src="<?php echo base_url('assets/img/logo-toyota.svg')?>" alt="marca" width="75" height="30"
                    class="img-fluid" />
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href='quienes_somos'>Quienes Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='acercade'>Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registro">Registro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='login'>Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='productos'>Modelos</a>
                </li>
            </ul>
            <form class="d-flex" action="https://www.google.com/search" method="get" target="_blank">
                <input class="form-control me-2" type="search" name="q" placeholder="Buscar " aria-label="Buscar">
                    <button class="btn btn-outline-success" type="submit" >Buscar</button>
                    
            </form>
        </div>
    </div>
</nav>