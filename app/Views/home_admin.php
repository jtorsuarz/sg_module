<?= $this->extend('Views/layout/main') ?>

<?= $this->section('title') ?>
Dashboard
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="page">
    <header class="ribbon">
        <h2>
            Empleados
        </h2>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Empleados</li>
        </ol>
    </header>
    <div class="page-content">
        <div class="container-fluid">


            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Tabla de empleados</h2>
                </div>
                
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>
                                        StarShip
                                    </th>
                                    <th>
                                        Captain
                                    </th>
                                    <th>
                                        First Officer
                                    </th>
                                    <th>
                                        Crew Size
                                    </th>
                                    <th>

                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        USS Enterprise
                                    </td>
                                    <td>
                                        James T. Kirk
                                    </td>
                                    <td>
                                        Ambassador Spock
                                    </td>
                                    <td>
                                        10
                                    </td>
                                    <td>
                                        <button class="btn btn-link ">Assign Mission</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        USS Lakota
                                    </td>
                                    <td>
                                        Erika Benteen
                                    </td>
                                    <td>
                                        Elizabeth Braswell
                                    </td>
                                    <td>
                                        10
                                    </td>
                                    <td>
                                        <button class="btn btn-link ">Assign Mission</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        USS Bozeman
                                    </td>
                                    <td>
                                        Morgan Batesan
                                    </td>
                                    <td>
                                        W. Bligh
                                    </td>
                                    <td>
                                        10
                                    </td>
                                    <td>
                                        <button class="btn btn-link ">Assign Mission</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        USS Endeavour
                                    </td>
                                    <td>
                                        Amasov
                                    </td>
                                    <td>
                                        David Carson
                                    </td>
                                    <td>
                                        10
                                    </td>
                                    <td>
                                        <button class="btn btn-link ">Assign Mission</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        USS Heart of Gold
                                    </td>
                                    <td>
                                        Douglas Adam
                                    </td>
                                    <td>
                                        Chandra
                                    </td>
                                    <td>
                                        10
                                    </td>
                                    <td>
                                        <button class="btn btn-link ">Assign Mission</button>
                                    </td>
                                </tr>

                            </tbody>
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
</script>
<?= $this->endSection() ?>