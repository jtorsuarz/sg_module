<div class="sidebar sidebar-left sidebar-dark sidebar-fixed sidebar-navbar-theme" id="sidebar">


    <div class="sidebar-scrollable-content">


        <div class="sidebar-body">


            <div class="sidebar-cover">
                <a class="sidebar-user" data-toggle="collapse" href="#sidebar-highlight" aria-expanded="false" aria-controls="sidebar-highlight">

                    <div class="sidebar-user-img">
                        <img src="https://media-exp1.licdn.com/dms/image/C4E03AQFup-RDJ8fzXg/profile-displayphoto-shrink_200_200/0/1638466861416?e=1651708800&v=beta&t=OWOsjwHsnb8wchKDBUeI07xQLvna6CvcGlkYCNsG-34" alt="" class="img-circle img-online img-thumbnailimg-thumbnail-primary">
                    </div>
                    <div class="sidebar-user-name">
                    <?php echo $_SESSION['username'] ?>
                        <!-- Rubén García -->
                        <span class="sidebar-user-expand"><i class="fa fa-caret-down"></i></span>
                        <span class="text-small sidebar-user-email">
                            <?= session('user_email') ?>
                        </span>
                    </div>
                </a>
                <div class="sidebar-highlight collapse" id="sidebar-highlight">

                    <ul class="main-nav">
                        <li>
                            <a href="<?php echo base_url(); ?>/<?= session()->user_id ?>"><i class="mdi mdi-account-convert"></i> Perfil</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(route_to('Logout')) ?>"><i class="mdi mdi-logout"></i> Logout</a>
                        </li>
                    </ul>

                </div>
            </div>


            <div class="main-menu-container">

                <ul class="main-nav" id="main-nav">


                    <li>
                        <a href="<?php echo base_url(); ?>">


                            <i class="mdi mdi-cube"></i><span class="title">Home</span>

                        </a>
                    </li><!-- End Item 1 HOME -->

                    <li>
                        <a href="" class="has-arrow">
                            <span class="menu-caret"></span>
                            <i class="mdi mdi-account-multiple"></i>
                            <span class="title">Empleados</span>
                        </a>
                        <ul>
                            <li>
                                <a href="<?php echo base_url() ?>/Empleado/nuevoEmpleadoView"><span class="title">Nuevo empleado</span></a>
                            </li>
                        </ul>
                    </li><!-- End Item 2 Empleados -->

                    <li>
                        <a href="" class="has-arrow">
                            <span class="menu-caret"></span>
                            <i class="mdi mdi-briefcase"></i><span class="title">

                                Departamento

                            </span>
                        </a>
                        <ul class="">
                            <li>
                                <a href="<?php echo base_url() ?>/Departamento/index"><span class="title">Ver departamentos</span></a>
                            </li>
                        </ul>
                        <ul class="">
                            <li>
                                <a href="<?php echo base_url() ?>/Departamento/nuevoDepartamento"><span class="title">Nuevo departamento</span></a>
                            </li>
                        </ul>
                    </li><!-- End Item 3 DEPARTAMENTOS  -->

                    <li>
                        <a href="" class="has-arrow">
                            <span class="menu-caret"></span>
                            <i class="mdi mdi-earth"></i><span class="title">

                                Proyectos

                            </span>
                        </a>
                        <ul class="">
                            <li>
                                <a href="<?php echo base_url() ?>/Proyecto/index"><span class="title">Ver Proyectos</span></a>
                            </li>
                        </ul>
                        <ul class="">
                            <li>
                                <a href="<?php echo base_url() ?>/Proyecto/nuevoProyectoView"><span class="title">Nuevo Proyectos</span></a>
                            </li>
                        </ul>
                    </li><!-- End Item 4 Proyectos  -->

                    <li>
                        <a href="" class="has-arrow">
                            <span class="menu-caret"></span>
                            <i class="mdi mdi-table-edit"></i><span class="title">Vacaciones</span>
                        </a>
                        <ul>
                            <!-- <li>
                                <a href="<?php echo base_url() ?>"><span class="title">Gestion vacaciones</span></a>
                            </li> -->
                            <li>
                                <a href="<?php echo base_url() ?>/Empleado/CalendarioView"><span class="title">Calendario</span></a>
                            </li>
                        </ul>
                    </li><!-- End Item 5 VACACIONES  -->

                    <li>
                        <a href="" class="has-arrow">
                            <span class="menu-caret"></span>
                            <i class="mdi mdi-file-document"></i><span class="title">Documentos</span>
                        </a>
                        <ul>
                            <li>
                                <a role="button" type="submit" href="<?php echo base_url() ?>/Empleado/pdfNominaView"><span class="title">Nómina</span></a>
                            </li>
                        </ul>
                    </li><!-- End Item 6 DOCUMENTOS  -->

                    <li>
                        <a href="" class="has-arrow">
                            <span class="menu-caret"></span>
                            <i class="mdi mdi-settings"></i><span class="title">Configuracion</span>
                        </a>
                        <ul>
                            <!-- <li>
                                <a href="<?php echo base_url() ?>"><span class="title">
                                    </span></a>
                            </li> -->

                            <li>
                                <a href="<?php echo base_url() ?>"><span class="title">Roles / Permisos</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>/Empleado/CambiarPassUsuarioView"><span class="title">Cambiar contraseña</span></a>
                            </li>

                        </ul>
                    </li><!-- End Item 7 CONFIGURACION  -->

                </ul>
            </div>
            <!-- /.main-menu-container -->
        </div>
        <!-- /.sidebar-body -->
    </div>
    <!-- /.sidebar-scrollable-content -->

    <div class="sidebar-footer">
        <div class="horizontal-nav">
            <ul class="horizontal-nav horizontal-nav-1">
                <li>
                    <a href="<?php echo base_url() ?>"><i class="mdi mdi-logout"></i></a>
                </li>
            </ul>
        </div>
    </div>


</div>