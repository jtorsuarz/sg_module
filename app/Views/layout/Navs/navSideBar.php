<div class="sidebar sidebar-left sidebar-dark sidebar-fixed sidebar-navbar-theme" id="sidebar">


    <div class="sidebar-scrollable-content">


        <div class="sidebar-body">


            <div class="sidebar-cover">
                <a class="sidebar-user" data-toggle="collapse" href="#sidebar-highlight" aria-expanded="false" aria-controls="sidebar-highlight">

                    <div class="sidebar-user-img">
                        <img src="http://via.placeholder.com/500x500" alt="" class="img-circle img-online img-thumbnailimg-thumbnail-primary">
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
                            <a href="<?php echo base_url(route_to("Editar-Persona")); ?>/<?=session()->user_id?>" ><i class="mdi mdi-account-convert"></i> Perfil</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(route_to('Logout')) ?>"><i class="mdi mdi-logout"></i> Logout</a>
                        </li>
                    </ul>

                </div>
            </div>


            <div class="main-menu-container">

                <ul class="main-nav" id="main-nav">

                    <?php if (session('user_permiso_modules')->dashboard == 1) : ?>

                        <li>
                            <a href="<?php echo base_url(route_to('dashboard')); ?>">

                                <i class="mdi mdi-cube"></i><span class="title">Dashboard</span>

                            </a>
                        </li><!-- End Item 1 DASHBOARD -->

                    <?php endif; ?>

                    <?php if (session('user_permiso_modules')->cuestionarios == 1) : ?>

                        <li>
                            <a href="" class="has-arrow">
                                <span class="menu-caret"></span>
                                <i class="mdi mdi-table-edit"></i><span class="title">Cuestionarios</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url(route_to('gestionCuestionario')) ?>"><span class="title">Gestion</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(route_to('reposCuestionarios')) ?>"><span class="title">Repositorios / Plantillas</span></a>
                                </li>
                            </ul>
                        </li><!-- End Item 2 CUESTIONARIOS  -->

                    <?php endif; ?>

                    <?php if (session('user_permiso_modules')->metodos == 1) : ?>

                        <li>
                            <a href="" class="has-arrow">
                                <span class="menu-caret"></span>
                                <i class="mdi mdi-auto-fix"></i><span class="title">Metodos</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url(route_to('gestionMetodos')) ?>"><span class="title">Gestion</span></a>
                                </li>
                            </ul>
                        </li><!-- End Item 3 METODOS  -->

                    <?php endif; ?>

                    <?php if (session('user_permiso_modules')->personas == 1) : ?>

                        <li>
                            <a href="" class="has-arrow">
                                <span class="menu-caret"></span>
                                <i class="mdi mdi-account-multiple"></i>
                                <span class="title">Personas</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url(route_to('gestionPersonas')) ?>"><span class="title">Gestion</span></a>
                                </li>
                            </ul>
                        </li><!-- End Item 4 PERSONAS - TRABAJADORES  -->

                    <?php endif; ?>

                    <?php if (session('user_permiso_modules')->empresa == 1) : ?>

                        <li>
                            <a href="" class="has-arrow">
                                <span class="menu-caret"></span>
                                <i class="mdi mdi-briefcase"></i><span class="title">

                                    <?php echo title_Empresas ?>

                                </span>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="<?php echo base_url(route_to('gestionEmpresa')) ?>"><span class="title">Gestion</span></a>
                                </li>
                            </ul>
                        </li><!-- End Item 5 EMPRESAS  -->

                    <?php endif; ?>

                    <?php if (session('user_permiso_modules')->estudio == 1) : ?>

                        <li>
                            <a href="" class="has-arrow">
                                <span class="menu-caret"></span>
                                <i class="mdi mdi-presentation"></i><span class="title">Estudios</span>
                            </a>
                            <ul class="">
                                <li>
                                    <a href="<?php echo base_url(route_to('gestionEstudios')) ?>"><span class="title">Gestion</span></a>
                                </li>
                            </ul>
                        </li><!-- End Item 6 ESTUDIOS  -->

                    <?php endif; ?>

                    <?php if (session('user_permiso_modules')->biblioteca == 1) : ?>

                        <li>
                            <a href="" class="has-arrow">
                                <span class="menu-caret"></span>
                                <i class="mdi mdi-file-document"></i><span class="title">Biblioteca</span>
                            </a>
                            <ul>
                                <li>
                                    <a role="button" type="submit" href="<?php echo base_url(route_to('videos')) ?>"><span class="title">Videos</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(route_to('documentacion')) ?>"><span class="title">Documentacion</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(route_to('manuales')) ?>"><span class="title">Manuales</span></a>
                                </li>
                            </ul>
                        </li><!-- End Item 7 BIBLIOTECA  -->

                    <?php endif ?>


                    <?php if (session('user_permiso_modules')->estudio == 1) : ?>
                    <li>
                        <a href="" class="has-arrow">
                            <span class="menu-caret"></span>
                            <i class="mdi mdi-settings"></i><span class="title">Configuracion</span>
                        </a>
                        <ul>
                            <!-- <li>
                                <a href="<?php echo base_url(route_to('Config-Empresa')) ?>"><span class="title">
                                        <?php echo title_Empresa ?>
                                    </span></a>
                            </li> -->

                            <li>
                                <a href="<?php echo base_url(route_to('Config-Roles')) ?>"><span class="title">Roles / Permisos</span></a>
                            </li>


                                <li>
                                    <a href="<?php echo base_url(route_to('Config-Types')) ?>" class="has-arrow">
                                        <span class="title">Estudio / Cuestionarios</span>
                                    </a>
                                </li><!-- End Item 6 ESTUDIOS  -->

                             <li>
                                <a href="<?php echo base_url(route_to('Config-preguntas'))?>">
                                <span class="title">Preguntas</span>
                            </a>
                            </li>

                        </ul>
                    </li><!-- End Item 8 CONFIGURACION  -->
                    <?php endif; ?>

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