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
            <title>MAJHI KANYA BHAGYASHREE YOJANA (MKBY)</title>
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
            <link rel="stylesheet" type="text/css" href="assets/css/bootstrapValidator.min.css">

            <!--Date Picker Styles-->
            <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-datepicker/css/datepicker.css" />
            <!--end of Date Picker Styles-->
            <link rel="stylesheet" type="text/css" href="assets/plugins/jquery-tags-input/jquery.tagsinput.css" />
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
                    <a class="navbar-brand" href="/index.php"><br> </br> <img src="assets/img/mkby.jpg" alt="logo" class="img-responsive" width="190" /> </a>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <img src="assets/img/menu-toggler.png" alt="" /> </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <ul class="nav navbar-nav pull-right">
                        <!-- BEGIN USER LOGIN DROPDOWN -->

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
                                MAJHI KANYA BHAGYASHREE YOJANA (MKBY)<small><br>POST OFFICE SAVINGS BANK
					</small>
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
                                    <div class="caption"><i class="icon-reorder"></i>MAJHI KANYA BHAGYASHREE YOJANA (MKBY)</div>
                                </div>
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->

                                    <form action="http://localhost/anuja/scripts/add-mkby.php" id="form_mkby" class="form-horizontal" method="POST" name="add-Form">
                                        <div class="form-body">
                                            <h4><b>For Applicant(s):</b>
                                                <h3>
                                                    <!--Saving Textfield-->
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Savings/Basic Savings/RD/TD Year//MIS/SCSS/PPF/SSA</label>
                                                        <div class="col-md-4">
                                                            <input type="text" name="saving" id="saving" data-required="1" class="form-control" /> </div>
                                                    </div>
                                                    <!--End of Saving Textfield-->
                                                    <!--Full Name of Applicant/Gurdian  Textfield-->
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Full Name of Applicant/Gurdian </label>
                                                        <div class="col-md-4">
                                                            <input type="text" name="name" id="name" data-required="1" class="form-control" /> </div>
                                                    </div>
                                                    <!--End of Full Name of Applicant/Gurdian  Textfield-->
                                                    <!--Full Name of Father/Husband/Mother Textfield-->
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Full Name of Father/Husband/Mother</label>
                                                        <div class="col-md-4">
                                                            <input type="text" name="fname" id="fname" data-required="1" class="form-control" /> </div>
                                                    </div>
                                                    <!--End of Full Name of Father/Husband/Mother Textfield-->
                                                    <!-- address field -->
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Full Address</label>
                                                        <div class="col-md-4">
                                                            <textarea class="form-control" rows="3" name="address" id="address" value=""> </textarea>
                                                        </div>
                                                    </div>
                                                    <!--end of Address field-->
                                                    <!--Date Field-->
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Applicant's Date Of Birth </label>
                                                        <div class="col-md-4">
                                                            <div class="input-group date date-picker" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                                <input type="text" name="dob" id="dob" class="form-control" readonly> <span class="input-group-btn">
									             <button class="btn default" type="button"><i class="icon-calendar"></i></button>
									 </span> </div>

                                                            <!-- /input-group -->
                                                        </div>
                                                    </div>
                                                    <!--End of Date Field-->
                                                    <hr>
                                                    <h4><b>Detail of First Deposit</b>
                                                        <h4>
                                                            <!-- Amounts rs textfield -->
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Amount Rs<small> (figures)</small> </label>
                                                                <div class="col-md-4">
                                                                    <input name="amountf" id="amountf" type="number" class="form-control" /> </div>
                                                            </div>
                                                            <!--End of Amount rs Field-->
                                                            <!-- Amount in words textfield -->
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Amount Rs <small> (words)</small></label>
                                                                <div class="col-md-4">
                                                                    <input name="amountw" id="amountw" type="text" class="form-control" /> </div>
                                                            </div>
                                                            <!--End of Amount in words Field-->
                                                            <!-- mode textfield -->
                                                            <div class="form-group">
                                                                <label class="control-label col-md-3">Mode of Deposit</label>
                                                                <div class="col-md-4">
                                                                    <input name="mode" id="mode" type="text" class="form-control" /> </div>
                                                            </div>
                                                            <!--End of mode Field-->
                                                            <hr>
                                                            <h4><b>Nomination:<br> <small><i> I/We nominate the person(s) named below under Section 4 of the Government Savings Bank Act, 1873 (5 of 1873) to be the sole recipient(s) of the amount sanding at the credit of the account in the event of my/our death.</i></small><b></h4>
										<!--Name of nominee(s) Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Name of nominee(s): </label>
                                            <div class="col-md-4">
                                                <input type="text" name="namen" id="namen" data-required="1" class="form-control"/> </div>
                                        </div>
                                        <!--End of Name of nominee(s): Textfield-->
										<!--Date of Birth Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Date of Birth (in case c f minor):</label>
                                            <div class="col-md-4">
                                                <div class="input-group date date-picker" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                   <input type="text" name="dobm" id="dobm" class="form-control" readonly> <span class="input-group-btn">
									 <button class="btn default" type="button"><i class="icon-calendar"></i></button>
									 </span> </div> 
                                                <!-- /input-group -->
                                            </div>
                                        </div>
                                        <!--End of Date of Birth Field-->
										<!-- Address of nominee(s) field -->
										 <div class="form-group">
                                            <label class="control-label col-md-3">Address of nominee(s)</label>
                                            <div class="col-md-4">
                                                <textarea class="form-control" rows="3" name="addressn" id="addressn" value=""> </textarea>
                                            </div>
                                        </div>
										<!--end of Address of nominee(s) field-->
										<!--	Share of Nomination Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Share of Nomination:</label>
                                            <div class="col-md-4">
                                                <input type="number" name="share" id="share" data-required="1" class="form-control"/> </div>
                                        </div>
                                        <!--End of Share of Nomination Textfield-->
										<!-- Name and Address field -->
										 <div class="form-group">
                                            <label class="control-label col-md-3">Name and Address<small><br> of person who may receive the said amount during the minority of the nominee(s): </small></label>
                                            <div class="col-md-4">
                                                <textarea class="form-control" rows="3" name="name_add" id="name_add" value=""> </textarea>
                                            </div>
                                        </div>
										<!--end of Name and Address field-->
										<!--Witness name  Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Name of witness<br> <small>in case depositor wish to make nomination:</small></label>
                                            <div class="col-md-4">
                                                <input name="name_a" id="name_a" type="text" class="form-control" /> </div>
                                        </div>
                                        <!--End of Witness name Field-->
										<hr>
										<h4><b>Mandatory Fields to be filled by customer</b>
                                                                <h4>
                                                                    <!--Aadhar card no Field-->
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Aadhar Card Number</label>
                                                                        <div class="col-md-4">
                                                                            <input name="aadhar_no" id="aadhar_no" type="number" class="form-control" /> </div>
                                                                    </div>
                                                                    <!--End of Aadhar card no Field-->
                                                                    <!--Please open Field-->
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Please open Minor A/C<small> <i>through Guardian/Lunatic Account through Guardian/Blind/Physically Handicapped/Illiterate through Agent/Pensioner/BPL/SB Basic Savings Account/Sanchayaka Account/Others:</small></i> </label>
                                                                        <div class="col-md-4">
                                                                            <input name="open_minor" id="open_minor" type="text" class="form-control" /> </div>
                                                                    </div>
                                                                    <!--End of Please open Field-->
                                                                    <!-- Field-->
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">In case of Minor/Lunatic A/C, please fill Name of Minor/lunatic and her Relationship with applicant:</label>
                                                                        <div class="col-md-4">
                                                                            <input name="namem" id="namem" type="text" class="form-control" /> </div>
                                                                    </div>
                                                                    <!--End of  Field-->
                                                                    <!-- Field-->
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">In case of other than Minor/lunatic, please enter name of Sanchayka/Government Welfare Scheme and PPO/BPL?Registration/Enrollment number:</label>
                                                                        <div class="col-md-4">
                                                                            <input name="namew" id="namew" type="text" class="form-control" /> </div>
                                                                    </div>
                                                                    <!--End of Field-->
                                                                    <!--  Field-->
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Standing instructions if any:</label>
                                                                        <div class="col-md-4">
                                                                            <input name="standing" id="standing" type="text" class="form-control" /> </div>
                                                                    </div>
                                                                    <!-- Field-->

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
                <div class="footer-inner"> 2017 &copy; By VJTI Students. </div>
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
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN PAGE LEVEL STYLES -->
            <script src="assets/scripts/app.js"></script>
            <script src="assets/scripts/form-components.js"></script>
            <script type="text/javascript" src="assets/js/bootstrapValidator.min.js"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>

            <!-- END PAGE LEVEL STYLES -->
            <script>
                jQuery(document).ready(function() {
                    // initiate layout and plugins
                    App.init();
                    FormComponents.init();
                });
            </script>
            <!-- END JAVASCRIPTS -->
        </body>
        <!-- END BODY -->

        </html>