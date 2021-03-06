<?php
    if($this->session->userdata('tipo_usuario')=='CO'){ 
        redirect(base_url()."Roles/consultor"); 
    }
?>
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
                <!--NOTIFICACIONES CON FLASHDATA-->
                    <?php   if($this->session->flashdata('registro')){?>
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
                        <?php }if($this->session->flashdata('editar')){?>
                        <script>
                            $(document).ready(function () {
                                $.toast({
                                    heading: 'Éxito',
                                    text: '<?= $this->session->flashdata('editar'); ?>',
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
                        <?php }if($this->session->flashdata('usuario_existe')){?>
                        <script>
                            $(document).ready(function () {
                                $.toast({
                                    heading: 'Advertencia',
                                    text: '<?= $this->session->flashdata('usuario_existe'); ?>',
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
                <?php  
                        }
                ?>
                <!--FIN DE NOTIFICACIONES-->
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
                        <?php if($this->session->userdata('tipo_usuario')=='AD'){ ?>
                        <table class="table color-bordered-table dark-bordered-table full-color-table full-dark-table hover-table">
                            <thead>
                                  <tr>
                                    <th>Nombre</th>
                                    <th>Usuario</th>
                                    <th>Grupo</th>
                                    <th>Rol</th>
                                    <th>Accion</th>
                                  </tr>
                            </thead>
                        <?php } ?>
                        <!-- Table -->
                        <?php if($this->session->userdata('tipo_usuario')=='SU'){ ?>
                            <table id='empTable' class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Usuario</th>
                                    <th>Grupo</th>
                                    <th>Rol</th>
                                    <th>Accion</th>
                                  </tr>
                                </thead>
                            </table>
                            <!-- Script -->
                            <script type="text/javascript">
                            $(document).ready(function(){
                             $('#empTable').DataTable({
                                'language':{
                                    "sProcessing":  "Procesando",
                                    "sLengthMenu":  "Mostrar _MENU_ registros",
                                    "sInfo":        "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                                    "sInfoEmpty":   "Mostrando registros del 0 al 0 de un total de 0 registros",
                                    "sSearch":      "Buscar:",
                                    "oPaginate": {
                                        "sFirst":   "Primero",
                                        "sLast":    "Último",
                                        "sNext":    "Siguiente",
                                        "sPrevious":"Anterior",
                                    }
                                },
                               'processing': true,
                               'serverSide': true,
                               'serverMethod': 'post',
                               'ajax': {
                                  'url':'<?=base_url()?>index.php/Usuarios/empList'
                               },
                               'columns': [
                                  { data: 'nombre' },
                                  { data: 'apellidos' },
                                  { data: 'usuario' },
                                  { data: 'grupo' },
                                  { data: 'tipo_usuario' },
                                  { data: 'actions' },
                               ]
                             });
                            });
                            </script>
                        <?php } ?>
                            <script>
                                var table;
                                function redirect() {
                                    <?php if($this->session->userdata('tipo_usuario')=='SU'){ ?>
                                    window.location.href = "<?php echo site_url('/Usuarios/usuarios'); ?>";
                                    <?php }
                                    if($this->session->userdata('tipo_usuario')=='AD'){ ?>
                                    window.location.href = "<?php echo site_url('/Usuarios/usuarios'); ?>?fk_grupou=<?php echo $posts[0]->fk_grupou; ?>";
                                    <?php }?>
                                }
                                
                                function delreg(id) {
                                    Swal({
                                        title: 'Estas Seguro de eliminarlo?',
                                        text: "Esta acción no se podra deshacer!",
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
                                        <?php if($this->session->userdata('tipo_usuario')=='SU'){ ?>
                                            url: '<?php echo site_url('Usuarios/grupos')?>/',
                                        <?php }if($this->session->userdata('tipo_usuario')=='AD'){ ?>
                                            url: '<?php echo site_url('Usuarios/grupo/'.$this->session->userdata('grupo'))?>/',
                                        <?php } ?>
                                        type: 'GET',
                                        dataType: 'JSON'
                                    })
                                    .done(function(response){
                                        $('#Grupo').empty();
                                        $.each(response, function (i, item) {
                                            $('#Grupo').append($('<option>', { 
                                                value: item[0]['idgrupo'] ,
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

                                    $.ajax({
                                        <?php if($this->session->userdata('tipo_usuario')=='SU'){ ?>
                                            url: '<?php echo site_url('Usuarios/editusuari')?>/'+id,
                                        <?php } ?>
                                        <?php if($this->session->userdata('tipo_usuario')=='AD'){ ?>
                                            url: '<?php echo site_url('Usuarios/editusuarioAdmin')?>/'+id,
                                        <?php } ?>
                                        type: 'GET',
                                        dataType: 'JSON'
                                    })
                                    .done(function(response){
                                        <?php if($this->session->userdata('tipo_usuario')=='AD'){ ?>
                                        $('#Grupo').empty().append('<option value="'+response[0]['idgrupo']+'">'+response[0]['grupo']+'</option>');
                                        loadGrupos();
                                        <?php } ?>
                                        $('#Nombre').val(response[0]['nombre']);
                                        $('#Apellidos').val(response[0]['apellidos']);
                                        $('#Telefono').val(response[0]['telefono']);
                                        $('#Usuario').val(response[0]['usuario']);
                                        $('#Rol').val(response[0]['tipo_usuario']);
                                        $('#Grupo').val(response[0]['fk_grupou']);
                                
                                        var gro = document.getElementById("Grupo").value;
                                        var idu = document.getElementById("idus").value;
                                        <?php if($this->session->userdata('tipo_usuario')=='SU'){?>
                                            if (gro == '') {
                                                $('#Grupo').empty().append('<option value="1">Todos</option>');
                                            }
                                        <?php } ?>
                                        <?php if($this->session->userdata('tipo_usuario')=='AD'){?>
                                            $('#Rol').empty().append('<option value="AD">Administrador</option><option value="CO">Consultor</option>');
                                        <?php } ?>
                                    })
                                    .fail(function(){
                                        swal('Oops...', 'Se tuvieron errores con AJAX !', 'error');
                                    });
                                }
                                function updPass(cu) {
                                    $('#edit_pass').modal('show');
                                    document.getElementById('form_pass').reset();
                                    $('#idps').val(cu); 
                                }

                                $(document).ready(function() {
                                    <?php if($this->session->userdata('tipo_usuario')=='SU'){ ?>
                                    $('#Rol').change(function () {
                                        var rol = document.getElementById("Rol").value;
                                        if (rol == 'SU') {
                                            $('#Grupo').empty().append('<option value="1">Todos</option>');
                                        }
                                        if(rol == 'AD' || rol == 'CO') {
                                            loadGrupos();
                                        }
                                    });
                                    <?php } ?>
                              
                                    $('#form-edit').submit(function (event) {
                                        var datos = $('#form-edit').serialize();

                                        $.ajax({
                                            url: "<?php echo site_url('Usuarios/actusuari')?>",
                                            type: "POST",
                                            data: datos,
                                            beforeSend: function() {
                                                $("#Guardar").html("Guardando...");
                                            }
                                        })
                                        .done(function(reponse){
                                            swal({
                                                title: 'Modificando...',
                                                text: '',
                                                type: 'success',
                                                showConfirmButton: false
                                            });
                                            $('#modal_edit').modal('hide');
                                            setTimeout(redirect, 1500);
                                        })
                                        .fail(function(){
                                            swal('Oops...', 'Se tuvieron errores con AJAX !', 'error');
                                        });
                                        event.preventDefault();
                                    });

                                    $('#form_pass').submit(function (event) {
                                        var datos = $('#form_pass').serialize();

                                        $.ajax({
                                            url: "<?php echo site_url('Usuarios/updpass')?>",
                                            type: "POST",
                                            data: datos,
                                            beforeSend: function() {
                                                $("#GuardarPass").html("Guardando...");
                                            }
                                        })
                                        .done(function(repons){
                                            $("#GuardarPass").html("Guardar");
                                            if(repons == 1){
                                                swal('Guardado','','success');
                                                setTimeout(redirect, 1000);
                                            }else {
                                                $('#form_pass').modal('hide');
                                                swal('Se han encontrado errores:',repons,'error');
                                            }
                                            // setTimeout(redirect, 1500);
                                        })
                                        .fail(function(){
                                            swal('Oops...', 'Se tuvieron errores con AJAX !', 'error');
                                        });
                                        event.preventDefault();
                                    });
                                });
                                
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
                                    <a href="javascript:void(0)" onclick="editreg(<?= $row->idusuarios; ?>);" class="btn btn-secondary txt-azul" title="Editar Modal">
                                        <span class="mdi mdi-lead-pencil" aria-hidden="true"></span>
                                    </a>
                                    <a href="javascript:void(0)" onclick="delreg(<?= $row->idusuarios; ?>);" class="btn btn-secondary txt-rojo" title="Eliminar">
                                        <span class="mdi mdi-delete" aria-hidden="true"></span>
                                    </a>
                                    <a href="javascript:void(0)" onclick="getContacts(<?= $row->idusuarios; ?>);" class="btn btn-secondary txt-verde" title="Contactos">
                                        <span class="mdi mdi-eye" aria-hidden="true"></span>
                                    </a>
                                    <a href="javascript:void(0)" onclick="updPass(<?= $row->idusuarios; ?>);" class="btn btn-secondary txt-negro" title="Cambiar Contraseña">
                                        <span class="mdi mdi-lock" aria-hidden="true"></span>
                                    </a>
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
                                    <table id="modal_tabla" class="table   full-dark-table hover-table" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Apellidos</th>
                                                <th>Telefono</th>
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
                                <form id="form-edit" class="form-horizontal" method="POST">
                                    <input type="hidden" value="" name="idus" id="idus"/> 
                                    <div class="form-body">
                                        
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 text-center">Nombre</label>
                                            <div class="col-md-9">
                                                <input name="Nombre" id="Nombre" placeholder="Nombre" class="form-control" type="text" style="text-transform: uppercase;">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 text-center">Apellidos</label>
                                            <div class="col-md-9">
                                                <input name="Apellidos" id="Apellidos" placeholder="Apellidos" class="form-control" type="text" style="text-transform: uppercase;">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 text-center">Teléfono</label>
                                            <div class="col-md-9">
                                                <input name="Telefono" id="Telefono" placeholder="Teléfono" class="form-control" type="text" pattern="[0-9]{8,15}">
                                                <span class="help-block">El número debe contener minimo 8 números y máximo 15.</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 text-center">Usuario</label>
                                            <div class="col-md-9">
                                                <input name="Usuario" id="Usuario" placeholder="Usuario" class="form-control" type="text">
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

                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-6 offset-sm-3">
                                                            <center>
                                                            <button class="btn btn-success" id="Guardar"> <i class="mdi mdi-content-save"></i> Guardar</button>
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="mdi mdi-close-circle"></i> Cancelar</button>
                                                            </center>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>  
                </div>

                <div class="modal fade" id="edit_pass" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Cambiar contraseña</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <form id="form_pass" class="form-horizontal" method="POST">
                                    <input type="hidden" value="" name="idps" id="idps"/> 
                                    <div class="form-body">
                                        
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 text-center">Nueva contraseña</label>
                                            <div class="col-md-9">
                                                <input name="new_pass" id="new_pass" placeholder="Nueva contraseña" class="form-control" type="password">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 text-center">Repetir nueva contraseña</label>
                                            <div class="col-md-9">
                                                <input name="new_pass2" id="new_pass2" placeholder="Repetir nueva contraseña" class="form-control" type="password">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>

                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-6 offset-sm-3">
                                                            <center>
                                                            <button class="btn btn-success" id="GuardarPass"> <i class="mdi mdi-content-save"></i> Guardar</button>
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="mdi mdi-close-circle"></i> Cancelar</button>
                                                            </center>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </form>
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
            