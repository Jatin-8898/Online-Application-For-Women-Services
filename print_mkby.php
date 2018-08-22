<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
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
        <title>Maharashta Gov Women Service | MKBY</title>
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
               MAJHI KANYA BHAGYASHREE YOJANA (MKBY)
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
			   //fetching details from vbpy table
				$id=strval($_GET['id']);
				$result = mysqli_query($mysqli, "SELECT * FROM mkby where id=".$id);
				
				$row = mysqli_fetch_array($result);
				$saving = $row['saving'];
                $name = $row['name'];
                $fname = $row['fname'];
                $address = $row['address'];
                $dob = $row['dob'];
                $amountf = $row['amountf'];
                $amountw = $row['amountw'];
                $mode = $row['mode'];
                $namen = $row['namen'];
                $dobm = $row['dobm'];
                $addressn = $row['addressn'];
                $share = $row['share'];
                $name_add = $row['name_add'];
                $name_a = $row['name_a'];
                $aadhar_no = $row['aadhar_no'];
                $open_minor = $row['open_minor'];
                $namem = $row['namem'];
                $namew = $row['namew'];
				$standing = $row['standing'];
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
                        <h4><strong>For Applicant<small>(s)</small>:</strong></h4>
                        <div class="col-xs-12">
                            <table class="table" border=1>
                                <col width="40%">
                                <col width="60%">
                                <tr>
                                    <th><strong>Savings<small>/Basic Savings/RD/TD Year//MIS/SCSS/PPF/SSA</small>:</strong></th>
                                    <td><?php echo $saving;?></td>
                                </tr>
                                <tr>
                                    <th><strong>Full Name of Applicant/Gurdian:</strong></th>
                                    <td><?php echo $name;?></td>
                                </tr>
                                <tr>
                                    <th><strong> Full Name of Father/Husband/Mother:</strong></th>
                                    <td><?php echo $fname;?></td>
                                </tr>
                                <tr>
                                    <td><strong>Full Address:</strong></td>
                                    <td><?php echo $address;?></td>
                                </tr>
								<tr>
									<td><strong>  Applicant's Date Of Birth:</strong>
									<td><?php echo $dob;?></td>
                            </table>
                        </div>
                    </div>
                    <hr class="small_pad" />
                    <div class="row"> 
                        <h4><strong>Detail of First Deposit:</strong></h4>
                        <div class="col-xs-12">
                            <table class="table" border=1>
                                <col width="40%">
                                <col width="60%">
                                <tr>
                                    <th><strong>Amount Rs (figures) :</strong></th>
                                    <td><?php echo $amountf;?></td>
                                </tr>
                                <tr>
                                    <th><strong>Amount Rs (words) :</strong></th>
                                    <td><?php echo $amountw;?></td>
                                </tr>
								<tr> 
								<th> <strong> Mode of Deposit :</strong> </th>
								<td> <?php echo $mode; ?> </td>
                            </table>
                        </div>
                    </div>
                               <hr class="small_pad" />
                    <div class="row"> 
                        <h4><strong> Nomination:</strong></h4>
                        <div class="col-xs-12">
                            <table class="table" border=1>
                                <col width="40%">
                                <col width="60%">
                                <tr>
                                    <th> Name of nominee(s):</th>
                                    <td><?php echo $namen;?></td>
                                </tr>
                                <tr>
                                    <th> Date of Birth (in case of minor):</th>
                                    <td><?php echo $dobm;?></td>
                                </tr>
                                <tr>
                                    <th> Address of nominee(s):</th>
                                    <td><?php echo $addressn;?></td>
                                </tr>
								<tr>
                                    <th> Share of Nomination:</th>
                                    <td><?php echo $share;?></td>
                                </tr>
								<tr>
                                    <th> Name and Address <small> nominee </small>:</th>
                                    <td><?php echo $name_add;?></td>
                                </tr>
								<tr>
                                    <th> Name of witness:</th>
                                    <td><?php echo $name_a;?></td>
                                </tr>						
								</table>
                        </div>
                    </div>
                    <hr class="small_pad" />
                    <div class="row"> 
                        <h4><strong>Mandatory Fields to be filled by customer:</strong></h4>
                        <div class="col-xs-12">
                            <table class="table" border=1>
                                <col width="40%">
                                <col width="60%">
                                <tr>
                                    <th>Aadhar Card Number:</th>
                                    <td><?php echo $aadhar_no;?></td>
                                </tr>
                                <tr>
                                    <th> Please open Minor A/C:</th>
                                    <td><?php echo $open_minor;?></td>
                                </tr>
								<tr>
                                    <th> In case of Minor/Lunatic A/C:</th>
                                    <td><?php echo $namem;?></td>
                                </tr>
								<tr>
                                    <th> In case of other than Minor/lunatic:</th>
                                    <td><?php echo $namew;?></td>
                                </tr>
								<tr>
                                    <th>Standing instructions if any::</th>
                                    <td><?php echo $standing;?></td>
                                </tr>
								<tr>
                                    <th> Date of Application:</th>
                                    <td><?php echo $da;?></td>
                                </tr>
                            </table>
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