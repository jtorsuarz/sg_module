<?= $this->extend('Views/layout/main') ?>

<?= $this->section('title') ?>
Usuario
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="page">

    <header class="ribbon">
        <h2>
            Configurar Usuario
        </h2>

        <ol class="breadcrumb">
            <li>Usuario</li>
        </ol>

    </header>

    <div class="page-content">
        <div class="container-fluid">
            <div style="width: 50%" class="panel">
                <div class="panel-heading">
                    <h2>Configuracion de Usuario</h2>
                </div>

                <div class="panel-body">
                    <div style="display: flex; flex-direction: column; justify-content: center; " class="mdform">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="form1-fname">Usuario</label>
                                <input value="" type="text" class="form-control" id="nombre" disabled>
                            </div>

                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="form1-fname">Antigua contraseña</label>
                                <input type="password" class="form-control center" id="antigua_pass">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="form1-fname">Nueva contraseña</label>
                                <input value="" type="password" class="form-control center" id="nueva_pass">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="form1-fname">Repetir nueva contraseña</label>
                                <input value="" type="password" class="form-control center" id="nueva_pass_repetida">
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

    var colorError = '#ff5a81';

    function validarContra() {

        var contra = document.getElementById("contrasena");
        // 8 caracteres, caracter especial, numeros
        var regexPass = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;

        if (!(regexPass.test(contra.value))) {

            contrasena.style.borderColor = colorError;

        } else {

            contrasena.style.borderColor = 'white';
        }
    }
</script>
<?= $this->endSection() ?>