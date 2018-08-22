<?php
include_once 'includes_sirs/db_connect.php';
include_once 'includes_sirs/functions.php';
 
sec_session_start();
?>
    <!DOCTYPE html>
    <!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
    <!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
    <!--[if !IE]><!-->
    <html lang="en" class="no-js">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Maharashta Gov Women Service | BSY</title>
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
        <!-- BEGIN THEME STYLES -->
        <link href="assets/css/print.css" rel="stylesheet" type="text/css" media="print" />
        <link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="assets/css/pages/invoice.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->

    <body class="page-header-fixed">
        <!-- BEGIN HEADER -->
        <div class="header navbar navbar-inverse navbar-fixed-top">
            <!-- BEGIN TOP NAVIGATION BAR -->
            <div class="header-inner">
                <!-- BEGIN LOGO -->
                <a class="navbar-brand" href="index.php"> <img src="assets/img/logo.png" alt="logo" class="img-responsive" width="120" /> </a>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <img src="assets/img/menu-toggler.png" alt="" /> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <ul class="nav navbar-nav pull-right">
                   
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END TOP NAVIGATION BAR -->
        </div>
        <!-- END HEADER -->
        <div class="clearfix"></div>
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN PAGE -->
            <div class="page-content">
                <!-- BEGIN PAGE HEADER-->
                <div class="row hidden-print">
                    <div class="col-md-12">
                        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                        <h3 class="page-title">
                Balika Samridhi Yojana (BSY) 
               </h3>
                        <!-- END PAGE TITLE & BREADCRUMB-->
                        <div class="col-xs-6 invoice-logo-space"><img src="assets/img/logo.png" alt="" width="300" /> </div>
                    </div>
                </div>
                <!-- END PAGE HEADER-->
                <!-- BEGIN PAGE CONTENT-->
                <div class="invoice">
                    <div class="row invoice-logo">
                        <?php
			   //fetching details from bsy table
				$id=strval($_GET['id']);
				$result = mysqli_query($mysqli, "SELECT * FROM bsy where id=".$id);
				$row = mysqli_fetch_array($result);
				$applicant_name = $row['applicant_name'];
                $husband_name = $row['husband_name'];
                $son_of = $row['son_of'];
                $address = $row['address'];
                $dob_mother = $row['dob_mother'];
                $dob_child = $row['dob_child'];
                $birth_place = $row['birth_place'];
                $no_of_child = $row['no_of_child'];
                $caste = $row['caste'];
                $amount_figures = $row['amount_figures'];
                $amount_words = $row['amount_words'];
                $policy_no = $row['policy_no'];
                $da = $row['da'];
                
                ?>
                            <br/>
                            <br/>
                            <div class="col-xs-11" align="center">
                                <h3><u><strong>Application Form</strong></u></h3> </div>
                            <div class="col-xs-11" align="right">
                                <h4>Form No:<strong> <?php echo $id?></strong></h4> <span class="muted">Date: <?php echo $da;?>
					</span> </div>
                    </div>
                    <hr class="small_pad" />
                    <div class="row"> 
                        <h4><strong>Applicant Details:</strong></h4>
                        <div class="col-xs-12">
                            <table class="table" border=1>
                                <col width="40%">
                                <col width="60%">
                                <tr>
                                    <th><strong>Name of Applicant (Mother) :</strong></th>
                                    <td><?php echo $applicant_name;?></td>
                                </tr>
                                <tr>
                                    <th><strong>Name of Husband :</strong></th>
                                    <td><?php echo $husband_name;?></td>
                                </tr>
                                <tr>
                                    <th><strong>Son of:</strong></th>
                                    <td><?php echo $son_of;?></td>
                                </tr>
                                <tr>
                                    <td><strong>Full Address ::</strong></td>
                                    <td><?php echo $address;?></td>
                                </tr>
                                <tr>
                                    <th><strong>Date of birth (Mother) :</strong></th>
                                    <td><?php echo $dob_mother;?></td>
                                </tr>
                                <tr>
                                    <th><strong>Date of birth (child) :</strong></th>
                                    <td><?php echo $dob_child;?></td>
                                </tr>
                                <tr>
                                    <th><strong>Birth Place (of new born girl child) :</strong></th>
                                    <td><?php echo $birth_place;?></td>
                                </tr>
                                <tr>
                                    <td><strong>Number of girl child (excluding new born girl child) :</strong></td>
                                    <td><?php echo $no_of_child;?></td>
                                </tr>
                                <tr>
                                    <th><strong>Belonging To :</strong></th>
                                    <td><?php echo $caste;?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <hr class="small_pad" />
                    <div class="row"> 
                        <h4><strong>Essential Details:</strong></h4>
                        <div class="col-xs-12">
                            <table class="table" border=1>
                                <col width="40%">
                                <col width="60%">
                                <tr>
                                    <th><strong>Amount in Figures :</strong></th>
                                    <td><?php echo $amount_figures;?></td>
                                </tr>
                                <tr>
                                    <th><strong>Amount in Words :</strong></th>
                                    <td><?php echo $amount_words;?></td>
                                </tr>
                                <tr>
                                    <th><strong>Policy number :</strong></th>
                                    <td><?php echo $policy_no;?></td>
                                </tr>
                                <tr>
                                    <th><strong>Date of Application :</strong></th>
                                    <td><?php echo $da;?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                              
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4"> </div>
                        <div class="col-xs-8 invoice-block">
                            <ul class="list-unstyled amounts">
                                <li><strong>Authorized Signatory</strong></li>
                                <li>&nbsp;</li>
                                <li>&nbsp;</li>
                                <li><strong>For Applicant Authority</strong> </li>
                            </ul> <a class="btn btn-lg blue hidden-print" onclick="javascript:window.print();">Print <i class="icon-print"></i></a></div>
                    </div>
                </div>
                <!-- END PAGE CONTENT-->
            </div>
            <!-- END PAGE -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="footer">
            <div class="footer-inner"> 2017 &copy; Indian Gov. </div>
            <div class="footer-tools"> <span class="go-top">
         <i class="icon-angle-up"></i>
         </span> </div>
        </div>
        <!-- END FOOTER -->
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
        <script src="assets/scripts/app.js"></script>
        <script>
            jQuery(document).ready(function () {
                App.init();
            });
        </script>
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->

    </html>