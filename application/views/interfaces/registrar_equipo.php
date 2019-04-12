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
                <?php if($this->session->flashdata('ErrorEq')) {?>
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
                            <?= $this->session->flashdata('ErrorEq'); ?>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row page-titles">
                    <!--<div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>-->
                </div>
                <?php if($this->session->userdata('tipo_usuario')=='SU'){ ?>
                <div class="Row">
                  <div class="col-lg-12">
                    <div class="card card-outline-inverse">
                      <div class="card-header">
                      <?php   if(isset($grupo_equipos)){?>
                        <h4 class="m-b-0 text-white">Registrar Equipo para <?php echo $grupo_equipos[0]->nombre;?> </h4>
                      <?php }?>
                      </div>
                      <div class="card-body">
                      <?php echo form_open("Equipos/registrar_equipo",'id="clean_form"'); ?>
                          <div class="form-body">
                            <h4 class="card-title">Datos</h4>
                            <hr>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Nombre / Hostname</label>
                              <div class="col-md-9">
                                <input type="text" placeholder="Nombre o hostname" class="form-control" name="nombre_host" value="<?php if ($this->session->flashdata('old')) { echo $this->session->flashdata('old')['nombre_host'];}?>">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Dirección IP/DNS</label>
                              <div class="col-md-9">
                                <input type="text" placeholder="IP o DNS" class="form-control" name="dns" value="<?php if ($this->session->flashdata('old')) { echo $this->session->flashdata('old')['dns'];}?>">
                                <small class="form-control-feedback">Ejemplo: 255.255.255.255</small>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Descripción</label>
                              <div class="col-md-9">
                                <textarea style="text-transform: uppercase;" type="textarea" rows="5" placeholder="Descripción" class="form-control" name="descripcion"><?php if ($this->session->flashdata('old')) { echo $this->session->flashdata('old')['descripcion'];}?></textarea>
                              </div>
                            </div>
                            <?php if(isset($grupo_equipos)){?>
                              <input type="hidden" class="form-control" value="<?php echo $grupo_equipos[0]->idgrupo; ?>" readonly name="fk_grupo">    
                            <?php } ?>
                          </div>
                          <div class="form-actions">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="row">
                                    <div class="offset-sm-4 col-md-8">
                                        <button type="submit" class="btn btn-success"> <i class="mdi mdi-content-save"></i> Guardar</button>
                                        <a href="<?= base_url() ?>Equipos/equipo?idgrupo=<?php echo   $_GET['idgrupo']; ?>" class="btn btn-danger">
                                            <i class="mdi mdi-close-circle"></i> Cancelar
                                        </a>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        <?php echo form_close(); ?>                       
                      </div>
                            <?php } ?>
                            <?php if($this->session->userdata('tipo_usuario')=='AD'){ ?>
                <div class="Row">
                  <div class="col-lg-12">
                    <div class="card card-outline-inverse">
                      <div class="card-header">
                      <?php   if(isset($grupo_equipos)){?>
                        <h4 class="m-b-0 text-white">Registrar Equipo para <?php echo $grupo_equipos[0]->nombre;?> </h4>
                      <?php }?>
                      </div>
                      <div class="card-body">
                      <?php echo form_open("Equipos/registrar_equipo_admin",'id="clean_form"'); ?>
                          <div class="form-body">
                            <h4 class="card-title">Datos</h4>
                            <hr>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Nombre / Hostname</label>
                              <div class="col-md-9">
                                <input type="text" placeholder="Nombre o hostname" class="form-control" name="nombre_host" value="<?php if ($this->session->flashdata('old')) { echo $this->session->flashdata('old')['nombre_host'];}?>">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Dirección IP/DNS</label>
                              <div class="col-md-9">
                                <input style="text-transform: uppercase;" type="text" placeholder="IP o DNS" class="form-control" name="dns" value="<?php if ($this->session->flashdata('old')) { echo $this->session->flashdata('old')['dns'];}?>">
                                <small class="form-control-feedback">Ejemplo: 255.255.255.255</small>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Descripción</label>
                              <div class="col-md-9">
                                <textarea style="text-transform: uppercase;" type="textarea" rows="5" placeholder="Descripción" class="form-control" name="descripcion"><?php if ($this->session->flashdata('old')) { echo $this->session->flashdata('old')['descripcion'];}?></textarea>
                              </div>
                            </div>
                            <!--VALOR IDGRUPO DE TIPO ESCONDIDO-->
                            <?php if(isset($grupo_equipos)){?>
                              <input type="hidden" class="form-control" value="<?php echo $grupo_equipos[0]->idgrupo; ?>" readonly name="fk_grupo">    
                            <?php } ?>
                            <!--FIN DE IDGRUPO ESCONDIDO-->
                          </div>
                          <div class="form-actions">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="row">
                                    <div class="offset-sm-4 col-md-8">
                                    <?php if(isset($posts)){?>
                                        <div class="profile-text">
                                        <input type="hidden" value="<?php echo $posts[0]->fk_grupou?>">
                                        </div>
                                    <?php } ?>
                                        <button type="submit" class="btn btn-success"> <i class="mdi mdi-content-save"></i> Guardar</button>
                                        <a href="<?= base_url() ?>Equipos/equipo?idgrupo=<?php echo $posts[0]->fk_grupou; ?>" class="btn btn-danger">
                                            <i class="mdi mdi-close-circle"></i> Cancelar
                                        </a>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        <?php echo form_close(); ?>                       
                      </div>
                            <?php } ?>
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
            