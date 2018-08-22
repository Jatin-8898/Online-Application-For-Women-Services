<?php
    ob_start();
    require_once("includes/init.php");

   // Session::startSession();/*STARTING THE SESSION AFTER THEN ONLY WE COME TO KNOW SESSION IS ACTIVE R NOT*/

    //User::checkActiveSession();//FOR CHECKING THE USER CAME THROUGH LOGIN PAGE N IS VALID USER

?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<?php
    $page = "dashboard";
    include_once("includes/head.php");
?>

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
				    <?php
				        include_once("includes/top-bar-index.php");
					?>
					<!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->
        <?php
                include_once("includes/slider.php");
        ?>


		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="divcenter center clearfix" style="max-width: 900px;">
						<h1>Welcome! This is <span>a Project by VJTI Students</span>.</h1>
						<h2>Online Application for Women Services; it's a one stop for all women services which has been started by our Government of India</h2>
					</div>

					<div class="line"></div>

					<div class="col_one_third">
						<div class="feature-box fbox-small fbox-plain" data-animate="fadeIn">
							<div class="fbox-icon">
								<a href="#"><i class="icon-diamond"></i></a>
							</div>
							<h3>Mazi Kanya Bhagyashree</h3>
                            <p><b>Application Form;<br>Birth Certificate of the Girl Child;<br> Identity Proof or PAN Card &amp;Aadhaar Card of the Parent/Legal Guardian;<br> Residence Proof or Aadhaar Card of the Parent/Legal Guardian; </p>
						</div>
					</div>

					<div class="col_one_third">
						<div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="200">
							<div class="fbox-icon">
								<a href="#"><i class="icon-female"></i></a>
							</div>
							<h3>Balika Samridhi</h3>
							<p>Application Form; <br>Aadhar Card;<br>Domicile of parents of girl child of Maharashtra state;<br> Birth certificate of girl child;<br> Income certificate of parents; <br>Ration card; <br>Bank passbook of girl child;</p>
						</div>
					</div>

					<div class="col_one_third col_last">
						<div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="400">
							<div class="fbox-icon">
								<a href="#"><i class="icon-ambulance"></i></a>
							</div>
							<h3>Janani Suraksha</h3>
                            <p>Certificate for any other Scheme from which you get Benefit<br>Aadhar Card<br>
                            Proof of permanent Address<br>
                            Attested Copy of Parents Income Certificate<br></p>
                                                    </div>
					</div>

					<div class="clear"></div>

					<div class="col_one_third">
						<div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="600">
							<div class="fbox-icon">
								<a href="#"><i class="icon-fire"></i></a>
							</div>
							<h3>Ujjwala Yojana</h3>
							<p>Application Form<br> Aadhar Card<br>Attested Copy of Income Certificate<br>Ration Card</p>
						</div>
					</div>

					<div class="col_one_third">
						<div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="800">
							<div class="fbox-icon">
								<a href="#"><i class="icon-rupee"></i></a>
							</div>
							<h3>Varishta Pension</h3>
							<p>Application Form<br>Aadhaar Card or PAN Card
                                <br>Address Proof
                                <br>Birth Certificate
                                <br>Medical History
                                <br>KYC Documents
                                s</p>
						</div>
					</div>

					

					<div class="clear"></div>

				</div>

                <div class="line"></div>
				<div class="clear"></div>

				<div class="col_full bottommargin-lg common-height">

					<div class="col-md-4 dark col-padding ohidden" style="background-color: #1abc9c;">
						<div>
							<h3 class="uppercase" style="font-weight: 600;">Why choose Us</h3>
							<p style="line-height: 1.8;">We are converting the manual form filling process with easy online application.</p>
							<i class="icon-bulb bgicon"></i>
						</div>
					</div>

					<div class="col-md-4 dark col-padding ohidden" style="background-color: #34495e;">
						<div>
							<h3 class="uppercase" style="font-weight: 600;">Our Mission</h3>
							<p style="line-height: 1.8;">To support Digital India work of PM Narendra Modi, our mission is to make the Government of India Digital First so that Indian's also become Digital.</p>
							<i class="icon-cog bgicon"></i>
						</div>
					</div>

					<div class="col-md-4 dark col-padding ohidden" style="background-color: #e74c3c;">
						<div>
							<h3 class="uppercase" style="font-weight: 600;">What you get</h3>
                            <p style="line-height: 1.8;">  An   Online   Application   for Women form filling at their own convinience and their own time.</p>
							<i class="icon-thumbs-up bgicon"></i>
						</div>
					</div>

				</div>

			</div>

		</section><!-- #content end -->

		<?php
		    include_once("includes/footer.php");
		?>


	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="assets/js/bootstrapValidator.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

	<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
	<script type="text/javascript" src="include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>



	<script type="text/javascript">

		var tpj=jQuery;
		tpj.noConflict();

		tpj(document).ready(function() {

			var apiRevoSlider = tpj('.tp-banner').show().revolution(
			{
				sliderType:"standard",
				jsFileLocation:"include/rs-plugin/js/",
				sliderLayout:"fullscreen",
				dottedOverlay:"none",
				delay:9000,
				responsiveLevels:[1200,992,768,480,320],
				startwidth:1140,
				startheight:600,
				hideThumbs:200,

				thumbWidth:100,
				thumbHeight:50,
				thumbAmount:3,

				navigation: {
					keyboardNavigation:"off",
					keyboard_direction: "horizontal",
					mouseScrollNavigation:"off",
					onHoverStop:"off",
					touch:{
						touchenabled:"on",
						swipe_threshold: 75,
						swipe_min_touches: 1,
						swipe_direction: "horizontal",
						drag_block_vertical: false
					},
					arrows: {
                        style: "hermes",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div>	<div class="tp-arr-titleholder">{{title}}</div>	</div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 10,
                            v_offset: 0
                        }
                    }
				},

				touchenabled:"on",
				onHoverStop:"on",

				swipe_velocity: 0.7,
				swipe_min_touches: 1,
				swipe_max_touches: 1,
				drag_block_vertical: false,


				parallax:"mouse",
				parallaxBgFreeze:"on",
				parallaxLevels:[8,7,6,5,4,3,2,1],
				parallaxDisableOnMobile:"on",

				keyboardNavigation:"on",

				shadow:0,
				fullWidth:"off",
				fullScreen:"on",

				spinner:"spinner0",

				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,

				shuffle:"off",


				forceFullWidth:"off",
				fullScreenAlignForce:"off",
				minFullScreenHeight:"400",

				hideThumbsOnMobile:"off",
				hideNavDelayOnMobile:1500,
				hideBulletsOnMobile:"off",
				hideArrowsOnMobile:"off",
				hideThumbsUnderResolution:0,

				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				startWithSlide:0,
				fullScreenOffset:"0px"
			});

			apiRevoSlider.bind("revolution.slide.onloaded",function (e) {
				setTimeout( function(){ SEMICOLON.slider.sliderParallaxDimensions(); }, 200 );
			});

			apiRevoSlider.bind("revolution.slide.onchange",function (e,data) {
				SEMICOLON.slider.revolutionSliderMenu();
			});

		}); //END REVOLUTION SLIDER

	</script>

</body>
</html>