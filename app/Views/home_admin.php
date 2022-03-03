<?= $this->extend('Front/layout/main') ?>

<?= $this->section('title') ?>
<?php echo title_Empresa_ficha ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>



<div class="page">
    <header class="ribbon">
        <h2>
            Ficha
        </h2>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url(route_to('gestionEmpresa')); ?>">Empresas</a></li>
            <li class="active">Ficha -
                <?php foreach ($empresas as $empresa) : ?>
                    <?= $empresa->nombre ?>
                    <?php break; ?>
                <?php endforeach; ?>
            </li>
        </ol>
    </header>
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php foreach ($empresas as $empresa) : ?>
                                <h2><?= $empresa->nombre ?></h2>
                                <?php break; ?>
                            <?php endforeach; ?>
                            <!-- PAGER -->
                            <div class="col-md-12 text-center">
                                <nav aria-label="...">
                                    <ul class="pagination" id="pagerBtns" style="margin-top: 0px;margin-bottom: 0px">
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#dataGeneral" aria-controls="home" role="tab" data-toggle="tab">Datos Generales</a>
                                </li>

                                <li role="presentation">
                                    <a href="#Departamentos" aria-controls="profile" role="tab" data-toggle="tab">Departamentos</a>
                                </li>

                                <li role="presentation ">
                                    <a href="#Personas" aria-controls="profile" role="tab" data-toggle="tab">Personas</a>
                                </li>

                                <li role="presentation" class="<?= session('cuestionarios.status') ?>">
                                    <a href="#Cuestionarios" aria-controls="settings" role="tab" data-toggle="tab">Cuestionarios</a>
                                </li>

                                <li role="presentation">
                                    <a href="#Estudios" aria-controls="settings" role="tab" data-toggle="tab">Estudios</a>
                                </li>
                            </ul>


                            <!-- Tab panes -->
                            <div class="tab-content">

                                <!-- datageneral -->
                                <div role="tabpanel" class="tab-pane active" id="dataGeneral">
                                    <div class="row">
                                        <?php foreach ($empresas as $empresa) : ?>
                                            <form method="post" action="<?php echo base_url(route_to('Update-Empresa', $idEmpresaActual)) ?>" enctype="multipart/form-data">
                                                <!--    nombreEmpresa   -->
                                                <div class="form-group   col-sm-6">
                                                    <label>Nombre Empresa</label>
                                                    <br>
                                                    <input class="form-control" name="nombre" value="<?= $empresa->nombre ?>">
                                                </div>
                                                <!--    CIF   -->
                                                <div class="form-group  col-sm-6">
                                                    <label>CIF</label>
                                                    <br>
                                                    <input class="form-control" name="cif" value="<?= $empresa->cif ?>">
                                                </div>
                                                <!--    ciudad   -->
                                                <div class="form-group   col-sm-6">
                                                    <label>Ciudad</label>
                                                    <br>
                                                    <input class="form-control" name="ciudad" value="<?= $empresa->ciudad ?>">
                                                </div>
                                                <!--    direccion   -->
                                                <div class="form-group  col-sm-6">
                                                    <label>Direccion</label>
                                                    <br>
                                                    <input class="form-control" name="direccion" value="<?= $empresa->direccion ?>">
                                                </div>
                                                <hr>
                                                <br>

                                                <!--    logo   -->
                                                <div class="form-group  col-sm-12 align-center">
                                                    <?php if ($empresa->logo != null) : ?>
                                                        <?php $empresa->logo = str_replace("./", "/", $empresa->logo); ?>
                                                        <img src='<?php echo base_url() . $empresa->logo ?>' alt='snntech' style="height: auto" width="20%">
                                                    <?php endif; ?>
                                                    <input class="hidden" name="nombreLogo" value="<?= $empresa->logo ?>">
                                                </div>

                                                <!--    logo   -->
                                                <div class="form-group  col-sm-12 align-center">
                                                    <label>Logo</label>
                                                    <br>
                                                    <input type="file" class="form-control dropzone" name="logo" />
                                                    <button type="submit" class="btn btn-info">Actualizar</button>
                                                </div>
                                            </form>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <!-- /.panel -->

                                <!-- departamentos -->
                                <div role="tabpanel" class="tab-pane" id="Departamentos">

                                    <div class="panel-body">
                                        <div class="row">
                                            <?php if (session('user_permiso_modules')->empresaCrear == 1) : ?>
                                                <div style="display: inline-block;">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <button type="button" class="btn btn-info " data-toggle="modal" data-target="#registroDepart">

                                                                Crear Departamentos

                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <p></p>
                                        <p></p>
                                        <div class="table-responsive">
                                            <table class="table datatable" id="depart" style="width: 100%; text-align: center;">
                                                <thead>
                                                    <tr>
                                                        <th class='text-center'>Departamento</th>
                                                        <th class='text-center'>Descripcion</th>
                                                        <th class='text-center'>Nº de Personas</th>
                                                        <th class='text-center'>Acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                    <!-- /.panel-body -->
                                </div>

                                <!-- employees -->
                                <div role="tabpanel" class="tab-pane" id="Personas">

                                    <div class="panel-body">
                                        <?php if (session('user_permiso_modules')->personasCrear == 1) : ?>
                                            <div class="row" style="display: -webkit-box">
                                                <form action="<?php echo base_url(route_to('createPersona-Empresa')) ?>" method="post">
                                                    <button class="btn btn-info" style="margin-right: 1rem;">
                                                        Crear Usuario
                                                    </button>
                                                    <input hidden value="<?= $idEmpresaActual ?>" name="empresaSeleccionadaPost">
                                                </form>
                                                <input type="file" style="display: none;" id="importExcel" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" />
                                                <a id="btnImportExcel" class="btn btn-info" style="margin-right: 1rem;">
                                                    Importar Datos Desde Excel - <i class="fa fa-file-excel-o"></i>

                                                </a>
                                                <a class="btn btn-info" id="btnExportExcel" style="margin-right: 1rem;">
                                                    Descargar Plantilla Excel - <i class="fa fa-file-excel-o"></i>
                                                </a>

                                            </div>
                                        <?php endif; ?>
                                        <p></p>
                                        <p></p>
                                        <div class="table-responsive">
                                            <table class="table datatable nowrap" style="width: 100%;text-align: center;" id="trabajadores">
                                                <thead>
                                                    <tr>
                                                        <th class='text-center'>NIF</th>
                                                        <th class='text-center'>Nombre Completo</th>
                                                        <th class='text-center'>Email</th>
                                                        <th class='text-center'>Telefono</th>
                                                        <th class='text-center'>Situacion Laboral</th>
                                                        <th class='text-center'>Centro</th>
                                                        <th class='text-center'>Acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                    <!-- /.panel-body -->
                                </div>
                                <!-- /.panel -->

                                <!-- cuestionarios -->
                                <div role="tabpanel" class="tab-pane" id="Cuestionarios">
                                    <div class="row">
                                        <div class="col-md-12 table-bordered">
                                            <div class="panel panel-default">

                                                <div class="panel-heading">
                                                    <h2>Cuestionarios Asignados</h2>
                                                </div>

                                                <!--                                                    /.panel-heading-->
                                                <div class="panel-body">
                                                    <?php if (session('user_permiso_modules')->empresaCrear == 1) : ?>
                                                        <div style="display: inline-block;">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <button class="btn btn-info " data-target="#cuestionariosAsig" data-toggle="modal">
                                                                        Asignar Cuestionario
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                    <p></p>
                                                    <div class="table-responsive">
                                                        <table class="table datatable" id="cuestionariosTablet" style="width: 100%; text-align: center;">
                                                            <thead>
                                                                <tr>
                                                                    <th class='text-center'>Nombre</th>
                                                                    <th class='text-center'>Estado</th>
                                                                    <th class='text-center'>Personas</th>
                                                                    <th class='text-center'>Acciones</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody></tbody>
                                                        </table>

                                                    </div>
                                                </div>
                                                <!-- /.panel-body -->
                                            </div>
                                            <!-- /.panel -->
                                        </div>

                                        <!-- cuestionarios asignados -->

                                    </div>
                                    <!-- /.row -->
                                </div>

                                <!-- estudios -->
                                <div role="tabpanel" class="tab-pane" id="Estudios">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h2>Estudios Relacionados</h2>
                                                </div>
                                                <!--                                                    /.panel-heading-->
                                                <div class="panel-body">
                                                    <p></p>

                                                    <div class="table-responsive">
                                                        <table class="table datatable" id="estudioTablet">
                                                            <thead>
                                                                <tr>
                                                                    <th class='text-center'>Nombre</th>
                                                                    <th class='text-center'>Fecha de Inicio</th>
                                                                    <th class='text-center'>Fecha de Finalizacion</th>
                                                                    <th class='text-center'>Estado</th>
                                                                    <th class='text-center'>Acciones</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($estudios as $estudio) : ?>
                                                                    <tr>
                                                                        <td class='text-center'><?= $estudio->nombre ?></td>
                                                                        <td class='text-center'><?= $estudio->fechaInicial ?></td>
                                                                        <td class='text-center'><?= $estudio->fechaFin ?></td>
                                                                        <td class='text-center'><?= $estudio->printStatus($estudio->fechaInicial, $estudio->fechaFin) ?></td>
                                                                        <td class='text-center'>
                                                                            <a class='<?= btn_ver_class ?>' href='<?php echo base_url(route_to('Ver-Estudio')) ?>/<?= trim($estudio->id) ?>' style='text-decoration: none;' target='_blank'>
                                                                                Ver resultados
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                <?php endforeach; ?>
                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </div>
                                                <!-- /.panel-body -->
                                            </div>
                                            <!-- /.panel -->
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.page-content -->
</div>
<!-- /.page -->

<!-- Modal -->
<div class="modal fade" id="registroDepart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Registro de Departamento</h4>
            </div>
            <div class="modal-body">

                <form method="post" action="<?php echo base_url(route_to('save-Departamentos')) ?>" enctype="multipart/form-data">
                    <div class="row">
                        <!--    nombreEmpresa   -->
                        <div class="form-group   col-sm-12">
                            <label>Nombre Departamento</label>
                            <br>
                            <input class="form-control" name="nombre">
                        </div>
                        <!--    CIF   -->
                        <div class="form-group  col-sm-12">
                            <label>Descripcion</label>
                            <br>
                            <textarea class="form-control" name="descripcion"></textarea>
                        </div>
                        <?php foreach ($empresas as $empresa) : ?>
                            <input type="hidden" name="idEmpresa" value="<?= $empresa->idEmpresa ?>">
                        <?php endforeach; ?>
                    </div>
                    <!-- /.row -->

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar Departamento</button>
            </div>
            </form>

        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="cuestionariosAsig" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Asignacion de Cuestionarios</h4>
            </div>
            <div class="modal-body">

                <form method="post" action="<?php echo base_url(route_to('Asginacion-Cuestionarios')) ?>">
                    <div class="row">
                        <!--    nombreEmpresa   -->
                        <div class="form-group   col-sm-12">
                            <label>Seleccione los cuestionarios a asignar</label>
                            <br>
                            <table class="table datatable" id="tablaAsig" style="width: 100%; text-align: center;">
                                <thead>
                                    <tr>
                                        <th class='text-center'>Nombre</th>
                                        <th class='text-center'>Seleccion</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                        <!-- /.row -->

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-info">Guardar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('linksNeed') ?>

<script src="<?php echo base_url() . '/assets/' ?>vendor/datatables/media/js/jquery.dataTables.min.js"></script>

<script src="<?php echo base_url() . '/assets/' ?>vendor/datatables/media/js/datatables.min.js"></script>
<script src="<?php echo base_url() . '/assets/' ?>vendor/datatables/media/js/pdfmake.min.js"></script>
<script src="<?php echo base_url() . '/assets/' ?>vendor/datatables/media/js/vfs_fonts.js"></script>

<script>
    $(function() {
        $('.datatable').DataTable()
    });
</script>

<script>
    InitsurveysAvaliableTable();
    InitsurveysListTable();
    InitpersonListTable();
    InitdepartListTable();
    filterTable('tablaAsig');
    filterTable('cuestionariosTablet');
    filterTable('trabajadores');
    filterTable('depart');
    filterTable1('estudioTablet');

    // CUESTIONARIOS QUE SE PUEDEN ASIGNAR tablaAsig
    function InitsurveysAvaliableTable() {
        var seguir = verifyTable("tablaAsig");

        if (seguir) {

            $('#tablaAsig').dataTable({

                "ajax": "<?= base_url() ?>/Cuestionarios/getCuestionariosNoEmpresa/<?= $idEmpresaActual ?>",
                "type": "GET",
                order: [
                    [1, 'asc']
                ],
                "columns": [{
                        "data": "nombre"
                    },
                    {
                        "data": "id",
                        render: function(data) {
                            var btns = "";
                            btns += "<input hidden name='idEmpresa' value='<?php echo $idEmpresaActual ?>'><input id='my-input' class='input-perso' type='checkbox' name='idCuestionarios[]' value='" + data + "' style='height: 20px; width: 20px;'>";
                            return btns
                        }
                    },

                ],
            });
        }
    }

    // SURVEYS LIST cuestionariosTablet
    function InitsurveysListTable() {
        var seguir = verifyTable("cuestionariosTablet");

        if (seguir) {

            $('#cuestionariosTablet').dataTable({

                "ajax": "<?= base_url() ?>/Cuestionarios/getCuestionariosEmpresa/<?= $idEmpresaActual ?>",
                "type": "GET",
                order: [
                    [1, 'asc']
                ],
                "columns": [{
                        "data": "nombre"
                    },
                    {
                        "data": "estado"
                    },
                    {
                        "data": "nPersonas"
                    },
                    {
                        "data": "id",
                        render: function(data) {
                            var btns = "";
                            <?php if (session('user_permiso_modules')->cuestionariosVisualizar == 1) : ?>
                                btns += "<a title='Ver Resultados' class='<?= btn_resultados_class ?>' href='<?php echo base_url() ?>/Cuestionarios/informeCuestionario/" + data + "' style='text-decoration: none;' target='_blank'><?= btn_resultados ?></a>";
                            <?php endif; ?>
                            return btns
                        }
                    },

                ],
            });
        }

    }

    // PERSONAS LIST TABLE trabajadores
    function InitpersonListTable() {
        var seguir = verifyTable("trabajadores");

        if (seguir) {

            $('#trabajadores').dataTable({

                "ajax": "<?= base_url() ?>/Personas/getPersonasEmpresaAjax/<?= $idEmpresaActual ?>",
                "type": "GET",
                order: [
                    [1, 'asc']
                ],
                "columns": [{
                        "data": "nif"
                    },
                    {
                        "data": "fullName"
                    },
                    {
                        "data": "email"
                    },
                    {
                        "data": "telefono"
                    },
                    {
                        "data": "idSituacionLaboral"
                    },
                    {
                        "data": "centro"
                    },
                    {
                        "data": "id",
                        render: function(data) {
                            var btns = "";
                            <?php if (session('user_permiso_modules')->personasVisualizar == 1) : ?>
                                btns += "<a href='#' class='<?= btn_ver_class ?>' style='margin-right: 10px' ><?= btn_ver ?></a>";
                            <?php endif; ?>
                            <?php if (session('user_permiso_modules')->personasBorrar == 1) : ?>
                                btns += "<button class='<?= btn_elimnar_class ?>' value='" + data + "' onclick='userdelete(this)' class='btn btn-info'><?= btn_elimnar ?></button>"
                            <?php endif; ?>
                            return btns
                        }
                    },

                ],
            });
        }
    }

    //   DEPARTAMENTOS LIST TABLET depart
    function InitdepartListTable() {
        var seguir = verifyTable("depart");

        if (seguir) {

            $('#depart').dataTable({
                "ajax": "<?php echo base_url() ?>/Departamentos/departamentosEmpresa/<?= $idEmpresaActual ?>",
                "type": "GET",
                order: [
                    [1, 'asc']
                ],
                "columns": [{
                        "data": "nombre"
                    },
                    {
                        "data": "descripcion"
                    },
                    {
                        "data": "nPersonas"
                    },
                    {
                        "data": "id",
                        render: function(data) {
                            var btns = "";
                            <?php if (session('user_permiso_modules')->empresaBorrar == 1) : ?>
                                btns += "<button class='<?= btn_elimnar_class ?>' value='" + data + "' onclick='departDelete(this)' class='btn btn-info'><?= btn_elimnar ?></button>"
                            <?php endif; ?>
                            return btns
                        }
                    },
                ],
            });
        }
    }

    <?php if (session('user_permiso_modules')->cuestionariosEditar == 1) : ?>

        function changeStatus(id1, estado1) {

            $.ajax({
                url: "<?php echo base_url() ?>/Cuestionarios/changeStatusCuestionario/" + id1 + "/" + estado1 + "",
                type: 'GET',
                success: function(data) {

                    var json = JSON.parse(data);

                    if (json.length === 0) {

                    } else {

                        if (json.type == 'success') {

                            toastr.options.timeOut = 2000;
                            toastr.success(json.content);

                        } else if (json.type == 'error') {

                            toastr.options.timeOut = 2000;
                            toastr.error(json.content);

                        }

                        $('#cuestionariosTablet').DataTable().ajax.reload();
                    }
                }
            });

        }

    <?php endif; ?>

    <?php if (session('user_permiso_modules')->personasBorrar == 1) : ?>

        function userdelete(id) {
            $.ajax({
                url: "<?php echo base_url() ?>/Personas/deletePersona/",
                type: 'POST',
                data: {
                    id: $(id).val()
                },
                success: function(data) {
                    var json = JSON.parse(data);

                    if (json.length === 0) {

                    } else {

                        if (json.type == 'success') {

                            toastr.options.timeOut = 2000;
                            toastr.success(json.content);

                        } else if (json.type == 'error') {

                            toastr.options.timeOut = 2000;
                            toastr.error(json.content);

                        }

                        $('#trabajadores').DataTable().ajax.reload();

                    }

                }
            });

        }
    <?php endif; ?>

    <?php if (session('user_permiso_modules')->personasBorrar == 1) : ?>

        function departDelete(id) {
            $.ajax({
                url: "<?php echo base_url() ?>/Departamentos/deleteDepart/",
                type: 'POST',
                data: {
                    id: $(id).val()
                },
                success: function(data) {
                    var json = JSON.parse(data);

                    if (json.length === 0) {

                    } else {

                        if (json.type == 'success') {

                            toastr.options.timeOut = 2000;
                            toastr.success(json.content);

                        } else if (json.type == 'error') {

                            toastr.options.timeOut = 2000;
                            toastr.error(json.content);

                        }

                        $('#trabajadores').DataTable().ajax.reload();

                    }

                }
            });

        }
    <?php endif; ?>

    // paginacion
    $(function() {

        $.ajax({
            url: '<?php echo base_url() ?>/Empresa/pagerEmpresa/<?= $idEmpresaActual ?>',
            type: 'GET',
            dataType: 'text',
            success: function(data) {
                $('#pagerBtns').html('');
                $('#pagerBtns').append(data);
            }

        });
    });

    // funcion comprueba datos de la tabla 
    function verifyTable(id) {
        if ($.fn.dataTable.isDataTable('#' + id)) {
            table = $('#' + id).DataTable();

            table.destroy();
            //console.log("es tabla")

            return true;

        } else {
            return true;
        }
    }

    function filterTable(id) {

        var table = $('#' + id).DataTable();

        var lastColumn = table.columns().count() - 1;

        $('#' + id + ' thead tr').clone(true).appendTo('#' + id + ' thead');

        $('#' + id + ' thead tr:eq(1) th').each(function(i) {

            if (i < lastColumn) {

                var title = $(this).text();
                $(this).html('<input type="text" placeholder="Buscar ' + title + '" />');

                $('input', this).on('keyup change', function() {
                    if (table.column(i).search() !== this.value) {
                        table
                            .column(i)
                            .search(this.value)
                            .draw();
                    }
                });

            }

        });
        $('#' + id).DataTable().ajax.reload(null, false);

    }

    function filterTable1(id) {

        var table = $('#' + id).DataTable();

        var lastColumn = table.columns().count() - 1;

        $('#' + id + ' thead tr').clone(true).appendTo('#' + id + ' thead');

        $('#' + id + ' thead tr:eq(1) th').each(function(i) {

            if (i < lastColumn) {

                var title = $(this).text();
                $(this).html('<input type="text" placeholder="Buscar ' + title + '" />');

                $('input', this).on('keyup change', function() {
                    if (table.column(i).search() !== this.value) {
                        table
                            .column(i)
                            .search(this.value)
                            .draw();
                    }
                });

            }

        });
    }

    $("#btnImportExcel").on('click', function() {
        $("#importExcel").trigger('click');
    });
    $("#importExcel").change(function() {
        let upload = $('#importExcel')[0].files[0];

        if (upload != undefined) {

            var formData = new FormData();
            formData.append('upload', upload);
            formData.append('idEmpresa', <?= $idEmpresaActual ?>);
            formData.append('idDepartamento', '');
            $.ajax({
                url: '<?php echo base_url() ?>/ImportExcel/PersonasEmpresa',
                type: 'POST',
                data: formData, //send this from formData
                contentType: false,
                processData: false,
                beforeSend: function(data) {

                    toastr.info("Cargando datos...", {
                        tapToDismiss: false,
                        timeOut: 0,
                        extendedTimeOut: 0,
                        allowHtml: true,
                        preventDuplicates: true,
                        preventOpenDuplicates: true,
                        newestOnTop: true
                    });
                },
                success: function(data) {

                    toastr.clear();


                    var json = JSON.parse(data);

                    // si todo esta correcto
                    if (json.hasOwnProperty("res")) {

                        toastr.success(json.res.message);
                        InitpersonListTable();

                        // sino muestra el error
                    } else {

                        $.each(json, function(index, value) {
                            toastr.error(value);

                        });
                    }
                }

            });
        }

        $('#importExcel').val('');

    });

    // click btn export
    $("#btnExportExcel").on('click', function() {

        var link = document.createElement("a");
        link.download = "Template_Usuarios_Import";
        link.href = "<?php echo base_url() ?>/writable/uploads/Template_Usuarios_Import.xlsx";
        link.click();

    });
</script>

<script>
    $(function() {
        $(function() {
            $('[data-toggle="tooltip"]').tooltip();
            $('[data-toggle="popover"]').popover();
        })
    })
</script>

<?php if (session('msg')) : ?>
    <script>
        toastr.options.timeOut = 3000; // How long the toast will display without user interaction
        toastr.options.extendedTimeOut = 6000; // How long the toast will display after a user hovers over it
        toastr.options.progressBar = false;
        toastr.<?= session('msg.type') ?>('<?= session('msg.content') ?>!');
    </script>
<?php endif ?>


<?= $this->endSection() ?>