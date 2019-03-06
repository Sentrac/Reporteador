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
                <div class="Row">
                  <div class="col-lg-12">
                    <div class="card card-outline-inverse">
                      <div class="card-header">
                        <h4 class="m-b-0 text-white">Editar Equipo</h4>
                      </div>
                      <div class="card-body">
                      <?php echo form_open("Equipos/actualizarEquipo"); ?> 
                          <div class="form-body">
                            <hr>
                            <?php if (isset($mostrardatosequipo)){
                                    ?>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Nombre / Hostname</label>
                              <div class="col-md-9">
                                  <input type="hidden" value="<?php echo $mostrardatosequipo[0]->idequipos; ?>" name="idequipos">
                                <input type="text"  class="form-control" name="nombre_host" value="<?php echo $mostrardatosequipo[0]->nombre_host; ?>">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Dirección IP/DNS</label>
                              <div class="col-md-9">
                                <input type="text" style="text-transform: uppercase;" class="form-control" name="dns" value="<?php echo $mostrardatosequipo[0]->dns; ?>">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Descripción</label>
                              <div class="col-md-9">
                                <textarea rows="5" placeholder="Descripción" class="form-control" style="text-transform: uppercase;" name="descripcion" ><?php echo $mostrardatosequipo[0]->descripcion; ?></textarea>
                              </div>
                            </div>    
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">IFrame</label>
                              <div class="col-md-9">
                                <textarea rows="5" placeholder="IFrame" class="form-control" name="frame" ><?php echo $mostrardatosequipo[0]->iframe; ?></textarea>
                              </div>
                            </div>    
                            <input type="hidden" style="text-transform: uppercase;" class="form-control" name="fk_grupo" value="<?php echo $mostrardatosequipo[0]->fk_grupo; ?>">
                            <?php } ?>
                            <div class="form-actions">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="row">
                                  <div class="offset-sm-4 col-md-8">
                                    <button class="btn btn-success"> <i class="mdi mdi-content-save"></i> Guardar</button>
                                        <input type="hidden" name="idgrupo" value="<?php echo $mostrardatosequipo[0]->fk_grupo?>">
                                        <?php if($this->session->userdata('tipo_usuario')=='SU'){ ?>
                                          <a href="<?= base_url() ?>Equipos/equipo?idgrupo=<?php echo $mostrardatosequipo[0]->fk_grupo; ?>">
                                              <button type="button" class="btn btn-danger"> <i class="mdi mdi-close-circle"></i> Cancelar</button>
                                          </a>
                                        <?php } ?>
                                        <?php if($this->session->userdata('tipo_usuario')=='AD'){ ?>
                                          <a href="<?= base_url() ?>Equipos/equipo?fk_grupou=<?php echo $posts[0]->fk_grupou; ?>">
                                              <button type="button" class="btn btn-danger"> <i class="mdi mdi-close-circle"></i> Cancelar</button>
                                          </a>
                                        <?php } ?>
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
           
            