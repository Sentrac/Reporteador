<?php
    $name = $this->session->userdata('tipo_usuario');
    if($name=='SU'){
    }
    else{
        redirect(base_url());
    }
?>
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
                <div class="row">
                    <?php if($frame != false){?>
                      <div class="embed-responsive embed-responsive-1by1">
                        <?php var_dump($frame); ?>
                      </div>
                    <?php } else { ?>
                      <?php echo form_open("Login/servstat",'class="card-body"','class="form-material"','class="form-horizontal"'); ?>
                      <div class="col-md-12">
                        <div class="card card-outline-inverse">
                          <div class="card-header">
                            <h3 class="m-b-0 text-white">Iframe</h3>
                          </div>
                          <div class="card-body">
                            <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
                            <h4 class="card-title">Insertar iframe de las gráficas de metricbeat</h4>
                            <input class="form-control" name="frame" id="frame" title="Iframe" placeholder="Iframe...">
                          </div>
                          <div class="form-actions">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="row">
                                  <div class="offset-sm-4 col-md-8">
                                    <button class="btn btn-success" type="submit"> <i class="mdi mdi-content-save"></i> Guardar</button>
                                    <br>
                                    <br>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                      <?php echo form_close(); ?>
                    <?php } ?>
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