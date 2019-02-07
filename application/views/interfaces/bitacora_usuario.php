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
                      </div>
                      <div class="card-body">
                      <div class="table-responsive">
                        <table class="table color-bordered-table dark-bordered-table full-color-table full-dark-table hover-table">
                          <thead>
                            <tr>
                              <th>Usuario</th>
                              <th>Acción</th>
                              <th>Nombre</th>
                              <th>Apellido</th>
                              <th>Rol actual</th>
                              <th>Rol anterior</th>
                              <th>Grupo Actual</th>
                              <th>Grupo anterior</th>
                              <th>Fecha</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                         
                          <?php 
                                if(isset($b_usuarios)){  
                                  foreach ($b_usuarios as $b_user ){ ?>
                            <tr>
                            <td><?php echo $b_user->usuario; ?></td>
                              <td><?php echo $b_user->accion; ?></span></td>
                              <td><?php echo $b_user->nombre; ?></td>
                              <td><?php echo $b_user->apellidos; ?></td>
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
                              <?php } ?>
                                    <td><?php echo $b_user->grupo_actual; ?></td>
                              <?php if($b_user->accion=='AGREGO USUARIO'){
                                    $agrego=NULL;?>
                                    <td><?php echo $agrego; ?></td>
                              <?php }if($b_user->accion=='ELIMINO USUARIO'){
                                    $elimino=NULL; ?>
                                    <td><?php echo $elimino; ?></td>
                                <?php }if($b_user->accion=='MODIFICO USUARIO'){?>
                                  <td><?php echo $b_user->grupo_anterior; ?></td>
                                <?php } ?>
                                    <td><?php echo $b_user->fecha; ?></td>
                                    <td></td>
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
    <!-- End Wrapper -->
    <!-- ============================================================== -->





   