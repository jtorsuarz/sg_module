<?= $this->extend('Views/layout/main') ?>

<?= $this->section('title') ?>
Modificar Proyecto
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="page">
    <header class="ribbon">
        <h2>
            Proyectos
        </h2>
        <ol class="breadcrumb">
            <li><a href="#">Proyectos</a></li>
            <li class="active">Modificar proyecto</li>
        </ol>
    </header>
    <div class="page-content">
        <div class="container-fluid">
            <div class="panel">
                <div class="panel-heading">
                    <h2>Proyecto Modificar</h2>
                </div>
                <div class="panel-body">

                    <form class="mdform">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Nombre Proyecto</label>
                                <input type="text" class="form-control" id="nombreProyecto" value="<?= $proyecto->nombre ?>">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="form1-fname">Descripcion corta</label>
                                <input type="text" class="form-control" id="descripcion" value="<?= $proyecto->descripcion ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="form1-fname">Departamento</label>
                                <select type="text" class="form-control" id="departamento">
                                    <option value="0"></option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="form1-lname">Inicio proyecto</label>
                                <div class="input-group datepicker-input-group date">
                                    <input class="form-control" id="f_Inicio" value="<?= $proyecto->fecha_inicio ?>">
                                    <span class="input-group-addon" id="date-perso"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="form1-lname">Fin proyecto</label>
                                <div class="input-group datepicker-input-group date">
                                    <input class="form-control" id="f_Final" value="<?= $proyecto->fecha_fin ?>">
                                    <span class="input-group-addon" id="date-perso"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <!-- /.row -->
                        <a type="button" class="btn btn-primary" id="botonEnviar">Enviar</a>

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

            var nombreInput = document.getElementById("nombreProyecto");
            var descripcionInput = document.getElementById("descripcion");
            var fechaInicioInput = document.getElementById("f_Inicio");
            var fechaFinalInput = document.getElementById("f_Final");

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
        $("#botonEnviar").on("click", function() {

            if (validar()) {

                let formData = new FormData();

                formData.append('id', <?= $proyecto->id ?>);
                formData.append('nombre', $('#nombreProyecto').val());
                formData.append('descripcion', $('#descripcion').val());
                formData.append('id_departamento', $('#departamento').val());
                formData.append('fecha_inicio', $('#f_Inicio').val());
                formData.append('fecha_fin', $('#f_Final').val());

                $.ajax({

                    url: "<?php echo base_url() ?>/Proyecto/insert_ProyectoDB",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(data) {

                        window.location.href = "<?php echo base_url() ?>/Proyecto/index";
                    },
                    error: function(data) {

                        alert("Error al insertar el empleado")
                    }
                })
            }
        })

        // FUNCION QUE DEVUELVE UN SELECT PARA FILTRAR
        $(function() {
            $.ajax({
                url: "<?= base_url() ?>/Departamento/getDepartJSON",
                type: "GET",
                success: function(data) {
                    var json = JSON.parse(data);
                    if (json.length === 0) {
                        $("#departamento").html('');
                        $("#departamento").append('<option  selected disable>No hay Departamentos registradas</option>');
                        $('#departamento').selectpicker('refresh');

                    } else {
                        $("#departamento").html('');
                        $.each(json, function(i, item) {
                            $("#departamento").append('<option value="' + item.id_depart + '">' + item.nombre + '</option>');
                        });
                        $('#departamento').selectpicker('val', <?= $proyecto->id_departamento ?>);
                        $('#departamento').selectpicker('refresh');
                    }
                }
            });
        })
    </script>
    <?= $this->endSection() ?>