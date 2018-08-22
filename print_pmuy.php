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
        <title>Maharashta Gov Women Service | PMUY</title>
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
                PRADHAN MANTRI UJJWALA YOJANA (PMUY)
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
				$result = mysqli_query($mysqli, "SELECT * FROM pmuy where id=".$id);
				$row = mysqli_fetch_array($result);
				$fname = $row['fname'];
                $mname = $row['mname'];
                $lname = $row['lname'];
                $dob = $row['dob'];
                $poa = $row['poa'];
                $address = $row['address'];
                $relation = $row['relation'];
                $name = $row['name'];
                $aadhar = $row['aadhar'];
                $name_a = $row['name_a'];
                $aadhar_no = $row['aadhar_no'];
                $name_bank = $row['name_bank'];
                $bankname = $row['bankname'];
                $branchname = $row['branchname'];
                $ifsc = $row['ifsc'];
                $bank_no = $row['bank_no'];
                $status = $row['status'];
                $ration_no = $row['ration_no'];
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
                        <h4><strong>Customer Details:</strong></h4>
                        <div class="col-xs-12">
                            <table class="table" border=1>
                                <col width="40%">
                                <col width="60%">
                                <tr>
                                    <th><strong>First Name:</strong></th>
                                    <td><?php echo $fname;?></td>
                                </tr>
                                <tr>
                                    <th><strong> Middle Name:</strong></th>
                                    <td><?php echo $mname;?></td>
                                </tr>
                                <tr>
                                    <th><strong>Last Name:</strong></th>
                                    <td><?php echo $lname;?></td>
                                </tr>
                                <tr>
                                    <td><strong>Date Of Birth:</strong></td>
                                    <td><?php echo $dob;?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <hr class="small_pad" />
                    <div class="row"> 
                        <h4><strong>Address for LPG connection/ Contact Information:</strong></h4>
                        <div class="col-xs-12">
                            <table class="table" border=1>
                                <col width="40%">
                                <col width="60%">
                                <tr>
                                    <th><strong>Proof Of Address (POA) Category Code:</strong></th>
                                    <td><?php echo $poa;?></td>
                                </tr>
                                <tr>
                                    <th><strong>Full Address:</strong></th>
                                    <td><?php echo $address;?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                               <hr class="small_pad" />
                    <div class="row"> 
                        <h4><strong> Details of Household members Aged above 18 yrs <small>(consisting of people living together in a dwelling having common kithchen)</small></strong></h4>
                        <div class="col-xs-12">
                            <table class="table" border=1>
                                <col width="40%">
                                <col width="60%">
                                <tr>
                                    <th>Relationship with Applicant::</th>
                                    <td><?php echo $relation;?></td>
                                </tr>
                                <tr>
                                    <th>Name:</th>
                                    <td><?php echo $name;?></td>
                                </tr>
                                <tr>
                                    <th>Aadhar Card No:</th>
                                    <td><?php echo $aadhar;?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <hr class="small_pad" />
                    <div class="row"> 
                        <h4><strong>PAHAL Joining Details::</strong></h4>
                        <div class="col-xs-12">
                            <table class="table" border=1>
                                <col width="40%">
                                <col width="60%">
                                <tr>
                                    <th>Name in Aadhar Card:</th>
                                    <td><?php echo $name_a;?></td>
                                </tr>
                                <tr>
                                    <th>Aadhar Card Number:</th>
                                    <td><?php echo $aadhar_no;?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
					
					<hr class="small_pad" />
                    <div class="row"> 
                        <h4><strong> PARTICULARS OF MY BANK ACCOUNT:</strong></h4>
                        <div class="col-xs-12">
                            <table class="table" border=1>
                                <col width="40%">
                                <col width="60%">
                                <tr>
                                    <th>Name in Bank Account:</th>
                                    <td><?php echo $name_bank;?></td>
                                </tr>
                                <tr>
                                    <th>Bank Name::</th>
                                    <td><?php echo $bankname;?></td>
                                </tr>
                                <tr>
                                    <th>Branch Name:</th>
                                    <td><?php echo $branchname;?></td>
                                </tr>
                               <tr>
                                    <td>IFSC Code::</td>
                                    <td><?php echo $ifsc;?></td>
                                </tr>
                                <tr>
                                    <td>Bank Account Number:</td>
                                    <td><?php echo $bank_no;?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
					
					<hr class="small_pad" />
                    <div class="row"> 
                        <h4><strong>Ration Card Details: </strong></h4>
                        <div class="col-xs-12">
                            <table class="table" border=1>
                                <col width="40%">
                                <col width="60%">
                                <tr>
                                    <th> Status of Issue:</th>
                                    <td><?php echo $status;?></td>
                                </tr>
                                <tr>
                                    <th> Ration Card Number:</th>
                                    <td><?php echo $ration_no;?></td>
                                </tr>
                                <tr>
                                    <th>Date of Application:</th>
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
                                <li><strong>For  Applicant</strong> </li>
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