
<?= $this->extend('Views/layout/main') ?>

<?= $this->section('title') ?>
Departamento
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="page">
    <header class="ribbon">
        <h2>
            Proyectos
        </h2>
        <ol class="breadcrumb">
            <li>Home</li>
            <!-- <li class="active">Tables</li> -->
        </ol>
    </header>
    <div class="page-content">
        <div class="container-fluid">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Datos</h2>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table datatable" id="proyectos">
                            <thead>
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Nombre
                                    </th>
                                    <th>
                                        Descripcion
                                    </th>
                                    <th>
                                        Inicio
                                    </th>
                                    <th>
                                        Fin
                                    </th>
                                    <th>
                                        Acciones
                                    </th>
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
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('linksNeed') ?>

<script src="<?php echo base_url() . '/assets/' ?>vendor/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() . '/assets/' ?>vendor/datatables/media/js/datatables.min.js"></script>
<script src="<?php echo base_url() . '/assets/' ?>vendor/datatables/media/js/pdfmake.min.js"></script>
<script src="<?php echo base_url() . '/assets/' ?>vendor/datatables/media/js/vfs_fonts.js"></script>
<script src="<?php echo base_url() . '/assets/' ?>vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script>
    $(function() {
        $('.datatable').DataTable()
    });


    InitpersonListTable();

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
    // PERSONAS LIST TABLE trabajadores
    function InitpersonListTable() {
        var seguir = verifyTable("proyectos");

        if (seguir) {

            $('#proyectos').dataTable({

                "ajax": "<?= base_url() ?>/Proyecto/getListaProyectosBD/",
                "type": "GET",
                order: [
                    [0, 'asc']
                ],
                "columns": [{
                        "data": "id"
                    },
                    {
                        "data": "nombre"
                    },
                    {
                        "data": "descripcion"
                    },
                    {
                        "data": "fecha_inicio"
                    },
                    {
                        "data": "fecha_fin"
                    },
                    {
                        "data": "id",
                        render: function(data) {
                            var btns = "";
                            btns += "<a href='<?php echo base_url() ?>/Empleado/modificarEmpleado/" + data + "' class='<?= btn_editar_class ?>' style='margin-right: 20px; width: 140px' ><?= btn_editar ?></a>";
                            btns += "<button class='<?= btn_elimnar_class ?>' value='" + data + "' onclick='trash(" + data + ")' class='btn btn-info' style='width: 140px ' ><?= btn_elimnar ?></button>"
                            return btns
                        }
                    },
                ],
            });
        }
    }

    function trash(id) {

        $.ajax({
            url: "<?php echo base_url() ?>/Proyecto/delete_ProyectoDB",
            type: 'POST',
            data: {
                id: id
            },
            success: function(data) {

                $('#proyectos').DataTable().ajax.reload();
            }
        });
    }
</script>
<?= $this->endSection() ?>