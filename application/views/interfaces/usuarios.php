<?php
    $name = $this->session->userdata('tipo_usuario');
    if($name=='AD'){
    }

    elseif($name=='SU'){
    }
    else{
        redirect(base_url());
    }
    
?>      
        
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
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <?php if($this->session->userdata('tipo_usuario')=='SU'){ 
                         if($this->session->flashdata('registro')){?>
                    <div  class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo $this->session->flashdata('registro'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div> 
                <?php } 
                }?>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card card-outline-inverse">
                      <div class="card-header">
                        <h4 class="float-left m-b-0 text-white"><i class="mdi mdi-account-multiple"></i> Usuarios</h4>
                        <?php if($this->session->userdata('tipo_usuario')=='SU'){ ?>
                        <a href="<?= base_url() ?>Usuarios/formulario_usuarios" class="float-right btn btn-sm btn-rounded btn-success txt-blanco"><i class="mdi mdi-plus"></i> Agregar usuario</a>
                        <?php }elseif($this->session->userdata('tipo_usuario')=='AD'){?>
                        <?php if(isset($posts)){?>
                                <div class="profile-text">
                                <input type="hidden" value="<?php echo $posts[0]->idusuarios?>">
                                </div>
                            <?php }?>
                        <a href="<?= base_url() ?>Usuarios/formulario_usuarios?idusuarios=<?php echo $posts[0]->idusuarios; ?>" class="float-right btn btn-sm btn-rounded btn-success txt-blanco"><i class="mdi mdi-plus"></i> Agregar usuario</a>
                        <?php } ?>
                      </div>
                      <div class="card-body">
                      <div class="table-responsive">
                        <table class="table color-bordered-table dark-bordered-table full-color-table full-dark-table hover-table">
                          <thead>
                            <tr>
                              <th>Nombre</th>
                              <th>Usuario</th>
                              <th>Grupo</th>
                              <th>Rol</th>
                              <th>Acción</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php if($this->session->userdata('tipo_usuario')=='SU'){ 
                                     foreach ($usuarios as $row){ ?>                              
                            <tr>
                              <td><?php echo $row->nombre; ?> <?php echo $row->apellidos; ?></td>
                              <td><?php echo $row->usuario; ?></td>
                              <td>
                                  <?php echo $row->grupo; ?>
                                  <input type="hidden" value=" <?php echo $row->grupo; ?>">
                              </td>
                              <td>
                              <?php if($row->tipo_usuario=='SU'){
                                        $su='SUPER ADMINISTRADOR';
                                ?>
                                    <span class="label label-info"><?php  echo $su; ?>
                                <?php } 
                                    if($row->tipo_usuario=='AD'){
                                        $ad='ADMINISTRADOR';
                                        $co='CONSULTOR';
                                ?>
                                    <span class="label label-primary"><?php  echo $ad; ?></span>
                                    <span class="label label-megna"><?php  echo $co; ?>
                                <?php }
                                    if($row->tipo_usuario=='CO'){
                                        $co='CONSULTOR';?>
                                    <span class="label label-megna"><?php  echo $co; ?>
                                   <?php } ?>
                                  </span> 
                              </td>                                   
                              <td class="footable-editing footable-last-visible" style="display: table-cell;">
                                <div class="btn-group btn-group-xs" role="group">
                                    <a href="<?= base_url() ?>Usuarios/editarUsuario/?idusuario=<?php echo $row->idusuarios; ?>">
                                        <button type="button" class="btn btn-secondary txt-azul" title="Editar">
                                          <span class="mdi mdi-lead-pencil" aria-hidden="true"></span>
                                        </button>
                                    </a>
                                  <button class="btn btn-secondary txt-rojo" data-toggle="modal" data-target="#myModal" title="Eliminar">
                                    <span class="mdi mdi-delete" aria-hidden="true"></span>
                                  </button>
                                </div>
                              </td>
                            </tr>
                                  <?php } 
                                  }?>
                            <?php if($this->session->userdata('tipo_usuario')=='AD'){ ?>
                                    <?php foreach ($usuario_grupo as $row){ ?>
                                        <tr>
                              <td><?php echo $row->nombre; ?> <?php echo $row->apellidos; ?></td>
                              <td><?php echo $row->usuario; ?></td>
                              <td>
                                  <?php echo $row->grupo; ?>
                                  <input type="hidden" value=" <?php echo $row->grupo; ?>">
                              </td>
                              <td>
                              <?php if($row->tipo_usuario=='SU'){
                                        $su='SUPER ADMINISTRADOR';
                                ?>
                                    <span class="label label-info"><?php  echo $su; ?>
                                <?php } 
                                    if($row->tipo_usuario=='AD'){
                                        $ad='ADMINISTRADOR';
                                        $co='CONSULTOR';
                                ?>
                                    <span class="label label-primary"><?php  echo $ad; ?></span>
                                    <span class="label label-megna"><?php  echo $co; ?>
                                <?php }
                                    if($row->tipo_usuario=='CO'){
                                        $co='CONSULTOR';?>
                                    <span class="label label-megna"><?php  echo $co; ?>
                                   <?php } ?>
                                  </span> 
                              </td>                                   
                              <td class="footable-editing footable-last-visible" style="display: table-cell;">
                                <div class="btn-group btn-group-xs" role="group">
                                    <a href="<?= base_url() ?>Usuarios/editarUsuario/?idusuario=<?php echo $row->idusuarios; ?>">
                                        <button type="button" class="btn btn-secondary txt-azul" title="Editar">
                                          <span class="mdi mdi-lead-pencil" aria-hidden="true"></span>
                                        </button>
                                    </a>
                                  <button class="btn btn-secondary txt-rojo" data-toggle="modal" data-target="#myModal" title="Eliminar">
                                    <span class="mdi mdi-delete" aria-hidden="true"></span>
                                  </button>
                                </div>
                              </td>
                            </tr>
                                    <?php 
                                    }   
                                }?>
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
            <!-- Modal -->
            <div class="container">   
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog">    
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title text-warning"><i class="fas fa-exclamation-triangle"></i>  AVERTENCIA</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                        <p>¿Esta seguro de eliminar el usuario?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </div>
                  </div>  
                </div>
            </div>
  
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

</div>
</html>
