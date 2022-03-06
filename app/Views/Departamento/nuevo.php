<?= $this->extend('Views/layout/main') ?>

<?= $this->section('title') ?>
Departamento
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="page">
    <header class="ribbon">
        <h2>
            Departamento
        </h2>
        <ol class="breadcrumb">
            <li><a href="#">Departamento</a></li>
            <li class="active">Nuevo departamento</li>
        </ol>

        <style>
            input[type="number"] {
                -webkit-appearance: textfield !important;
                margin: 0;
                -moz-appearance: textfield !important;
            }
        </style>

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
                                        <label for="form1-fname">ID Departamento</label>
                                        <input type="number" class="form-control" id="id_departamento">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" id="nombre_departamento">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group md-form-group">
                                    <label for="form1-fname">Responsable departamento</label>
                                    <select type="text" class="form-control" id="id_responsable">
                                        <option value="0"></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label style="margin-bottom: 15px" for="form1">Descripcion</label>
                                    <textarea style="height: 50px" class="form-control" id="descripcion_departamento" rows="3"></textarea>
                                </div>
                                <!-- /.row -->
                                <a id="botonEnviar" type="button" class="btn btn-primary">Submit</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection() ?>
    <?= $this->section('linksNeed') ?>

    <script>
        var validadoTodo;
        var colorError = '#ff5a81';

        function validar() {
            validadoTodo = true;

            validarIDDepartamento();
            validarNombreDepartamento();
            // validarResponsable();
            validarDescripcion();

            return validadoTodo;
        }

        function validarIDDepartamento() {

            var id_proyectoInput = document.getElementById("id_departamento");

            if (id_proyectoInput.value == "") {

                id_proyectoInput.style.borderColor = colorError;
                validadoTodo = false;
            } else {

                id_proyectoInput.style.borderColor = 'grey';
            }
        }

        function validarNombreDepartamento() {

            var RegexNombre = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/;

            var nombreProyectoInput = document.getElementById("nombre_departamento");

            if (!(RegexNombre.test(nombreProyectoInput.value))) {

                nombreProyectoInput.style.borderColor = colorError;
                validadoTodo = false;
            } else {

                nombreProyectoInput.style.borderColor = 'grey';
            }
        }

        function validarDescripcion() {

            var descripcionInput = document.getElementById("descripcion_departamento");

            if (descripcionInput.value == "") {

                descripcionInput.style.borderColor = colorError;
                validadoTodo = false;
            } else {

                descripcionInput.style.borderColor = 'grey';
            }
        }

        $("#botonEnviar").on("click", function() {

            if (validar()) {

                let formData = new FormData();

                formData.append('id_depart', $('#id_departamento').val());
                formData.append('nombre', $('#nombre_departamento').val());
                formData.append('descripcion', $('#descripcion_departamento').val());

                $.ajax({

                    url: "<?php echo base_url() ?>/Departamento/insert_Departamento",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(data) {

                        window.location.href = "<?php echo base_url() ?>/Departamento/index";
                    },
                    error: function(data) {

                        Alert.error("Error al insertar el departamento")
                    }
                })
            }
        })
  
        // FUNCION QUE DEVUELVE UN SELECT PARA FILTRAR
        $(function() {
            $.ajax({
                url: "<?= base_url() ?>/Empleado/getAdminsJSON",
                type: "GET",
                success: function(data) {
                    var json = JSON.parse(data);
                    if (json.length === 0) {
                        $("#id_responsable").html('');
                        $("#id_responsable").append('<option  selected disable>No hay Responsables registradas</option>');
                        $('#id_responsable').selectpicker('refresh');

                    } else {
                        $("#id_responsable").html('');
                        $.each(json, function(i, item) {
                            console.log(item);
                            $("#id_responsable").append('<option value="' + item.id_empleado + '">' + item.fullName + '</option>');
                        });
                        $('#id_responsable').selectpicker('refresh');
                    }
                }
            });
        })
    </script>
    <?= $this->endSection() ?>