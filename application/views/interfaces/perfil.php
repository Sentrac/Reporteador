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
                        <h4 class="m-b-0 text-white">Perfil</h4>
                      </div>
                      <div class="card-body">
                        <form action="#" class="form-horizontal form-bordered">
                          <div class="form-body">
                            <hr>
                            <?php foreach($posts as $post){?>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Nombre</label>
                              <div class="col-md-9">
                                <input disabled type="text" class="form-control" value="<?php echo $post->nombre;?> <?php echo $post->apellidos;?>">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Correo</label>
                              <div class="col-md-9">
                                <input disabled type="email" class="form-control" value="<?php echo $post->usuario;?>">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Telefono</label>
                              <div class="col-md-9">
                                <input disabled type="text" class="form-control" value="<?php echo $post->telefono;?>">
                                <small class="form-control-feedback"> </small>
                              </div>
                            </div>
                           <?php if($posts[0]->tipo_usuario=='SU'){
                               foreach($posts as $post){
                                   $post='Super Administrador'?>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Rol</label>
                              <div class="col-md-9">
                                <input disabled type="text" class="form-control" value="<?php echo $post;?>">
                                <small class="form-control-feedback"> </small>
                              </div>
                            </div>
                               <?php }
                               }?>
                            <?php if($posts[0]->tipo_usuario=='AD'){
                               foreach($posts as $post){
                                   $post='Admnistrador'?>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Rol</label>
                              <div class="col-md-9">
                                <input disabled type="text" class="form-control" value="<?php echo $post;?>">
                                <small class="form-control-feedback"> </small>
                              </div>
                            </div>
                               <?php }
                               }?>
                            <?php if($posts[0]->tipo_usuario=='CO'){
                               foreach($posts as $post){
                                   $post='Consultor'?>
                            <div class="form-group row">
                              <label class="control-label text-center col-md-2">Rol</label>
                              <div class="col-md-9">
                                <input disabled type="text" class="form-control" value="<?php echo $post;?>">
                                <small class="form-control-feedback"> </small>
                              </div>
                            </div>
                               <?php }
                               }?>
                          </div>
                          <?php } ?>
                        </form>
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
   