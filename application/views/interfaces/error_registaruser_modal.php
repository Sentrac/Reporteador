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
                        <h5 class="modal-title text-danger"><i class="fas fa-exclamation-triangle"></i></i> ERROR</h5>
                      </div>
                      <div class="modal-body">
                        <p><?php echo validation_errors(
                            '<div class="alert alert-danger alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>',
                            '</div>'); 
                            ?></p>
                      </div>
                      <div class="modal-footer">
                      <?php if(isset($posts)){?>
                            <div class="profile-text">
                                <input type="hidden" value="<?php echo $posts[0]->idusuarios?>">
                            </div>
                            <?php }?>
                      <?php if($this->session->userdata('tipo_usuario')=='SU'){ ?>
                        <a href="<?= base_url() ?>Usuarios/usuarios">
                            <button type="button" class="btn btn-secondary">Regresar</button>
                        </a>
                      <?php } if($this->session->userdata('tipo_usuario')=='AD'){ ?>
                        <a href="<?= base_url() ?>Usuarios/usuarios?fk_grupou=<?php echo $posts[0]->fk_grupou; ?>">
                            <button type="button" class="btn btn-secondary">Regresar</button>
                        </a>
                      <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>