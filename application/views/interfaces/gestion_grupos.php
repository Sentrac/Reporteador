        
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
                    <?php if(isset($posts)){
                            foreach($posts as $post){?>
                    <div class="profile-text">
                        <a class="u-dropdown clikem"><?php echo $post->nombre;?> <?php echo $post->apellidos;?></a>
                    </div>
                    <?php }
                    }?>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">Menú</li>
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Roles/superusuario"><i class="mdi mdi-home"></i><span class="hide-menu">Inicio</span></a></li>
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Usuarios/usuarios"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Usuarios</span></a></li>
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Grupo/grupo"><i class="mdi mdi-laptop"></i><span class="hide-menu">Grupo</span></a></li>
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
        </aside><!--========================================================= -->
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
                        <h4 class="m-b-0 text-white">Editar Grupo</h4>
                      </div>
                      <div class="card-body">
                      <?php echo form_open("Grupo/actualizarGrupo"); ?> 
                          <div class="form-body">
                            <hr>
                            <?php if (isset($mostrardatosgrupo)){
                                    ?>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Nombre</label>
                              <div class="col-md-9">
                                  <input type="hidden" value="<?php echo $mostrardatosgrupo[0]->idgrupo?>" name="idgrupo">
                              <input type="hidden" class="form-control" name="idusuarios" value="">
                                <input type="text" style="text-transform: uppercase;" class="form-control" name="nombre" value="<?php echo $mostrardatosgrupo[0]->nombre; ?>">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Alias</label>
                              <div class="col-md-9">
                                <input type="text" style="text-transform: uppercase;" class="form-control" name="alias" value="<?php echo $mostrardatosgrupo[0]->alias; ?>">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">rfc</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" name="rfc" value="<?php echo $mostrardatosgrupo[0]->rfc; ?>">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Descripción</label>
                              <div class="col-md-9">
                                <textarea rows="5" placeholder="Descripción" class="form-control" style="text-transform: uppercase;" name="descripcion" ><?php echo $mostrardatosgrupo[0]->descripcion; ?></textarea>
                              </div>
                            </div>    
                            <?php } ?>
                            <div class="form-actions">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="row">
                                  <div class="offset-sm-4 col-md-8">
                                    <button class="btn btn-success"> <i class="mdi mdi-content-save"></i> Guardar</button>
                                    <a href="<?= base_url() ?>Grupo/grupo">
                                      <button type="button" class="btn btn-danger"> <i class="mdi mdi-close-circle"></i> Cancelar</button>
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