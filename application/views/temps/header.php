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
    <link rel="icon" type="image/ico" sizes="16x16" href="../assets/images/favicon.ico">
    <title>Reporteador</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="../assets/plugins/css-chart/css-chart.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style2.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="../assets/css/colors/red.css" id="theme" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="../assets/icons/material-design-iconic-font/css/materialdesignicons.min.css">
    <!--<link rel="stylesheet" href="http://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css">-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and mfile:///home/sentrack/Documentos/edia queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/logo-principal-mini.png" width="33px" height="33px" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../assets/images/logo-principal-mini.png" width="33px" height="33px" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                            <!-- dark Logo text -->
                            <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->
                            <font class="h1title">Reporteador</font>
                        </span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark"
                                href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark"
                                href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/user.png" alt="user"
                                    class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                        <center><div class="u-img"><img src="../assets/images/users/user.png" alt="user"></div></center>
                                        <center><div class="u-text">
                                            <br/>
                                            <?php foreach($posts as $post){?>
                                                <h4><?php echo $post->nombre;?> <?php echo $post->apellidos;?></h4>
                                                <p class="text-muted"><?php echo $post->email;?></p>
                                            <?php } ?>
                                            </div></center>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?= base_url() ?>Login/perfil"><i class="ti-user"></i> Mi Perfil</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?= base_url() ?>Login/vistaPassword"><i class="ti-settings"></i> Cuenta</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?= base_url() ?>Login/logout"><i class="fa fa-power-off"></i> Salir</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>