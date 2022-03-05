<?= $this->extend('Views/layout/main') ?>

<?= $this->section('title') ?>
Proyectos
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="page">
        <header class="ribbon">
            <h2>
                Proyectos
            </h2>
            <ol class="breadcrumb">
              <li><a href="#">Proyectos</a></li>
              <li class="active">Nuevo proyecto</li>
            </ol>
        </header>
    <div class="page-content">
        <div class="container-fluid">
        <div class="row">
            <div>
                <div class="panel">
                    <div class="panel-heading">
                        <h2>Nuevo Proyecto</h2>
                        </div>
                        <div class="panel-body">
                            <form class="mdform">
                              <div class="form-group md-form-group">
                                <label for="form1-email">Id Proyecto</label>
                                <input type="text" class="form-control" id="form1-email">
                              </div>
                              <div class="mdform">
                              <div class="form-group md-form-group">
                                <label >Nombre Proyecto</label>
                                <input type="text" class="form-control" id="form1-pass">
                              </div>
                              <div class="mdform">
                                      <div class="form-group md-form-group">
                                        <label for="form1-fname">Descripcion</label>
                                        <input type="text" class="form-control" id="form1-fname">
                                      </div>
                                </div>
                               </div>
                               <div class="row">
                                  <div class="col-md-6">
                                      <div>
                                        <label for="form1-fname">Inicio proyecto</label>
                                        <input type="date" class="form-control" id="form1-fname">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div>
                                        <label for="form1-lname">Fin proyecto</label>
                                        <input type="date" class="form-control" id="form1-lname">
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