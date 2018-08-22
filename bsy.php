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
    <?php
        include_once("includes/general-header/bsy-head.php");
    ?>
    <!-- END HEAD -->
    
    
    <!-- BEGIN BODY -->

    <body class="page-header-fixed">
        
        <!-- BEGIN HEADER -->
        <div class="header navbar navbar-inverse navbar-fixed-top">
            
            <!-- BEGIN TOP NAVIGATION BAR -->
            <div class="header-inner">
                
                <!-- BEGIN LOGO -->
                <a class="navbar-brand" href="/index.php"><br> </br> <img src="assets/img/bsy.jpg" alt="logo" class="img-responsive" width="180" /> </a>
                <!-- END LOGO -->
                
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <img src="assets/img/menu-toggler.png" alt="" /> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                
                <!-- BEGIN TOP NAVIGATION MENU -->
                <ul class="nav navbar-nav pull-right">
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
                <!-- END TOP NAVIGATION MENU -->
                
            </div>
            <!-- END TOP NAVIGATION BAR -->
        </div>
        <!-- END HEADER -->
        
        <div class="clearfix">    
        </div>
        
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
           
            <!-- BEGIN PAGE -->
            <div class="page-content">
               
                <!-- BEGIN PAGE HEADER-->
                <div class="row">
                    <div class="col-md-12">
           
                        <!-- BEGIN PAGE TITLE-->
                        <h3 class="page-title">
                  Balika Samridhi Yojana (BSY) <small>(No document other than the application form is necessary for obtaining the post birth benefit of Rs.500/-)</small>
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
                                <div class="caption"><i class="icon-reorder"></i>Balika Samridhi Yojana</div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                
                                <form action="http://localhost/women/scripts/add-bsy.php" id="form_bsy" class="form-horizontal" method="POST">
                                   
                                    <div class="form-body">
                                        <!--name of applicant Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Name of Applicant (Mother) :</label>
                                            <div class="col-md-4">
                                                <input type="text" name="applicant_name" id="applicant_name" data-required="1" class="form-control"/> </div>
                                        </div>
                                        <!--End of name of applicant Textfield-->
                                        <!--name of husband Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Name of Husband :</label>
                                            <div class="col-md-4">
                                                <input type="text" name="husband_name" id="husband_name" data-required="1" class="form-control" /> </div>
                                        </div>
                                        <!--End of name of husband Textfield-->
										 <!--son of Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Son of :</label>
                                            <div class="col-md-4">
                                                <input type="text" name="son_of" id="son_of" data-required="1" class="form-control" /> </div>
                                        </div>
                                        <!--End of son of Textfield-->
                                        
                                        <!--Address Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Full Address :</label>
                                            <div class="col-md-4">
                                                <textarea class="form-control" rows="3" name="address" id="address" value=""> </textarea>
                                            </div>
                                        </div>
                                        <!--End of Address Field-->
                                      
                                        <!--Date Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Date of birth <small>(Mother) </small> :</label>
                                            <div class="col-md-4">
                                                <div class="input-group date date-picker" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                    <input date="text" name="dob_mother" id="dob_mother" class="form-control" readonly> <span class="input-group-btn">
									 <button class="btn default" type="button"><i class="icon-calendar"></i></button>
									 </span> </div> 
                                                <!-- /input-group -->
                                            </div>
                                        </div>
                                        <!--End of Date Field-->
										 <!--Date Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Date of birth <small> (child) </small> :</label>
                                            <div class="col-md-4">
                                                <div class="input-group date date-picker" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                    <input type="text" name="dob_child" id="dob_child" class="form-control" readonly> <span class="input-group-btn">
									 <button class="btn default" type="button"><i class="icon-calendar"></i></button>
									 </span> </div> 
                                                <!-- /input-group -->
                                            </div>
                                        </div>
                                        <!--End of Date Field-->
										<!--Birth Place Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Birth Place <small> (of new born girl child)</small>:</label>
                                            <div class="col-md-4">
                                                <input type="text" name="birth_place" id="birth_place" data-required="1" class="form-control"  /> </div>
                                        </div>
                                        <!--End of Birth Place Textfield-->
                                        <!--no of girl child Name Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Number of girl child<small> (excluding new born girl child) </small>:</label>
                                            <div class="col-md-4">
                                                <input type="number" name="no_of_child" id="no_of_child" data-required="1" class="form-control"/> </div>
                                            
                                        </div>
                                        <!--End of no of child Textfield-->
										<br>
										</br>
										  <!--Caste belonging Radio Button Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Belonging To :</label>
                                            <div class="col-md-8">
                                                <div class="radio-list">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="caste" id="caste" value="SC" checked> SC </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="caste" id="caste" value="ST"> ST </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="caste" id="caste" value="OBC"> OBC </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="caste" id="caste" value="OTHERS"> OTHERS </label>
														<!-- END OF CASTE BELONGING RADIO BUTTON -->
                                                </div>
                                            </div>
                                        </div>
                                        <br>
										<h4><b>  It is requested that the post-birth benefit of Rs. 500/- under BSY may be sanctioned in favour of my newborn daughter. </b></h4>
										<br>
										<br>
										<h4><b><u> Authorization </u></b></h4>
										<h5>I hereby authorize the implementing agency for BSY to open an interest bearing account in the joint name of my new born daughter above and the implementing agency in a bank or post office nearest to me and, subject to the adjustment to be made as requested below (if any), to deposit the post- birth benefit therein. The BSY benefit of annual scholarships when the girl child starts attending school may also be deposited in the same account which will mature and become payable to the girl child on her attaining the age of eighteen years, subject to her having remained unmarried till then. No pre-mature withdrawal from this account will be permissible In the event of the girl child having married before attaining the age of eighteen years, the amount at credit in the account attributable to annual scholarships and the interest accrued thereon shall stand forfeited and will revert to the implementing agency. In the contingency of the death of the girl child before attaining the age of eighteen years, the entire amount at credit in the account shall stand forfeited and will revert to the implementing agency. </h5><br>
                                 <h4> <b> <u> Essential Details </u> </b> </h4>
									   <!--essential details fields---->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Amount in Figures :</label>
                                            <div class="col-md-4">
                                                <input name="amount_figures" id="amount_figures" input type="number" class="form-control" /> </div>
                                        </div>
										 <div class="form-group">
                                            <label class="control-label col-md-3">Amount in Words : </label>
                                            <div class="col-md-4">
                                                <input name="amount_words" id="amount_words" input type="text" class="form-control" /> </div>
                                        </div>
										 <div class="form-group">
                                            <label class="control-label col-md-3">Policy number :</label>
                                            <div class="col-md-4">
                                                <input name="policy_no" id="policy_no" input type="number" class="form-control" /> </div>
                                        </div>
                                        <!--End of Essential details Field-->
                                        
                                     
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