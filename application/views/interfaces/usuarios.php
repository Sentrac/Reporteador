<?php
    $name = $this->session->userdata('tipo_usuario');
    if($name=='AD'){
    }

    elseif($name=='SU'){
    }
    else{
        redirect(base_url());
    }
    
?>      
        
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile" style="background: url(../assets/images/users/user-info.jpg) no-repeat;">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="../assets/images/users/user.png" alt="user" /> </div>
                    <!-- User profile text-->
                    <?php foreach($posts as $post){?>
                    <div class="profile-text">
                        <a class="u-dropdown clikem"><?php echo $post->nombre;?> <?php echo $post->apellidos;?></a>
                    </div>
                    <?php }?>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">Menú</li>
                        <?php if($this->session->userdata('tipo_usuario')=='SU'){ ?>
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Roles/superusuario"><i class="mdi mdi-home"></i><span class="hide-menu">Inicio</span></a></li>
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Usuarios/usuarios"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Usuarios</span></a></li>
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Grupo/grupo"><i class="mdi mdi-laptop"></i><span class="hide-menu">Grupo</span></a></li>
                        <li><a class="waves-effect waves-dark" href="#"><i class="mdi mdi-file-chart"></i><span class="hide-menu">Reportes</span></a></li>
                        <?php }elseif($this->session->userdata('tipo_usuario')=='AD'){?>
                            <?php if(isset($posts)){?>
                                <div class="profile-text">
                                <input type="hidden" value="<?php echo $posts[0]->fk_grupou?>">
                                </div>
                            <?php }?>
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Roles/admin"><i class="mdi mdi-home"></i><span class="hide-menu">Inicio</span></a></li>
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Usuarios/usuarios?fk_grupou=<?php echo $posts[0]->fk_grupou; ?>"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Usuarios</span></a></li>
                        <li><a class="waves-effect waves-dark" href="<?= base_url() ?>Equipos/equipo?fk_grupou=<?php echo $posts[0]->fk_grupou; ?>"><i class="mdi mdi-laptop"></i><span class="hide-menu">Equipos</span></a></li>
                        <!--<li><a class="waves-effect waves-dark" href="#"><i class="mdi mdi-file-chart"></i><span class="hide-menu">Reportes</span></a></li>-->
                        <?php } ?>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Settings"><i class="mdi mdi-settings"></i></a>
                <!-- item--><a href="" class="link clikem" data-toggle="tooltip"></a>
                <!-- item--><a href="<?= base_url() ?>Login/logout" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
            </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
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
                <?php if($this->session->userdata('tipo_usuario')=='SU'){ 
                         if($this->session->flashdata('registro')){?>
                        <div  class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo $this->session->flashdata('registro'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div> 
                         <?php }if($this->session->flashdata('editar')){?>
                        <div  class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo $this->session->flashdata('editar'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div> 
                <?php  
                    }
                }?>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card card-outline-inverse">
                      <div class="card-header">
                        <h4 class="float-left m-b-0 text-white"><i class="mdi mdi-account-multiple"></i> Usuarios</h4>
                        <?php if($this->session->userdata('tipo_usuario')=='SU'){ ?>
                        <a href="<?= base_url() ?>Usuarios/formulario_usuarios" class="float-right btn btn-sm btn-rounded btn-success txt-blanco"><i class="mdi mdi-plus"></i> Agregar usuario</a>
                        <?php }elseif($this->session->userdata('tipo_usuario')=='AD'){?>
                        <?php if(isset($posts)){?>
                                <div class="profile-text">
                                <input type="hidden" value="<?php echo $posts[0]->idusuarios?>">
                                </div>
                            <?php }?>
                        <a href="<?= base_url() ?>Usuarios/formulario_usuarios?idusuarios=<?php echo $posts[0]->idusuarios; ?>" class="float-right btn btn-sm btn-rounded btn-success txt-blanco"><i class="mdi mdi-plus"></i> Agregar usuario</a>
                        <?php } ?>
                      </div>
                      <div class="card-body">
                      <div class="table-responsive">
                        <table class="table color-bordered-table dark-bordered-table full-color-table full-dark-table hover-table">
                          <thead>
                            <tr>
                              <th>Nombre</th>
                              <th>Usuario</th>
                              <th>Grupo</th>
                              <th>Rol</th>
                              <th>Acción</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php if($this->session->userdata('tipo_usuario')=='SU'){ 
                                     foreach ($usuarios as $row){ ?>                              
                            <tr>
                              <td><?php echo $row->nombre; ?> <?php echo $row->apellidos; ?></td>
                              <td><?php echo $row->usuario; ?></td>
                              <td>
                                  <?php echo $row->grupo; ?>
                                  <input type="hidden" value=" <?php echo $row->grupo; ?>">
                              </td>
                              <td>
                              <?php if($row->tipo_usuario=='SU'){
                                        $su='SUPER ADMINISTRADOR';
                                ?>
                                    <span class="label label-info"><?php  echo $su; ?>
                                <?php } 
                                    if($row->tipo_usuario=='AD'){
                                        $ad='ADMINISTRADOR';
                                ?>
                                    <span class="label label-primary"><?php  echo $ad; ?></span>
                                <?php }
                                    if($row->tipo_usuario=='CO'){
                                        $co='CONSULTOR';?>
                                    <span class="label label-megna"><?php  echo $co; ?>
                                   <?php } ?>
                                  </span> 
                              </td>                                   
                              <td class="footable-editing footable-last-visible" style="display: table-cell;">
                                <div class="btn-group btn-group-xs" role="group">
                                    <a href="<?= base_url() ?>Usuarios/editarUsuario/?idusuario=<?php echo $row->idusuarios; ?>" class="btn btn-secondary txt-azul" title="Editar">
                                        <span class="mdi mdi-lead-pencil" aria-hidden="true"></span>
                                    </a>
                                    <a href="javascript:void(0)" onclick="editreg(<?= $row->idusuarios; ?>);" class="btn btn-secondary txt-verde" title="Editar Modal">
                                        <span class="mdi mdi-lead-pencil" aria-hidden="true"></span>
                                    </a>
                                    <a href="javascript:void(0)" onclick="delreg(<?= $row->idusuarios; ?>);" class="btn btn-secondary txt-rojo" title="Eliminar">
                                        <span class="mdi mdi-delete" aria-hidden="true"></span>
                                    </a>
                                    <a href="javascript:void(0)" onclick="getContacts(<?= $row->fk_grupou; ?>);" class="btn btn-secondary txt-verde" title="Contactos">
                                        <span class="mdi mdi-eye" aria-hidden="true"></span>
                                    </a>
                                </div>
                              </td>
                            </tr>
                                  <?php } 
                                  }?>
                            <script>

                                var table;
                                function redirect() {
                                    window.location.href = "<?php echo site_url('/Usuarios/usuarios'); ?>";
                                }

                                function delreg(id) {
                                    Swal({
                                        title: 'Estas Seguro de eliminarlo?',
                                        text: "Esta acción no se podra deshacer!",
                                        type: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'SI',
                                        cancelButtonText: 'NO'
                                    })
                                    .then((result) => {
                                        if (result.value) {
                                            $.ajax({
                                                url: '<?php echo site_url('Usuarios/EliminarUsuario')?>/'+id,
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

                                function getContacts(id) {
                                    table = $('#modal_tabla').DataTable({
                                        "processing": true, //Feature control the processing indicator.
                                        "serverSide": true, //Feature control DataTables' server-side processing mode.
                                        "order": [], //Initial no order.

                                        // Load data for the table's content from an Ajax source
                                        "ajax": {
                                            "url": '<?php echo site_url('Usuarios/contactos')?>/'+id,
                                            "type": "POST"
                                        },

                                        //Set column definition initialisation properties.
                                        "columnDefs": [
                                        { 
                                            "targets": [ -1 ], //last column
                                            "orderable": false, //set not orderable
                                        },
                                        ],

                                    });
                                    $('#modal_contac').modal('show');
                                    $('.modal-title').text('Contactos');
                                    table.destroy();
                                }

                                function loadGrupos() {
                                    $.ajax({
                                        url: '<?php echo site_url('Usuarios/grupos')?>/',
                                        type: 'GET',
                                        dataType: 'JSON'
                                    })
                                    .done(function(response){
                                        $('#Grupo').empty();
                                        $.each(response, function (i, item) {
                                            $('#Grupo').append($('<option>', { 
                                                value: item[0]['idgrupo'],
                                                text : item[0]['nombre']
                                            }));
                                        });
                                    })
                                    .fail(function(){
                                        swal('Oops...', 'Se tuvieron errores con AJAX !', 'error');
                                    });
                                }
                                
                                function editreg(id) {
                                    $('#modal_edit').modal('show');
                                    $('.modal-title').text('Editar registro');
                                    $('#idus').val(id);
                                    
                                    loadGrupos();
                                    
                                    /* $('#Rol').change(function () {
                                        var rol = document.getElementById("Rol");
                                        if (rol.value == 'SU') {
                                            $('#Grupo').empty().append('<option value="1">Todos</option>');
                                        }
                                        if(rol.value == 'AD' || rol.value == 'CO') {
                                            loadGrupos();
                                        }
                                    }); */

                                    $.ajax({
                                        url: '<?php echo site_url('Usuarios/editusuari')?>/'+id,
                                        type: 'GET',
                                        dataType: 'JSON'
                                    })
                                    .done(function(response){
                                        $('#Nombre').val(response[0]['nombre']);
                                        $('#Apellidos').val(response[0]['apellidos']);
                                        $('#Telefono').val(response[0]['telefono']);
                                        $('#Correo').val(response[0]['email']);
                                        $('#Rol').val(response[0]['tipo_usuario']);
                                        $('#Grupo').val(response[0]['fk_grupou']);
                                        var rol = document.getElementById("Rol").value;
                                        var gro = document.getElementById("Grupo").value;
                                        var idu = document.getElementById("idus").value;
                                        if (gro == '') {
                                            $('#Grupo').empty().append('<option value="1">Todos</option>');
                                        }
                                        console.log(id);
                                        console.log(rol);
                                        console.log(gro);
                                    })
                                    .fail(function(){
                                        swal('Oops...', 'Se tuvieron errores con AJAX !', 'error');
                                    });
                                }
                                
                            </script>
                            <?php if($this->session->userdata('tipo_usuario')=='AD'){ ?>
                                    <?php foreach ($usuario_grupo as $row){ ?>
                                        <tr>
                              <td><?php echo $row->nombre; ?> <?php echo $row->apellidos; ?></td>
                              <td><?php echo $row->usuario; ?></td>
                              <td>
                                  <?php echo $row->grupo; ?>
                                  <input type="hidden" value=" <?php echo $row->grupo; ?>">
                              </td>
                              <td>
                              <?php if($row->tipo_usuario=='SU'){
                                        $su='SUPER ADMINISTRADOR';
                                ?>
                                    <span class="label label-info"><?php  echo $su; ?>
                                <?php } 
                                    if($row->tipo_usuario=='AD'){
                                        $ad='ADMINISTRADOR';
                                ?>
                                    <span class="label label-primary"><?php  echo $ad; ?></span>
                                    
                                <?php }
                                    if($row->tipo_usuario=='CO'){
                                        $co='CONSULTOR';?>
                                    <span class="label label-megna"><?php  echo $co; ?>
                                   <?php } ?>
                                  </span> 
                              </td>                                   
                              <td class="footable-editing footable-last-visible" style="display: table-cell;">
                                <div class="btn-group btn-group-xs" role="group">
                                    <a href="<?= base_url() ?>Usuarios/editarUsuario/?idusuario=<?php echo $row->idusuarios; ?>">
                                        <button type="button" class="btn btn-secondary txt-azul" title="Editar">
                                          <span class="mdi mdi-lead-pencil" aria-hidden="true"></span>
                                        </button>
                                    </a>
                                  <button class="btn btn-secondary txt-rojo" data-toggle="modal" data-target="#myModal" title="Eliminar">
                                    <span class="mdi mdi-delete" aria-hidden="true"></span>
                                  </button>
                                </div>
                              </td>
                            </tr>
                                    <?php 
                                    }   
                                }?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- Modal -->
            <div class="container">   
                
                <div class="modal fade" id="modal_contac" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title"></h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="table-responsive">
                                    <table id="modal_tabla" class="table color-bordered-table dark-bordered-table full-color-table full-dark-table hover-table" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Apellidos</th>
                                                <th>Telefono</th>
                                                <th>Correo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>  
                </div>

                <div class="modal fade" id="modal_edit" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title"></h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <form action="#" id="form" class="form-horizontal">
                                    <input type="hidden" value="" name="idus" id="idus"/> 
                                    <div class="form-body">
                                        
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 text-center">Nombre</label>
                                            <div class="col-md-9">
                                                <input name="Nombre" id="Nombre" placeholder="Nombre" class="form-control" type="text">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 text-center">Apellidos</label>
                                            <div class="col-md-9">
                                                <input name="Apellidos" id="Apellidos" placeholder="Apellidos" class="form-control" type="text">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 text-center">Teléfono</label>
                                            <div class="col-md-9">
                                                <input name="Teléfono" id="Telefono" placeholder="Teléfono" class="form-control" type="text">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 text-center">Correo</label>
                                            <div class="col-md-9">
                                                <input name="Correo" id="Correo" placeholder="Correo" class="form-control" type="text">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label col-md-3 text-center">Rol</label>
                                            <div class="col-md-9">
                                                <select name="Rol" id="Rol" class="form-control">
                                                    <option value="SU">Superusuario</option>
                                                    <option value="AD">Administrador</option>
                                                    <option value="CO">Consultor</option>
                                                </select>
                                                <span class="help-block"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label col-md-3 text-center">Grupo</label>
                                            <div class="col-md-9">
                                                <select name="Grupo" id="Grupo" class="form-control">
                                                </select>
                                                <span class="help-block"></span>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>  
                </div>

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
   
</body>

</div>
</html>
