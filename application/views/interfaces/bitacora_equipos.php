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
                        <h4 class="float-left m-b-0 text-white"><i class="mdi mdi-account-multiple"></i> Equipos</h4>
                      </div>
                      <div class="card-body">
                      <div class="table-responsive">
                        <table class="table color-bordered-table dark-bordered-table full-color-table full-dark-table hover-table">
                          <thead>
                            <tr>
                              <th>Usuario</th>
                              <th>Acción</th>
                              <th>Nombre Host</th>
                              <th>DNS Actual</th>
                              <th>DNS Anterior</th>
                              <th>Grupo</th>
                              <th>Fecha</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php if(isset($b_equipos)){  
                                  foreach ($b_equipos as $equipo){?>  
                            <tr>
                                <td><?php echo $equipo->usuario; ?></td>
                                <td><span class="badge badge-secondary"><?php echo $equipo->accion; ?></span></td>
                                <td><?php echo $equipo->nombre_host; ?></td>
                                <td><?php echo $equipo->dns; ?></td>
                                <td><?php echo $equipo->dns_viejo ?></td>
                                <td><?php echo $equipo->nombre; ?></td>
                                <td><?php echo $equipo->fecha; ?></td>
                            </tr>
                                  <?php }
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
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
           