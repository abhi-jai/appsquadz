<!DOCTYPE html>
<html lang="en">
<head>
<title>My Test</title>

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
<body>

<!-- Fixed Sidebar Left -->
<?php include 'module/header.php';?>
<!-- ... end Fixed Sidebar Left --> 

<!-- Fixed Sidebar Left -->

<!-- ... end Fixed Sidebar Left --> 

<!-- Header-BP -->
<?php include 'module/profile.php';?>
<!-- ... end Header-BP --> 

<!-- Responsive Header-BP -->



<!-- ... end Responsive Header-BP -->
<div class="header-spacer"></div>
<form>
<div class="container">
<h2 class="text-center">Test Question Bank</h2>
      <div class="row">
      
    <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="ui-block responsive-flex">
        <div class="ui-block-title">
              <div class="w-select">
            <div class="title">Select Course</div>
            <fieldset class="form-group">
                  <select class="selectpicker form-control">
                <option value="DA">Bioloagy</option>
                <option value="NU">Number of Likes</option>
                <option value="NU">Number of Shared</option>
              </select>
                </fieldset>
          </div>
              <div class="w-select">
            <div class="title">Select Subject</div>
            <fieldset class="form-group">
                  <select class="selectpicker form-control">
                <option value="DA">Bioloagy</option>
                <option value="NU">Number of Likes</option>
                <option value="NU">Number of Shared</option>
              </select>
                </fieldset>
          </div>
              <div class="w-select">
            <div class="title">Select Test Series</div>
            <fieldset class="form-group">
                  <select class="selectpicker form-control">
                <option value="DA">English</option>
                <option value="NU">Hindi</option>
              </select>
                </fieldset>
          </div>
          </div>
      </div>
        </div>
  </div>
    </div>
<div class="container">
<div class="row">
<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

<div class="question-box">

<p>Q1. <?php echo $detail[0]['question'];?></p>
              <div class="options">
              <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                    <?php echo $detail[0]['option_1'];?></label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    B.	
                    <?php echo $detail[0]['option_2'];?> </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    C.	
                    <?php echo $detail[0]['option_3'];?> </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    D.	
                    <?php echo $detail[0]['option_4'];?> </label>
                </div>
              </div>
</div>
<div class="question-box">
<p>Q2.  <?php echo $detail[1]['question'];?></p>
              <div class="options">
              <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                    <?php echo $detail[1]['option_1'];?> </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                     <?php echo $detail[1]['option_2'];?> </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                     <?php echo $detail[1]['option_3'];?> </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                     <?php echo $detail[1]['option_4'];?> </label>
                </div>
              </div>
</div>
<div class="question-box">
<p>Q3.  <?php echo $detail[2]['question'];?></p>
              <div class="options">
              <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                     <?php echo $detail[2]['option_1'];?> </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                     <?php echo $detail[2]['option_2'];?> </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                     <?php echo $detail[2]['option_3'];?> </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                     <?php echo $detail[2]['option_4'];?> </label>
                </div>
              </div>
</div>
<div class="question-box">
<p>Q4.  <?php echo $detail[3]['question'];?></p>
              <div class="options">
              <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                     <?php echo $detail[3]['option_1'];?> </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                     <?php echo $detail[3]['option_2'];?> </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                     <?php echo $detail[3]['option_3'];?> </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                     <?php echo $detail[3]['option_4'];?> </label>
                </div>
              </div>
</div>
<div class="question-box">
<p>Q5.  <?php echo $detail[4]['question'];?></p>
              <div class="options">
              <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                     <?php echo $detail[4]['option_1'];?> </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                     <?php echo $detail[4]['option_2'];?> </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                     <?php echo $detail[4]['option_3'];?> </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios">
                    A.	
                     <?php echo $detail[4]['option_4'];?> </label>
                </div>
 </div>
 
</div>

</div>
</div>
</div> 
</form>
<a class="back-to-top" href="#"> <img src="<?php echo base_url();?>web_assets/svg-icons/back-to-top.svg" alt="arrow" class="back-icon"> </a> 

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