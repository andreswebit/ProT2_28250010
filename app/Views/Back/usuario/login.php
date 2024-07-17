<div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="card" style="width: 50%;">
        <div class="card-header text-center">
            <h2>Iniciar sesion</h2>
        </div>
        <!-- Mensaje de Error -->
        <?php if(session()->getFlashdata('msg')): ?>
        <div class="alert alert-warning">
            <?= session()->getFlashdata('msg') ?>
        </div>
        <?php endif; ?>
        <!-- Incio del formulario de login-->
        <form method="post" action="<?php echo base_url('/enviarlogin') ?>">
            <div class="card-body" media="(max-width: 768px)">
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">Correo</label> <input name="email"
                        type="text" class="form-control" placeholder="Correo">
                </div>
                <div class="mb-3">
                    <label for="example FormControlInput1" class="form-label">Password</label> <input name="pass"
                        type="password" class="form-control" placeholder="contraseña">
                </div>
                <input type="submit" value="Ingresar" class="btn btn-success">
                <a href="<?php echo base_url('login'); ?>" class="btn btn-danger">Cancelar</a>
                <br><span>¿Aún no se registró? <br><a href="<?php echo base_url('/registro'); ?>"> Registrarse
                        aquí</a></span>

            </div>
        </form>
    </div>
</div>