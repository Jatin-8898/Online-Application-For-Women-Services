<!DOCTYPE html>

    <html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
<?php
    ob_start();
    require_once("includes/init.php");

    Session::startSession();/*STARTING THE SESSION AFTER THEN ONLY WE COME TO KNOW SESSION IS ACTIVE R NOT*/

    User::checkActiveSession();//FOR CHECKING THE USER CAME THROUGH LOGIN PAGE N IS VALID USER

?>
<?php
        include_once('includes_sirs/functions.php');
?>
    <head>
        <meta charset="utf-8" />
        <title>PRADHAN MANTRI UJJWALA YOJANA (PMUY)</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta name="MobileOptimized" content="320">
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrapValidator.min.css" />
        
        <!-- END GLOBAL MANDATORY STYLES -->
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
                <a class="navbar-brand" href="/index.php"><br> </br> <img src="assets/img/pmuy.jpg" alt="logo" class="img-responsive" width="180" /> </a>
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
                 PRADHAN MANTRI UJJWALA YOJANA (PMUY)<small> UJJWALA KYC Application
					<br>(All fields are Mandatory)</small>
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
                                <div class="caption"><i class="icon-reorder"></i>PRADHAN MANTRI UJJWALA YOJANA (PMUY)</div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
									
                                <form action="http://localhost/anuja/scripts/add-pmuy.php" id="form_pmuy" class="form-horizontal" method="POST">
                                    <div class="form-body">
                                        <h4><b>Customer Details:</b></h4>
                                        <!--First name Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">First Name :</label>
                                            <div class="col-md-4">
                                                <input type="text" name="fname" id="fname" data-required="1" class="form-control"/> </div>
                                        </div>
                                        <!--End of first name Textfield-->
										<!--second name Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Middle Name : </label>
                                            <div class="col-md-4">
                                                <input type="text" name="mname" id="mname" data-required="1" class="form-control"/> </div>
                                        </div>
                                        <!--End of second name Textfield-->
										<!--last name Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Last Name : </label>
                                            <div class="col-md-4">
                                                <input type="text" name="lname" id="lname" data-required="1" class="form-control"/> </div>
                                        </div>
                                        <!--End of last name Textfield-->
                                        <!--Date Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Date Of Birth : </label>
                                            <div class="col-md-4">
                                                <div class="input-group date date-picker" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                   <input type="text" name="dob" id="dob" class="form-control" readonly> <span class="input-group-btn">
									 <button class="btn default" type="button"><i class="icon-calendar"></i></button>
									 </span> </div> 
												
                                                <!-- /input-group -->
                                            </div>
                                        </div>
                                        <!--End of Date Field-->
									<!-- poa textfield -->
											<hr> 
											<h4><b> Address for LPG connection/ Contact Information   </b></h4>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Proof Of Address (POA) Category Code  :</label>
                                            <div class="col-md-4">
                                                <input name="poa" id="poa" type="text" class="form-control" /> </div>
                                        </div>
                                        <!--End of poa Field-->
										<!-- address field -->
										 <div class="form-group">
                                            <label class="control-label col-md-3">Full Address :</label>
                                            <div class="col-md-4">
                                                <textarea class="form-control" rows="3" name="address" id="address" value=""> </textarea>
                                            </div>
                                        </div>
										<!--End of Address field--><hr>
                                            <h4><b>Details of Household members Aged above 18 yrs <small>(consisting of people living together in a dwelling having common kithchen)</small></b></h4>
										<!--Relationship with Applicant Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Relationship with Applicant :  </label>
                                            <div class="col-md-4">
                                                <input type="text" name="relation" id="relation" data-required="1" class="form-control"/> </div>
                                        </div>
                                        <!--End of Relationship with Applicant Textfield-->
										<!--name Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Name :</label>
                                            <div class="col-md-4">
                                                <input type="text" name="name" id="name" data-required="1" class="form-control"/> </div>
                                        </div>
                                        <!--End of name Textfield-->
										<!--Aadhar card no Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Aadhar Card No : </label>
                                            <div class="col-md-4">
                                                <input type="number" name="aadhar" id="aadhar" data-required="1" class="form-control"/> </div>
                                        </div>
                                        <!--End of aadhar card no Textfield--><hr>
                                        <h4><b>PAHAL Joining Details :</b></h4>
                                        <h5><i>PARTICULARS OF MY AADHAR CARD</i></h5>
                                        <!--Name in Aadhar card Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Name in Aadhar Card :</label>
                                            <div class="col-md-4">
                                                <input name="name_a" id="name_a" type="text" class="form-control" /> </div>
                                        </div>
                                        <!--End of Name in Aadhar card Field-->
										<!--Aadhar card no Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Aadhar Card Number :</label>
                                            <div class="col-md-4">
                                                <input name="aadhar_no" id="aadhar_no" type="number" class="form-control" /> </div>
                                        </div>
                                        <!--End of Aadhar card no Field--><hr>
                                            <h4><b>PARTICULARS OF MY BANK ACCOUNT :</b></h4>
										<!--Name in Bank Account Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Name in Bank Account :</label>
                                            <div class="col-md-4">
                                                <input name="name_bank" id="name_bank" type="text" class="form-control" /> </div>
                                        </div>
                                        <!--End of Name in Bank Account Field-->
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
										<!--IFSC Code: Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">IFSC Code :</label>
                                            <div class="col-md-4">
                                                <input name="ifsc" id="ifsc" type="text" class="form-control" /> </div>
                                        </div>
                                        <!--End of IFSC Code Field-->
											<!--Bank Account Number Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Bank Account Number :</label>
                                            <div class="col-md-4">
                                                <input name="bank_no" id="bank_no" type="number" class="form-control" /> </div>
                                        </div>
                                        <!--End of Bank Account Number Field-->
										<hr>
                                            <h4><b>Ration Card Details :</b></h4>
										<!--Status of Issue  Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Status of Issue :</label>
                                            <div class="col-md-4">
                                                <input name="status" id="status" type="text" class="form-control" /> </div>
                                        </div>
                                        <!--Status of Issue Field-->
											<!--Ration Card Number Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Ration Card Number :</label>
                                            <div class="col-md-4">
                                                <input name="ration_no" id="ration_no" type="number" class="form-control" /> </div>
                                        </div>
                                        <!--End of Ration Card Number Field-->
                                            
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
        <script src="assets/scripts/form-validation.js"></script>
        <script src="assets/scripts/form-components.js"></script>
        <!-- END PAGE LEVEL STYLES -->
        <script>
            jQuery(document).ready(function () {
                // initiate layout and plugins
                App.init();
                FormComponents.init();
                FormValidation.init();
            });
        </script>
        <!-- END JAVASCRIPTS -->

    </body>
    <!-- END BODY -->

    </html>