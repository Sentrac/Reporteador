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
                <div class="row">
                  <?php if(isset($iframe)) { ?>
                    <?php if($iframe){ ?>
                      <?php if($iframe[0]->nombre_host) { ?>
                        <div class="col-md-12">
                          <div class="card card-outline-inverse">
                            <div class="card-header">
                              <h3 class="float-left m-b-0 text-white">
                                <i class="mdi mdi-laptop"></i> Equipo <?php echo $iframe[0]->nombre_host; ?>
                              </h3>
                              <a href="<?php echo base_url().'Equipos/equipo?idgrupo='.$iframe[0]->fk_grupo; ?>" class="float-right btn btn-sm btn-rounded btn-success txt-blanco">
                                <i class="mdi mdi-arrow-left"></i> Regresar
                              </a>
                            </div>
                          </div>
                        </div>
                      <?php } ?>
                      <?php if($iframe[0]->iframe){?>
                        <div class="embed-responsive embed-responsive-1by1">
                          <?php echo $iframe[0]->iframe; ?>
                        </div>
                      <?php } else { ?>
                        <div class="col-md-12">
                          <div class="card card-outline-danger">
                            <div class="card-header">
                              <h4 class="m-b-0 text-white">Advertencia.</h4>
                            </div>
                            <div class="card-body">
                              <h4 class="card-title">Las graficas aun no estan disponibles aún, vuelva mas tarde.</h4>
                            </div>
                            <div class="form-actions">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="row">
                                    <div class="offset-sm-4 col-md-8">
                                      <a href="<?php echo base_url().'Equipos/equipo?idgrupo='.$iframe[0]->fk_grupo;?>">
                                        <button class="btn btn-success">Aceptar</button>
                                      </a>
                                      <br>
                                      <br>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php } ?>
                    <?php } else { ?>
                      <div class="col-md-12">
                        <div class="card card-outline-danger">
                          <div class="card-header">
                            <h4 class="m-b-0 text-white">Advertencia.</h4>
                          </div>
                          <div class="card-body">
                            <h4 class="card-title">No existe el equipo.</h4>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                  <?php } else { ?>
                    <div class="col-md-12">
                      <div class="card card-outline-danger">
                        <div class="card-header">
                          <h4 class="m-b-0 text-white">Advertencia.</h4>
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">Hubo un error al traer los datos.</h4>
                        </div>
                        <div class="form-actions">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="row">
                                <div class="offset-sm-4 col-md-8">
                                  <a href="<?php echo base_url().'Equipos/equipo?idgrupo='.$this->session->userdata('grupo');?>">
                                    <button class="btn btn-success">Aceptar</button>
                                  </a>
                                  <br>
                                  <br>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                </div>                
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->