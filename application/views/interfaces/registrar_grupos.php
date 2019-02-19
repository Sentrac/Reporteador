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
                    <!--<div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>-->
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
              <?php echo validation_errors(
              '<div class="alert alert-danger alert-dismissible fade show">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>',
              '</div>'); 
              ?>
                <div class="Row">
                  <div class="col-lg-12">
                    <div class="card card-outline-inverse">
                      <div class="card-header">
                        <h4 class="m-b-0 text-white">Registrar Grupo</h4>
                      </div>
                      <div class="card-body">
                        <?php echo form_open("Grupo/registrar_grupo",'id="clean_form"'); ?>
                          <div class="form-body">
                            <h4 class="card-title">Datos</h4>
                            <hr>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Nombre</label>
                              <div class="col-md-9">
                                <input type="text" placeholder="Nombre completo" class="form-control" style="text-transform: uppercase;" name="nombre">
                                <small class="form-control-feedback"> </small>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Nombre (<small>Alias</small>)</label>
                              <div class="col-md-9">
                                <input type="text" placeholder="Alias" class="form-control" style="text-transform: uppercase;" name="alias">
                                <small class="form-control-feedback"> </small>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">RFC</label>
                              <div class="col-md-9">
                                <input type="text" placeholder="RFC" class="form-control" style="text-transform: uppercase;" name="rfc">
                                <small class="form-control-feedback">Ejemplo: POI1624345QWE</small>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Descripción</label>
                              <div class="col-md-9">
                                <textarea rows="5" placeholder="Descripción" class="form-control" style="text-transform: uppercase;" name="descripcion"></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="form-actions">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="row">
                                  <div class="offset-sm-4 col-md-8">
                                    <button type="submit" class="btn btn-success"> <i class="mdi mdi-content-save"></i> Guardar</button>
                                    <a href="<?= base_url() ?>Grupo/grupo">
                                        <button type="button" class="btn btn-inverse"> <i class="mdi mdi-close-circle"></i> Cancelar</button>
                                    </a>
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
    