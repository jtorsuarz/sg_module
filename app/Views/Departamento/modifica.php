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
              <li class="active">Modificar departamento</li>
            </ol>
        </header>
    <div class="page-content">
        <div class="container-fluid">
        <div class="row">
            <div>
                <div class="panel">
                    <div class="panel-heading">
                        <h2>Modificar Departamento</h2>
                        </div>
                        <div class="panel-body">
                            <form class="mdform">
                              <div class="form-group md-form-group">
                                <label for="form1-email">Id Departamento</label>
                                <input type="text" class="form-control" id="form1-email">
                              </div>
                              <div class="mdform">
                              <div class="form-group md-form-group">
                                <label >Nombre Departamento</label>
                                <input type="text" class="form-control" id="form1-pass">
                              </div>
                              <div class="mdform">
                                      <div class="form-group md-form-group">
                                        <label for="form1-fname">Descripcion</label>
                                        <input type="text" class="form-control" id="form1-fname">
                                      </div>
                                </div>
                              </div>
                              <!-- /.row -->
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </form>


            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.page-content -->
    </div>

<?= $this->endSection() ?>