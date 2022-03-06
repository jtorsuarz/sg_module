<?= $this->extend('Views/layout/main') ?>

<?= $this->section('title') ?>
Administrar usuario
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="page">
    <header class="ribbon">
        <h2>
            Usuario
        </h2>
        <ol class="breadcrumb">
            <li class="active">Administrar Usuario</li>
        </ol>
    </header>

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h2>Nuevo Departamento</h2>
                        </div>
                        <div class="panel-body">
                            <form class="mdform">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="form1-email">Nombre Usuario</label>
                                        <input type="text" class="form-control" id="usuario" disabled>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Contraseña Usuario</label>
                                        <input type="password" class="form-control" id="contrasena">
                                    </div>
                                </div>
                                <hr>
                                <button type="submit" class="btn btn-primary" onclick="validarContra()">Enviar</button>
                        </div>
                        <!-- /.row -->
                        </form>
                    </div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <div class="page">

        <header class="ribbon">
            <h2>
                Configurar Usuario
            </h2>

            <ol class="breadcrumb">
                <li><a href="#">Usuario</a></li>
            </ol>

        </header>

        <div class="page-content">
            <div class="container-fluid">
                <div class="panel">
                    <div class="panel-heading">
                        <h2>Configuracion de Usuario</h2>
                    </div>

                    <div class="panel-body">
                        <div class="mdform">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="form1-fname">Usuario</label>
                                    <input value="" type="text" class="form-control" id="nombre" disabled>
                                </div>

                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="form1-fname">Contraseña</label>
                                    <input value="" type="password" class="form-control center" id="contraseña">
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group checkbox">
                                        <label class="">
                                            <input type="checkbox" class="icheck icheck-purple" checked id="checkbox"> <span
                                                    class="label-text">Ver contraseña</span>
                                        </label>

                                    </div>
                                </div>
                            </div>
                            <hr>

                            <a id="botonEnviar" type="button" class="btn btn-primary">Modificar Contraseña</a>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection() ?>

    <?= $this->section('linksNeed') ?>
    <script>
        function validarContra(){

            var colorError = '#ff5a81';

            var contra = document.getElementById("contrasena");
            var regexPass= /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
            if(!(regexPass.test(contra.value))){
                contrasena.style.borderColor =colorError;
            }else{

                contrasena.style.borderColor ='white';
            }



        }
    </script>
    <?= $this->endSection() ?>
<?= $this->endSection() ?>

<?= $this->section('linksNeed') ?>
    <script>


    </script>
<?= $this->endSection() ?>
