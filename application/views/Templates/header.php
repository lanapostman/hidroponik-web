<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>
        HIDROPONIK AIR
    </title>
    
    <!-- Step 1 - Including vue  -->
    <script type="text/javascript" src="https://unpkg.com/vue@2.3.3"></script>
    <!-- Step 2 - Including vue-fusioncharts component -->
    <script type="text/javascript" src="https://unpkg.com/vue-fusioncharts/dist/vue-fusioncharts.min.js"></script>
    <!-- Step 3 - Including the fusioncharts core library -->
    <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
    <!-- Step 4 - Including the fusion theme -->
    <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
    

    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">



    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

   <!-- Toastr -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url('bootstrap/plugins/bootstrap/css/bootstrap.css'); ?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url('bootstrap/plugins/node-waves/waves.css'); ?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url('bootstrap/plugins/animate-css/animate.css'); ?>" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="<?php echo base_url('bootstrap/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet'); ?>" />

    <!-- Datetime Picker Css -->
    <link href="<?php echo base_url('bootstrap/plugins/jquery/jquery.datetimepicker.min.css'); ?>" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="<?php echo base_url('bootstrap/plugins/waitme/waitMe.css'); ?>" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="<?php echo base_url('bootstrap/plugins/bootstrap-select/css/bootstrap-select.css'); ?>" rel="stylesheet" />

    <!-- Sweet Alert Css -->
    <link href="<?php echo base_url('bootstrap/plugins/sweetalert/sweetalert.css'); ?>" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="<?php echo base_url('bootstrap/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css'); ?>" rel="stylesheet">

    <!-- Custom Css -->
    <link href="<?php echo base_url('bootstrap/css/style.css'); ?>" rel="stylesheet">

    <!-- Validate Css -->
    <link href="<?php echo base_url('bootstrap/css/validasi.css'); ?>" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url('bootstrap/css/themes/all-themes.css'); ?>" rel="stylesheet" />

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url('bootstrap/plugins/jquery/jquery.min.js');?>"></script>

    <!-- Multi Select Css -->
    <link href="<?php echo base_url('bootstrap/css/bootstrap-multiselect.css'); ?>" rel="stylesheet">

    <!-- Multi Select Plugin Js -->
    <script src="<?php echo base_url('bootstrap/js/bootstrap-multiselect.js'); ?>"></script>

    <style type="text/css">
    body {
        font-family: 'Varela Round', sans-serif;
    }
    .modal-confirm {        
        color: #636363;
        width: 400px;
    }
    .modal-confirm .modal-content {
        padding: 20px;
        border-radius: 5px;
        border: none;
        text-align: center;
        font-size: 14px;
    }
    .modal-confirm .modal-header {
        border-bottom: none;   
        position: relative;
    }
    .modal-confirm h4 {
        text-align: center;
        font-size: 26px;
        margin: 30px 0 -10px;
    }
    .modal-confirm .close {
        position: absolute;
        top: -5px;
        right: -2px;
    }
    .modal-confirm .modal-body {
        color: #999;
    }
    .modal-confirm .modal-footer {
        border: none;
        text-align: center;     
        border-radius: 5px;
        font-size: 13px;
        padding: 10px 15px 25px;
    }
    .modal-confirm .modal-footer a {
        color: #999;
    }       
    .modal-confirm .icon-box {
        width: 80px;
        height: 80px;
        margin: 0 auto;
        border-radius: 50%;
        z-index: 9;
        text-align: center;
        border: 3px solid #f15e5e;
    }
    .modal-confirm .icon-box i {
        color: #f15e5e;
        font-size: 46px;
        display: inline-block;
        margin-top: 13px;
    }
    .modal-confirm .btn {
        color: #fff;
        border-radius: 4px;
        background: #60c7c1;
        text-decoration: none;
        transition: all 0.4s;
        line-height: normal;
        min-width: 120px;
        border: none;
        min-height: 40px;
        border-radius: 3px;
        margin: 0 5px;
        outline: none !important;
    }
    .modal-confirm .btn-info {
        background: #c1c1c1;
    }
    .modal-confirm .btn-info:hover, .modal-confirm .btn-info:focus {
        background: #a8a8a8;
    }
    .modal-confirm .btn-danger {
        background: #f15e5e;
    }
    .modal-confirm .btn-danger:hover, .modal-confirm .btn-danger:focus {
        background: #ee3535;
    }
    .trigger-btn {
        display: inline-block;
        margin: 100px auto;
    }
</style>

<style>
.tooltip1 {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip1 .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -60px;
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip1 .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip1:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}
</style>

<style type="text/css">
    .table-wrapper-scroll-y {
        display: block;
        max-height: 200px;
        overflow-y: auto;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }
</style>

   
</head>

<body class="theme-blue">
    <!-- Page Loader -->
    
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">MONITORING HIDROPONIK</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    
                    <!-- #END# Tasks -->
                    
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('username')?></a>
                        <ul class="dropdown-menu pull-left  ">
                            <li><a href="<?php echo base_url('login/logout'); ?>"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="<?php if($this->uri->segment(1)==""){echo "active";} ?>">
                        <a href="<?php echo base_url(''); ?>">
                            <i class="material-icons">computer</i>
                            <span>Monitoring</span>
                        </a>
                    </li>
                    <li class="<?php if($this->uri->segment(1)=="history"){echo "active";} ?>">
                        <a href="<?php echo base_url('history'); ?>">
                            <i class="material-icons">history</i>
                            <span>Log History</span>
                        </a>
                    </li>
                    <li class="<?php if($this->uri->segment(1)=="tanaman"){echo "active";} ?>">
                        <a href="<?php echo base_url('tanaman'); ?>">
                            <i class="material-icons">spa</i>
                            <span>Data Tanaman</span>
                        </a>
                    </li>
                    <li class="<?php if($this->uri->segment(1)=="siklus"){echo "active";} ?>">
                        <a href="<?php echo base_url('siklus'); ?>">
                            <i class="material-icons">cached</i>
                            <span>Siklus Tanaman</span>
                        </a>
                    </li>
                    <li class="<?php if($this->uri->segment(1)=="prediksi"){echo "active";} ?>">
                        <a href="<?php echo base_url('prediksi'); ?>">
                            <i class="material-icons">timeline</i>
                            <span>Prediksi Hasil Panen</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; <?php echo date("Y"); ?> All Rights Reserved By: <a href="" target="_blank">lanapostman</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 0.4
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