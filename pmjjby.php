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
        <title>Pradhan Mantri JeevanJyoti Bima Yojna(PMJJBY)</title>
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
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrapValidator.min.css" />
        
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
                <a class="navbar-brand" href="/index.php"><br> </br> <img src="assets/img/pmjjby.jpg" alt="logo" class="img-responsive" width="180" /> </a>
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
                        <h3 class="page-title">Pradhan Mantri JeevanJyoti Bima Yojna(PMJJBY)
                   <small>To be filled in by members joining the scheme during the permitted "Enrollment Period"</small>
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
                                <div class="caption"><i class="icon-reorder"></i>Pradhan Mantri JeevanJyoti Bima Yojna(PMJJBY)</div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
								&nbsp &nbsp &nbsp &nbsp I hereby give my consent to become a member of Pradhan MantriJeevan Jyoti Bima Yojana of LIC of India which will be administered by thePost office as Master Policyholder No 900100940. I hereby authorize you to debit today my Post office Savings Account with your Post office with Rs.330/- (Rupees three hundred thiry only) plus Service Tax,if applicable towards premium of life cover under PMJJBY. I further authroize you to deduct in future after 25th May and not later than on 1st of June every year until further instructions, an amount of Rs 330/- (Rupees three hundred thirty only) and Service Tax if applicable, or any amount as decided from time to time, which may be intimated immediately if and when revised, towards renewal of coverage under the Scheme. I have not authorized any other Post office or Bank to debit premium in respect of this scheme. I am aware that my life cover shall be restricted to Rs 2,00,000/- only in the event of my death. I have read and understood the Scheme rules and I hereby give my consent to become a member of the scheme. I authorize the Post office to convey my personal details, given below, as required, regarding my admission into the group insurance scheme to LIC of India.
                                <form action="http://localhost/anuja/scripts/add-pmjjby.php" id="form_pmjjby" class="form-horizontal" method="POST">
                                    <div class="form-body">
                                        <!--Name of Account holder Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">*Name of the Account holder<br> (as per Post office records) </label>
                                            <div class="col-md-4">
                                                <input type="text" name="name_acc" id="name_acc" data-required="1" class="form-control"/> </div>
                                        </div>
                                        <!--End of Name of Account Holder Textfield-->
                                        <!--Post Office Saving acc no Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">*Post office Savings Account No. <br>and CIF ID</label>
                                            <div class="col-md-4">
                                                <input type="number" name="psa" id="psa" data-required="1" class="form-control" /> </div>
                                        </div>
                                        <!--End of Post Office Saving acc Textfield-->
										<!--Mobile No Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Mobile Number</label>
                                            <div class="col-md-4">
                                                <input type="number" name="mob" id="mob" data-required="1" class="form-control" /> </div>
                                        </div>
                                        <!--End of Mobile no Textfield-->
                                        <!--Nominee Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">*Name of Nominee:</label>
                                            <div class="col-md-4">
                                                <input type="text" name="name_nom" id="name_nom" data-required="1" class="form-control"  /> </div>
                                        </div>
                                        <!--End of Nominee Textfield-->
                                        <!--*SOL ID (Post Office) Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">*SOL ID (Post Office): </label>
                                            <div class="col-md-4">
                                                <input type="number" name="sol_id" id="sol_id" data-required="1" class="form-control"/> </div>
                                        </div>
                                        <!--End of *SOL ID (Post Office) Textfield-->
										<!--Name of guardian Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3"> *Name of Guardian if Nominee is minor</label>
                                            <div class="col-md-4">
                                                <input type="text" name="name_gau" id="name_gau" data-required="1" class="form-control"  /> </div>
                                        </div>
                                        <!--End of Name of guardian Textfield-->
										<!--Email id Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3"> E-mail ID:</label>
                                            <div class="col-md-4">
                                                <input type="text" name="email" id="email" data-required="1" class="form-control"  /> </div>
                                        </div>
                                        <!--End of Email id Textfield-->
										<!--Date Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Date of Birth:</label>
                                            <div class="col-md-4">
                                                <div class="input-group date date-picker" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                    <input type="text" name="date" id="date" class="form-control" readonly> <span class="input-group-btn">
									 <button class="btn default" type="button"><i class="icon-calendar"></i></button>
									 </span> </div> 
                                                <!-- /input-group -->
                                            </div>
                                        </div>
                                        <!--End of Date Field-->
										<!-- relationship field -->
										  <div class="form-group">
                                            <label class="control-label col-md-3"> Relationship with nominee<small> (if nominee is minor)</small></label>
                                            <div class="col-md-4">
                                             <input type="text" name="relationship" id="relationship" value="" data-required="1" class="form-control"   /> 
                                            </div>
                                        </div>
										<!-- end of relationship field -->
                                        <!--Address Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Full Address of the subscriber</label>
                                            <div class="col-md-4">
                                                <textarea class="form-control" rows="3" name="address_subscriber" id="address_subscriber" value=""> </textarea>
                                            </div>
                                        </div>
                                        <!--End of Address_subscriber-->  
                                        <!--Address Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Full Address on the Nominee</label>
                                            <div class="col-md-4">
                                                <textarea class="form-control" rows="3" name="address_nominee" id="address_nominee" value=""> </textarea>
                                            </div>
                                        </div>	
										<!--end of address _nominee -->
											<!-- start of mandatory fields -->
										
										<hr>
										<h4> <b> To be filled by the officer Incharge </b> </h4>
										<!--Name of officer_name Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3"> *Name of Officer</label>
                                            <div class="col-md-4">
                                                <input type="text" name="name_officier" id="name_officier" data-required="1" class="form-control"  /> </div>
                                        </div>
                                        <!--End of Name of officer_name Textfield-->
										<!--officer designation  Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3"> designation </label>
                                            <div class="col-md-4">
                                                <input type="text" name="designation_officer" id="designation_officer" data-required="1" class="form-control"  /> </div>
                                        </div>
                                        <!--End of Name of guardian Textfield-->
										<!--contact  Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3"> Contact No.</label>
                                            <div class="col-md-4">
                                                <input type="number" name="contact_no" id="contact_no" data-required="1" class="form-control"  /> </div>
                                        </div>
                                        <!--End of Name of contact Textfield-->
										<!--HPO  Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3"> *Name of HPO <small>  (From which pay is drwan)</small></label>
                                            <div class="col-md-4">
                                                <input type="text" name="pho_name" id="pho_name" data-required="1" class="form-control"  /> </div>
                                        </div>
                                        <!--End of Name of PHO Textfield-->
										<hr>
										 <h4> <b> <u> ACKNOWLEDGEMENT SLIP CUM CERTIFICATE  </u>   <br>   <small>    TO BE GIVEN TO CUSTOMER</SMALL> </b> </h4>
										</br> <h5> CONSENT CUM DECLARATION FORM </h5>
										 <!--Name of Subscriber  Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3"> *Name of subscriber</label>
                                            <div class="col-md-4">
                                                <input type="text" name="name_sub" id="name_sub" data-required="1" class="form-control"  /> </div>
                                        </div>
                                        <!--End of Name of subscriber  Textfield-->
										<!--account no Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3"> Account No. <small> (as per post office) </small></label>
                                            <div class="col-md-4">
                                                <input type="text" name="account_no" id="account_no" data-required="1" class="form-control"  /> </div>
                                        </div>
                                        <!--End of accountno  Textfield-->
										<!--aadhar_no no Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3"> Aadhar Card  No.</label>
                                            <div class="col-md-4">
                                                <input type="text" name=""aadhar_no id="aadhar_no" data-required="1" class="form-control"  /> </div>
                                        </div>
                                        <!--End of aadhar_no  Textfield-->
												<!--Email id Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3"> E-mail ID:</label>
                                            <div class="col-md-4">
                                                <input type="text" name="email" id="email" data-required="1" class="form-control"  /> </div>
                                        </div>
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