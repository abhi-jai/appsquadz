<!DOCTYPE html>
<html lang="en">
<head>
<title>Test1</title>

<!-- Required meta tags always come first -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<!-- Main Font -->
<script src="<?php echo base_url();?>web_assets1/js/webfontloader.min.js"></script>
<script>
		WebFont.load({
			google: {
				families: ['Roboto:300,400,500,700:latin']
			}
		});
	</script>

<!-- Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>web_assets1/Bootstrap/dist/css/bootstrap-reboot.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>web_assets1/Bootstrap/dist/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>web_assets1/Bootstrap/dist/css/bootstrap-grid.css">

<!-- Main Styles CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>web_assets1/css/main.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>web_assets1/css/fonts.min.css">
</head>
<body class="">


<!-- Header Standard -->

<?php include 'module2/header_standard.php'; ?>


<!-- ... end Header Standard  -->


<!-- Your Account Personal Information -->

<div class="container-fluid">
	<div class="row">
		<div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
			
	<div class="row">
	<?php
	foreach($details as $data){
if(!empty($data['course_list'])){
?>
			
<?php

foreach($data['course_list'] as $data1)
{

?>	
				<!-- Product Item -->	
				<div class="col col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">			
			<div class="shop-product-item">
					<div class="product-thumb">
						<img src="<?php echo $data1['cover_image'];?>" alt="product">
                        <span class="onsale">Top</span>
					</div>
					<div class="product-content">
						<div class="block-title">
							
							<a href="course-detail.html" class="h5 title"><?php echo $data1['title'];?>
                            </a>
                            <a href="#" class="product-category text-center">1 Free Test + 6 Paid</a>
						</div>
                       
						<div class="block-price">
							
							<div class="product-price"><del>₹200</del><span class="pri-right"><?php echo $data1['mrp'];?></span></div>
                             <div class="validity-time">
                        <p>Valid Till 12 Months</p>
                        
                        </div>
                            
							<form class="comment-form inline-items">
					
						<button class="btn btn-md-2 btn-primary">Buy Now</button>
					
						<button class="btn btn-md-2 btn-blue">Add To Cart</button>
					
					</form>
						</div>
                        
					</div>
				</div>
				</div>
				<?php 
			} 
			?>	
				<!-- ... end Product Item -->
				
			<?php 
			 }}
			?>		
	</div>

			
			<!-- Pagination -->
			
			<nav aria-label="Page navigation">
				<ul class="pagination justify-content-center">
					<li class="page-item disabled">
						<a class="page-link" href="#" tabindex="-1">Previous</a>
					</li>
					<li class="page-item"><a class="page-link" href="#">1<div class="ripple-container"><div class="ripple ripple-on ripple-out" style="left: -10.3833px; top: -16.8333px; background-color: rgb(255, 255, 255); transform: scale(16.7857);"></div></div></a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item"><a class="page-link" href="#">...</a></li>
					<li class="page-item"><a class="page-link" href="#">12</a></li>
					<li class="page-item">
						<a class="page-link" href="#">Next</a>
					</li>
				</ul>
			</nav>
			
			<!-- ... end Pagination -->

		</div>

		<div class="col col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12  responsive-display-none">
			<div class="ui-block">

				
				
				<!-- Your Profile  -->
				<?php include 'module2/profile.php'; ?>
			
				<!-- ... end Your Profile  -->
				

			</div>
		</div>
	</div>
</div>

<!-- ... end Your Account Personal Information -->
<?php include 'module2/footer.php'; ?>
<!-- JS Scripts -->
<script src="<?php echo base_url();?>web_assets1/js/jquery-3.2.1.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/jquery.appear.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/jquery.mousewheel.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/perfect-scrollbar.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/jquery.matchHeight.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/svgxuse.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/imagesloaded.pkgd.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/Headroom.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/velocity.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/ScrollMagic.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/jquery.waypoints.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/jquery.countTo.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/popper.min.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/material.min.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/bootstrap-select.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/smooth-scroll.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/selectize.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/swiper.jquery.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/moment.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/daterangepicker.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/simplecalendar.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/fullcalendar.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/isotope.pkgd.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/ajax-pagination.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/Chart.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/chartjs-plugin-deferred.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/circle-progress.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/loader.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/run-chart.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/jquery.magnific-popup.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/jquery.gifplayer.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/mediaelement-and-player.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/mediaelement-playlist-plugin.min.js"></script>
<script src="<?php echo base_url();?>web_assets1/js/base-init.js"></script>
<script defer src="<?php echo base_url();?>web_assets1/fonts/fontawesome-all.js"></script>
<script src="<?php echo base_url();?>web_assets1/Bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>
</html>
