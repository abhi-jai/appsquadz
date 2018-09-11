<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Test1</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Main Font -->
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
	<script src="<?php echo base_url(); ?>web_assets/js/webfontloader.min.js"></script>
  <script src="<?php echo base_url(); ?>web_assets/js/ssc.js"></script>
  <script src="<?php echo base_url(); ?>web_assets/js/quiz.js"></script>
	<script>
		WebFont.load({
			google: {
				families: ['Roboto:300,400,500,700:latin']
			}
		});
	</script>


	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web_assets/Bootstrap/dist/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web_assets/Bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web_assets/Bootstrap/dist/css/bootstrap-grid.css">

	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web_assets/css/main.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web_assets/css/fonts.min.css">
	</head>
	<body>

<!-- Header-BP -->
<header class="header bg-blue" id="site-header">
      <div class="page-title test-title text-center">
    <h6>eGyanshala</h6>
  </div>
      <div class="header-content-wrapper"> </div>
    </header>

<!-- ... end Header-BP -->

<!-- Responsive Header-BP -->

<header class="header header-responsive bg-blue" id="site-header-responsive"> <a href="javascript:void(0);" class="logo">
  <div class="img-wrap"> <img src="<?php echo base_url(); ?>web_assets/img/logo-colored-small.png" alt="Olympus"> </div>
  <div class="title-block">
    <h6 class="logo-title">olympus</h6>
    <div class="sub-title">SOCIAL NETWORK</div>
  </div>
  </a> </header>

<!-- ... end Responsive Header-BP -->
<div class="header-spacer"></div>

<!-- ... start test tabs -->


    </div>
<div class="container-fluid">
      <div class="row">
    <div class="col col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12">
          <div class="ui-block">
        <div class="test-box-top bg-grey"> <span class="title">Text Size</span> <span class="text-btn"> <span> <a href="javascript:void(0);" class="btn btn-white btn-control" id="sizePlus" onclick="changeFontSize(this.id)">A+</a></span> <span> <a href="javascript:void(0);" class="btn btn-white btn-control" id="sizeMinus" onclick="changeFontSize(this.id)">A-</a></span> </span> </div>
<!-- text Size Function -->


        <div class="ui-block-content minmax" id="minmax" onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" >
              <p class="text-right">(Mark: <?php echo $detail['basic_info']['total_marks'] ?>) (Negative Mark/s - <?php echo $detail['basic_info']['negative_marking'] ?>)</p>

              <?php
static $index;
$detail = $detail['question_bank'];
$count = count($detail);

for ($i = 0; $i < $count; $i++) {
    $index = $i + 1;
    if ($i == 0) {
        $style = 'block';
    } else {
        $style = 'none';
    }
    ?>
              <div class="question-box content" id="content-<?php echo $i + 1; ?>" style="display: <?php echo $style; ?>;">

              <div><span class="quenmbr">Q <?php echo $i + 1; ?>.</span><?php echo $detail[$i]['question'] ?></div>
              <div class="options"> <br>
            <div class="radio">
                  <label>
                <input type="radio" class="radio<?php echo $i + 1; ?>" name="optionsRadios<?php echo $i + 1; ?>" value="<?php echo $detail[$i]['option_1'] ?>" id="1" onclick="check(this.value,this.name)">
                <span class="circle"></span><span class="check" ></span> A.
                <?php echo $detail[$i]['option_1'] ?> </label>
                </div>
            <div class="radio">
                  <label>
                <input type="radio" class="radio<?php echo $i + 1; ?>" name="optionsRadios<?php echo $i + 1; ?>" value="<?php echo $detail[$i]['option_2'] ?>" id="2" onclick="check(this.value,this.name)">
                <span class="circle"></span><span class="check"></span> B.
                <?php echo $detail[$i]['option_2'] ?> </label>
                </div>
            <div class="radio">
                  <label>
                <input type="radio" class="radio<?php echo $i + 1; ?>" name="optionsRadios<?php echo $i + 1; ?>" value="<?php echo $detail[$i]['option_3'] ?>" id="3" onclick="check(this.value,this.name)">
                <span class="circle"></span><span class="check"></span> C.
                <?php echo $detail[$i]['option_3'] ?> </label>
                </div>
            <div class="radio">
                  <label>
                <input type="radio" class="radio<?php echo $i + 1; ?>" name="optionsRadios<?php echo $i + 1; ?>" value="<?php echo $detail[$i]['option_4'] ?>" id="4" onclick="check(this.value,this.name)">
                <span class="circle"></span><span class="check"></span> D.
                <?php echo $detail[$i]['option_4'] ?> </label>
              </div>
          </div>

          </div>
          <?php

}
?>
<div id="div"></div>
       </div>

      </div>
        </div>
    <aside class="col col-xl-3 order-xl-3 col-lg-3 order-lg-3 col-md-6 col-sm-12 col-12">
          <div class="ui-block">
        <div class="student-test-details">
        <img src="<?php echo base_url(); ?>web_assets/img/avatar1.jpg" alt="" />
        <div class="student-details">
       <span class="student-roll"><span>Name</span><span>Ajay Kumar</span></span>

              <span class="student-roll"><span>Roll No</span><span>123456789</span></span>
        </div>



        <div>
        </div>

        </div>
        <!-- W-Activity-Feed -->

        <!-- .. end W-Activity-Feed -->
      </div>
          <div class="ui-block">
        <div class="ui-block-title">
              <h6 class="title">Question Palette</h6>
            </div>

        <!-- W-Activity-Feed -->

        <div class="question-status">
              <ul>
            <li><a href="" class="common tagged">Q01</a></li>
            <li><a href="" class="common attempt">Q02</a></li>
            <li><a href="" class="common attempt">Q03</a></li>
            <li><a href="" class="common attempt">Q04</a></li>
            <li><a href="" class="common attempt">Q05</a></li>

          </ul>
            </div>

        <!-- .. end W-Activity-Feed -->

      </div>
        </aside>
  </div>
      <div class="question-submit fixed-bottom">
    <div class="row">
          <div class="col col-md-6">
        <div class="prevnxt">  <a href="javascript:void(0);" class="btn btn-blue btn-md-2 next">Next</a> </div>
      </div>

        </div>
  </div>
    </div>

<!-- ... end start test tabs -->
<footer class="fixed-bottom"></footer>



<!-- JS Scripts -->
<script src="<?php echo base_url(); ?>web_assets/js/jquery-3.2.1.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/jquery.appear.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/jquery.mousewheel.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/perfect-scrollbar.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/jquery.matchHeight.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/svgxuse.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/imagesloaded.pkgd.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/Headroom.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/velocity.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/ScrollMagic.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/jquery.waypoints.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/jquery.countTo.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/material.min.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/bootstrap-select.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/smooth-scroll.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/selectize.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/swiper.jquery.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/moment.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/daterangepicker.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/simplecalendar.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/fullcalendar.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/isotope.pkgd.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/ajax-pagination.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/Chart.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/chartjs-plugin-deferred.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/circle-progress.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/loader.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/run-chart.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/jquery.magnific-popup.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/jquery.gifplayer.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/mediaelement-and-player.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/mediaelement-playlist-plugin.min.js"></script>
<script src="<?php echo base_url(); ?>web_assets/js/base-init.js"></script>

<script defer src="<?php echo base_url(); ?>web_assets/fonts/fontawesome-all.js"></script>
<script src="<?php echo base_url(); ?>web_assets/Bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>
</html>
