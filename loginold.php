<?php
include_once 'includes_sirs/db_connect.php';
include_once 'includes_sirs/functions.php';
 
sec_session_start();
 
/*if (login_check($mysqli) == true) 
{
    $logged = 'in';
} else 
{
    $logged = 'out';
}*/
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <title>Maharashta Gov Women Service | Login</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta name="MobileOptimized" content="320">
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2_metro.css" />
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME STYLES -->
        <link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="assets/css/pages/login-soft.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>

    <body class="login">
        <?php
        if (isset($_GET['error'])) 
		{
            echo '<script language="javascript">';
			echo 'alert("Invalid Username or Password")';
			echo '</script>';
        }
        ?>
            <div class="logo"> <img src="assets/img/girl1.png" alt="Login" width="200" /> </div>
            <!-- END LOGO -->
            <!-- BEGIN LOGIN -->
            <div class="content">
                <!-- BEGIN LOGIN FORM -->
                <form class="login-form" action="includes/process_login.php" method="post" name="login_form">
                    <h3 class="form-title">Login to your account</h3>
                    <div class="alert alert-error hide">
                        <button class="close" data-dismiss="alert"></button> <span>Enter any username and password.</span> </div>
                    <div class="form-group">
                        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                        <label class="control-label visible-ie8 visible-ie9">Username</label>
                        <div class="input-icon"> <i class="icon-user"></i>
                            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="email" onkeydown="if (event.keyCode == 13) { formhash(this.form, this.form.password); return false; }" /> </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label visible-ie8 visible-ie9">Password</label>
                        <div class="input-icon"> <i class="icon-lock"></i>
                            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" id="password" onkeydown="if (event.keyCode == 13) { formhash(this.form, this.form.password); return false; }" /> </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn blue pull-right" onclick="formhash(this.form, this.form.password);"> Login <i class="m-icon-swapright m-icon-white"></i> </button>
                    </div>
                </form>
            </div>
            <!-- END LOGIN -->
            <!-- BEGIN COPYRIGHT -->
            <div class="copyright"> 2017 &copy; <a href="localhost/Anuja/index.html"></a> </div>
            <!-- END COPYRIGHT -->
            <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
            <!-- BEGIN CORE PLUGINS -->
            <!--[if lt IE 9]>
   <script src="assets/plugins/respond.min.js"></script>
   <script src="assets/plugins/excanvas.min.js"></script> 
   <![endif]-->
            <script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
            <script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
            <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
            <script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
            <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
            <script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
            <script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
            <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
            <!-- END CORE PLUGINS -->
            <!-- BEGIN PAGE LEVEL PLUGINS -->
            <script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
            <script src="assets/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            <script src="assets/scripts/app.js" type="text/javascript"></script>
            <script src="assets/scripts/login-soft.js" type="text/javascript"></script>
            <!-- END PAGE LEVEL SCRIPTS -->
            <script type="text/JavaScript" src="js/sha512.js"></script>
            <script type="text/JavaScript" src="js/forms.js"></script>
            <script>
                jQuery(document).ready(function () {
                    App.init();
                    Login.init();
                });
            </script>
            <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->

    </html>