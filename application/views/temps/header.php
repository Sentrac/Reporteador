<?php
    $name = $this->session->userdata('tipo_usuario');
    if($name==null){
        redirect(base_url());
    }
?>
<!DOCTYPE html>
<html lang="es_MX">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Reporteador">
    <meta name="author" content="WarrioPracticantes">
    <!-- Favicon icon -->
    <link rel="icon" type="image/ico" sizes="16x16" href="../assets/images/favicon.ico">
    <title>WReporter</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/plugins/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../assets/plugins/datatables/media/css/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- chartist CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="../assets/plugins/css-chart/css-chart.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.33.1/dist/sweetalert2.all.min.js"></script>
    <!--<link href="../assets/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>-->
    <!--This page css - Morris CSS -->
    <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style2.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="../assets/css/colors/red.css" id="theme" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="../assets/icons/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/plugins/sweetalert2/sweetalert2.min.css">
    <!--<link rel="stylesheet" href="http://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css">-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and mfile:///home/sentrack/Documentos/edia queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <?php if($this->session->userdata('tipo_usuario')=='SU'){?>
                        <a class="navbar-brand" href="<?php base_url() ?>../Roles/usru">
                    <?php }if($this->session->userdata('tipo_usuario')=='AD'){?>
                        <a class="navbar-brand" href="<?php base_url() ?>../Roles/usrd ">
                    <?php } if($this->session->userdata('tipo_usuario')=='CO'){?>
                        <a class="navbar-brand"href="<?php base_url() ?>../Roles/usro">
                    <?php } ?>
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Light Logo icon -->
                        </b>
                        <!--End Logo icon -->
                        <span>
                            <!-- Light Logo text -->
                            <img src="../assets/images/wreporter-logo.png" height="65px" class="light-logo" alt="homepage" />
                        </span>
                      
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark"
                                href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark"
                                href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><img src="../assets/images/usuario.png" alt="user"
                                    class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                        <center><div class="u-img"><img src="../assets/images/usuario.png" alt="user"></div></center>
                                        <center><div class="u-text">
                                            <br/>
                                            <?php foreach($posts as $post){?>
                                                <h4><?php echo $post->nombre;?> <?php echo $post->apellidos;?></h4>
                                                <p class="text-muted"><?php echo $post->usuario;?></p>
                                            <?php } ?>
                                            </div></center>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?= base_url() ?>Login/perfil"><i class="ti-user"></i> Mi Perfil</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?= base_url() ?>Login/vistaPassword"><i class="ti-settings"></i> Cuenta</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?= base_url() ?>Login/logout"><i class="fa fa-power-off"></i> Salir</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
 <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile" style="background: url(../assets/images/reporteador2.png) no-repeat;">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="../assets/images/usuario.png" alt="user" /> </div>
                    <!-- User profile text-->
                    <?php foreach($posts as $post){?>
                    <div class="profile-text">
                        <a class="u-dropdown clikem"><?php echo $post->nombre;?> <?php echo $post->apellidos;?></a>
                    </div>
                    <?php }?>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                    <?php if($this->session->userdata('tipo_usuario')=='SU'){ ?>
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Roles/usru"><i class="mdi mdi-home"></i><span class="hide-menu">Inicio</span></a></li>
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Usuarios/usuarios"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Usuarios</span></a></li>
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Grupo/grupo"><i class="mdi mdi-laptop"></i><span class="hide-menu">Grupo</span></a></li>
                        <li class="sidebar-item ng-star-inserted">
                            <a class="sidebar-link waves-effect waves-dark has-arrow ng-star-inserted" href="#">
                                <i class="fas fa-book"></i>
                                <span class="hide-menu">Bitacora</span>
                            </a>
                            <ul  class="collapse first-level ng-star-inserted">
                                <li class="sidebar-item ng-star-inserted active">
                                    <a class="sidebar-link ng-star-inserted router-link-active" href="<?= base_url() ?>Bitacora/usuarios">
                                        <i class="fas fa-user"></i>
                                        <span class="hide-menu">Bitacora Usuarios</span>
                                    </a>
                                </li>
                                <li class="sidebar-item ng-star-inserted active">
                                    <a class="sidebar-link ng-star-inserted router-link-active" href="<?= base_url() ?>Bitacora/grupos">
                                    <i class="fas fa-warehouse"></i>
                                        <span class="hide-menu">Bitacora Grupos</span>
                                    </a>
                                </li>
                                <li class="sidebar-item ng-star-inserted active">
                                    <a class="sidebar-link ng-star-inserted router-link-active" href="<?= base_url() ?>Bitacora/equipos">
                                        <i class="fas fa-laptop"></i>
                                        <span class="hide-menu">Bitacora Equipos</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <?php }elseif($this->session->userdata('tipo_usuario')=='AD'){?>
                            <?php if(isset($posts)){?>
                                <div class="profile-text">
                                <input type="hidden" value="<?php echo $posts[0]->fk_grupou?>">
                                </div>
                            <?php }?>
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Roles/usrd"><i class="mdi mdi-home"></i><span class="hide-menu">Inicio</span></a></li>
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Usuarios/usuarios?fk_grupou=<?php echo $posts[0]->fk_grupou; ?>"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Usuarios</span></a></li>
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Equipos/equipo?fk_grupou=<?php echo $posts[0]->fk_grupou; ?>"><i class="mdi mdi-laptop"></i><span class="hide-menu">Equipos</span></a></li>
                        <?php }elseif($this->session->userdata('tipo_usuario')=='CO'){?>
                            <?php if(isset($posts)){?>
                                <div class="profile-text">
                                <input type="hidden" value="<?php echo $posts[0]->fk_grupou?>">
                                </div>
                            <?php }?>
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Roles/usro"><i class="mdi mdi-home"></i><span class="hide-menu">Inicio</span></a></li>
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Equipos/equipo?fk_grupou=<?php echo $posts[0]->fk_grupou; ?>"><i class="mdi mdi-laptop"></i><span class="hide-menu">Equipos</span></a></li>
                        <?php } ?>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            </aside>
