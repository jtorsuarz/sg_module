<?= $this->extend('Views/layout/main') ?>

<?= $this->section('title') ?>
    Agregar Empleado
<?= $this->endSection() ?>

<?= $this->section('content') ?>


    <div class="page">

        <header class="ribbon">
            <h2>
                Agregar Empleado
            </h2>

            <ol class="breadcrumb">
                <li><a href="#">Empleado</a></li>
                <li class="active">Nuevo Empleado</li>
            </ol>
        </header>

        <div class="page-content">
            <div class="container-fluid">
                <div class="panel">
                    <div class="panel-heading">
                        <h2>Nuevo Empleado</h2>
                    </div>
                    <div class="panel-body">
                        <form class="mdform">
                            <div class="row">
                                <div class="col-md-6">
                                        <label for="form1-fname">Nombre</label>
                                        <input type="text" class="form-control" id="nombre">
                                </div>
                                <div class="col-md-6">
                                        <label for="form1-lname">Apellido</label>
                                        <input type="text" class="form-control" id="form1-lname">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                        <label for="form1-fname">DNI</label>
                                        <input type="text" class="form-control" id="form1-fname">
                                </div>
                                <div class="col-md-6">
                                    <label for="form1-lname">Fecha Nacimiento</label>
                                    <input type="date" class="form-control" id="form1-lname">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                        <label for="form1-fname">ID Permisos</label>
                                    <select type="text" class="form-control" id="form1-fname">
                                        <option value="0">Permiso Administrador</option>
                                        <option value="1">Permiso Usuario</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                        <label for="form1-lname">Vacaciones inicio</label>
                                        <input type="text" class="form-control" id="form1-lname">
                                </div>
                            </div>
                            <hr>

                            <button type="submit" class="btn btn-primary" onclick="validar()">Submit</button>
                        </form>

                    </div>
                    <!-- /.panel-body -->
                </div>

            </div>
        </div>
    </div>

<?= $this->endSection() ?>
<?= $this->section('linksNeed') ?>
    <script>
        function validar(){
            var valiado= false;


            return valiado;
        }
        function validarNombre(){
            var nombreValido=false;

            var nombre = document.getElementById("nombre").value;
            var RegexNombre = /^[a-z\u00C0-\u02AB'´`]+\.?\s([a-z\u00C0-\u02AB'´`]+\.?\s?)+$/;

            if(){

            }



            return nombreValido;
        }

    </script>
<?= $this->endSection() ?>