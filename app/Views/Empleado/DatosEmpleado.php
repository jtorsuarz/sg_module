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
                        <form class="mdform" >
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="form1-fname">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" disabled >
                                </div>
                                <div class="col-md-6">
                                    <label for="form1-lname">Apellido</label>
                                    <input type="text" class="form-control" id="apellidos" disabled>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="form1-fname">DNI</label>
                                    <input type="text" class="form-control" id="dni" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="form1-lname">Fecha Nacimiento</label>
                                    <input type="date" class="form-control" id="fecha_nacimiento" disabled>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="form1-lname">Fecha inicio vacaciones</label>
                                    <input type="date" class="form-control" id="fecha_inicio_vacaciones" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="form1-lname">Fecha fin vacaciones</label>
                                    <input type="date" class="form-control" id="fecha_fin_vacaciones" disabled>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">

                                    <label for="form1-fname">Permisos</label>
                                    <select type="text" class="form-control" id="permisos" disabled>
                                        <option value="0">Permiso Administrador</option>
                                        <option value="1">Permiso Usuario</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="form1-lname">Salario bruto</label>
                                    <input type="number" class="form-control" id="salario" disabled>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">

                                    <label for="form1-fname">Departamento</label>
                                    <select type="text" class="form-control" id="departamento" disabled>
                                        <option value="0"></option>
                                    </select>
                                </div>
                            </div>
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
    <script>
        var nombreInput = document.getElementById("nombre");
        var apellidoInput = document.getElementById("apellidos");
        var dniInput = document.getElementById("dni");
        var fCumple = document.getElementById("fecha_nacimiento");
        var fInicio = document.getElementById("fecha_inicio_vacaciones");
        var fFin = document.getElementById("fecha_fin_vacaciones");
        var salarioInput = document.getElementById("salario");
        var permisosInput = document.getElementById("permisos");
        var departamentoInput = document.getElementById("departamento");

        //insertar en vez de "" la variable correspondiente a lo que vosotros tengais deberia funcionar
        nombreInput.value = "nombre";
        apellidoInput.value = "apellidos";
        dniInput.value = "29434455E";
        fCumple.value = "01/01/2002";
        fInicio.value = "01/01/2002";
        fFin.value = "01/01/2002";
        salarioInput.value = "122";
        permisosInput.value = option.value("1");
        departamentoInput.value = option.value("1");

    </script>
<?= $this->endSection() ?>