<?php
    
    ob_start();             /*FOR BUFFER OVERFLOW*/
	include_once("includes/init.php");    
	
    Session::startSession();/*STARTING THE SESSION AFTER THEN ONLY WE COME TO KNOW SESSION IS ACTIVE R NOT*/
    
    User::checkActiveSession();
?>
<!DOCTYPE html>

    <html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <?php
        include_once("includes/general-header/upload-head.php");
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
                        <h3 class="page-title">Upload Documents
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
                                <div class="caption"><i class="icon-reorder"></i>Upload Documents</div>
                            </div>
                            <div class="portlet-body form">
                                <!-- BEGIN FORM-->
                                
                                <form action="" id="upload_docs" class="form-horizontal" method="POST" enctype="multipart/form-data">
                                   
                                    <div class="form-body">
                                   
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Choose the Documents :</label>
                                        <div class="col-md-4">
                                        <select name="status" id="doc_select" name="doc_select" class="form-control">
        
                                        <option value="addhar">Application Form</option>
                                        <option value="ration-card" >Ration Card</option>
                                        <option value="ration-card" >Pan Card</option>
                                        <option value="ration-card" >Addhar Card</option>
                                        <option value="ration-card" >Bank passbook</option>
                                        <option value="ration-card" >Birth certificate</option>
                                        <option value="ration-card" >Attested Copy of Income Certificate</option>
         
                                        </select>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Upload the Documents :</label>
                                        <div class="col-md-4">
                                        <input type="file" class="form-control" id="doc" name="doc">
                                        </div>                                        
                                    </div>
                                    
                                    
                                    
                                    <div class="form-actions fluid">
                                        <div class="col-md-offset-3 col-md-9">
                                            <input type="submit" class="btn green" name="upload_btn" value="Submit">
<!--                                            <button type="submit" class="btn green">Submit</button>-->
                                        </div>
                                    </div>
                                </form>
                                <!-- END FORM-->
                            </div>
                        </div>
                <?php
                    if(isset($_POST['upload_btn'])){
                    
                    
                    $imgFile = $_FILES['doc']['name'];
                    $tmp_dir = $_FILES['doc']['tmp_name'];
                    $imgSize = $_FILES['doc']['size'];
                        
                    if(empty($imgFile)){
                       $errMSG = "Please Select the File.";
                        echo $errMSG;
                    }
                      else
                    {
                       $upload_dir = 'uploads/'; // upload directory

                       $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension

                       // valid image extensions
                       $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf', 'docx');
                          
                        // rename uploading image
                        $userpic = rand(1000,1000000).".".$imgExt;
                          
                        if(in_array($imgExt, $valid_extensions)){   
                        
                        // Check file size '5MB'
                        if($imgSize < 5000000)    {
                         move_uploaded_file($tmp_dir,$upload_dir.$userpic);
                        }
                        else{
                            $errMSG = "Sorry, your file is too large.";
                            echo $errMSG;
                            }
                       }
                       else{
                            $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";  
                            echo $errMSG;
                        }
                    
                    $upload = new Upload();
                    $upload->uploadDocuments($imgFile,$imgSize);
                    header("Location:upload.php");

                    }
                }
                ?>
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
        <!--FOR BOOTSTRAP VALIDATOR-->
        <script type="text/javascript" src="js/bootstrapValidator.min.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
        
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