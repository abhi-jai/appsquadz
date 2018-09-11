<head>

        <title>Profile </title>
        <?php $this->load->view('head_content') ?> 

    </head>
<div class="container">
	<div class="row">
		<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="ui-block responsive-flex">
				<div class="ui-block-title">
                                        <div class="h6 title"> Following (<?=$user_data['following_count']?>)</div>
					
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Friends -->


<div class="container">
	<div class="row">
			<?php 
//        echo"<pre>";
//        print_r($posts);die;
		foreach($posts['data'] as $frnd_data)
		{ ?>
		<div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
			<div class="ui-block">
				
				<!-- Friend Item -->
				
				<div class="friend-item">
					<div class="friend-header-thumb">
                                            
						<img src="<?php echo base_url();?>web_assets1/img/friend1.jpg" alt="friend">
                                            
					</div>
				
					<div class="friend-item-content">
				
						
						<div class="friend-avatar">
							<div class="author-thumb expert-img">
                                                            <?php if(remote_file_exists($frnd_data['viewable_user']['profile_picture'], 1)){?>
								<img src="<?php echo $frnd_data['viewable_user']['profile_picture'];?>" alt="author">
                                                                <?php }else{?>
                                                <div class="experts-users" style="background-color:<?='#'.substr(str_shuffle('ABCDEF0123456789'),0,6)?>"><span><?= substr($frnd_data['viewable_user']['name'], 0, 1) ?></span></div>
                                            <?php }?>
							</div>
							<div class="author-content">
								<a href="#" class="h5 author-name"><?php echo $frnd_data['viewable_user']['name'];?></a>
<!--								<div class="country">San Francisco</div>-->
							</div>
						</div>
				
						<div class="swiper-container" data-slide="fade">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									
									<div class="control-block-button" data-swiper-parallax="-100">
									
				
										<a href="<?= site_url() ?>Profile/index/<?php echo $frnd_data['viewable_user']['id']; ?>" class="btn btn-primary btn--half-width" style="border-color: purple;background-color:<?='#'.substr(str_shuffle('ABCDEF0123456789'),0,6)?>">
												view Profile
<!--											<svg class="olymp-chat---messages-icon"><use xlink:href="</?php echo base_url();?>web_assets1/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>-->
										</a>
				
									</div>
								</div>
				
								
							</div>
				
							<!-- If we need pagination -->
<!--							<div class="swiper-pagination"></div>-->
						</div>
					</div>
				</div>
				
				<!-- ... end Friend Item -->			</div>
		</div>
	<?php } ?>
	</div>
</div>


