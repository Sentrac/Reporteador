<script>
  function recargar()
  {
    location.href=location.href
  }
  setInterval('recargar()',60000)
</script>     
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
                <?php if($this->session->userdata('tipo_usuario') == 'SU'){ ?>
                <div class="row">
                  <?php if($iframe == 'NEL'){ ?>
                    <div class="col-md-12">
                      <div class="card card-outline-danger">
                        <div class="card-header">
                          <h3 class="m-b-0 text-white">Advertencia.</h3>
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">No existe el equipo.</h4>
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
                  <?php } else { ?>
                    <?php if($iframe[0]->iframe == false){?>
                      <div class="col-md-12">
                        <div class="card card-outline-danger">
                          <div class="card-header">
                            <h3 class="m-b-0 text-white">Advertencia.</h3>
                          </div>
                          <div class="card-body">
                            <h4 class="card-title">Edite el equipo y agregue el Iframe.</h4>
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
                    <?php } else { ?>
                      <div class="embed-responsive embed-responsive-1by1">
                        <?php echo $iframe[0]->iframe; ?>
                      </div>
                    <?php } ?>
                  <?php }
                  }?>
                  <?php if($this->session->userdata('tipo_usuario') == 'AD' or $this->session->userdata('tipo_usuario') == 'CO'){ ?>
                     <div class="embed-responsive embed-responsive-1by1">
                        <?php echo $iframe[0]->iframe; ?>
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