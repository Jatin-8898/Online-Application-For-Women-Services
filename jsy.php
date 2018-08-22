
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
        include_once("includes/general-header/jsy-head.php");
    ?>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->

    <body class="page-header-fixed">
        <!-- BEGIN HEADER -->
        <div class="header navbar navbar-inverse navbar-fixed-top">
            <!-- BEGIN TOP NAVIGATION BAR -->
            <div class="header-inner">
                <!-- BEGIN LOGO -->
                <a class="navbar-brand" href="/index.php"><br> </br> <img src="assets/img/jsy.jpg" alt="logo" class="img-responsive" width="180" /> </a>
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
                  Janani Suraksha Yojana (JSY) <small>To be filled by ANM/GNM during registration and Antenatal checkup of the pregnant woman</small>
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
                                <div class="caption"><i class="icon-reorder"></i>Janani Suraksha Yojana</div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                <form action="http://localhost/anuja/scripts/add-jsy.php" id="form_jsy" class="form-horizontal" method="POST">
                                    <div class="form-body">
                                        <!--Sub Center Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Name of Sub Center :</label>
                                            <div class="col-md-4">
                                                <input type="text" name="sub_center" id="sub_center" data-required="1" class="form-control"/> </div>
                                        </div>
                                        <!--End of Sub Center Textfield-->
                                        <!--PHC Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Name of PHC :</label>
                                            <div class="col-md-4">
                                                <input type="text" name="phc" id="phc" data-required="1" class="form-control" /> </div>
                                        </div>
                                        <!--End of PHC Textfield-->
                                        <!--Applicant Name Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Applicant's <small>(Pregnant Woman)</small> Name :</label>
                                            <div class="col-md-4">
                                                <input type="text" name="applicant_name" id="applicant_name" data-required="1" class="form-control"  /> </div>
                                        </div>
                                        <!--End of Applicant Name Textfield-->
                                        <!--Husband Name Textfield-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Husband's Name :</label>
                                            <div class="col-md-4">
                                                <input type="text" name="husband_name" id="husband_name" data-required="1" class="form-control"/> </div>
                                        </div>
                                        <!--End of Husband Name Textfield-->
                                        <!--Address Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Full Address :</label>
                                            <div class="col-md-4">
                                                <textarea class="form-control" rows="3" name="address" id="address" value=""> </textarea>
                                            </div>
                                        </div>
                                        <!--End of Address Field-->
                                        <!--Area Radio Button Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Please Select any one :</label>
                                            <div class="col-md-8">
                                                <div class="radio-list">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="area" id="area" value="Rural" checked> Rural </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="area" id="area" value="Urban"> Urban </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="area" id="area" value="Slums"> Slums </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="area" id="area" value="TE"> TE </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="area" id="area" value="Char"> Char </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="area" id="area" value="Hill"> Hill </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End of Area Radio Button Field-->
                                        <!--Card Radio Button Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Posses a BPL Card? :</label>
                                            <div class="col-md-8">
                                                <div class="radio-list">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="card" id="card" value="Yes" checked> Yes </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="card" id="card" value="No"> No </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End of Card Radio Button Field-->
                                        <!--BPL Card No Textfield-->
                                        <div class="form-group">
                                            <div class="col-md-2"></div>
                                            <label class="control-label col-md-1">If Yes BPL Card No :</label>
                                            <div class="col-md-4">
                                                <input type="number" name="bpl_card_no" id="bpl_card_no" class="form-control" /> </div>
                                        </div>
                                        <!--End of BPL Card No Textfield-->
                                        <!--Notification Label-->
                                        <div class="form-group">
                                            <div class="col-md-2"></div>
                                            <label class="control-label col-md-4">If No any other certification (Enclose a Photocopy) </label>
                                        </div>
                                        <!--End of Notification Label-->
                                        <hr>
                                        <h4><b>Date &amp; Registration of Pregnant Woman No. of the Antenatal Registrar of SC/PHC/CHC </b>:</h4>
                                        <br>
                                        <!--Date Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Date :</label>
                                            <div class="col-md-4">
                                                <div class="input-group date date-picker" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                    <input type="text" name="date" id="date" class="form-control" readonly> <span class="input-group-btn">
									 <button class="btn default" type="button"><i class="icon-calendar"></i></button>
									 </span> </div> 
                                                <!-- /input-group -->
                                            </div>
                                        </div>
                                        <!--End of Date Field-->
                                        <!--Registration No Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Registration No. :</label>
                                            <div class="col-md-4">
                                                <input name="registration_no" id="registration_no" type="text" class="form-control" /> </div>
                                        </div>
                                        <!--End of Registration No Field-->
                                        
                                        <!--Age Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Age :</label>
                                            <div class="col-md-2">
                                                <input name="age" id="age" type="number" max="99" class="form-control" /> </div>
                                            <label class="control-label col-md-1">IMP :</label>
                                            <div class="col-md-2">
                                                <input name="imp" id="imp" type="text" class="form-control" /> </div>
                                            <label class="control-label col-md-1">EDD :</label>
                                            <div class="col-md-2">
                                                <input name="edd" id="edd" type="text" class="form-control" /> </div>
                                        </div>
                                        <!--End of Age Field-->
                                        <!--Order of Pregnancy Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-2"><b>Order of Pregnancy </b></label>
                                            <label class="control-label col-md-1">Para :</label>
                                            <div class="col-md-2">
                                                <input name="para" id="para" type="text" class="form-control" /> </div>
                                            <label class="control-label col-md-1">Gravida:</label>
                                            <div class="col-md-2">
                                                <input name="gravida" id="gravida" type="text" class="form-control" /> </div>
                                        </div>
                                        <!--End of Order of Pregnancy Field-->
                                        <!--Health Inst Name Field-->
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Decision taken for delivery at (Name of Health Inst) :</label>
                                            <div class="col-md-4">
                                                <input name="health_inst" id="health_inst" type="text" class="form-control" /> </div>
                                        </div>
                                        <!--End of Health Inst Name Field-->
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