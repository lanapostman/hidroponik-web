<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Login | Sistem Monitoring Hidroponik</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url('bootstrap/plugins/bootstrap/css/bootstrap.css');?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url('bootstrap/plugins/node-waves/waves.css');?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url('bootstrap/plugins/animate-css/animate.css');?>" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url('bootstrap/css/style.css');?>" rel="stylesheet">
</head>
<?php if($this->session->flashdata('username')) : ?>
    <?php echo '<div class="alert bg-red alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                        '.$this->session->flashdata('username').'
                </div>'?>
<?php endif; ?>
<body class="login-page" style="background-color: #2196F3;">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Login<b>HIDROPONIK</b></a>
            <small>Sistem Monitoring Hidroponik</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST">
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url('bootstrap/plugins/jquery/jquery.min.js');?>"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url('bootstrap/plugins/bootstrap/js/bootstrap.js');?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url('bootstrap/plugins/node-waves/waves.js');?>"></script>

    <!-- Validation Plugin Js -->
    <script src="<?php echo base_url('bootstrap/plugins/jquery-validation/jquery.validate.js');?>"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url('bootstrap/js/admin.js');?>"></script>
    <script src="<?php echo base_url('bootstrap/js/pages/examples/sign-in.js');?>"></script>
</body>

</html>