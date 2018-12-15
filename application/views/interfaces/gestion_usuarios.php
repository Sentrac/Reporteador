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
    <title>Reporteador</title>
    <!-- Bootstrap Core CSS -->
    <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="../../assets/plugins/css-chart/css-chart.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="../../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../assets/css/style.css" rel="stylesheet">
    <link href="../../assets/css/style2.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="../../assets/css/colors/red.css" id="theme" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="../../assets/icons/material-design-iconic-font/css/materialdesignicons.min.css">
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
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../../assets/images/logo-principal-mini.png" width="33px" height="33px" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../../assets/images/logo-principal-mini.png" width="33px" height="33px" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                            <!-- dark Logo text -->
                            <img src="../../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->
                            <font class="h1title">Reporteador</font>
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
                                aria-haspopup="true" aria-expanded="false"><img src="../../assets/images/users/user.png" alt="user"
                                    class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                        <center><div class="u-img"><img src="../../assets/images/users/user.png" alt="user"></div></center>
                                        <center><div class="u-text">
                                            <br/>
                                            <?php foreach($posts as $post){?>
                                                <h4><?php echo $post->nombre;?> <?php echo $post->apellidos;?></h4>
                                                <p class="text-muted"><?php echo $post->email;?></p>
                                            <?php } ?>
                                            </div></center>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?= base_url() ?>Superusuario/perfil"><i class="ti-user"></i> Mi Perfil</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?= base_url() ?>Superusuario/vistaPassword"><i class="ti-settings"></i> Cuenta</a></li>
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
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile" style="background: url(../../assets/images/users/user-info.jpg) no-repeat;">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="../../assets/images/users/user.png" alt="user" /> </div>
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
                        <li class="nav-small-cap">Menú</li>
                        <li><i class="fas fa-address-book"></i></li>
                        <li><i class="fas fa-address-book"></i></li>
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Superusuario/index"><i class="mdi mdi-home"></i><span class="hide-menu">Inicio</span></a></li>
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Superusuario/usuarios"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Usuarios</span></a></li>
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Superusuario/grupo"><i class="mdi mdi-laptop"></i><span class="hide-menu">Grupo</span></a></li>
                        <!--<li><a class="waves-effect waves-dark" href="#"><i class="mdi mdi-file-chart"></i><span class="hide-menu">Reportes</span></a></li>-->
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Settings"><i class="mdi mdi-settings"></i></a>
                <!-- item--><a href="" class="link clikem" data-toggle="tooltip"></a>
                <!-- item--><a href="<?= base_url() ?>Login/logout" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
            </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->

                <div class="Row">
                  <div class="col-lg-12">
                    <div class="card card-outline-inverse">
                      <div class="card-header">
                        <h4 class="m-b-0 text-white"></h4>
                      </div>
                      <div class="card-body">
                      <?php echo form_open("SuperUsuario/actualizarUsuario"); ?> 
                          <div class="form-body">
                            <h4 class="card-title text-muted text-center">Editar Usuario</h4>
                            <hr>
                            <?php   if(isset($mostrardatosUsuario)){?>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Nombre</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" value="<?php echo $mostrardatosUsuario[0]->nombre;?>">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Apellidos</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" value="<?php echo $mostrardatosUsuario[0]->apellidos;?>">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Correo</label>
                              <div class="col-md-9">
                                <input type="email" class="form-control" value="<?php echo $mostrardatosUsuario[0]->email;?>">
                                <small class="form-control-feedback"> </small>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Grupo</label>
                              <div class="col-md-9">
                                <select class="form-control custom-select">
                                  <option value="<?php echo $mostrardatosUsuario[0]->fk_grupou; ?>"><?php echo $mostrardatosUsuario[0]->fk_grupou;?></option>
                                </select>
                              </div>
                            </div>                                
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Rol</label>
                              <div class="col-md-9">
                              
                                <select class="form-control custom-select">
                                <?php
                                $tu = $mostrardatosUsuario[0]->tipo_usuario;
                                if ($tu == 'SU'){
                                ?>
                                    <option value="SU">Super Administrador</option>
                                    <option value="AD">Administrador</option>
                                    <option value="CO">Consultor</option>
                                <?php
                                } else if ($tu == 'CO'){
                                ?>
                                    <option value="CO">Consultor</option>
                                    <option value="SU">Super Administrador</option>
                                    <option value="AD">Administrador</option>
                              <?php
                                } else if ($tu == 'AD'){
                                ?>
                                    <option value="AD">Administrador</option>
                                    <option value="CO">Consultor</option>
                                    <option value="SU">Super Administrador</option>
                                <?php
                                }
                              ?>  
                                  <!--<option value="<?php //echo $mostrardatosUsuario[0]->tipo_usuario;?>"><?php //echo $mostrardatosUsuario[0]->tipo_usuario;?></option>
                                  <option value="SU">Super Administrador</option>
                                  <option value="AD">Administrador</option>
                                  <option value="CO">Consultor</option>-->
                                </select>
                              </div>
                            </div>
                            <?php } ?>
                            <div class="form-actions">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="row">
                                  <div class="offset-sm-4 col-md-8">
                                    <button class="btn btn-success"> <i class="mdi mdi-content-save"></i> Guardar</button>
                                    <a href="<?= base_url() ?>Superusuario/usuarios">
                                        <input type="button" class="btn btn-danger" value="Cancelar"></input>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          </div>  
                        <?php echo form_close(); ?>                       
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2018 Reporteador by WarrioPracticantes</footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <script src="../../assets/plugins/jquery/jquery.min.js"></script>
    <script src="../../assets/plugins/popper/popper.min.js"></script>
    <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="../../assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="../../assets/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <!--<script src="assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>-->
    <!--c3 JavaScript -->
    <script src="../../assets/plugins/d3/d3.min.js"></script>
    <script src="../../assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <!--<script src="js/dashboard1.js"></script>-->
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
   