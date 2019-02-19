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
                        <h4 class="float-left m-b-0 text-white"><i class="mdi mdi-account-multiple"></i> Grupos</h4>
                      </div>
                      <div class="card-body">
                      <div class="table-responsive">
                        <table class="table color-bordered-table dark-bordered-table full-color-table full-dark-table hover-table">
                          <thead>
                            <tr>
                              <th>Usuario</th>
                              <th>Acción</th>
                              <th>Nombre Actual</th>
                              <th>Nombre Anterior</th>
                              <th>Alias</th>
                              <th>RFC</th>
                              <th>Fecha</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php if(isset($b_grupos)){  
                                  foreach ($b_grupos as $grupo){?>  
                            <tr>
                                <td><?php echo $grupo->usuario; ?></td>
                                <td><span class="badge badge-secondary"><?php echo $grupo->accion; ?></span></td>
                                <td><?php echo $grupo->nombre_nuevo; ?></td>
                                <td><?php echo $grupo->nombre_viejo; ?></td>
                                <td><?php echo $grupo->alias_nuevo ?></td>
                                <td><?php echo $grupo->rfc_nuevo; ?></td>
                                <td><?php echo $grupo->fecha; ?></td>
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
            