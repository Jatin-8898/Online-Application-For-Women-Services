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
        <title>Maharashta Gov Women Service | VBP</title>
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
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class="dropdown user">
                        <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> <img alt="" src="assets/img/avatar1_small.jpg" /> <span class="username"><?php echo($_SESSION['username']);?></span> </a>-->
                    </li>
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
                  VARISHTHA PENSION BIMA YOJANA (VPBY)
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
				$result = mysqli_query($mysqli, "SELECT * FROM vpby where id=".$id);
				
				$row = mysqli_fetch_array($result);
				$name_pensioner = $row['name_pensioner'];
                $father_pensioner = $row['father_pensioner'];
                $sex = $row['sex'];
                $nationality = $row['nationality'];
                $aadhar_no = $row['aadhar_no'];
                $mobno = $row['mobno'];
                $resno = $row['resno'];
                $offno = $row['offno'];
                $email = $row['email'];
                $purchase_price = $row['purchase_price'];
                $amt = $row['amt'];
                $deposit = $row['deposit'];
                $cheque = $row['cheque'];
                $dat = $row['dat'];
                $drawn = $row['drawn'];
                $mode = $row['mode'];
                $bankname = $row['bankname'];
                $branchname = $row['branchname'];
                $type = $row['type'];
                $address = $row['address'];
                $bank_no = $row['bank_no'];
                $it = $row['it'];
                $pan = $row['pan'];
                $policy = $row['policy'];
                $policy_no = $row['policy_no'];
                $amt_pension = $row['amt_pension'];
                $mode_pension = $row['mode_pension'];
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
                    <div class="row"> <em>To be filled by an Agent:</em> </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <table class="table" border=1>
                                <col width="40%">
                                <col width="60%">
                                <tr>
                                    <td><strong>Agent's/FSE's/DSE's/Sup.Agent's Name:</strong></td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td><strong>D.O./ C.L.I.A. Code No:</strong></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><strong>Agent's/FSE's/DSE's/Sup.Agent's Code No:</strong></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><strong>Licence No:</strong></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><strong>Date of Expiry:</strong></td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row" align="center">
                        <h6><em>(All answers to be filled in legibly. Answers must be given in words. Strokes of dots or dashes will not be accepted as replies).</em></h6> </div>
                    <hr class="small_pad" />
                    <div class="row"> 
                        <h4><strong>Details Pensioner:</strong></h4>
                        <div class="col-xs-12">
                            <table class="table" border=1>
                                <col width="40%">
                                <col width="60%">
                                <tr>
                                    <th><strong>Name of Proposed Pensioner:</strong></th>
                                    <td><?php echo $name_pensioner;?></td>
                                </tr>
                                <tr>
                                    <th><strong>Name of the father of the proposed Pensioner:</strong></th>
                                    <td><?php echo $father_pensioner;?></td>
                                </tr>
                                <tr>
                                    <th><strong>Gender:</strong></th>
                                    <td><?php echo $sex;?></td>
                                </tr>
                                <tr>
                                    <td><strong>Nationality:</strong></td>
                                    <td><?php echo $nationality;?></td>
                                </tr>
                                <tr>
                                    <td><strong>Aadhar Number:</strong></td>
                                    <td><?php echo $aadhar_no;?></td>
                                </tr>
                                <tr>
                                    <td><strong>Mobile Number:</strong></td>
                                    <td><?php echo $mobno;?></td>
                                </tr>
                                <tr>
                                    <td><strong>Residence Number:</strong></td>
                                    <td><?php echo $resno;?></td>
                                </tr>
                                <tr>
                                    <td><strong>Office Number:</strong></td>
                                    <td><?php echo $offno;?></td>
                                </tr>
                                <tr>
                                    <td><strong>Email id:</strong></td>
                                    <td><?php echo $email;?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <hr class="small_pad" />
                    <div class="row"> 
                        <h4><strong>Description of the Pension::</strong></h4>
                        <div class="col-xs-12">
                            <table class="table" border=1>
                                <col width="40%">
                                <col width="60%">
                                <tr>
                                    <th><strong>Purchase Price (in multiple of Rs.5/-) Rs.</strong></th>
                                    <td><?php echo $purchase_price;?></td>
                                </tr>
                                <tr>
                                    <th><strong>Amount of pension instalment Rs:</strong></th>
                                    <td><?php echo $amt;?></td>
                                </tr>
                                <tr>
                                    <th><strong>Amount of Deposit:</strong></th>
                                    <td><?php echo $deposit;?></td>
                                </tr>
                                <tr>
                                    <td><strong>Cheque / DDNo:</strong></td>
                                    <td><?php echo $cheque;?></td>
                                </tr>
                                <tr>
                                    <td>Date:</td>
                                    <td><?php echo $dat;?></td>
                                </tr>
                                <tr>
                                    <td>Drawn on:</td>
                                    <td><?php echo $drawn;?></td>
                                </tr>
                                <tr>
                                    <td>Mode of pension instalments to be paid:</td>
                                    <td><?php echo $mode;?></td>
                                </tr>
                                
                            </table>
                        </div>
                    </div>
                               <hr class="small_pad" />
                    <div class="row"> 
                        <h4><strong>Particular's of Bank A/C:</strong></h4>
                        <div class="col-xs-12">
                            <table class="table" border=1>
                                <col width="40%">
                                <col width="60%">
                                <tr>
                                    <th>Bank Name:</th>
                                    <td><?php echo $bankname;?></td>
                                </tr>
                                <tr>
                                    <th>Branch Name:</th>
                                    <td><?php echo $branchname;?></td>
                                </tr>
                                <tr>
                                    <th>Account Type:</th>
                                    <td><?php echo $type;?></td>
                                </tr>
                                <tr>
                                    <td>Address:</td>
                                    <td><?php echo $address;?></td>
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
                        <h4><strong>Personal Details:</strong></h4>
                        <div class="col-xs-12">
                            <table class="table" border=1>
                                <col width="40%">
                                <col width="60%">
                                <tr>
                                    <th>Are you an Income Tax Assesse:</th>
                                    <td><?php echo $it;?></td>
                                </tr>
                                <tr>
                                    <th>If yes, provide PAN:</th>
                                    <td><?php echo $pan;?></td>
                                </tr>
                                <tr>
                                    <th>Whether you have taken any other policy under this plan?:</th>
                                    <td><?php echo $policy;?></td>
                                </tr>
                                <tr>
                                    <td>   Policy No.:</td>
                                    <td><?php echo $policy_no;?></td>
                                </tr>
                                <tr>
                                    <td>Amount of pension::</td>
                                    <td><?php echo $amt_pension;?></td>
                                </tr>
                                <tr>
                                    <td>Mode of pension payment:</td>
                                    <td><?php echo $mode_pension;?></td>
                                </tr>
                                <tr>
                                    <td>Date of Application:</td>
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
                                <li><strong>For Pensioner Authority</strong> </li>
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