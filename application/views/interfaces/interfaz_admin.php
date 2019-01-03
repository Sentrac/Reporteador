<?php
    $name = $this->session->userdata('tipo_usuario');
    if($name=='AD'){
    }
    else{
        redirect(base_url());
    }
?>
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
                    <input type="hidden" value="<?php echo $posts[0]->fk_grupou?>">
                       <a class="u-dropdown clikem"><?php echo $post->nombre;?> <?php echo $post->apellidos;?></a>
                    </div>
                    <?php } ?>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">Menú</li>
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Roles/admin"><i class="mdi mdi-home"></i><span class="hide-menu">Inicio</span></a></li>
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Usuarios/usuarios?fk_grupou=<?php echo $posts[0]->fk_grupou; ?>"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Usuarios</span></a></li>
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Equipos/equipo?fk_grupou=<?php echo $posts[0]->fk_grupou; ?>"><i class="mdi mdi-laptop"></i><span class="hide-menu">Equipos</span></a></li>
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