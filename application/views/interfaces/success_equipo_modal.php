
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
                        <?php if($this->session->userdata('tipo_usuario')=='SU'){ ?>
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Roles/superusuario"><i class="mdi mdi-home"></i><span class="hide-menu">Inicio</span></a></li>
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Usuarios/usuarios"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Usuarios</span></a></li>
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Grupo/grupo"><i class="mdi mdi-laptop"></i><span class="hide-menu">Grupo</span></a></li>
                        <li><a class="waves-effect waves-dark" href="#"><i class="mdi mdi-file-chart"></i><span class="hide-menu">Reportes</span></a></li>
                        <?php }elseif($this->session->userdata('tipo_usuario')=='AD'){?>
                            <?php if(isset($posts)){?>
                                <div class="profile-text">
                                <input type="hidden" value="<?php echo $posts[0]->fk_grupou?>">
                                </div>
                            <?php }?>
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Roles/admin"><i class="mdi mdi-home"></i><span class="hide-menu">Inicio</span></a></li>
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Usuarios/usuarios?fk_grupou=<?php echo $posts[0]->fk_grupou; ?>"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Usuarios</span></a></li>
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Equipos/equipo?fk_grupou=<?php echo $posts[0]->fk_grupou; ?>"><i class="mdi mdi-laptop"></i><span class="hide-menu">Equipos</span></a></li>
                        <!--<li><a class="waves-effect waves-dark" href="#"><i class="mdi mdi-file-chart"></i><span class="hide-menu">Reportes</span></a></li>-->
                        <?php } ?>
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
                <div class="error-modal" tabindex="-1" role="dialog" >
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title text-green"><i class="fas fa-check"></i> EXITO</h5>
                      </div>
                      <div class="modal-body">
                      <?php if($this->session->flashdata('registro')){?>
                        <div  class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo $this->session->flashdata('registro'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div> 
                        <?php } ?>
                      </div>
                      <div class="modal-footer">
                      <?php if(isset($posts)){?>
                            <div class="profile-text">
                                <input type="hidden" value="<?php echo $posts[0]->fk_grupou?>">
                            </div>
                      <?php } ?>
                        <a href="<?= base_url() ?>Equipos/equipo?fk_grupou=<?php echo $posts[0]->fk_grupou; ?>">
                            <button type="button" class="btn btn-secondary">Mostrar</button>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>