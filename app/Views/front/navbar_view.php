<?php
    $session = session();
    $nombre = $session->get('nombre');
    $perfil = $session->get('perfil');
?>

<!-- barra de navegacion -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal') ?>">
                <!-- logo de la empresa -->
                <img src="<?php echo base_url('assets/img/logo-toyota.svg') ?>" alt="marca" width="75" height="30" class="img-fluid" />
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php if ($session->perfil_id == 1): ?>
        <div class="btn btn-secondary active btnUser btn-sm">
            <a href="#">ADMIN: <?php echo $session->get('nombre'); ?></a>
        </div>
        <a class="navbar-brand" href="#"></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('quienes_somos') ?>">Quienes Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('acercade') ?>">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('productos') ?>">Modelos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('/logout'); ?>" tabindex="-1" aria-disabled="true">
                        Cerrar Sesión</a>
                </li>
            </ul>
        </div>
        <?php elseif ($session->perfil_id == 2): ?>
        <div class="btn btn-info active btnUser btn-sm">
            <a href="#">CLIENTE: <?php echo $session->get('nombre'); ?></a>
        </div>
        <!-- NavBar para clientes -->
        <a class="navbar-brand" href="#"></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('quienes_somos') ?>">Quienes Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('productos') ?>">Modelos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('/logout'); ?>" tabindex="-1" aria-disabled="true">
                        Cerrar Sesión</a>
                </li>
            </ul>
        </div>
        <?php else: ?>
        <!-- NavBar para clientes no logueados -->
        <a class="navbar-brand" href="#"></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('quienes_somos') ?>">Quienes Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('acercade') ?>">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('registro') ?>">Registro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('login') ?>">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('productos') ?>">Modelos</a>
                </li>
            </ul>
        </div>
        <form class="d-flex" action="https://www.google.com/search" method="get" target="_blank">
            <input class="form-control me-2" type="search" name="q" placeholder="Buscar " aria-label="Buscar">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
        <?php endif; ?>    
    </div>
</nav>
<!-- fin barra navegacion -->
