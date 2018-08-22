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
        <title>Maharashta Gov Women Service | JSY</title>
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
          Janani Suraksha Yojana (JSY)
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
				$result = mysqli_query($mysqli, "SELECT * FROM jsy where id=".$id);
				
				$row = mysqli_fetch_array($result);
                $sub_center = $row['sub_center'];
                $phc= $row['phc'];
                $applicant_name = $row['applicant_name'];
                $husband_name = $row['husband_name'];
                $address = $row['address'];
                $area = $row['area'];
                $card = $row['card'];
                $bpl_card_no = $row['bpl_card_no'];
                $dor = $row['dor'];
                $registration_no = $row['registration_no'];
                $age = $row['age'];
                $imp = $row['imp'];
                $edd = $row['edd'];
                $para = $row['para'];
                $gravida = $row['gravida'];
                $health_inst = $row['health_inst'];
                $doa = $row['doa'];
                
                ?>
                            <br/>
                            <br/>
                            <div class="col-xs-11" align="center">
                                <h3><u><strong>Application Form</strong></u></h3> </div>
                            <div class="col-xs-11" align="right">
                                <h4>Form No:<strong> <?php echo $id?></strong></h4> <span class="muted">Date: <?php echo $doa;?>
					</span> </div>
                    </div>
                    <hr class="small_pad" />
                    <div class="row"> 
                        <h4><strong>Applicant Details :</h4>
                        <div class="col-xs-12">
                            <table class="table" border=1>
                                <col width="40%">
                                <col width="60%">
                                <tr>
                                    <th><strong>Name of Sub Center :</strong></th>
                                    <td><?php echo $sub_center;?></td>
                                </tr>
                                <tr>
                                    <th><strong>Name of PHC :</strong></th>
                                    <td><?php echo $phc;?></td>
                                </tr>
                                <tr>
                                    <th><strong>Applicant's (Pregnant Woman) Name : </strong></th>
                                    <td><?php echo $applicant_name;?></td>
                                </tr>
                                <tr>
                                    <td><strong>Husband's Name :</strong></td>
                                    <td><?php echo $husband_name;?></td>
                                </tr>
								<tr>
									<td><strong>Full Address : </strong>
									<td><?php echo $address;?></td>
                                                                    <tr>
                                    <th><strong>Selected area :</strong></th>
                                    <td><?php echo $area;?></td>
                                </tr>
                                <tr>
                                    <th><strong>Posses a BPL Card? :</strong></th>
                                    <td><?php echo $card;?></td>
                                </tr>
                                <tr>
                                    <th><strong> If Yes BPL Card No :  </strong></th>
                                    <td><?php echo $bpl_card_no;?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <hr class="small_pad" />
                    <div class="row"> 
                        <h4><strong>Date & Registration of Pregnant Woman No. of the Antenatal Registrar of SC/PHC/CHC ::</strong></h4>
                        <div class="col-xs-12">
                            <table class="table" border=1>
                                <col width="40%">
                                <col width="60%">
                                <tr>
                                    <th><strong>Date :</strong></th>
                                    <td><?php echo $dor;?></td>
                                </tr>
                                <tr>
                                    <th><strong>Registration No. :</strong></th>
                                    <td><?php echo $registration_no;?></td>
                                </tr>
								<tr> 
								<th> <strong> Age :</strong> </th>
								<td> <?php echo $age; ?> </td>
                                </tr>
                                <tr>
                                    <th><strong>IMP</strong></th>
                                    <td><?php echo $imp;?></td>
                                </tr>
                                <tr>
                                    <th><strong>EDD :</strong></th>
                                    <td><?php echo $edd;?></td>
                                </tr>
								<tr> 
								<th> <strong> Para :</strong> </th>
								<td> <?php echo $para; ?> </td>
                                </tr>
                                <tr>
                                    <th><strong>Gravida :</strong></th>
                                    <td><?php echo $gravida;?></td>
                                </tr>
                                <tr>
                                    <th><strong>Decision taken for delivery at (Name of Health Inst) :</strong></th>
                                    <td><?php echo $health_inst;?></td>
                                </tr>
								<tr> 
								<th> <strong>Date Of Application :</strong> </th>
								<td> <?php echo $doa;?> </td>
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