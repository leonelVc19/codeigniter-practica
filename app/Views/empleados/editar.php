<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>
    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">
            <h3 class="my-3">Editar empleado</h3>

            <form action="<?= base_url('empleados') . '/editar_empleado'?>" class="row g-3" method="post" autocomplete="off">

                <div class="col-md-4">
                    <label for="clave" class="form-label">Clave</label>
                    <input type="text" class="form-control" id="clave" name="clave" required autofocus>
                </div>

                <div class="col-md-8">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>

                <div class="col-md-6">
                    <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
                    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                </div>

                <div class="col-md-6">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="telefono" class="form-control" id="telefono" name="telefono" required>
                </div>

                <div class="col-md-6">
                    <label for="correo_electronico" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="correo_electronico" name="correo_electronico">
                </div>

                <div class="col-md-6">
                    <label for="departamento" class="form-label">Departamento</label>
                    <select class="form-select" id="departamento" name="departamento" >
                        <option value="">Seleccionar</option>
                    </select>
                </div>

                <div class="col-12">
                    <a href="<?= base_url('empleados')?>" class="btn btn-secondary">Regresar</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>

            </form>

        </div>
    </main>
    <?= $this->endSection(); ?>
