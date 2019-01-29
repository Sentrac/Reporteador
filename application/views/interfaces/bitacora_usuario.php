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
                        <a class="float-right btn btn-sm btn-rounded btn-success txt-blanco" data-toggle="modal" data-target="#myModal"><i class="mdi mdi-plus"></i> Agregar usuario</a>
                      </div>
                      <div class="card-body">
                      <div class="table-responsive">
                        <table class="table color-bordered-table dark-bordered-table full-color-table full-dark-table hover-table">
                          <thead>
                            <tr>
                              <th>Acción</th>
                              <th>Nombre(s) actual</th>
                              <th>Nombre(s) anterior</th>
                              <th>Apellido(s) actual</th>
                              <th>Apellido(s) anterior</th>
                              <th>Telefono actual</th>
                              <th>Telefono anterior</th>
                              <th>Correo actual</th>
                              <th>Corre anterior</th>
                              <th>Rol actual</th>
                              <th>Rol anterior</th>
                              <th>Grupo Actual</th>
                              <th>Grupo anterior</th>
                              <th>Usuario</th>
                              <th>Fecha</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php if(isset($b_usuarios)){
                               
                                    foreach ($b_usuarios as $b_user){?>
                                    
                            <tr>
                              <td><?php echo $b_user->accion; ?></td>
                              <td><?php echo $b_user->nombre_nuevo; ?></td>
                              <td><?php echo $b_user->nombre_viejo; ?></td>
                              <td><?php echo $b_user->apellidos_nuevo; ?></td>
                              <td><?php echo $b_user->apellidos_viejo; ?></td>
                              <td><?php echo $b_user->telefono_nuevo; ?></td>
                              <td><?php echo $b_user->telefono_viejo; ?></td>
                              <td><?php echo $b_user->email_nuevo; ?></td>
                              <td><?php echo $b_user->email_viejo; ?></td>
                              <?php
                                if($b_user->rol_nuevo=='AD'){
                                    $ad='ADMINISTRADOR';?>
                                    <td><span class="label label-primary"><?php echo $ad; ?></span></td>
                                <?php }
                                if($b_user->rol_nuevo=='SU'){
                                    $su='SUPER ADMINISTRADOR';?>
                                    <td><span class="label label-info"><?php echo $su; ?></span></td>
                               <?php  }if($b_user->rol_nuevo=='CO'){
                                    $co='CONSULTOR';?>
                                    <td><span class="label label-megna"><?php echo $co; ?></span></td>
                              <?php } ?>
                              <?php
                                if($b_user->rol_viejo=='AD'){
                                    $ad='ADMINISTRADOR';?>
                                    <td><pan class="label label-primary"><?php echo $ad; ?></span></td>
                                <?php }
                                if($b_user->rol_viejo=='SU'){
                                    $su='SUPER ADMINISTRADOR';?>
                                    <td><span class="label label-info"><?php echo $su; ?></span></td>
                               <?php  }if($b_user->rol_viejo=='CO'){
                                    $co='CONSULTOR';?>
                                    <td><span class="label label-megna"><?php echo $co; ?></span></td>
                              <?php } if($b_user->rol_viejo==NULL){
                                    $null=''; ?>
                                    <td><span><?php echo $null; ?></span></td>
                              <?php }
                              
                            ?>
                              <?php 
                                if(isset($b_grupo)){
                                    foreach($b_grupo as $b_group){ ?>
                              <td><?php echo $b_group->nombre; ?></td>
                              <?php  }
                                }
                                // }if(isset($b_grupo2)){
                                //   foreach($b_grupo2 as $b_group2){
                              ?>
                             
                             <td><?php echo $b_user->usuario; ?></td>
                              <td><?php echo $b_user->fecha; ?></td>
                            </tr>
                                <?php }
                          }
                          ?>
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
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->