<?= $this->extend('Views/layout/main') ?>

<?= $this->section('title') ?>
Dashboard
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="page">
    <header class="ribbon">
        <h2>
            Tables
        </h2>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Tables</li>
        </ol>
    </header>
    <div class="page-content">
        <div class="container-fluid">


            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Data Table</h2>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table datatable" id="empleados">
                            <thead>
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Nombre
                                    </th>
                                    <th>
                                        DNI
                                    </th>
                                    <th>
                                        FECHA NACIMIENTO
                                    </th>
                                    <th>
                                        Departamento
                                    </th>
                                    <th>
                                        ACCIONES
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
        var seguir = verifyTable("empleados");

        if (seguir) {

            $('#empleados').dataTable({

                "ajax": "<?= base_url() ?>/Empleado/getListEmpleados/",
                "type": "GET",
                order: [
                    [1, 'asc']
                ],
                "columns": [{
                        "data": "id_empleado"
                    },
                    {
                        "data": "fullName"
                    },
                    {
                        "data": "dni"
                    },
                    {
                        "data": "fecha_nacimiento"
                    },
                    {
                        "data": "depart"
                    },
                    {
                        "data": "id_empleado",
                        render: function(data) {
                            var btns = "";
                            btns += "<a href='<?php echo base_url() ?>/Empleado/modificarEmpleado/"+data+"' class='<?= btn_editar_class ?>' style='margin-right: 10px' ><?= btn_editar ?></a>";
                            btns += "<button class='<?= btn_elimnar_class ?>' value='" + data + "' onclick='trash(" + data + ")' class='btn btn-info'><?= btn_elimnar ?></button>"
                            return btns
                        }
                    },
                ],
            });
        }
    }

    function trash(id) {

        $.ajax({
            url: "<?php echo base_url() ?>/Empleado/delete_Empleado",
            type: 'POST',
            data: {
                id: id
            },
            success: function(data) {

                $('#empleados').DataTable().ajax.reload();
            }
        });
    }
</script>
<?= $this->endSection() ?>