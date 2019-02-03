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
                <?php if($this->session->flashdata('registro')){?>
                    <script>
                        $(document).ready(function () {
                            $.toast({
                                heading: 'Éxito',
                                text: '<?= $this->session->flashdata('registro'); ?>',
                                icon: 'success',
                                showHideTransition: 'fade',
                                allowToastClose: true,
                                hideAfter: 3500,
                                stack: false,
                                position: 'top-right',
                                textAlign: 'left',
                                loader: true,
                                loaderBg: '#000000',
                            }); 
                        });
                    </script>
                <?php }if($this->session->flashdata('editar_grupo')){ ?>
                    <script>
                        $(document).ready(function () {
                            $.toast({
                                heading: 'Éxito',
                                text: '<?= $this->session->flashdata('editar_grupo'); ?>',
                                icon: 'success',
                                showHideTransition: 'fade',
                                allowToastClose: true,
                                hideAfter: 3500,
                                stack: false,
                                position: 'top-right',
                                textAlign: 'left',
                                loader: true,
                                loaderBg: '#000000',
                            }); 
                        });
                    </script>
                <?php }if($this->session->flashdata('grupo')){?>
                    <script>
                        $(document).ready(function () {
                            $.toast({
                                heading: 'Advertencia',
                                text: '<?= $this->session->flashdata('grupo'); ?>',
                                icon: 'warning',
                                showHideTransition: 'fade',
                                allowToastClose: true,
                                hideAfter: 3500,
                                stack: false,
                                position: 'top-right',
                                textAlign: 'left',
                                loader: true,
                                loaderBg: '#000000',
                            }); 
                        });
                    </script>
                <?php } if($this->session->flashdata('ip_existe')){?>
                    <script>
                        $(document).ready(function () {
                            $.toast({
                                heading: 'Advertencia',
                                text: '<?= $this->session->flashdata('ip_existe'); ?>',
                                icon: 'warning',
                                showHideTransition: 'fade',
                                allowToastClose: true,
                                hideAfter: 3500,
                                stack: false,
                                position: 'top-right',
                                textAlign: 'left',
                                loader: true,
                                loaderBg: '#000000',
                            }); 
                        });
                    </script>
                <?php } ?>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card card-outline-inverse">
                      <div class="card-header">
                        <h4 class="float-left m-b-0 text-white"><i class="mdi mdi-account-multiple"></i> Grupo Actuales</h4>
                        <a href="<?= base_url() ?>Grupo/formulario_grupos" class="float-right btn btn-sm btn-rounded btn-success txt-blanco"><i class="mdi mdi-plus"></i> Agregar grupo</a>
                    </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <?php foreach($lista_grupos as $grupo_bd){?>
                  <div class="col-lg-3 col-md-6">
                    <!-- Card -->
                    <div class="card text-center">
                      <center><br><img class="card-img-top img-responsive " src="../assets/images/grupos.png" alt="Card image cap"></center>
                      <div class="card-body">
                        <h4 class="card-title"><?php echo $grupo_bd->nombre?></h4>
                        <input type="hidden" name="idgrupo" value="<?php echo $grupo_bd->idgrupo?>">
                        <a href="<?= base_url() ?>Equipos/equipo?idgrupo=<?php echo $grupo_bd->idgrupo; ?>">
                            <button type="button" class="btn btn-primary" title="Ver">
                                <span class="mdi mdi-laptop" aria-hidden="true"></span>
                            </button>
                        </a>
                        <a href="<?= base_url() ?>Grupo/editarGrupo?idgrupo=<?php echo $grupo_bd->idgrupo; ?>">
                            <button type="button" class="btn btn-success" title="Editar">
                                <span class="mdi mdi-lead-pencil" aria-hidden="true"></span>
                            </button>
                        </a>
                  <a href="javascript:void(0)" onclick="delgrp(<?= $grupo_bd->idgrupo; ?>);" type="button" class="btn btn-danger" title="Eliminar">
                            <span class="mdi mdi-delete" aria-hidden="true"></span>
                        </a>
                      </div>
                    </div>
                    <!-- Card -->
                  </div>
                    <?php } ?>
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
    <script>
        function redirect() {
            window.location.href = "<?php echo site_url('/Grupo/grupo'); ?>";
        }
        function delgrp(id) {
            Swal({
                title: 'Estas Seguro de eliminarlo?',
                text: "Se eliminaran todos los  equipos y usuarios de dicho grupo!. Esta acción no se podra deshacer.",
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
                        url: '<?php echo site_url('Grupo/delgrupo')?>/'+id,
                        type: 'GET',
                        dataType: 'JSON'
                    })
                    .done(function(response){
                        swal({
                            type: response.status,
                            title: response.message,
                            showConfirmButton: false,
                            timer: 1500
                        });
                        setTimeout(redirect, 1500);
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


