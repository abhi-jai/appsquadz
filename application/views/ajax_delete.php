<?php	
						if($this->input->cookie('shopping_cart'))
						{			

						$cookie_data = stripslashes($this->input->cookie('shopping_cart'));
							$cart_data = json_decode($cookie_data, true);
									
							foreach($cart_data as $keys => $values)
							{ 
						?>
			
						<tr class="cart_item">
					
							<td class="product-thumbnail">
						<div class="cart-product__item">
									<a href="<?php echo base_url();?>web_assets/img/product-small1.png" class="product-thumb js-zoom-image">
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
									<svg class="olymp-close-icon"><use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
								</a>
							</td>
					 	</tr>
<?php } } ?>