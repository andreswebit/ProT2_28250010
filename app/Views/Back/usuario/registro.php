
    <div class="container mt-5">
        <h4>Registrarse</h4>
        <?php $validation = \Config\Services::validation(); ?>
        <form method="post" action="<?php echo base_url('/enviar-form') ?>"> 
            <?= csrf_field(); ?>

            <?php if(!empty(session()->getFlashdata('fail'))): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
            <?php endif ?>

            <?php if(!empty(session()->getFlashdata('success'))): ?>
                <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
            <?php endif ?>

            <div class="card-body justify-content-center">
                <div class="form-group mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input name="nombre" type="text" class="form-control" placeholder="Nombre">
                    <!-- Error -->
                    <?php if($validation->getError('nombre')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= $validation->getError('nombre'); ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="form-group mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" name="apellido" class="form-control" placeholder="Apellido">
                    <!-- Error -->
                    <?php if($validation->getError('apellido')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= $validation->getError('apellido'); ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" placeholder="correo@algo.com">
                    <!-- Error -->
                    <?php if($validation->getError('email')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= $validation->getError('email'); ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="form-group mb-3">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" name="usuario" class="form-control" placeholder="Usuario">
                    <!-- Error -->
                    <?php if($validation->getError('usuario')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= $validation->getError('usuario'); ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="form-group mb-3">
                    <label for="pass" class="form-label">Password</label>
                    <input name="pass" type="password" class="form-control" placeholder="Password">
                    <!-- Error -->
                    <?php if($validation->getError('pass')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= $validation->getError('pass'); ?>
                        </div>
                    <?php } ?>
                </div>


                <div class="d-flex justify-content-between">
                    <input type="submit" value="Guardar" class="btn btn-success">
                    <input type="reset" value="Cancelar" class="btn btn-danger">
                </div>
            
        </form>
    </div>
    </div>
    </div>
    </div>

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

