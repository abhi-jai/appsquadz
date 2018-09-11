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

<style>

</style>
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
<div class="row">
<div class="col col-xs-3">
</div>
<div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Complete Profile</h6>
				</div>
				<div class="ui-block-content">

					
					<!-- Form Favorite Page Information -->
					
					<form>
						<div class="row">
                        
                    <div class="col col-lg-6 col-md-6 col-sm-12 col-12 text-center">
            <div class="profile-pic">
            <div class="picture">
            <img src="<?php echo base_url();?>web_assets/img/author-main1.jpg" class="picture-src" id="wizardPicturePreview" title="" alt="">
            <input id="wizard-picture" class="" type="file">
        </div>
        </div>
        </div>    
                        
                        
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating">
									<label class="control-label">Name</label>
									<input class="form-control" placeholder="" value="Your Name" type="text">
								</div>
					
								<div class="form-group label-floating">
									<label class="control-label">Your Email</label>
									<input class="form-control" placeholder="" value="your@yourmail.com" type="email">
								</div>
					
							<div class="form-group label-floating">
									<label class="control-label">Mobile Number</label>
									<input class="form-control" placeholder="" value="+91 8888 888 888" type="text">
								</div>
							</div>
					
							
					
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Select Stream</label>
									<select class="selectpicker form-control">
										<option value="Me">Medical</option>
										<option value="De">Dental</option>
									</select>
								</div>
							</div>
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Select Sub Stream</label>
									<select class="selectpicker form-control">
										<option value="Ug">Undergraduate student(MBBS)</option>
										<option value="Pg">Resident/Post Graduates</option>
                                        <option value="TE">Fellow/Registrar/Tutor/Dm/Mch</option>
                                        <option value="TE">Consultant</option>
                                        
									</select>
								</div>
							</div>
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Select Specialisation</label>
									<select class="selectpicker form-control">
										<option value="SF">Basic Science</option>
										<option value="NY">Clinical Science</option>
									</select>
								</div>
							</div>
                            
                            
                            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group label-floating is-select">
									<label class="control-label">Select Specialisation</label>
									<select class="selectpicker form-control show-tick" multiple>
  <option>Other</option>
  <option>Jimper Pg</option>
  <option> Neet PG</option>
  <option>Fellowship Outside India</option>
  <option>  European Diploma</option>
  
</select>

								</div>
							</div>
                        
                        
                     
                            
												
							
					
							
					
							
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<a href="#" class="btn btn-secondary btn-lg full-width">Reset</a>
							</div>
							<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
								<a href="#" class="btn btn-primary btn-lg full-width">Save and Continue</a>
							</div>
						</div>
					</form>
					
					<!-- ... end Form Favorite Page Information -->
					

				</div>
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
<script defer src="fonts/fontawesome-all.js"></script>

<script src="Bootstrap/dist/js/bootstrap.bundle.js"></script>

<!-- for Profile-pic-->
<script>
$(document).ready(function(){
// Prepare the preview for profile picture
    $("#wizard-picture").change(function(){
        readURL(this);
    });
});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
<!-- End for Profile-pic-->
</body>
</html>