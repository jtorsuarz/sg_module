<div class="sidebar sidebar-left sidebar-dark sidebar-fixed sidebar-navbar-theme" id="sidebar">


    <div class="sidebar-scrollable-content">


        <div class="sidebar-body">


            <div class="sidebar-cover">
                <a class="sidebar-user" data-toggle="collapse" href="#sidebar-highlight" aria-expanded="false" aria-controls="sidebar-highlight">

                    <div class="sidebar-user-img">
                        <img src="https://media-exp1.licdn.com/dms/image/C4E03AQFup-RDJ8fzXg/profile-displayphoto-shrink_200_200/0/1638466861416?e=1651708800&v=beta&t=OWOsjwHsnb8wchKDBUeI07xQLvna6CvcGlkYCNsG-34" alt="" class="img-circle img-online img-thumbnailimg-thumbnail-primary">
                    </div>
                    <div class="sidebar-user-name">
                        <?= session('user_name') ?>
                        <span class="sidebar-user-expand"><i class="fa fa-caret-down"></i></span>
                        <span class="text-small sidebar-user-email">
                            <?= session('user_email') ?>

                        </span>
                    </div>

                </a>
                <div class="sidebar-highlight collapse" id="sidebar-highlight">

                    <ul class="main-nav">
                        <li>
                            <a href="<?php echo base_url(route_to("Editar-Persona")); ?>/<?= session()->user_id ?>"><i class="mdi mdi-account-convert"></i> Perfil</a>
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
                        <a href="<?php echo base_url(route_to('dashboard')); ?>">

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
                                <a href="<?php echo base_url(route_to('gestionPersonas')) ?>"><span class="title">Nuevo empleado</span></a>
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
                                <a href="<?php echo base_url(route_to('gestionEmpresa')) ?>"><span class="title">Ver departamentos</span></a>
                            </li>
                        </ul>
                        <ul class="">
                            <li>
                                <a href="<?php echo base_url(route_to('gestionEmpresa')) ?>"><span class="title">Nuevo departamento</span></a>
                            </li>
                        </ul>
                    </li><!-- End Item 3 DEPARTAMENTOS  -->

                    <li>
                        <a href="" class="has-arrow">
                            <span class="menu-caret"></span>
                            <i class="mdi mdi-table-edit"></i><span class="title">Vacaciones</span>
                        </a>
                        <ul>
                            <li>
                                <a href="<?php echo base_url(route_to('gestionCuestionario')) ?>"><span class="title">Gestion vacaciones</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(route_to('reposCuestionarios')) ?>"><span class="title">Calendario</span></a>
                            </li>
                        </ul>
                    </li><!-- End Item 4 VACACIONES  -->

                    <li>
                        <a href="" class="has-arrow">
                            <span class="menu-caret"></span>
                            <i class="mdi mdi-file-document"></i><span class="title">Documentos</span>
                        </a>
                        <ul>
                            <li>
                                <a role="button" type="submit" href="<?php echo base_url(route_to('videos')) ?>"><span class="title">Nómina</span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(route_to('documentacion')) ?>"><span class="title">Vacaciones</span></a>
                            </li>
                        </ul>
                    </li><!-- End Item 5 DOCUMENTOS  -->

                    <li>
                        <a href="" class="has-arrow">
                            <span class="menu-caret"></span>
                            <i class="mdi mdi-settings"></i><span class="title">Configuracion</span>
                        </a>
                        <ul>
                            <!-- <li>
                                <a href="<?php echo base_url(route_to('Config-Empresa')) ?>"><span class="title">
                                    </span></a>
                            </li> -->

                            <li>
                                <a href="<?php echo base_url(route_to('Config-Roles')) ?>"><span class="title">Roles / Permisos</span></a>
                            </li>

                        </ul>
                    </li><!-- End Item 6 CONFIGURACION  -->

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
                    <a href="<?php echo base_url(route_to('Logout')) ?>"><i class="mdi mdi-logout"></i></a>
                </li>
            </ul>
        </div>
    </div>


</div>