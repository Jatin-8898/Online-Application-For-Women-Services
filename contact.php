<?php
    ob_start();
    require_once("includes/init.php");

    Session::startSession();/*STARTING THE SESSION AFTER THEN ONLY WE COME TO KNOW SESSION IS ACTIVE R NOT*/

    User::checkActiveSession();//FOR CHECKING THE USER CAME THROUGH LOGIN PAGE N IS VALID USER

?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <!-- Stylesheets
	============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

    <!-- Document Title
	============================================= -->
    <title>Indian Government | Women Services</title>

</head>

<body class="stretched">

    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
		============================================= -->
        <header id="header" class="full-header">

            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <!-- Logo
					============================================= -->
                    <div id="logo">
                        <a href="index.php" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="Canvas Logo"></a>
                        <a href="index.php" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
                    </div>
                    <!-- #logo end -->

                    <!-- Primary Navigation
					============================================= -->
                    <nav id="primary-menu">

                        <ul>
                            <li>
                                <a href="index.php">
                                    <div>Home</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>Schemes</div>
                                </a>
                                <ul>
                                    <li>
                                        <a href="mkby.php">
                                            <div>Mazi Kanya Bhagyashree</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="bsy.php">
                                            <div>Balika Samridhi</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="jsy.php">
                                            <div>Janani Suraksha</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pmuy.php">
                                            <div>Ujjwala Yojana</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pmjjby.php">
                                            <div>Varishtha Pension</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="vpby.php">
                                            <div>Bima Yojana</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="current">
                                <a href="#">
                                    <div>Complaint</div>
                                </a>
                            </li>
                            <li>
                                <a href="login.php">
                                    <div> <?php echo $_SESSION['member_name'];?></div>
                                </a>
                            </li>
                            <li>
                                <a href="logout.php">
                                    <div>Logout</div>
                                </a>
                            </li>
                            

                        </ul>
                    </nav>
                    <!-- #primary-menu end -->

                </div>

            </div>

        </header>
        <!-- #header end -->

        <!-- Page Title
		============================================= -->
        <section id="page-title">

            <div class="container clearfix">
                <h1>Complaint</h1>
                <span>Unhappy with us, we would like to know why?</span>
            </div>

        </section>
        <!-- #page-title end -->


        <!-- Content
		============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <!-- Postcontent
					============================================= -->
                    <div class="postcontent nobottommargin">

                        <h3>Send us an Email</h3>

                        <div class="contact-widget" data-alert-type="inline">

                            <div class="contact-form-result"></div>

                            <form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

                                <div class="form-process"></div>

                                <div class="col_one_third">
                                    <label for="template-contactform-name">Name <small>*</small></label>
                                    <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
                                </div>

                                <div class="col_one_third">
                                    <label for="template-contactform-email">Email <small>*</small></label>
                                    <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
                                </div>

                                <div class="col_one_third col_last">
                                    <label for="template-contactform-phone">Phone</label>
                                    <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
                                </div>

                                <div class="clear"></div>

                                <div class="col_two_third">
                                    <label for="template-contactform-subject">Subject <small>*</small></label>
                                    <input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
                                </div>

                                <div class="col_one_third col_last">
                                    <label for="template-contactform-service">Complaint regarding</label>
                                    <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
										<option value="">-- Select One --</option>
										<option value="GUI ISSUE">GUI</option>
										<option value="PHP / MySQL">Database</option>
										<option value="HTML5 / CSS3">Forms</option>
										
									</select>
                                </div>

                                <div class="clear"></div>

                                <div class="col_full">
                                    <label for="template-contactform-message">Message <small>*</small></label>
                                    <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                                </div>

                                <div class="col_full hidden">
                                    <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                                </div>

                                <div class="col_full">
                                    <button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
                                </div>

                            </form>
                        </div>

                    </div>
                    <!-- .postcontent end -->

                    <!-- Sidebar
					============================================= -->
                    <div class="sidebar col_last nobottommargin">

                        <address>
							<strong>Headquarters:</strong><br>
							VJTI, HR Mahajani Road<br>
							Matunga, Mumbai - 400086.<br>
						</address>
                        <abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8806502484<br>
                        <abbr title="Email Address"><strong>Email:</strong></abbr> info@indiangov.com

                    </div>
                    <!-- .sidebar end -->

                </div>

            </div>

        </section>
        <!-- #content end -->

        <!-- Footer
		============================================= -->
        <footer id="footer" class="dark">

            <!-- Copyrights
			============================================= -->
            <div id="copyrights">

                <div class="container clearfix">

                    <div class="col_half">
                        <img src="images/footer-logo.png" alt="Footer Logo" class="footer-logo" width="200px"> Copyrights &copy; 2017 All Rights Reserved by Indian Gov.
                    </div>

                    <div class="col_half col_last tright">
                        <div class="copyrights-menu copyright-links fright clearfix">
                            <a href="#">Home</a>/<a href="#">About</a>/<a href="#">Features</a>/<a href="#">Portfolio</a>/<a href="#">FAQs</a>/<a href="#">Contact</a>
                        </div>
                    </div>

                </div>

            </div>
            <!-- #copyrights end -->

        </footer>
        <!-- #footer end -->


    </div>
    <!-- #wrapper end -->

    <!-- Go To Top
	============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- External JavaScripts
	============================================= -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>

    <!-- Footer Scripts
	============================================= -->
    <script type="text/javascript" src="js/functions.js"></script>


</body>

</html>