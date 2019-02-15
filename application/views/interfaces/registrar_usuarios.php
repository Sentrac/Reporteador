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
                <!--FLASH DATA Y VALIDACIONES NOTIFICACIONES-->
                <script>
                  $(document).ready(function () {
                                $.toast({
                                    heading: "Advertencia",
                                    text: "','",
                                    icon: "warning",
                                    showHideTransition: "fade",
                                    allowToastClose: true,
                                    hideAfter: 3500,
                                    stack: false,
                                    position: "top-right",
                                    textAlign: "left",
                                    loader: true,
                                    loaderBg: "#000000",
                                });
                  ');?>
                </script>
                <?php if($this->session->flashdata('ErrorUsuario')) {?>
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
                            <?= $this->session->flashdata('ErrorUsuario'); ?>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
                        </div>
                      </div>
                    </div>
                </div>
                <?php if($this->session->flashdata('usuario_existe')) {?>
                  <script>
                      $(document).ready(function()
                      {
                        $("#modalerrorusuario").modal("show");
                      });
                  </script>
                <?php } ?>
                <div class="modal fade" id="modalerrorusuario" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h3>Se encontro el siguiente error:</h3>
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                          <div class="alert alert-danger alert-dismissible fade show">
                            <?= $this->session->flashdata('usuario_existe'); ?>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="Row">
                  <div class="col-lg-12">
                    <div class="card card-outline-inverse">
                      <div class="card-header">
                        <h4 class="m-b-0 text-white">Registrar usuario</h4>
                      </div>
                      <div class="card-body">
                      <?php if($this->session->userdata('tipo_usuario')=='SU'){ ?>
                      <?php echo form_open("Usuarios/registrar_usuarios",'id="clean_form"'); ?>
                          <div class="form-body">
                            <h4 class="card-title">Datos</h4>
                            <hr>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Nombre(s)</label>
                              <div class="col-md-9">
                                <input type="text" style="text-transform: uppercase;" placeholder="Nombre" class="form-control" name="nombre">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Apellido(s)</label>
                              <div class="col-md-9">
                                <input type="text" style="text-transform: uppercase;" placeholder="Apellidos(s)" class="form-control" name="apellidos">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Telefono</label>
                              <div class="col-md-9">
                                <input type="text" placeholder="TELEFONO" class="form-control" name="telefono">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Usuario</label>
                              <div class="col-md-9">
                                <input type="text" placeholder="USUARIO" class="form-control" name="usuario">
                                <small class="form-control-feedback">Ejemplo: qwer1234@warriorslabs.com</small>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Rol</label>
                            <div class="col-md-9">
                              <div class="radio-row row btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary">
                                  <input type="radio" name="tipo_usuario" id="option1" autocomplete="off" value="SU">Super Administrador
                                </label>
                                <label class="btn btn-secondary">
                                  <input type="radio" name="tipo_usuario" id="option2" autocomplete="off" value="AD"> Administrador
                                </label>
                                <label class="btn btn-secondary">
                                  <input type="radio" name="tipo_usuario" id="option3" autocomplete="off" value="CO"> Consultor
                                </label>
                              </div>   
                              </div>
                            </div>   
                            <div class="form-group row" style="display:none;" id="grupo_default">
                              <label class="control-label text-center col-md-2">Grupo</label>
                              <div class="col-md-9">
                                <!--JS RADIO BUTTON OPCION 1 SUPER USUARIO EN radiobuttons.js-->            
                                <select  class="form-control custom-select" name="fk_grupou" id="todos">
                                <?php foreach($todo_grupo as $todos){?>
                                  <option value="<?php echo $todos->fk_grupou?>"><?php echo $todos->grupo?></option>
                                <?php } ?>
                                </select>
                                </div>
                            </div>
                            <div class="form-group row" style="display:none;" id="grupo_todos">
                              <label class="control-label text-center col-md-2">Grupo</label>
                              <div class="col-md-9">
                                  <!--JS RADIO BUTTON OPCION 2 PARA ADMIN Y CONSULTOR EN radiobuttons.js-->            
                                <select  class="form-control custom-select" name="fk_grupou" id="grupos">
                                <?php foreach($ex_grupos as $grupos){?>
                                  <option value="<?php echo $grupos->idgrupo?>"><?php echo $grupos->nombre?></option>
                                <?php } ?>
                                </select>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Contraseña</label>
                              <div class="col-md-9">
                                <input type="password" placeholder="CONTRASEÑA" class="form-control" name="pass">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Repite la contraseña</label>
                              <div class="col-md-9">
                                <input type="password" placeholder="CONFIRMA LA CONTRASEÑA" class="form-control" name="repeat_pswd">
                              </div>
                            </div>
                          </div>
                          <div class="form-actions">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="row">
                                  <div class="offset-sm-4 col-md-8">
                                    <button type="submit" class="btn btn-success"> <i class="mdi mdi-content-save"></i> Guardar</button>
                                    <a href="<?= base_url() ?>Usuarios/usuarios">
                                      <button type="button" class="btn btn-danger"> <i class="mdi mdi-close-circle"></i> Cancelar</button>
                                    </a>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        <?php echo form_close(); ?>     
                                <?php }elseif($this->session->userdata('tipo_usuario')=='AD'){?> 
                                  <?php echo form_open("Usuarios/registrar_usuarios_admin",'id="clean_form"','name="form"'); ?>
                          <div class="form-body">
                            <h4 class="card-title">Datos</h4>
                            <hr>
                            <?php foreach($posts as $post){?>
                            <div class="profile-text">
                            <input type="hidden" value="<?php echo $post->idusuarios;?>" name="idusuarios">
                            </div>
                            <?php }?>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Nombre(s)</label>
                              <div class="col-md-9">
                                <input type="text" style="text-transform: uppercase;" placeholder="Nombre" class="form-control" name="nombre">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Apellido(s)</label>
                              <div class="col-md-9">
                                <input type="text" style="text-transform: uppercase;" placeholder="Apellidos(s)" class="form-control" name="apellidos">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Telefono</label>
                              <div class="col-md-9">
                                <input type="text" placeholder="TELEFONO" class="form-control" name="telefono">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Usuario</label>
                              <div class="col-md-9">
                                <input type="text" placeholder="USUARIO" class="form-control" name="usuario">
                                <small class="form-control-feedback">Ejemplo: qwer1234@warriorslabs.com</small>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Grupo</label>
                              <div class="col-md-9">
                              <?php if(isset($grupo_admin)){?>
                                <div class="profile-text">
                                <input type="text" class="form-control" value="<?php echo $grupo_admin[0]->grupo?>" readonly>
                                <input type="hidden" class="form-control" value="<?php echo $grupo_admin[0]->fk_grupou?>" name="fk_grupou">
                                </div>
                              </div>
                            <?php }?>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Rol</label>
                              <div class="col-md-9">
                                <div class="radio-row row btn-group btn-group-toggle" data-toggle="buttons">
                                  <label class="btn btn-secondary">
                                    <input type="radio" name="tipo_usuario" id="option1" autocomplete="off" value="AD"><label><h5>Administrador</h5></label>
                                  </label>
                                  <label class="btn btn-secondary">
                                    <input type="radio" name="tipo_usuario" id="option2" autocomplete="off" value="CO"><label><h5>Consultor</h5></label>
                                  </label>
                                </div>   
                              </div>
                            </div>   
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Contraseña</label>
                              <div class="col-md-9">
                                <input type="password" placeholder="CONTRASEÑA" class="form-control" name="pass">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Repite la contraseña</label>
                              <div class="col-md-9">
                                <input type="password" placeholder="CONFIRMA LA CONTRASEÑA" class="form-control" name="repeat_pswd">
                              </div>
                            </div>
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
                                    <?php }?>
                                    <button type="submit" class="btn btn-success"> <i class="mdi mdi-content-save"></i> Guardar</button>
                                    <a href="<?= base_url() ?>Usuarios/usuarios?fk_grupou=<?php echo $posts[0]->fk_grupou; ?>">
                                      <button type="button" class="btn btn-danger"> <i class="mdi mdi-close-circle"></i> Cancelar</button>
                                    </a>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        <?php echo form_close(); ?> 
                                <?php } ?>                 
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
            <footer class="footer"> © 2018 Reporteador by WarrioPracticantes</footer>
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
   