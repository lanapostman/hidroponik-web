<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>
        <?php if($this->uri->segment(1)==""){echo "Home | Sistem Informasi Masuk Ruangan";} ?>
        <?php if($this->uri->segment(1)=="ruangan"){echo "Ruangan | Sistem Informasi Masuk Ruangan";} ?>
        <?php if($this->uri->segment(1)=="tempat"){echo "Tempat | Sistem Informasi Masuk Ruangan";} ?>
    </title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Template -->

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url('bootstrap/plugins/bootstrap/css/bootstrap.css'); ?>" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="<?php echo base_url('bootstrap/plugins/node-waves/waves.css'); ?>" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="<?php echo base_url('bootstrap/plugins/animate-css/animate.css'); ?>" rel="stylesheet" />
    <!-- Morris Chart Css-->
    <link href="<?php echo base_url('bootstrap/plugins/morrisjs/morris.css'); ?>" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="<?php echo base_url('bootstrap/css/style.css'); ?>" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url('bootstrap/css/themes/all-themes.css'); ?>" rel="stylesheet" />


    <!-- Tempalte End -->

    <!-- Basic Form Elements -->

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url('bootstrap/plugins/bootstrap/css/bootstrap.css'); ?>" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="<?php echo base_url('bootstrap/plugins/node-waves/waves.css'); ?>" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="<?php echo base_url('bootstrap/plugins/animate-css/animate.css'); ?>" rel="stylesheet" />
    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="<?php echo base_url('bootstrap/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker'); ?>.css" rel="stylesheet" />
    <!-- Wait Me Css -->
    <link href="<?php echo base_url('bootstrap/plugins/waitme/waitMe.css'); ?>" rel="stylesheet" />
    <!-- Bootstrap Select Css -->
    <link href="<?php echo base_url('bootstrap/plugins/bootstrap-select/css/bootstrap-select.css'); ?>" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="<?php echo base_url('bootstrap/css/style.css'); ?>" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url('bootstrap/css/themes/all-themes.css'); ?>" rel="stylesheet" />

    <!-- Basic Form Elements End -->

    <!-- Form Examples -->

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url('bootstrap/plugins/bootstrap/css/bootstrap.css'); ?>" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="<?php echo base_url('bootstrap/plugins/node-waves/waves.css'); ?>" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="<?php echo base_url('bootstrap/plugins/animate-css/animate.css'); ?>" rel="stylesheet" />
    <!-- Sweet Alert Css -->
    <link href="<?php echo base_url('bootstrap/plugins/sweetalert/sweetalert.css'); ?>" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="<?php echo base_url('bootstrap/css/style.css'); ?>" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url('bootstrap/css/themes/all-themes.css'); ?>" rel="stylesheet" />

    <!-- Form Examples End -->


    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url('bootstrap/css/themes/all-themes.css'); ?>" rel="stylesheet" />

    <!-- Jquery Datatable -->
    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url('bootstrap/plugins/bootstrap/css/bootstrap.css'); ?>" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="<?php echo base_url('bootstrap/plugins/node-waves/waves.css'); ?>" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="<?php echo base_url('bootstrap/plugins/animate-css/animate.css'); ?>" rel="stylesheet" />
    <!-- JQuery DataTable Css -->
    <link href="<?php echo base_url('bootstrap/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css'); ?>" rel="stylesheet">
    <!-- Custom Css -->
    <link href="<?php echo base_url('bootstrap/css/style.css'); ?>" rel="stylesheet">
    <!-- Jquery Datatable End -->

    

    
</head>

<body class="theme-cyan">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">SIMARU</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    
                    <!-- #END# Tasks -->
                    <li class="pull-left"><a href="<?php echo base_url('login/logout'); ?>">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url('assets/images/user.png'); ?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="<?php if($this->uri->segment(1)==""){echo "active";} ?>">
                        <a href="<?php echo base_url(); ?>">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="<?php if($this->uri->segment(1)=="ruangan"){echo "active";} ?>">
                        <a href="<?php echo base_url('ruangan'); ?>">
                            <i class="material-icons">account_balance</i>
                            <span>Ruangan</span>
                        </a>
                    </li>
                    <li class="<?php if($this->uri->segment(1)=="tempat"){echo "active";} ?>">
                        <a href="<?php echo base_url('tempat'); ?>">
                            <i class="material-icons">room</i>
                            <span>Tempat</span>
                        </a>
                    </li>
                    <li class="<?php if($this->uri->segment(1)=="pendaftaran"){echo "active";} ?>">
                        <a href="<?php echo base_url('pendaftaran'); ?>">
                            <i class="material-icons">assignment</i>
                            <span>Pendaftaran</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <?php if($this->session->flashdata('user_loggedin')) : ?>
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>' ?>
            <?php endif; ?>