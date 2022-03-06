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
                                        <label for="form1-fname">ID Proyecto</label>
                                        <input type="text" class="form-control" id="id_proyecto">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" id="nombre_proyecto">
                                    </div>

                                </div>
                                <br>

                                <div class="form-group md-form-group">
                                    <label for="form1-fname">Responsable departamento</label>
                                    <select type="text" class="form-control" id="id_departamento">
                                        <option value="0"></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label style = "margin-bottom: 15px" for="form1">Descripcion</label>
                                    <textarea style = "height: 50px" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <!-- /.row -->
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection() ?>