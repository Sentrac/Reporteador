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

                <div class="row">
                  <div class="col-lg-12">
                    <div class="card card-outline-inverse">
                      <div class="card-header">
                        <h4 class="float-left m-b-0 text-white"><i class="mdi mdi-account-multiple"></i> Usuarios</h4>
                        <a href="<?= base_url() ?>Superusuario/registrar_usuarios" class="float-right btn btn-sm btn-rounded btn-success txt-blanco" data-target="#myModal"><i class="mdi mdi-plus"></i> Agregar usuario</a>
                      </div>
                      <div class="card-body">
                      <div class="table-responsive">
                        <table class="table color-bordered-table dark-bordered-table full-color-table full-dark-table hover-table">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Nombre</th>
                              <th>Usuario/Correo</th>
                              <th>Grupo</th>
                              <th>Rol</th>
                              <th>Acción</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php foreach ($usuarios as $row){ ?>                              
                            <tr>
                              <td><?php echo $row->idusuarios; ?></td>
                              <td><?php echo $row->nombre; ?> <?php echo $row->apellidos; ?></td>
                              <td><?php echo $row->email; ?></td>
                              <td>
                                  <?php echo $row->grupo; ?>
                              </td>
                              <td>
                              <?php if($row->tipo_usuario=='SU'){
                                        $su='Super Administrador';
                                ?>
                                    <span class="label label-info"><?php  echo $su; ?>
                                <?php } 
                                    if($row->tipo_usuario=='AD'){
                                        $ad='administrador';
                                ?>
                                    <span class="label label-primary"><?php  echo $ad; ?>
                                <?php }
                                    if($row->tipo_usuario=='CO'){
                                        $co='Consultor';?>
                                    <span class="label label-megna"><?php  echo $co; ?>
                                   <?php } ?>
                                  </span> 
                              </td>                                   
                              <td class="footable-editing footable-last-visible" style="display: table-cell;">
                                <div class="btn-group btn-group-xs" role="group">
                                    <a href="<?= base_url() ?>Superusuario/editarUsuario/?idusuario=<?php echo $row->idusuarios; ?>">
                                        <button type="button" class="btn btn-secondary txt-azul" title="Editar">
                                          <span class="mdi mdi-lead-pencil" aria-hidden="true"></span>
                                        </button>
                                    </a>
                                  <button type="button" class="btn btn-secondary txt-rojo" title="Eliminar">
                                    <span class="mdi mdi-delete" aria-hidden="true"></span>
                                  </button>
                                </div>
                              </td>
                            </tr>
                                  <?php } ?>
                          </tbody>
                        </table>
                      </div>
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
    </div>
   
</body>

</html>
