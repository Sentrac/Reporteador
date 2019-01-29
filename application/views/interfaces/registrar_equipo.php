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
                                <input type="text" placeholder="Nombre o hostname" class="form-control" name="nombre_host">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Dirección IP/DNS</label>
                              <div class="col-md-9">
                                <input type="text" placeholder="IP o DNS" class="form-control" name="dns">
                                <small class="form-control-feedback">Ejemplo: 255.255.255.255</small>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Descripción</label>
                              <div class="col-md-9">
                                <textarea style="text-transform: uppercase;" type="textarea" rows="5" placeholder="Descripción" class="form-control" name="descripcion"></textarea>
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
                                <input type="text" placeholder="Nombre o hostname" class="form-control" name="nombre_host">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Dirección IP/DNS</label>
                              <div class="col-md-9">
                                <input type="text" placeholder="IP o DNS" class="form-control" name="dns">
                                <small class="form-control-feedback">Ejemplo: 255.255.255.255</small>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Descripción</label>
                              <div class="col-md-9">
                                <textarea style="text-transform: uppercase;" type="textarea" rows="5" placeholder="Descripción" class="form-control" name="descripcion"></textarea>
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
                                    <?php if(isset($posts)){?>
                                        <div class="profile-text">
                                        <input type="hidden" value="<?php echo $posts[0]->fk_grupou?>">
                                        </div>
                                    <?php } ?>
                                        <button type="submit" class="btn btn-success"> <i class="mdi mdi-content-save"></i> Guardar</button>
                                        <a href="<?= base_url() ?>Equipos/equipo?fk_grupou=<?php echo $posts[0]->fk_grupou; ?>">
                                            <button type="button" class="btn btn-inverse"> <i class="mdi mdi-close-circle"></i> Cancelar</button>
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
            <footer class="footer"> © 2018 Reporteador by WarrioPracticantes</footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>