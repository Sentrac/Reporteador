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
                <?php if($this->session->userdata('tipo_usuario')=='SU'){ ?>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card card-outline-inverse">
                      <div class="card-header">
                      <?php   if(isset($grupo_equipos)){?>
                        <h4 class="float-left m-b-0 text-white"><i class="mdi mdi-laptop"></i> Equipos de <?php echo $grupo_equipos[0]->nombre;?></h4>
                      <?php }?>
                        <a href="<?= base_url() ?>Equipos/formulario_equipo?idgrupo=<?php echo $grupo_equipos[0]->idgrupo; ?>" class="float-right btn btn-sm btn-rounded btn-success txt-blanco"><i class="mdi mdi-plus"></i> Agregar equipo</a>
                      </div>
                      <div class="card-body">
                        <h6>Equipos agregados para este grupo</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                <?php if(isset($equipos)){
                        foreach($equipos as $equipo){?>
                  <div class="col-lg-3 col-md-6">
                    <!-- Card -->
                    <div class="card text-center">
                        <input type="hidden" value=" <?php echo $grupo_equipos[0]->idgrupo;?>">
                      <div class="card-body">
                      <center><img class="card-img-top img-responsive" src="../assets/images/equipos.png" alt="Card image cap"></center>
                        <h4 class="card-title"><?php echo $equipo->nombre_host;?></h4>
                        <input type="hidden" value="<?php echo $equipo->idequipos; ?>">
                        <p><?php echo $equipo->dns;?></p>
                        <a href="<?= base_url() ?>Equipos/editarEquipo?idequipo=<?php echo $equipo->idequipos; ?>">
                          <button type="button" class="btn btn-secondary txt-azul" title="Editar">
                              <span class="mdi mdi-lead-pencil" aria-hidden="true"></span>
                          </button>
                        </a>
                        <a href="javascript:void(0)" type="button" class="btn btn-secondary txt-rojo" title="Eliminar" onclick="delEqp(<?= $equipo->idequipos;?>,<?= $equipo->fk_grupo;?>);">
                            <span class="mdi mdi-delete" aria-hidden="true"></span>
                        </a>
                      </div>
                    </div>
                    <!-- Card -->
                  </div>
                  <?php }
                    }?>
                </div>
                <?php }?>
                <!-- Row -->
                <?php if($this->session->userdata('tipo_usuario')=='AD'){ ?>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card card-outline-inverse">
                      <div class="card-header">
                      <?php   if(isset($grupo_admin)){?>
                        <h4 class="float-left m-b-0 text-white"><i class="mdi mdi-laptop"></i> Equipos de <?php echo $grupo_admin[0]->grupo;?></h4>
                      <?php }?>
                        <a href="<?= base_url() ?>Equipos/formulario_equipo?idgrupo=<?php echo $posts[0]->fk_grupou; ?>" class="float-right btn btn-sm btn-rounded btn-success txt-blanco"><i class="mdi mdi-plus"></i> Agregar equipo</a>
                      </div>
                      <div class="card-body">
                        <h6>Equipos agregados para este grupo</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                <?php if(isset($equipos_admin)){ 
                          foreach($equipos_admin as $equipo){?>
                  <div class="col-lg-3 col-md-6">
                    <!-- Card -->
                    <div class="card text-center">
                      <div class="card-body">
                      <center><img class="card-img-top img-responsive" src="../assets/images/equipos.png" alt="Card image cap"></center>
                        <h4 class="card-title"><?php echo $equipo->nombre_host;?></h4>
                        <p><?php echo $equipo->dns;?></p>
                        <a href="<?= base_url() ?>Equipos/editarEquipo?idequipo=<?php echo $equipo->idequipos; ?>">
                          <button type="button" class="btn btn-secondary txt-azul" title="Editar">
                              <span class="mdi mdi-lead-pencil" aria-hidden="true"></span>
                          </button>
                        </a>
                        <a href="javascript:void(0)" type="button" class="btn btn-secondary txt-rojo" title="Eliminar" onclick="delEqp(<?= $equipo->idequipos;?>,<?= $equipo->fk_grupo;?>);">
                            <span class="mdi mdi-delete" aria-hidden="true"></span>
                        </a>
                      </div>
                    </div>
                    <!-- Card -->
                  </div>
                  <?php 
                    }
                  }?>
                </div>
                <?php }?>
                <?php if($this->session->userdata('tipo_usuario')=='CO'){ ?>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card card-outline-inverse">
                      <div class="card-header">
                      <?php   if(isset($grupo_admin)){?>
                        <h4 class="float-left m-b-0 text-white"><i class="mdi mdi-laptop"></i> Equipos de <?php echo $grupo_admin[0]->grupo;?></h4>
                      <?php }?>
                      </div>
                      <div class="card-body">
                        <h6>Equipos agregados para este grupo</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                <?php if(isset($equipos_admin)){ 
                          foreach($equipos_admin as $equipo){?>
                  <div class="col-lg-3 col-md-6">
                    <!-- Card -->
                    <div class="card text-center">
                        
                      <div class="card-body">
                      <center><img class="card-img-top img-responsive" src="../assets/images/equipos.png" alt="Card image cap"></center>
                        <h4 class="card-title"><?php echo $equipo->nombre_host;?></h4>
                        <p><?php echo $equipo->dns;?></p>
                        <P><?php echo $equipo->descripcion;?></P>
                      </div>
                    </div>
                  </div>
                    <!-- Card -->
                  <?php 
                    }
                  }?>
                </div>
                <?php }?>
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
    <script>
        function redirect(fk) {
          <?php
          if($this->session->userdata('tipo_usuario')=='SU'){
          ?>
            window.location.href = "<?php echo site_url('Equipos/equipo'); ?>?idgrupo="+fk;
          <?php
          }
          if($this->session->userdata('tipo_usuario')=='AD'){
          ?>
            window.location.href = "<?php echo site_url('Equipos/equipo'); ?>?fk_grupou="+fk;
          <?php } ?>
        }
        function delEqp(id,fk) {
            Swal({
                title: 'Estas Seguro de eliminarlo?',
                text: "Esta acción no se podra deshacer.",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Acceptar',
                cancelButtonText: 'Cancelar'
            })
            .then((result) => {
                if (result.value) {
                    $.ajax({
                        url: '<?php echo site_url('Equipos/EliminarEquipo')?>/'+id,
                        type: 'GET',
                        dataType: 'JSON'
                    })
                    .done(function(response){
                        swal({
                            type: response.status,
                            title: response.message,
                            showConfirmButton: false,
                            timer: 2500
                        });
                        setTimeout(redirect(fk), 1700);
                    })
                    .fail(function(){
                        swal('Oops...', 'Se tuvieron errores con AJAX !', 'error');
                    });
                } else {
                    // escape
                }
            });
        }
    </script>