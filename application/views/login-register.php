<!DOCTYPE html>
<html lang="en">
<head>

	<title>Landing Page</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Main Font -->
	<script src="<?php echo base_url();?>web_assets/js/webfontloader.min.js"></script>

	<script>
		WebFont.load({
			google: {
				families: ['Roboto:300,400,500,700:latin']
			}
		});
	</script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>web_assets/Bootstrap/dist/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>web_assets/Bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>web_assets/Bootstrap/dist/css/bootstrap-grid.css">

	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>web_assets/css/main.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>web_assets/css/fonts.min.css">



</head>

<body class="landing-page">

<div class="content-bg-wrap"></div>


<!-- Header Standard Landing  -->

<div class="header--standard header--standard-landing" id="header--standard">
	<div class="container">
		<div class="header--standard-wrap">

			<a href="#" class="logo">
				<div class="img-wrap">
					<img src="<?php echo base_url();?>web_assets/img/logo.png" alt="eGYANSHALA">
					<img src="<?php echo base_url();?>web_assets/img/logo-colored-small.png" alt="eGYANSHALA" class="logo-colored">
				</div>
				
			</a>
	
		</div>
	</div>
</div>

<!-- ... end Header Standard Landing  -->
<div class="header-spacer--standard"></div>

<div class="container">
	<div class="row display-flex">
		<div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
			<div class="landing-content">
				<h1>India's No.1 eLearning & eAssesment platform. 
Online Courses.</h1>
				<p>eGyanshala is the easiest and safest way for medical professionals to discover, discuss and 
share clinical cases and medical images.

				</p>
				<a href="#" class="btn btn-md btn-border c-white">Register Now!</a>
			</div>
		</div>

		<div class="col col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">
			
			<!-- Login-Registration Form  -->
			
			<div class="registration-login-form">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#home" role="tab">
							Register
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#profile" role="tab">
							Log in

						</a>
					</li>
				</ul>
			
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="home" role="tabpanel" data-mh="log-tab">
						
						<form class="content" action="<?php echo site_url();?>login_register/register" method="POST">
							<div class="row">
								<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">First Name</label>
										<input class="form-control" placeholder="" type="text" name="fname">
										<?= form_error('fname'); ?>
									</div>
								</div>
								<div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Last Name</label>
										<input class="form-control" placeholder="" type="text" name="lname">
									</div>
								</div>
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Your Email</label>
										<input class="form-control" placeholder="" type="email" name="email">
									</div>
                                    <div class="form-group label-floating is-empty">
										<label class="control-label">Your Mobile</label>
										<input class="form-control" placeholder="" type="text" name="mobile">
										<?= form_error('mobile'); ?>
									</div>
									<div class="form-group label-floating is-empty">
										<label class="control-label">Your Password</label>
										<input class="form-control" placeholder="" type="password" name="password">
									
									</div>
                                    <div class="form-group label-floating is-empty">
										<label class="control-label">Re Enter Password</label>
										<input class="form-control" placeholder="" type="password" name="repassword">
										<?= form_error('repassword'); ?>
									</div>
			
								
								
									<div class="remember">
										<div class="checkbox">
											<label>
												<input name="optionsCheckboxes" type="checkbox">
												I accept the <a href="#">Terms and Conditions</a> of the website
											</label>
										</div>
									</div>
			
									<input type="submit" class="btn btn-blue btn-lg full-width" value="Complete Registration!">
								</div>
							</div>
						</form>
					</div>
<!--log in			-->
					<div class="tab-pane" id="profile" role="tabpanel" data-mh="log-tab">
					<form class="content" method="post" action="<?php echo site_url();?>login_register/login">
						 	<div class="row">
								<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group label-floating is-empty">
										<label class="control-label">Your Email</label>
										<input class="form-control" placeholder="" id="username" name="username" type="text">
									</div>
									<div class="form-group label-floating is-empty">
										<label class="control-label">Your Password</label>
										<input class="form-control" placeholder="" id="password" name="password" type="password">
									</div>
			
									<div class="remember">
			
										<div class="checkbox">
											<label>
												<input name="optionsCheckboxes" type="checkbox">
												Remember Me
											</label>
										</div>
										<a href="forgot-Password.html" class="forgot">Forgot my Password</a>
									</div>
			
									<input type='submit' class="btn btn-lg  btn-blue full-width" value="Login">
			
									<div class="or"></div> 
                                    <div class="social-login text-center">
			
									<a href="#" class="btn btn-md-2 bg-facebook  btn-icon-left"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
			
									<a href="#" class="btn btn-md-2 bg-twitter  btn-icon-left"><i class="fab fa-twitter" aria-hidden="true"></i></a>
			<a href="#" class="btn btn-md-2 bg-google  btn-icon-left"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
			
									<a href="#" class="btn btn-md-2  bg-linkedin  btn-icon-left"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                                   
                                    <a data-toggle="modal" data-target="#popup-write-rewiev"  href="#" class="btn  btn-lg    full-width btn-border-think custom-color c-grey">Login with DAMS</a></div>
			
									<p style="padding-bottom:8px;">Don’t you have an account? <a href="#">Register Now!</a> it’s really simple and you can start enjoing all the benefits!</p>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			<!-- ... end Login-Registration Form  -->		</div>
	</div>
</div>

<div class="modal fade dams_login" id="popup-write-rewiev" tabindex="-1" role="dialog" aria-labelledby="popup-write-rewiev" aria-hidden="true">
	<div class="modal-dialog window-popup popup-write-rewiev" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
			</a>

			<div class="modal-header">
				<h6 class="title">Log In With DAMS</h6>
			</div>

			<div class="modal-body">
				<form class="form-write-rewiev">
			<div class="row">
				
				
				<div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
					<div class="form-group label-floating">
						<label class="control-label">Dams Roll Number</label>
						<input class="form-control" placeholder="" type="Dams Roll Number" value="">
					</div>
                    
                    <div class="form-group label-floating">
						<label class="control-label">Dams Password</label>
						<input class="form-control" placeholder="" type="Dams Password" value="">
					</div>
                    <div class="row">
                    <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
								<a href="#" class="btn btn-secondary btn-md-2  full-width">Cancel</a>
							</div>
                            
                            <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
								<a href="#" class="btn btn-blue btn-md-2 full-width ">Verify</a>
							</div>
                    </div>
                    
          
				</div>
			</div>
		</form>
			</div>

		</div>
	</div>
</div>
<!-- JS Scripts -->
<script src="<?php echo base_url();?>web_assets/js/jquery-3.2.1.js"></script>
<script src="<?php echo base_url();?>web_assets/js/jquery.appear.js"></script>
<script src="<?php echo base_url();?>web_assets/js/jquery.mousewheel.js"></script>
<script src="<?php echo base_url();?>web_assets/js/perfect-scrollbar.js"></script>
<script src="<?php echo base_url();?>web_assets/js/jquery.matchHeight.js"></script>
<script src="<?php echo base_url();?>web_assets/js/svgxuse.js"></script>
<script src="<?php echo base_url();?>web_assets/js/imagesloaded.pkgd.js"></script>
<script src="<?php echo base_url();?>web_assets/js/Headroom.js"></script>
<script src="<?php echo base_url();?>web_assets/js/velocity.js"></script>
<script src="<?php echo base_url();?>web_assets/js/ScrollMagic.js"></script>
<script src="<?php echo base_url();?>web_assets/js/jquery.waypoints.js"></script>
<script src="<?php echo base_url();?>web_assets/js/jquery.countTo.js"></script>
<script src="<?php echo base_url();?>web_assets/js/popper.min.js"></script>
<script src="<?php echo base_url();?>web_assets/js/material.min.js"></script>
<script src="<?php echo base_url();?>web_assets/js/bootstrap-select.js"></script>
<script src="<?php echo base_url();?>web_assets/js/smooth-scroll.js"></script>
<script src="<?php echo base_url();?>web_assets/js/selectize.js"></script>
<script src="<?php echo base_url();?>web_assets/js/swiper.jquery.js"></script>
<script src="<?php echo base_url();?>web_assets/js/moment.js"></script>
<script src="<?php echo base_url();?>web_assets/js/daterangepicker.js"></script>
<script src="<?php echo base_url();?>web_assets/js/simplecalendar.js"></script>
<script src="<?php echo base_url();?>web_assets/js/fullcalendar.js"></script>
<script src="<?php echo base_url();?>web_assets/js/isotope.pkgd.js"></script>
<script src="<?php echo base_url();?>web_assets/js/ajax-pagination.js"></script>
<script src="<?php echo base_url();?>web_assets/js/Chart.js"></script>
<script src="<?php echo base_url();?>web_assets/js/chartjs-plugin-deferred.js"></script>
<script src="<?php echo base_url();?>web_assets/js/circle-progress.js"></script>
<script src="<?php echo base_url();?>web_assets/js/loader.js"></script>
<script src="<?php echo base_url();?>web_assets/js/run-chart.js"></script>
<script src="<?php echo base_url();?>web_assets/js/jquery.magnific-popup.js"></script>
<script src="<?php echo base_url();?>web_assets/js/jquery.gifplayer.js"></script>
<script src="<?php echo base_url();?>web_assets/js/mediaelement-and-player.js"></script>
<script src="<?php echo base_url();?>web_assets/js/mediaelement-playlist-plugin.min.js"></script>

<script src="<?php echo base_url();?>web_assets/js/base-init.js"></script>
<script defer src="<?php echo base_url();?>web_assets/fonts/fontawesome-all.js"></script>

<script src="<?php echo base_url();?>web_assets/Bootstrap/dist/js/bootstrap.bundle.js"></script>

</body>
</html>