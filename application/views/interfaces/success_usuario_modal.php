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
                <div class="error-modal" tabindex="-1" role="dialog" >
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title text-green"><i class="fas fa-check"></i> EXITO</h5>
                      </div>
                      <div class="modal-body">
                      <?php if($this->session->flashdata('registro')){?>
                        <div  class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo $this->session->flashdata('registro'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div> 
                        <?php } ?>
                      </div>
                      <div class="modal-footer">
                      <?php if(isset($posts)){?>
                            <div class="profile-text">
                                <input type="hidden" value="<?php echo $posts[0]->fk_grupou?>">
                            </div>
                      <?php } ?>
                        <a href="<?= base_url() ?>Usuarios/usuarios?fk_grupou=<?php echo $posts[0]->fk_grupou; ?>">
                            <button type="button" class="btn btn-secondary">Mostrar</button>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>