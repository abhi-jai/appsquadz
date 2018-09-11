<!DOCTYPE html>
<html lang="en">
<head>
<title>Cart</title>
<?php $this->load->view('head_content') ?> 
<!-- Required meta tags always come first -->

</head>
<body class="">



<!-- Header Standard -->
 
    <?php include 'module2/header_standard.php'; ?>
 
<!-- ... end Header Standard  -->
<section>
	<div class="container">
		<div class="row">
			<div class="col col-xl-10 m-auto col-lg-10 col-md-12 col-sm-12 col-12 bg-white">
				<form action="#" method="post" class="cart-main">

					
					<!-- Shop Table Cart -->
					
					<table class="shop_table cart">
						<thead>
						<tr>
							<th class="product-thumbnail">ITEM DESCRIPTION</th>
							<th class="product-price">UNIT PRICE</th>
							<th class="product-subtotal">TOTAL</th>
							<th class="product-remove">REMOVE</th>
						</tr>
						</thead>
						<tbody>
<div id="delete_cart">
						<?php	
						if($this->input->cookie('shopping_cart'))
						{			

						$cookie_data = stripslashes($this->input->cookie('shopping_cart'));
							$cart_data = json_decode($cookie_data, true);
									
							foreach($cart_data as $keys => $values)
							{ 
						?>
			
						<tr class="cart_item" id="<?php echo $values["item_id"]; ?>">
					
							<td class="product-thumbnail">
						<div class="cart-product__item">
									<a href="<?php echo base_url();?>web_assets1/img/product-small1.png" class="product-thumb js-zoom-image">
										<img src="<?php echo $values["item_img"];  ?>" alt="product" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image">
									</a>
									<div class="cart-product-content">
										<a href="#" class="product-category">Banking</a>
										<a href="#" class="h6 cart-product-title"><?php echo $values["item_name"]; ?></a>
										<ul class="rait-stars">
											<li>
												<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
											</li>
											<li>
												<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
											</li>
					
											<li>
												<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
											</li>
											<li>
												<i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
											</li>
											<li>
												<i class="far fa-star star-icon" aria-hidden="true"></i>
											</li>
										</ul>
									</div>
								</div>
							</td>
					
							<td class="product-price">
								<h6 class="price amount"> <?php echo $values["item_price"]; ?></h6>
							</td>
					
							
					
							<td class="product-subtotal">
								<h6 class="total amount"> <?php echo $values["item_price"]; ?></h6>
							</td>
					
							<td class="product-remove">
							
									
								<a href="javascript:void(0)" onclick="return del_cart(<?php echo $values["item_id"]; ?>);" class="product-del remove" title="Remove this item">
									<svg class="olymp-close-icon"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
								</a>
							</td>
					 	</tr>
<?php } } ?>
						<!-- /////////////////////// -->
					
</div>
<!-- ================================Generate Token=======================================	 -->
						<?php  $token = "";
    $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
    $codeAlphabet.= "0123456789";
    $max = strlen($codeAlphabet); // edited

    for ($i=0; $i < 8; $i++) {
        $token .= $codeAlphabet[rand(0, $max-1)];
    }

						?>
<!-- ================================End of Generate Token=======================================	 -->
						<tr>
							<td colspan="4" class="actions">
								<!-- <div class="form-inline coupon">
									<div class="form-group label-floating">
										<label class="control-label">Enter Coupon</label>
										<input class="form-control bg-white" placeholder="" id="coupon" value="<?php echo $token;?>" type="text" name="coupon_code">

									</div>
									<a href="javascript:void(0)" class="btn btn-blue btn-lg" 
									id="token">Apply</a>
								</div> -->
					
								<div class="cart-subtotal">
								<!--  -->
								 <?php 
								$sum=0;
								if($this->input->cookie('shopping_cart'))
								{					
								$cookie_data = stripslashes($this->input->cookie('shopping_cart'));
								$cart_data = json_decode($cookie_data, true);
								foreach($cart_data as $keys => $values)
								{ 	
									$sum=$values['item_price']+$sum;}}
								?>
									Cart Subtotal:<span>₹<?php echo $sum; ?></span>
								</div>
					
							</td>
						</tr>
						</tbody>
					</table>
					
					<!-- ... end Shop Table Cart -->
				</form>

				<div class="row medium-padding100">
					<div class="col col-xl-5 mr-auto col-lg-5 col-md-6 col-sm-12 col-12">

						
						<!-- Form Calculate Shiping -->
						
						
						
						<!-- ... end Form Calculate Shiping -->
					</div>

					<div class="col col-xl-5 ml-auto col-lg-5 col-md-6 col-sm-12 col-12">
						<div class="crumina-module crumina-heading with-title-decoration">
							<h5 class="heading-title">Order Totals</h5>
						</div>

						
						<!-- Order Totals List -->
						
						<ul class="order-totals-list">
							<li>
								 <?php 
								$sum=0;
								if($this->input->cookie('shopping_cart'))
								{					
								$cookie_data = stripslashes($this->input->cookie('shopping_cart'));
								$cart_data = json_decode($cookie_data, true);
								foreach($cart_data as $keys => $values)
								{ 	
									$sum=$values['item_price']+$sum;}}
								?>
								Cart Subtotal <span id="sum" value="<?php echo  $sum; ?>">₹<?php echo  $sum; ?></span>
							</li>
							<li>
								Shipping & Handling  <span>₹<?php $ship=200; echo $sum?$ship:$sum; ?></span>
							</li>
							<li style="display: none;" id="discount">
								Coupon / Discount<span style="margin-left: 210px">-₹<?php 
								$disc =200;echo $disc;?></span>
							</li>

							<li class="total">
						Order Total <span>₹<?php echo $sum?$sum+$ship:0; ?></span>
							</li>
						</ul>
						
						<!-- ... end Order Totals List -->

						<a href="#" class="btn btn-purple btn-lg full-width">Go to Checkout</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>




<script type="text/javascript">
	function del_cart(id)
	{
			var req=$.ajax({
		url:'<?php echo base_url();?>index.php/AddToCart/move/',
		method:'POST',
		data:{id:id},
		success:function(data){
			$('#'+id).remove();
			$('.'+id).remove();
			
		},
		error:function(err){
			
			console.log("error",err);
		}
	});
	}

</script>
<!-- ... end Your Account Personal Information -->
<?php include'module2/footer.php';?>
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
<script src="<?php echo base_url();?>web_assets1/js/cart.js"></script>
<script defer src="<?php echo base_url();?>web_assets1/fonts/fontawesome-all.js"></script>
<script src="<?php echo base_url();?>web_assets1/Bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>
</html>
