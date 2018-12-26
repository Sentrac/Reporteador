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
                <?php if($this->session->flashdata('registro')){?>
                    <div  class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo $this->session->flashdata('registro'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div> 
                <?php } ?>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card card-outline-inverse">
                      <div class="card-header">
                      <?php   if(isset($grupo_equipos)){?>
                        <h4 class="float-left m-b-0 text-white"><i class="mdi mdi-laptop"></i> Equipos de <?php echo $grupo_equipos[0]->nombre;?></h4>
                      <?php }?>
                        <a class="float-right btn btn-sm btn-rounded btn-success txt-blanco" data-toggle="modal" data-target="#myModal"><i class="mdi mdi-plus"></i> Agregar equipo</a>
                      </div>
                      <div class="card-body">
                        <h6>Equipos agregados para este grupo</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-6">
                    <!-- Card -->
                    <div class="card text-center">
                      <img class="card-img-top img-responsive" src="assets/images/big/mac.png" alt="Card image cap">
                      <div class="card-body">
                        <h4 class="card-title"></h4>
                        <p></p>
                      </div>
                    </div>
                    <!-- Card -->
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