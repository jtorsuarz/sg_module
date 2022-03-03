<?= $this->extend('Views/layout/mainSimple') ?>

<?= $this->section('title') ?>
Dashboard
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="page full-width">

    <div class="page-content">
        <div class="container-fluid">
            <div class="fullpage-form-container">
                <div class="panel panel-primary panel-form">
                    <div class="panel-heading" style="padding-top:2.5em; padding-bottom:2.5em">
                        <h2 class="align-center bold" style="font-weight:400">Emphasize Admin</h2>
                    </div>
                    <!-- /.panel-cover -->

                    <div class="panel-body">
                        <h4 class="align-center form-heading">Login to Continue</h4>
                        <form  method="post" action="<?php echo base_url(route_to('Signin')) ?>">
                            <div class="form-group md-form-group">
                                <label for="form1-email">Usuario</label>
                                <input type="text" class="form-control" name="usuario">
                            </div>
                            <div class="form-group md-form-group">
                                <label for="form1-pass">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">LOGIN</button>
                        </form>
                    </div>

                </div>
                <!-- /.panel-primary panel -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.page-content -->
</div>
<!-- /.page -->

<?= $this->endSection() ?>