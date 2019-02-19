<!DOCTYPE html>
<html lang="es_MX">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Reporteador">
    <meta name="author" content="WarrioPracticantes">
    <!-- Favicon icon -->
    <link rel="icon" type="image/ico" sizes="16x16" href="../../../assets/images/favicon.ico">
    <title>Reporteador</title>
    <!-- Bootstrap Core CSS -->
    <link href="../../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../../../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../../../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../../../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="../../../assets/plugins/css-chart/css-chart.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="../../../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../../assets/css/style.css" rel="stylesheet">
    <link href="../../../assets/css/style2.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="../../../assets/css/colors/red.css" id="theme" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="../../../assets/icons/material-design-iconic-font/css/materialdesignicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.33.1/dist/sweetalert2.all.min.js"></script>
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <link rel="stylesheet" href="../../../assets/plugins/sweetalert2/sweetalert2.min.css">
    <!--<link rel="stylesheet" href="http://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css">-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and mfile:///home/sentrack/Documentos/edia queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php if($this->session->flashdata('validate')) {?>
        <script>
            $(document).ready(function()
            {
                $("#mostrarmodal").modal("show");
            });
        </script>
    <?php } ?>
</head>
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
                    <img src="../../../assets/images/Logo WL BLANCO_v.png" height="100px" alt="homepage" class="light-logo">
                </div>
            </div>
            <div class="login-box card bg-papaya">
               <?php echo form_open("Login/change_pass",'class="card-body"','class="form-material"','class="form-horizontal"','id="olvpassform"'); ?>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <h1 class="txt-blanco m-b-15 text-center">WReporter</h1>
                            <h3 class="txt-blanco m-b-15 text-center">Recuperar contraseña</h3>
                            <p class="text-muted txt-blanco text-center">Ingrese su nueva contraseña!</p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <input class="form-control" type="hidden" name="idu" value="<?= $iu ?>">
                        <input class="form-control" type="hidden" name="tkn" value="<?= $tkn ?>">
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="pass" placeholder="Nueva contraseña" required>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="pass2" placeholder="Repetir nueva contraseña" required>
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-rounded bg-gris btn-block text-uppercase waves-effect waves-light" type="submit">Enviar</button>
                        </div>
                    </div>
                <?php echo form_close(); ?>
            </div>                      
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Se encontraron los siguientes errores:</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger alert-dismissible fade show">
                        <?= $this->session->flashdata('validate'); ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
                </div>
            </div>
        </div>
    </div>
    <script src="../../../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../../assets/plugins/popper/popper.min.js"></script>
    <script src="../../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../../assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="../../../assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../../assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../../../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../../../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="../../../assets/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <!--<script src="assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>-->
    <!--c3 JavaScript -->
    <script src="../../../assets/plugins/d3/d3.min.js"></script>
    <script src="../../../assets/plugins/c3-master/c3.min.js"></script>
    <script src="../../../assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Chart JS -->
    <!--<script src="js/dashboard1.js"></script>-->
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../../../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>