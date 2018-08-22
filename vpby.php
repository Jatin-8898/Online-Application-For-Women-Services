<!DOCTYPE html>
<?php
    ob_start();
    require_once("includes/init.php");

    Session::startSession();/*STARTING THE SESSION AFTER THEN ONLY WE COME TO KNOW SESSION IS ACTIVE R NOT*/

    User::checkActiveSession();//FOR CHECKING THE USER CAME THROUGH LOGIN PAGE N IS VALID USER

?>
<?php
    include_once('includes_sirs/functions.php');
?>
    <html lang="en" class="no-js">
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>VARISHTHA PENSION BIMA YOJANA (VPBY)</title>
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
        <!--Date Picker Styles-->
        <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-datepicker/css/datepicker.css" />
        <!--end of Date Picker Styles-->
        <link rel="stylesheet" type="text/css" href="assets/plugins/jquery-tags-input/jquery.tagsinput.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrapValidator.min.css" />
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css" />
        <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME STYLES -->
        <link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="../favicon.ico" /> </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->

    <body class="page-header-fixed">
        <!-- BEGIN HEADER -->
        <div class="header navbar navbar-inverse navbar-fixed-top">
            <!-- BEGIN TOP NAVIGATION BAR -->
            <div class="header-inner">
                <!-- BEGIN LOGO -->
                <a class="navbar-brand" href="/index.php">
                    <br> </br> <img src="assets/img/vpby.gif" alt="logo" class="img-responsive" width="180" /> </a>
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
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN PAGE TITLE-->
                        <h3 class="page-title">
                 VARISHTHA PENSION BIMA YOJANA (VPBY)<small>
					<br>(Established by the Life Insurance Corporation Act, 1956)</small>
               </h3>
                        <!-- END PAGE TITLE-->
                    </div>
                </div>
                <!-- END PAGE HEADER-->
                <!-- BEGIN PAGE CONTENT-->
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN VALIDATION STATES-->
                        <div class="portlet box green">
                            <div class="portlet-title">
                                <div class="caption"><i class="icon-reorder"></i>VARISHTHA PENSION BIMA YOJANA (VPBY)</div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="http://localhost/anuja/scripts/add-vpby.php" id="form_vpby" class="form-horizontal" method="POST">
                                    <div class="form-body">
                
										<small><i>(All answers to be filled in legibly. Answers must be given in words. Strokes of dots or dashes will not be accepted as replies).</i></small><hr>
                                        <h4><b>Details Pensioner:</b></h4>
										<!--  Name of Pensioner field -->
										 <div class="form-group">
                                             <label class="control-label col-md-3">Name in full of the proposed Pensioner :</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="name_pensioner" id="name_pensioner" required>
                                            </div>
                                                
                                        </div>
										<!--End of Name of Pensioner field-->
										<!--Name of Father field -->
										 <div class="form-group">
                                            <label class="control-label col-md-3">Name in full of the father of the proposed Pensioner :</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="father_pensioner" id="father_pensioner required"> 
                                            </div>
                                        </div>
										<!--End of  Name of Father field-->
										<!--Name of Sex field -->
										 <div class="form-group">
                                            <label class="control-label col-md-3">Gender :</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="sex" id="sex" required>
                                            </div>
                                        </div>
										<!--End of  Sex field-->
										<!--Name of Nationality field -->
										 <div class="form-group">
                                            <label class="control-label col-md-3">Nationality :</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="nationality" id="nationality" class="form-control">
                                            </div>
                                        </div>
										<!--End of Nationality field-->
										<!--Aadhar Number field -->
										 <div class="form-group">
                                            <label class="control-label col-md-3">Aadhar Number :</label>
                                            <div class="col-md-4">
                                                <input type="number" class="form-control" name="aadhar_no" id="aadhar_no" class="form-control" required>
                                            </div>
                                        </div>
										<!--End of Aadhar Number field-->
										<!--Mobile no Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Mobile Number :</label>
                                            <div class="col-md-4">
                                                <input type="number" name="mobno" id="mobno" data-required="1" class="form-control" required/> </div>
                                        </div>
                                        <!--End of Mobile no Textfield-->
										<!--Residence no Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Residence Number : </label>
                                            <div class="col-md-4">
                                                <input type="number" name="resno" id="resno" data-required="1" class="form-control"/> </div>
                                        </div>
                                        <!--End of Residence no Textfield-->
										<!--Office number Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Office Number :</label>
                                            <div class="col-md-4">
                                                <input type="number" name="offno" id="offno" data-required="1" class="form-control"/> </div>
                                        </div>
                                        <!--End of office no Textfield-->
										<!--email id Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Email id :</label>
                                            <div class="col-md-4">
                                                <input type="text" name="email" id="email" data-required="1" class="form-control" required/> </div>
                                        </div>
                                        <!--End of email id Textfield--><hr>
										
                                            <h4><b>Description of the Pension:</b></h4>
                                        <!--Purchase Price (in multiple of Rs.5/-) Rs Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Purchase Price (in multiple of Rs.5/-) Rs. :</label>
                                            <div class="col-md-4">
                                                <input type="number" name="purchase_price" id="purchase_price" data-required="1" class="form-control" /> </div>
                                        </div>
                                        <!--End of Purchase Price (in multiple of Rs.5/-) Rs.  Textfield--><b><i>&nbsp; &nbsp; &nbsp; &nbsp;OR</i></b>
                                        <!-- Amount of pension instalment Rs.Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Amount of pension instalment Rs. :</label>
                                            <div class="col-md-4">
                                                <input type="number" name="amt" id="amt" data-required="1" class="form-control" /> </div>
                                        </div>
                                        <!--End of  Amount of pension instalment Rs. Textfield-->
                                        <!-- Amount of Deposit Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3"> Amount of Deposit :</label>
                                            <div class="col-md-4">
                                                <input name="deposit" id="deposit" type="number" class="form-control" /> </div>
                                        </div>
                                        <!--End of  Amount of Deposit Field-->
                                        <!--Cheque / DDNo: Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Cheque / DDNo :</label>
                                            <div class="col-md-4">
                                                <input name="cheque" id="cheque" type="number" class="form-control" /> </div>
                                        </div>
                                        <!--End of Cheque / DDNo: Field-->
                                        <!--Date Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Date : </label>
                                            <div class="col-md-4">
                                                <div class="input-group date date-picker" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                    <input type="text" name="dat" id="dat" class="form-control" readonly > <span class="input-group-btn">
									 <button class="btn default" type="button"><i class="icon-calendar"></i></button>
									 </span> </div>
                                                <!-- /input-group -->
                                            </div>
                                        </div>
                                        <!--End of Date Field-->
                                        <!--Drawn on Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Drawn on : </label>
                                            <div class="col-md-4">
                                                <div class="input-group date date-picker" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                    <input type="text" name="drawn" id="drawn" class="form-control" readonly> <span class="input-group-btn">
									 <button class="btn default" type="button"><i class="icon-calendar"></i></button>
									 </span> </div>
                                                <!-- /input-group -->
                                            </div>
                                        </div>
                                        <!--End of Drawn on Field-->
                                        <!--Mode of pension Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Mode of pension instalments to be paid :
                                                <br><small> Yearly/ Half-Yearly/ Quarterly/ Monthly</small></label>
                                            <div class="col-md-4">
                                                <input name="mode" id="mode" type="text" class="form-control" /> </div>
                                        </div>
                                        <!--End of Mode of pension Field-->
                                            <hr> <h4><b>Particular's of Bank A/C :</b></h4>
                                        <!--Bank Name: Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Bank Name :</label>
                                            <div class="col-md-4">
                                                <input name="bankname" id="bankname" type="text" class="form-control" /> </div>
                                        </div>
                                        <!--End of Bank Name Field-->
                                        <!--Branch Name Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Branch Name :</label>
                                            <div class="col-md-4">
                                                <input name="branchname" id="branchname" type="text" class="form-control" /> </div>
                                        </div>
                                        <!--End of Branch Name Field-->
                                        <!--Account type Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Account Type :</label>
                                            <div class="col-md-4">
                                                <input name="type" id="type" type="text" class="form-control" /> </div>
                                        </div>
                                        <!--End of Account type Field-->
                                        <!-- address field -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Address :</label>
                                            <div class="col-md-4">
                                                <textarea class="form-control" rows="3" name="address" id="address" value=""> </textarea>
                                            </div>
                                        </div>
                                        <!--end of Address field-->
                                        <!--Bank Account Number Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Bank Account Number :</label>
                                            <div class="col-md-4">
                                                <input name="bank_no" id="bank_no" type="number" class="form-control" /> </div>
                                        </div>
                                        <!--End of Bank Account Number Field-->
                                        <hr>
                                            <h4><b>Personal Details:</b></h4>
										<!-- Are you an Income Tax Assesse Radio Button Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3"> Are you an Income Tax Assesse :</label>
                                            <div class="col-md-8">
                                                <div class="radio-list">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="it" id="it" value="Yes" checked> Yes </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="it" id="it" value="No"> No </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End of  Are you an Income Tax Assesse Radio Button Field-->
										<!-- If yes, provide PAN Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3"> If yes, provide PAN:</label>
                                            <div class="col-md-4">
                                                <input name="pan" id="pan" type="number" class="form-control" /> </div>
                                        </div>
                                        <!--  End of If yes, provide PAN: Field-->
										<!-- Whether you have taken any other policy under this plan? Radio Button Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3"> Whether you have taken any other policy under this plan? :</label>
                                            <div class="col-md-8">
                                                <div class="radio-list">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="policy" id="policy" value="Yes" checked> Yes </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="policy" id="policy" value="No"> No </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End of Whether you have taken any other policy under this plan? Radio Button Field-->
											<!--Policy No.: Field-->
                                            <h5><i><b> &nbsp;    &nbsp;   &nbsp;   &nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; If yes, kindly furnish</b></i></h5>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">&nbsp; &nbsp;Policy No. : </label>
                                            <div class="col-md-4">
                                                <input name="policy_no" id="policy_no" type="number" class="form-control" /> </div>
                                        </div>
										<!--Amount of pension: Textfield-->
                                        <!--End of Policy No.:  Field-->
										<div class="form-group">
                                            <label class="control-label col-md-3">Amount of pension : </label>
                                            <div class="col-md-4">
                                                <input name="amt_pension" id="amt_pension" type="number" class="form-control" /> </div>
                                        </div>
                                        <!--End of Policy No.:  Field-->
										<!--Mode of pension payment: Textfield-->
										<div class="form-group">
                                            <label class="control-label col-md-3">Mode of pension payment: </label>
                                            <div class="col-md-4">
                                                <input name="mode_pension" id="mode_pension" type="text" class="form-control" /> </div>
                                        </div>
                                            
                                        <!--End ofMode of pension payment: Field-->
                                    </div>
                                    <div class="form-actions fluid">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="btn green">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                        <!-- END VALIDATION STATES-->
                    </div>
                </div>
                <!-- END PAGE CONTENT-->
            </div>
            <!-- END PAGE -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="footer">
            <div class="footer-inner"> 2018 &copy; By VJTI Students. </div>
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
        <script src="assets/plugins/bootstrap/js/bootstrap2-typeahead.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
        <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- Date Picker Script Now -->
        <script type="text/javascript" src="assets/plugins/fuelux/js/spinner.min.js"></script>
        <script src="assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <!-- End of Date Picker Script-->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script type="text/javascript" src="assets/plugins/ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery-validation/dist/additional-methods.min.js"></script>
        <script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
        <script type="text/javascript" src="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
        <script type="text/javascript" src="assets/plugins/ckeditor/ckeditor.js"></script>
        
        <script type="text/javascript" src="assets/js/bootstrapValidator.min.js"></script>
        <script type="text/javascript" src="assets/js/scripts.js"></script>

        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <script src="assets/scripts/app.js"></script>
        <script src="assets/scripts/form-components.js"></script>
        <!-- END PAGE LEVEL STYLES -->
        <script>
            jQuery(document).ready(function () {
                // initiate layout and plugins
                App.init();
                FormComponents.init();
            });
        </script>
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->

    </html>