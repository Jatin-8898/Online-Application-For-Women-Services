<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<?php
    
    ob_start();

    include_once("classes/User.php");
    if(include_once("classes/Functions.php")){
        //echo "GOT";
    }

    if(isset($_POST['register'])){
        session_start();                /*IMP LINE STARTING THE SESSION*/
        
        extract($_POST);                /*USED TO GET THE DETAILS FROM THE DB iE THE DATA  */
        
        echo "CAME HERE";
        /*****************USERNAME IS varyanijatin88@gmail.com AND PASS is abc123***************/
        $obj = new User();
        if($obj->processRegister($member_name, $member_email, $member_password)){
            
            //echo $_SESSION['member_id'];        /*JUST FOR TESTING*/
            echo "<br>REGISTERED <br>";
            header("Location: login.php");
            
            Functions::redirect('login.php');          /*USED TO CALL STATIC ()*/
        
        }else{
            echo "<br>SOME ISSUE HERE<br>";
        
        }
    }
?>






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
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<li><a href="index.php"><div>Home</div></a>
							</li>
							<li><a href="#"><div>Schemes</div></a>
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
							<li ><a href="#"><div>Contact Us</div></a>
							</li>
							<li><a href="login.php"><div>Login</div></a>
							</li>
							<li class="current"><a href="regist.php"><div>Registration</div></a>
							</li>
							
						</ul>
					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Register</h1>
				<span>Get in Touch with Us</span>
			</div>

		</section><!-- #page-title end -->


		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Postcontent
					============================================= -->
					<div class="postcontent nobottommargin">

						<h3>We would like to connect with you</h3>

						<div class="contact-widget" data-alert-type="inline">

							<div class="contact-form-result"></div>

							<form class="nobottommargin" id="" name="" action="" method="post">

								<div class="form-process"></div>

								<div class="col_one_third">
									<label for="member_name">Name <small>*</small></label>
									<input type="text" id="" name="member_name" value="" class="sm-form-control required" />
								</div>
								<div class="clear"></div>

								<div class="col_one_third">
									<label for="template-contactform-email">Email <small>*</small></label>
									<input type="email" id="" name="member_email" value="" class="required email sm-form-control" />
								</div>
								
								<div class="clear"></div>

								<div class="clear"></div>
								<div class="clear"></div>
								
								<div class="col_one_third col_last">
									<label for="template-contactform-phone">Password<small>*</small></label>
									<input type="password" id="template-contactform-phone" name="member_password" value="" class="sm-form-control" />
								</div>

								<div class="clear"></div>


								<div class="col_full hidden">
									<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
								</div>

								<div class="col_full">
									<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="register" value="register">Register</button>
								</div>

							</form>
						</div>

					</div><!-- .postcontent end -->
					

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						<img src="images/footer-logo.png" alt="Footer Logo" class="footer-logo" width="200px">
						Copyrights &copy; 2017 All Rights Reserved by Indian Gov.
					</div>

					<div class="col_half col_last tright">
						<div class="copyrights-menu copyright-links fright clearfix">
							<a href="#">Home</a>/<a href="#">About</a>/<a href="#">Features</a>/<a href="#">Portfolio</a>/<a href="#">FAQs</a>/<a href="#">Contact</a>
						</div>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->


	</div><!-- #wrapper end -->

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