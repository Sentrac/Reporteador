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
                <?php if($this->session->flashdata('ErrorPass')) {?>
                  <script>
                      $(document).ready(function()
                      {
                        $("#modalerror").modal("show");
                      });
                  </script>
                <?php } ?>
                <div class="modal fade" id="modalerror" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h3>Se encontraron los siguientes errores:</h3>
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                          <div class="alert alert-danger alert-dismissible fade show">
                            <?= $this->session->flashdata('ErrorPass'); ?>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
                        </div>
                      </div>
                    </div>
                </div>
                <?php echo form_open("Login/cambiarPassword"); ?>
                <div class="Row">
                  <div class="col-lg-12">
                    <div class="card card-outline-inverse">
                      <div class="card-header">
                        <h4 class="m-b-0 text-white">Cambiar Contraseña</h4>
                      </div>
                      <?php if(!empty($this->session->flashdata('pass'))) {?>
                      <script>
                            $(document).ready(function () {
                                $.toast({
                                    heading: "Exito",
                                    text: "<?= $this->session->flashdata('pass'); ?>",
                                    icon: "success",
                                    showHideTransition: "fade",
                                    allowToastClose: true,
                                    hideAfter: 3500,
                                    stack: false,
                                    position: "top-right",
                                    textAlign: "left",
                                    loader: true,
                                    loaderBg: "#000000",
                                }); 
                            });
                        </script>
                        <?php } if(!empty($this->session->flashdata('passError'))) { ?>
                      <script>
                            $(document).ready(function () {
                                $.toast({
                                    heading: "Error",
                                    text: "<?= $this->session->flashdata('passError'); ?>",
                                    icon: "error",
                                    showHideTransition: "fade",
                                    allowToastClose: true,
                                    hideAfter: 3500,
                                    stack: false,
                                    position: "top-right",
                                    textAlign: "left",
                                    loader: true,
                                    loaderBg: "#000000",
                                }); 
                            });
                        </script>
                        <?php } ?>
                      <div class="card-body">
                          <div class="form-body">
                            <hr>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Contraseña actual</label>
                              <div class="col-md-9">
                                <input type="password" name="actual_pswd" class="form-control">
                                <center><?php form_error("actual_pswd"); ?></center>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Nueva contraseña</label>
                              <div class="col-md-9">
                                <input type="password" name="new_pswd" class="form-control">
                                <center><?php form_error("new_pswd"); ?></center>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Repetir contraseña</label>
                              <div class="col-md-9">
                                <input type="password" name="repeat_pswd" class="form-control">
                                <center><?php form_error("repeat_pswd"); ?></center>
                                <small class="form-control-feedback"> </small>
                              </div>
                            </div>
                           <div class="form-actions">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="row">
                                  <div class="offset-sm-4 col-md-8">
                                    <button class="btn btn-success"> <i class="mdi mdi-content-save"></i> Guardar</button>
                                    
                                    <a href="<?= base_url() ?>Roles/superusuario">
                                        <input type="button" class="btn btn-danger" value="Cancelar"></input>
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
            <footer class="footer"> WARRIORS LAB'S</footer>
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
    <!-- ============================================================== -->