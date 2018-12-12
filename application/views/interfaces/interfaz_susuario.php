<?php
    $name = $this->session->userdata('tipo_usuario');
    if($name=='SU'){
    }
    else{
        redirect(base_url());
    }
?>
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
                            <img src="../assets/images/logo-principal-mini.png" width="33px" height="33px" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../assets/images/logo-principal-mini.png" width="33px" height="33px" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                            <!-- dark Logo text -->
                            <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
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
                                aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/user.png" alt="user"
                                    class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <center><div class="u-img"><img src="../assets/images/users/user.png" alt="user"></div></center>
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
                                    <li><a href="#"><i class="fa fa-power-off"></i> Salir</a></li>
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
                <div class="user-profile" style="background: url(../assets/images/users/user-info.jpg) no-repeat;">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="../assets/images/users/user.png" alt="user" /> </div>
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
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Superusuario/index"><i class="mdi mdi-home"></i><span class="hide-menu">Inicio</span></a></li>
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Superusuario/usuarios"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Usuarios</span></a></li>
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Superusuario/clientes"><i class="mdi mdi-laptop"></i><span class="hide-menu">Clientes</span></a></li>
                        <li><a class="waves-effect waves-dark" href="#"><i class="mdi mdi-file-chart"></i><span class="hide-menu">Reportes</span></a></li>
                        </li>
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
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                  <div class="col-md-6 col-lg-4">
                      <div class="card card-body">
                          <!-- Row -->
                          <div class="row padleft">
                              <!-- Column -->
                              <div class="round round-lg round-success align-self-center">
                                  <i class="mdi mdi-harddisk"></i>
                              </div>
                              <div class="col p-r-0 align-self-center">
                                  <h2 class="font-light m-b-0 text-center">CPU</h2>
                              </div>
                              <div class="col align-self-center padleftmin">
                                  <div data-label="20%" class="css-bar m-b-0 css-bar-cgraf css-bar-20"></div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-md-6 col-lg-4">
                      <div class="card card-body">
                          <!-- Row -->
                          <div class="row padleft">
                              <!-- Column -->
                              <div class="round round-lg round-warning align-self-center">
                                  <i class="mdi mdi-harddisk"></i>
                              </div>
                              <div class="col p-r-0 align-self-center">
                                  <h2 class="font-light m-b-0 text-center">Disco Duro</h2>
                              </div>
                              <div class="col align-self-center padleftmin">
                                  <div data-label="20%" class="css-bar m-b-0 css-bar-warning css-bar-20"></div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                      <div class="card card-body">
                          <!-- Row -->
                          <div class="row padleft">
                              <!-- Column -->
                              <div class="round round-lg round-danger align-self-center">
                                  <i class="mdi mdi-harddisk"></i>
                              </div>
                              <div class="col p-r-0 align-self-center">
                                  <h2 class="font-light m-b-0 text-center">Trafico</h2>
                                  <h6 class="font-light m-b-0 text-center">Ancho de banda</h6>
                              </div>
                              <div class="col align-self-center padleftmin">
                                  <div data-label="20%" class="css-bar m-b-0 css-bar-danger css-bar-20"></div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="embed-responsive embed-responsive-1by1">
                    <iframe class="embed-responsive-item" src="http://192.168.0.40:5601/app/kibana#/dashboard/32e1f900-d87a-11e8-9ed7-8f41f487c1dd?embed=true&_g=(refreshInterval%3A(pause%3A!t%2Cvalue%3A0)%2Ctime%3A(from%3Anow-6M%2Cmode%3Aquick%2Cto%3Anow))"></iframe>
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
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    
</body>

</html>
