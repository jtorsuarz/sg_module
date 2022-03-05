<?= $this->extend('Views/layout/main') ?>

<?= $this->section('title') ?>
Modificar Empleado
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="page">

    <header class="ribbon">
        <h2>
            Modificar Empleado
        </h2>

        <ol class="breadcrumb">
            <li><a href="#">Empleado</a></li>
            <li class="active"><?php echo $empleadoParaModificar->nombre ?></li>
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
            <div class="panel">
                <div class="panel-heading">
                    <h2>Modificar Empleado</h2>
                </div>
                <div class="panel-body">
                    <div class="mdform">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="form1-fname">Nombre</label>
                                <input value="<?php echo $empleadoParaModificar->nombre ?>" type="text" class="form-control" id="nombre">
                            </div>
                            <div class="col-md-6">
                                <label for="form1-lname">Apellido</label>
                                <input value="<?php echo $empleadoParaModificar->apellido ?>" type="text" class="form-control" id="apellidos">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="form1-fname">DNI</label>
                                <input value="<?php echo $empleadoParaModificar->dni ?>" type="text" class="form-control" id="dni">
                            </div>
                            <div class="form-group md-form-group col-md-6">
                                <label>Fecha Nacimiento</label>
                                <div class="input-group datepicker-input-group date">
                                    <input value="<?php echo $empleadoParaModificar->fecha_nacimiento ?>" class="form-control" id="fecha_nacimiento">
                                    <span style="background: white; border: none;" class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>

                        </div>
                        <hr>
                        <div class="row">
                            <div class="form-group md-form-group col-md-6">
                                <label>Inicio vacaciones</label>
                                <div class="input-group datepicker-input-group date">
                                    <input value="<?php echo $empleadoParaModificar->fehca_inicio_vacaciones ?>" class="form-control" id="fecha_inicio_vacaciones">
                                    <span style="background: white; border: none;" class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="form1-lname">Fin vacaciones</label>
                                <div class="input-group datepicker-input-group date">
                                    <input value="<?php echo $empleadoParaModificar->fehca_fin_vacaciones ?>" class="form-control" id="fecha_fin_vacaciones">
                                    <span style="background: white; border: none;" class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">

                                <label for="form1-fname">Permisos</label>
                                <select type="text" class="form-control" id="permisos">
                                    <option value="0" <?php echo $resultado = 0 == $empleadoParaModificar->id_permiso ? "selected" : ""; ?>>Permiso Administrador</option>
                                    <option value="1" <?php echo $resultado = 1 == $empleadoParaModificar->id_permiso ? "selected" : ""; ?>>Permiso Usuario</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="form1-lname">Salario bruto</label>
                                <input value="<?php echo $empleadoParaModificar->salario_bruto ?>" type="number" class="form-control" id="salario">
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

<!-- porque somos unos vagos -->
<input id="input_id_empleado" type="hidden" value="<?php echo $empleadoParaModificar->id_empleado ?>">

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
            nombreInput.style.borderColor = colorError;
            validadoTodo = false;
        } else {

            nombreInput.style.borderColor = 'white';
        }
        if (!(RegexNombre.test(apellidoInput.value))) {
            apellidoInput.style.borderColor = colorError;
            validadoTodo = false;
        } else {

            apellidoInput.style.borderColor = 'white';
        }
    }

    function validarDNI() {
        var dniInput = document.getElementById("dni");
        var RegexDNI = /^[0-9]{8,8}[A-Za-z]$/;
        if (!(RegexDNI.test(dniInput.value))) {
            dniInput.style.borderColor = colorError;
            validadoTodo = false;
        } else {

            dniInput.style.borderColor = 'white';
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
        if (fCumple.value == '') {
            fCumple.style.borderColor = colorError;
            validadoTodo = false;
        } else {
            fCumple.style.borderColor = 'white';
        }
        if (fInicio.value == '') {
            fInicio.style.borderColor = colorError;
            validadoTodo = false;
        } else {
            fInicio.style.borderColor = 'white';
        }
        if (fFin.value == '') {
            fFin.style.borderColor = colorError;
            validadoTodo = false;
        } else {
            fFin.style.borderColor = 'white';
        }

    }

    function validarSueldo() {
        var salarioInput = document.getElementById("salario");
        if (salarioInput.value <= 0) {
            salarioInput.style.borderColor = colorError;
        } else {
            salarioInput.style.borderColor = 'white';
        }
    }


    //esto os deberia servir para usar esta funcion al principio y se carguen vuestros datos del empleado para poder modificarlo
    function ponerDatos(nombre, apellidos, dni, fecha_nacimiento, fecha_inicio_vacaciones, fecha_fin_vacaciones, idPermiso, salarioBruto, idDepartamento) {
        var nombreInput = document.getElementById("nombre");
        var apellidoInput = document.getElementById("apellidos");
        var dniInput = document.getElementById("dni");
        var fCumple = document.getElementById("fecha_nacimiento");
        var fInicio = document.getElementById("fecha_inicio_vacaciones");
        var fFin = document.getElementById("fecha_fin_vacaciones");
        var salarioInput = document.getElementById("salario");
        var permisosInput = document.getElementById("permisos");
        var departamentoInput = document.getElementById("departamento");

        nombreInput.value = nombre;
        apellidoInput.value = apellidos;
        dniInput.value = dni;
        fCumple.value = fecha_nacimiento;
        fInicio.value = fecha_inicio_vacaciones;
        fFin.value = fecha_fin_vacaciones;
        salarioInput.value = salarioBruto;
        permisosInput.value = idPermiso;
        departamentoInput.value = idDepartamento;


    }

    $("#botonEnviar").on("click", function() {

        if (validar()) {

            let formData = new FormData();

            formData.append('id_empleado', $('#input_id_empleado').val());
            formData.append('nombre', $('#nombre').val());
            formData.append('apellido', $('#apellidos').val());
            formData.append('dni', $('#dni').val());
            formData.append('id_permiso', $('#permisos').val());
            formData.append('fecha_nacimiento', ($('#fecha_nacimiento').val()));
            formData.append('fehca_inicio_vacaciones', ($('#fecha_inicio_vacaciones').val()));
            formData.append('fehca_fin_vacaciones', ($('#fecha_fin_vacaciones').val()));
            formData.append('salario_bruto', $('#salario').val());

            $.ajax({

                url: "<?php echo base_url() ?>/Empleado/modificarEmpleadoDB",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {

                    console.log(document.getElementById("fecha_nacimiento").value)
                    console.log(document.getElementById("nombre").value)
                    console.log("Succes")
                    window.location.href = "<?php echo base_url() ?>/admin";
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