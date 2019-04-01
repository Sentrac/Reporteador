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
                <?php if($this->session->flashdata('ErrorGrupo')) {?>
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
                            <?= $this->session->flashdata('ErrorGrupo'); ?>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row page-titles">
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->

                <?php if($mostrardatosgrupo){?>

                <div class="row">
                  <div class="col-lg-12">
                    <div class="card card-outline-inverse">
                      <div class="card-header">
                        <h4 class="m-b-0 text-white">Editar Grupo</h4>
                      </div>
                      <div class="card-body">
                      <?php echo form_open("Grupo/actualizarGrupo"); ?> 
                          <div class="form-body">
                            <hr>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Nombre</label>
                              <div class="col-md-9">
                                  <input type="hidden" value="<?php echo $mostrardatosgrupo[0]->idgrupo?>" name="idgrupo">
                              <input type="hidden" class="form-control" name="idusuarios" value="">
                                <input type="text" style="text-transform: uppercase;" class="form-control" name="nombre" value="<?php echo $mostrardatosgrupo[0]->nombre; ?>">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Alias</label>
                              <div class="col-md-9">
                                <input type="text" style="text-transform: uppercase;" class="form-control" name="alias" value="<?php echo $mostrardatosgrupo[0]->alias; ?>">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">rfc</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" name="rfc" value="<?php echo $mostrardatosgrupo[0]->rfc; ?>">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Iframe</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" name="iframe" value='<?php echo $mostrardatosgrupo[0]->iframe; ?>'>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Descripción</label>
                              <div class="col-md-9">
                                <textarea rows="5" placeholder="Descripción" class="form-control" style="text-transform: uppercase;" name="descripcion" ><?php echo $mostrardatosgrupo[0]->descripcion; ?></textarea>
                              </div>
                            </div>
                            <div class="form-actions">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="row">
                                  <div class="offset-sm-4 col-md-8">
                                    <button class="btn btn-success"> <i class="mdi mdi-content-save"></i> Guardar</button>
                                    <a href="<?= base_url() ?>Grupo/grupo">
                                      <button type="button" class="btn btn-danger"> <i class="mdi mdi-close-circle"></i> Cancelar</button>
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
                <?php } else { ?>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="card card-outline-danger">
                        <div class="card-header">
                          <h4 class="float-left m-b-0 text-white">Advertencia</h4>
                          <a href="<?php echo base_url().'Grupo/grupo' ?>" class="float-right btn btn-sm btn-rounded btn-outline txt-blanco"><i class="mdi mdi-arrow-left"></i> Regresar</a>
                        </div>
                        <div class="card-body">
                          No existe el grupo
                        </div>
                      </div>
                    </div>  
                  </div>
                <?php } ?>

                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            