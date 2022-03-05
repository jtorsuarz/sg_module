<?= $this->extend('Views/layout/main') ?>

<?= $this->section('title') ?>
    Crear proyecto
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="page">
    <header class="ribbon">
        <h2>
            Proyectos
        </h2>
        <ol class="breadcrumb">
            <li><a href="#">Proyectos</a></li>
            <li class="active">Nuevo proyecto</li>
        </ol>
    </header>
    <div class="page-content">
        <div class="container-fluid">
            <div class="panel">
                <div class="panel-heading">
                    <h2>Proyecto Nuevo</h2>
                </div>
                <div class="panel-body">
                    <form class="mdform">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="form1-email">Id Proyecto</label>
                                <input type="text" class="form-control" id="idProyecto">
                            </div>
                            <div class="col-md-6">
                                <label>Nombre Proyecto</label>
                                <input type="text" class="form-control" id="nombreProyecto">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="form1-fname">Descripcion</label>
                                <input type="text" class="form-control" id="descripcion">
                            </div>

                            <div class="col-md-6">

                                <label for="form1-fname">Permisos</label>
                                <select type="text" class="form-control" id="permisos">
                                    <option value="0"></option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="form1-fname">Inicio proyecto</label>
                                <input type="date" class="form-control" id="f_Inicio">
                            </div>
                            <div class="col-md-6">
                                <label for="form1-lname">Fin proyecto</label>
                                <input type="date" class="form-control" id="f_Final">
                            </div>
                        </div>
                        <hr>
                        <!-- /.row -->
                        <button type="button" class="btn btn-primary" onclick="validar()">Enviar</button>

                    </form>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <!-- /.page-content -->
        </div>
    </div>
    <?= $this->endSection() ?>
    <?= $this->section('linksNeed') ?>
    <script>
        var validadoTodo;
        var colorError = '#ff5a81';

        function validar() {
            validadoTodo = true;

            var idProyecto = document.getElementById("idProyecto");
            var nombreInput = document.getElementById("nombreProyecto");
            var descripcionInput = document.getElementById("descripcion");
            var fechaInicioInput = document.getElementById("f_Inicio");
            var fechaFinalInput = document.getElementById("f_Final");


            if (idProyecto.value =='') {
                idProyecto.style.borderColor = colorError;
                validadoTodo = false;
            } else {
                idProyecto.style.borderColor = 'white';
            }

            if (nombreInput.value == '') {
                nombreInput.style.borderColor = colorError;
                validadoTodo = false;
            } else {
                nombreInput.style.borderColor = 'white';

            }

            if (descripcionInput.value == '') {
                descripcionInput.style.borderColor = colorError;
                validadoTodo = false;
            } else {
                descripcionInput.style.borderColor = 'white';
            }

            if (fechaInicioInput.value == '') {
                fechaInicioInput.style.borderColor = colorError;
                validadoTodo = false;
            } else {
                fechaInicioInput.style.borderColor = 'white';
            }

            if (fechaFinalInput.value == '') {
                fechaFinalInput.style.borderColor = colorError;
                validadoTodo = false;
            } else {
                fechaFinalInput.style.borderColor = 'white';
            }

            return validadoTodo;
        }


    </script>
<?= $this->endSection() ?>