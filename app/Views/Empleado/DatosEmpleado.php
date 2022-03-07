<?= $this->extend('Views/layout/main') ?>

<?= $this->section('title') ?>
Datos Empleado
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="page">

    <header class="ribbon">
        <h2>
            Mostrar mis datos
        </h2>

        <ol class="breadcrumb">
            <li><a href="#">Empleado</a></li>
            <li class="active">Mis datos</li>
        </ol>
    </header>

    <div class="page-content">
        <div class="container-fluid">
            <div class="panel">
                <div class="panel-heading">
                    <h2>Mis datos</h2>
                </div>
                <div class="panel-body">
                    <form class="mdform">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="form1-fname">Nombre</label>
                                <input value="<?php echo session('nombre') ?>" type="text" class="form-control" id="nombre" disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="form1-lname">Apellido</label>
                                <input value="<?php echo session('apellidos') ?>" type="text" class="form-control" id="apellidos" disabled>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="form1-fname">DNI</label>
                                <input value="<?php echo session('dni') ?>" type="text" class="form-control" id="dni" disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="form1-lname">Salario bruto</label>
                                <input value="<?php echo session('salario') ?>" type="text" class="form-control" id="salario" disabled>
                            </div>
                        </div>
                        <hr>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="form1-fname">Permisos</label>
                                <select type="text" class="form-control" id="permisos" disabled>
                                    <option <?php echo session('permiso') == 0 ? "selected" : ""; ?> value="0">Permiso Administrador</option>
                                    <option <?php echo session('permiso') == 1 ? "selected" : ""; ?> value="1">Permiso Usuario</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="form1-fname">Departamento</label>
                                <input value="<?php echo session('departamento') ?>" type="text" class="form-control" id="salario" disabled>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="form1-lname">Fecha Nacimiento</label>
                                <input value="<?php echo session('f_nacimiento') ?>" type="date" class="form-control" id="fecha_nacimiento" disabled>
                            </div>
                        </div>

                        <hr>
                        <hr>
                    </form>
                </div>
                <!-- /.panel-body -->
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>
<?= $this->section('linksNeed') ?>
<?= $this->endSection() ?>