<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
    
        <div class="login-register bg-gradient">
            <div class="d-flex no-block align-items-center m-b-15">
                <div class="m-auto">
                    <img src="assets/images/Logo WL BLANCO_v.png" height="100px" alt="homepage" class="light-logo">
                </div>
            </div>
          
            <div class="login-box card bg-papaya">
                
                    <h1 class="box-title m-b-40 text-center txt-blanco">Reporteador</h1>
                    <?php echo form_open("Login/proceso_login",'class="card-body"','class="form-material"','class="form-horizontal"','id="loginform"'); ?>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control placeOk" type="text" required="" placeholder="Usuario" name="email"> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control placeOk" type="password" required="" placeholder="Contraseña" name="pass"> </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-rounded bg-gris btn-block text-uppercase waves-effect waves-light" type="submit">Iniciar Sesión</button>
                            <?php echo form_close(); ?>  
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="d-flex no-block align-items-center">
                            <div class="m-auto">
                                 <a href="javascript:void(0)" id="to-recover" class="text-muted"><i class="fa fa-lock m-r-5"></i>¿Olvidaste la contraseña?</a> 
                            </div>
                         </div>
                     </div>
               
                <form class="form-horizontal" id="recoverform" action="index.html">
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h3 class="txt-blanco m-b-15 text-center">Recuperar contraseña</h3>
                            <p class="text-muted txt-blanco text-center">Ingrese su correo electrónico y las instrucciones serán enviadas a usted!</p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" placeholder="Correo">
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-rounded bg-gris btn-block text-uppercase waves-effect waves-light" type="submit">Enviar</button>
                        </div>
                    </div>
                </form>                            
            </div>
        </div>
    </section>
</body>
</html>