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
                    <div class="mdform">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="form1-fname">Nombre</label>
                                <input value="Ruben" type="text" class="form-control" id="nombre">
                            </div>
                            <div class="col-md-6">
                                <label for="form1-lname">Apellido</label>
                                <input value="Garcia Barco" type="text" class="form-control" id="apellidos">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="form1-fname">DNI</label>
                                <input value="514945264J" type="text" class="form-control" id="dni">
                            </div>
                            <div class="form-group md-form-group col-md-6">
                                <label>Fecha Nacimiento</label>
                                <div class="input-group datepicker-input-group date">
                                    <input value="2017-06-01" class="form-control" id="fecha_nacimiento">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>

                        </div>
                        <hr>
                        <div class="row">
                            <div class="form-group md-form-group col-md-6">
                                <label>Inicio vacaciones</label>
                                <div class="input-group datepicker-input-group date">
                                    <input value="2022-05-01" class="form-control" id="fecha_inicio_vacaciones">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="form1-lname">Fin vacaciones</label>
                                <div class="input-group datepicker-input-group date">
                                    <input value="2022-06-01" class="form-control" id="fecha_fin_vacaciones">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">

                                <label for="form1-fname">Permisos</label>
                                <select type="text" class="form-control" id="permisos">
                                    <option value="0">Permiso Administrador</option>
                                    <option selected value="1">Permiso Usuario</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="form1-lname">Salario bruto</label>
                                <input value="2300" type="number" class="form-control" id="salario">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">

                                <label for="form1-fname">Departamento</label>
                                <select type="text" class="form-control" id="departamento">
                                    <option value="0"></option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <a id="botonEnviar" type="button" class="btn btn-primary">Enviar</a>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>
<?= $this->section('linksNeed') ?>

<!-- PARA FORMATEAR LA FECHA AL INGLES -->
<script src="<?php echo base_url() . '/assets/' ?>vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script>

    var validadoTodo;
    var colorError = '#ff5a81';

    //ESTA FUNCION ES LA QUE TENEIS QUE COGER, SI ESTA FUNCION OS DEVUELVE NEGATIVO ES QUE ALGUN CAMPO ESTA MAL
    //EN EL CASO DE QUE ESTE TRUE, TODO CORRECTO Y USARLO
    function validar() {
        validadoTodo = true;

        validarNombreApellido();
        validarDNI();
        validarFechas();
        validarSueldo();

        return validadoTodo;
    }

    function validarNombreApellido() {

        var nombreInput = document.getElementById("nombre");
        var apellidoInput = document.getElementById("apellidos");
        var RegexNombre = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/;

        if (!(RegexNombre.test(nombreInput.value))) {
            nombreInput.style.backgroundColor = colorError;
            validadoTodo = false;
        } else {

            nombreInput.style.backgroundColor = 'white';
        }
        if (!(RegexNombre.test(apellidoInput.value))) {
            apellidoInput.style.backgroundColor = colorError;
            validadoTodo = false;
        } else {

            apellidoInput.style.backgroundColor = 'white';
        }
    }

    function validarDNI() {
        var dniInput = document.getElementById("dni");
        var RegexDNI = /^[0-9]{8,8}[A-Za-z]$/;
        if (!(RegexDNI.test(dniInput.value))) {
            dniInput.style.backgroundColor = colorError;
            validadoTodo = false;
        } else {

            dniInput.style.backgroundColor = 'white';
        }
    }

    function validarFechas() {

        var fCumple = document.getElementById("fecha_nacimiento");
        var fInicio = document.getElementById("fecha_inicio_vacaciones");
        var fFin = document.getElementById("fecha_fin_vacaciones");
        var t = new Date();
        var fechaActual = new Date(t.getFullYear(), t.getMonth(), t.getDate());
        console.log(fCumple.value);
        console.log(fechaActual);
        if (fCumple.value == '' || new Date(fCumple.value).getDate() >= new Date(fechaActual).getDate()) {
            fCumple.style.backgroundColor = colorError;
            validadoTodo = false;
        } else {
            fCumple.style.backgroundColor = 'white';
        }
        if (fInicio.value == '') {
            fInicio.style.backgroundColor = colorError;
            validadoTodo = false;
        } else {
            fInicio.style.backgroundColor = 'white';
        }
        if (fFin.value == '') {
            fFin.style.backgroundColor = colorError;
            validadoTodo = false;
        } else {
            fFin.style.backgroundColor = 'white';
        }

    }

    function validarSueldo() {
        var salarioInput = document.getElementById("salario");
        if (salarioInput.value <= 0) {
            salarioInput.style.backgroundColor = colorError;
        } else {
            salarioInput.style.backgroundColor = 'white';
        }
    }



    $("#botonEnviar").on("click", function() {

        if (validar()) {

            let formData = new FormData();

            formData.append('nombre', $('#nombre').val());
            formData.append('apellido', $('#apellidos').val());
            formData.append('dni', $('#dni').val());
            formData.append('id_permiso', $('#permisos').val());
            formData.append('fecha_nacimiento', ($('#fecha_nacimiento').val()));
            formData.append('fehca_inicio_vacaciones', ($('#fecha_inicio_vacaciones').val()));
            formData.append('fehca_fin_vacaciones', ($('#fecha_fin_vacaciones').val()));
            formData.append('salario_bruto', $('#salario').val());

            $.ajax({

                url: "<?php echo base_url() ?>/Empleado/insert_Empleado",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    console.log(document.getElementById("fecha_nacimiento").value)
                    console.log(document.getElementById("nombre").value)
                    console.log("Succes")
                    window.location.href = "<?php echo base_url() ?>/";
                },
                error: function(data) {

                    Alert.error("Error")
                }
            })
        }
    })

    $(function() {
        $('.datepicker-input').datepicker({
            format: 'yyyy-mm-dd',
            orientation: 'bottom',
            autoclose: true,

        });
        $('.datepicker-input-group').datepicker({
            format: 'yyyy-mm-dd',
            orientation: 'bottom ',
            autoclose: true,
        });
    })
</script>

<?= $this->endSection() ?>