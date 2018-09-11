<?php

$i=1;
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
                                        <a href="<?php echo base_url();?>index.php/SscCourse/details/<?php echo $data1['id']?>">  <img src="<?php echo $data1['cover_image'];?>" alt="product"></a>
<!--                                        <span class="onsale">Top</span>-->
                                    </div>
                                    <div class="product-content">
                                        <div class="block-title" style="min-height:70px;">

                                            <a href="<?php echo base_url();?>index.php/SscCourse/details/<?php echo $data1['id']?>" class="h5 title">
                                                <?php echo $data1['title'];?>
                                            </a>
                                            <a href="#" class="product-category text-center"></a>
                                        </div>

                                        <div class="block-price">

                                            <div class="product-price"><del>₹12000</del><span class="pri-right"><?php echo $data1['mrp'];?></span></div>
                                            <div class="validity-time">
                                                <p>Valid Till 12 Months</p>

                                            </div>

                                            <form class="comment-form inline-items" method="post" action="<?php echo base_url();?>index.php/AddToCart">

                                                <?php if(!$this->session->userdata('username')){ ?>
                                                <button class="btn btn-md-2 btn-primary popup" type="button" data-toggle="modal" data-target="#registration-login-form-popup">Buy Now</button>
                                                <?php   } else { ?>
                                    <button class="btn btn-md-2 btn-primary"  id="<?php echo $i; ?>"  onclick="click_buy(this.id)" type="button">Buy Now</button>
                                                <?php } ?> 
                                
                                                <input type="hidden" name="hidden_img<?php echo $i;?>" value="<?php echo $data1['cover_image'] ?>" />
                                                <input type="hidden" name="hidden_name<?php echo $i;?>" value="<?php echo $data1['title'] ?>" />
                                                <input type="hidden" name="hidden_price<?php echo $i;?>" value="<?php echo $data1['mrp']; ?>" />
                                                <input type="hidden" name="hidden_id<?php echo $i;?>" value="<?php echo $data1['id']; ?>" />
                                                <input type="hidden" name="hidden_qty<?php echo $i;?>" value="1" />
                                            <button type="button" name="add_to_cart" ; class="btn btn-md-2 btn-blue addToCart" id="<?php echo $i; ?>" onclick="cartData(this.id);">Add to Cart</button> 
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                 
                            <?php $i++;
			} 
			?>
                            <!-- ... end Product Item -->

                            <?php 
             }
            }
			?>
          
                