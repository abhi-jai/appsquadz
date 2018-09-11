<!DOCTYPE html>
<html lang="en">

<head>

    <title>Product Description</title>

     <?php  $this->load->view('head_content') ?>  
</head>

<body class="">




    <!-- Header Standard -->
  
    <?php include 'module2/header_standard.php'; ?>
  
   <!-- ... end Header Standard  -->
    <section>

        <!-- Shop Product Detail -->

        <div class="shop-product-detail">
            <div class="container-fluid">
                <div class="row">
                    <div class="col col-xl-3 col-lg-3  col-md-6 col-sm-12 col-12">
                        <div class="ui-block">
                            <div class="ui-block-title">
                                <h6 class="title">Details</h6>
                            </div>
                            <div class="ui-block-content">

 <!--============================= W-Personal-Info ===============================================-->

                                <ul class="widget w-personal-info item-block product-details-box">
                                    <li>
                                        <span class="title">150 Students</span>

                                    </li>
                                    <li>
                                        <span class="title">Duration : 30 Days</span>

                                    </li>
                                    <li>
                                        <span class="title">Lessions 15</span>

                                    </li>
                                    <li>
                                        <span class="title">Videos 15</span>

                                    </li>
                                    <li>
                                        <span class="title">Certificate of Completion</span>

                                    </li>
                                </ul>

                                <!-- .. end W-Personal-Info -->
<!--=============================End Of W-Personal-Info ==========================================-->
                            </div>
                        </div>
                    </div>


                    <div class="col col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 bg-white ">
                        <div class="thumbs-wrap">


                            <div class="shop-product-detail-thumb" style="width:75%;margin-left: 50px;">
                                <img class="main-img" alt="product" src="<?php echo $detail['cover_image']?>">
                            </div>
                        </div>
                    </div>
                    <div class="col col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 bg-white">
                        <div class="shop-product-detail-content">
                            <div class="main-content-wrap">
                                <div class="block-title">
                                    <a href="#" class="product-category">Technology</a>
                                    <h2 class="title bold product-main-heading">
                                        <?php echo $detail['title']?>
                                    </h2>

                                </div>

                                <div class="block-price">
                                    <div class="product-price">₹
                                        <?php echo $detail['mrp']?>
                                    </div>
                                </div>
                            </div>

                            <p>
                                <?php echo $detail['description']?>
                            </p>

          <?php if(!$this->session->userdata('username')){ ?>
   <button class="btn btn-blue btn-md with--icon popup" type="button" data-toggle="modal" data-target="#registration-login-form-popup">
                                <div class="text">
                                    <span class="title">Buy This Course</span>
                                </div>
                            </button>
  <?php   } else { ?>
 <button class="btn btn-blue btn-md with--icon " type="button" onclick="location.href='javascript:void(0);'">
                                <div class="text">
                                    <span class="title">Buy This Course</span>
                                </div>
                            </button>
<?php } ?>                   
              
                          <!--   <a href="#" class="btn btn-primary  btn-sm sign-in-btn" data-toggle="modal" data-target="#registration-login-form-popup">Sign In<div class="ripple-container"></div></a> -->
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col col-xl-3 col-lg-3  col-md-6 col-sm-12 col-12">
                    </div>
                    <div class="col col-xl-9 m-auto col-lg-9 col-md-12 col-sm-12 col-12 bg-white pdt-10 " style="border-top: 1px solid #0000004d;">


                        <!-- Product Description -->

                        <div class="product-description">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#additional" role="tab">
							 Description
							</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#curriculum" role="tab">
								CURRICULUM
								<span class="total-topic">3</span>
							</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#rewievs" role="tab">

								All Reviews
								<span class="total-topic"><?php echo $detail['review_count']?></span>
							</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="additional" role="tabpanel" data-mh="log-tab">
                                    <p>
                                        <?php echo $detail['description']?>

                                    </p>
                                </div>
                                <div class="tab-pane" id="curriculum" role="tabpanel" data-mh="log-tab">
                                    <a href="">

                                        <?php echo $detail['curriculam']['title']?> </a>
                                </div>

                                <div class="tab-pane" id="rewievs" role="tabpanel" data-mh="log-tab">

                                    <div class="comments-title-wrap">
                                        
                                        <div class="block-title">
                                            <h2 class="title">
                                                <?php echo $detail['review_count']?> Reviews</h2>
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
                                                <li class="numerical-rating">
                                                    <?php echo $detail['rating']?> / 5</li>
                                            </ul>
                                        </div>

                                        <a href="#" class="btn btn-primary btn-md" data-toggle="modal" data-target="#popup-write-rewiev">Write a Review</a>

                                    </div>

                                    <ul class="comments__list-review">

                         <!-- ===========================comments=========================== -->
                          	<?php 
                          	  
                          		if(!empty($detail['reviews'])){
                          	foreach ($detail['reviews'] as $detail1 ) {
                          				                         	
                          	 ?>
                                        <li class="comments__item-review">

                                            <div class="comment-entry comment comments__article">

                                                <div class="comments__body ovh">

                                                    <h5 class="title"><?php echo $detail1['text']; ?></h5>

                                                    <ul class="rait-stars">
                                                    	<?php for($i=1;$i<$detail1['rating'];$i++)
                                                    	{
                                                    		if(1)
                                                    		{ ?>
                                                        <li>
                                                            <i class="fa fa-star star-icon c-primary" aria-hidden="true"></i>
                                                        </li>
                                                    <?php }
                                                        else { ?>
                                                        <li>
                                                            <i class="far fa-star star-icon" aria-hidden="true"></i>
                                                        </li>
                                                 <?php   }}  ?>

                                                    </ul>

                                                    <div class="comment-content comment">
                                                       <?php echo $detail1['text']; ?>
                                                    </div>

                                                    <header class="comment-meta comments__header-review">


                                                        <time class="published comments__time-review" datetime="<?php echo $detail1['creation_time']; ?>">4 hours ago by</time>


                                                        <cite class="fn url comments__author-review">
													<a href="#" rel="external" class=" "><?php echo $detail1['name'];?></a>
												</cite>

                                                    </header>


                                                </div>

                                            </div>
                                        </li>

                                    <?php 	}}  ?>

    <!-- ===========================End of comments=========================== -->
                                    </ul>
                                </div>
                            </div>
                            <div class="product-description-common">
                                <div class="socials-shared">
                                    <a href="#" class="social-item bg-facebook">
							<svg class="svg-inline--fa fa-facebook-f fa-w-9" aria-hidden="true" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 264 512" data-fa-i2svg=""><path fill="currentColor" d="M76.7 512V283H0v-91h76.7v-71.7C76.7 42.4 124.3 0 193.8 0c33.3 0 61.9 2.5 70.2 3.6V85h-48.2c-37.8 0-45.1 18-45.1 44.3V192H256l-11.7 91h-73.6v229"></path></svg><!-- <i class="fab fa-facebook-f" aria-hidden="true"></i> -->
						</a>
                                    <a href="#" class="social-item bg-twitter">
							<svg class="svg-inline--fa fa-twitter fa-w-16" aria-hidden="true" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg><!-- <i class="fab fa-twitter" aria-hidden="true"></i> -->
						</a>
                                    <a href="#" class="social-item bg-google">
							<svg class="svg-inline--fa fa-google-plus-g fa-w-20" aria-hidden="true" data-prefix="fab" data-icon="google-plus-g" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M386.061 228.496c1.834 9.692 3.143 19.384 3.143 31.956C389.204 370.205 315.599 448 204.8 448c-106.084 0-192-85.915-192-192s85.916-192 192-192c51.864 0 95.083 18.859 128.611 50.292l-52.126 50.03c-14.145-13.621-39.028-29.599-76.485-29.599-65.484 0-118.92 54.221-118.92 121.277 0 67.056 53.436 121.277 118.92 121.277 75.961 0 104.513-54.745 108.965-82.773H204.8v-66.009h181.261zm185.406 6.437V179.2h-56.001v55.733h-55.733v56.001h55.733v55.733h56.001v-55.733H627.2v-56.001h-55.733z"></path></svg><!-- <i class="fab fa-google-plus-g" aria-hidden="true"></i> -->
						</a>
                                </div>

                                <div class="single-post-additional inline-items">
                                    <div class="post__author author vcard inline-items">
                                        <img alt="author" src="<?php echo $detail['instructor_data']['profile_pic']?>" class="avatar">
                                        <div class="author-date not-uppercase">
                                            <a class="h6 post__author-name fn" href="#">
                                                <?php echo $detail['instructor_data']['name']?> </a>
                                            <div class="author_prof">
                                                <?php echo $detail['instructor_data']['about']?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-date-wrap inline-items">
                                        <svg class="olymp-calendar-icon">
								<use xlink:href="#olymp-calendar-icon"></use>
									</svg>
                                        <div class="post-date">
                                            <a class="h6 date" href="#">
                                                <?php echo $detail['instructor_data']['students']?>
                                            </a>
                                            <span>Students</span>
                                        </div>

                                    </div>
                                    <div class="post-date-wrap inline-items">
                                        <svg class="olymp-calendar-icon">
								<use xlink:href="#olymp-calendar-icon"></use>
							</svg>
                                        <div class="post-date">
                                            <a class="h6 date" href="#">
                                                <?php echo $detail['instructor_data']['courses']?>
                                            </a>
                                            <span>Courses</span>
                                        </div>

                                    </div>

                                    <div class="post-comments-wrap inline-items">
                                        <svg class="olymp-comments-post-icon">
								<use xlink:href="#olymp-comments-post-icon"></use>
							</svg>
                                        <div class="post-comments">
                                            <ul class="rait-stars">
                                                <li>
                                                    <svg class="svg-inline--fa fa-star fa-w-18 star-icon c-primary" aria-hidden="true" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                                                    <!-- <i class="fa fa-star star-icon c-primary" aria-hidden="true"></i> -->
                                                </li>
                                                <li>
                                                    <svg class="svg-inline--fa fa-star fa-w-18 star-icon c-primary" aria-hidden="true" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                                                    <!-- <i class="fa fa-star star-icon c-primary" aria-hidden="true"></i> -->
                                                </li>

                                                <li>
                                                    <svg class="svg-inline--fa fa-star fa-w-18 star-icon c-primary" aria-hidden="true" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                                                    <!-- <i class="fa fa-star star-icon c-primary" aria-hidden="true"></i> -->
                                                </li>
                                                <li>
                                                    <svg class="svg-inline--fa fa-star fa-w-18 star-icon c-primary" aria-hidden="true" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                                                    <!-- <i class="fa fa-star star-icon c-primary" aria-hidden="true"></i> -->
                                                </li>
                                                <li>
                                                    <svg class="svg-inline--fa fa-star fa-w-18 star-icon" aria-hidden="true" data-prefix="far" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"></path></svg>
                                                    <!-- <i class="far fa-star star-icon" aria-hidden="true"></i> -->
                                                </li>
                                            </ul>

                                            <span>Rating</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- ... end Product Description -->

                    </div>
                </div>
            </div>
        </div>

        <!-- ... end Shop Product Detail -->

    </section>






    <!-- Footer Full Width -->

    <?php include 'module2/footer.php';?>
    <!-- ... end Footer Full Width -->



    <!-- Window-popup-CHAT for responsive min-width: 768px -->

    <div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">

        <div class="modal-content">
            <div class="modal-header">
                <span class="icon-status online"></span>
                <h6 class="title">Chat</h6>
                <div class="more">
                    <svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                    <svg class="olymp-little-delete js-chat-open"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
                </div>
            </div>
            <div class="modal-body">
                <div class="mCustomScrollbar">
                    <ul class="notification-list chat-message chat-message-field">
                        <li>
                            <div class="author-thumb">
                                <img src="<?php echo base_url();?>web_assets1/img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
                            </div>
                            <div class="notification-event">
                                <span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
                            </div>
                        </li>

                        <li>
                            <div class="author-thumb">
                                <img src="<?php echo base_url();?>web_assets1/img/author-page.jpg" alt="author" class="mCS_img_loaded">
                            </div>
                            <div class="notification-event">
                                <span class="chat-message-item">Don’t worry Mathilda!</span>
                                <span class="chat-message-item">I already bought everything</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:29pm</time></span>
                            </div>
                        </li>

                        <li>
                            <div class="author-thumb">
                                <img src="<?php echo base_url();?>web_assets1/img/avatar14-sm.jpg" alt="author" class="mCS_img_loaded">
                            </div>
                            <div class="notification-event">
                                <span class="chat-message-item">Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks</span>
                                <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 8:10pm</time></span>
                            </div>
                        </li>
                    </ul>
                </div>

                <form class="need-validation">

                    <div class="form-group label-floating is-empty">
                        <label class="control-label">Press enter to post...</label>
                        <textarea class="form-control" placeholder=""></textarea>
                        <div class="add-options-message">
                            <a href="#" class="options-message">
					<svg class="olymp-computer-icon"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>
				</a>
                            <div class="options-message smile-block">

                                <svg class="olymp-happy-sticker-icon"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons.svg#olymp-happy-sticker-icon"></use></svg>

                                <ul class="more-dropdown more-with-triangle triangle-bottom-right">
                                    <li>
                                        <a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/icon-chat1.png" alt="icon">
							</a>


                                    </li>
                                    <li>
                                        <a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/icon-chat2.png" alt="icon">
							</a>
                                    </li>
                                    <li>
                                        <a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/icon-chat3.png" alt="icon">
							</a>
                                    </li>
                                    <li>
                                        <a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/icon-chat4.png" alt="icon">
							</a>
                                    </li>
                                    <li>
                                        <a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/icon-chat5.png" alt="icon">
							</a>
                                    </li>
                                    <li>
                                        <a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/icon-chat6.png" alt="icon">
							</a>
                                    </li>
                                    <li>
                                        <a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/icon-chat7.png" alt="icon">
							</a>
                                    </li>
                                    <li>
                                        <a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/icon-chat8.png" alt="icon">
							</a>
                                    </li>
                                    <li>
                                        <a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/icon-chat9.png" alt="icon">
							</a>
                                    </li>
                                    <li>
                                        <a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/icon-chat10.png" alt="icon">
							</a>
                                    </li>
                                    <li>
                                        <a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/icon-chat11.png" alt="icon">
							</a>
                                    </li>
                                    <li>
                                        <a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/icon-chat12.png" alt="icon">
							</a>
                                    </li>
                                    <li>
                                        <a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/icon-chat13.png" alt="icon">
							</a>
                                    </li>
                                    <li>
                                        <a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/icon-chat14.png" alt="icon">
							</a>
                                    </li>
                                    <li>
                                        <a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/icon-chat15.png" alt="icon">
							</a>
                                    </li>
                                    <li>
                                        <a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/icon-chat16.png" alt="icon">
							</a>
                                    </li>
                                    <li>
                                        <a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/icon-chat17.png" alt="icon">
							</a>
                                    </li>
                                    <li>
                                        <a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/icon-chat18.png" alt="icon">
							</a>
                                    </li>
                                    <li>
                                        <a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/icon-chat19.png" alt="icon">
							</a>
                                    </li>
                                    <li>
                                        <a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/icon-chat20.png" alt="icon">
							</a>
                                    </li>
                                    <li>
                                        <a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/icon-chat21.png" alt="icon">
							</a>
                                    </li>
                                    <li>
                                        <a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/icon-chat22.png" alt="icon">
							</a>
                                    </li>
                                    <li>
                                        <a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/icon-chat23.png" alt="icon">
							</a>
                                    </li>
                                    <li>
                                        <a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/icon-chat24.png" alt="icon">
							</a>
                                    </li>
                                    <li>
                                        <a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/icon-chat25.png" alt="icon">
							</a>
                                    </li>
                                    <li>
                                        <a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/icon-chat26.png" alt="icon">
							</a>
                                    </li>
                                    <li>
                                        <a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/icon-chat27.png" alt="icon">
							</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>

    <!-- ... end Window-popup-CHAT for responsive min-width: 768px -->


    <!-- Popup Write Rewiev -->

    <div class="modal fade" id="popup-write-rewiev" tabindex="-1" role="dialog" aria-labelledby="popup-write-rewiev" aria-hidden="true">
        <div class="modal-dialog window-popup popup-write-rewiev" role="document">
            <div class="modal-content">
                <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
			</a>

                <div class="modal-header">
                    <h6 class="title">Write a Review</h6>
                </div>

                <div class="modal-body">
                    <form class="form-write-rewiev">
                        <div class="row">
                            <div class="col col-xl-6 col-lg-6 col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">First Name</label>
                                    <input class="form-control" placeholder="" type="text" value="Marina">
                                </div>
                            </div>
                            <div class="col col-xl-6 col-lg-6 col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Last Name</label>
                                    <input class="form-control" placeholder="" type="text" value="Valentine">
                                </div>
                            </div>
                            <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group label-floating">
                                    <label class="control-label">Email</label>
                                    <input class="form-control" placeholder="" type="email" value="mvalentine@yourmail.com">
                                </div>

                                <div class="form-group label-floating is-select">
                                    <label class="control-label">Select Rating</label>
                                    <select class="selectpicker form-control">
							<option value="5">5 Stars Rating</option>
							<option value="4">4 Stars Rating</option>
							<option value="3">3 Stars Rating</option>
							<option value="2">2 Stars Rating</option>
							<option value="1">1 Stars Rating</option>
						</select>
                                </div>

                                <div class="form-group label-floating">
                                    <label class="control-label">Review Title</label>
                                    <input class="form-control" placeholder="" type="text" value="The Best Mug I’ve Ever Bought!!">
                                </div>

                                <div class="form-group label-floating">
                                    <label class="control-label">Write a little description about the review</label>
                                    <textarea class="form-control" placeholder="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor labore eter dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						</textarea>
                                </div>

                                <a href="#" class="btn btn-primary btn-lg full-width">Post your Review</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- ... end Popup Write Rewiev -->



    <a class="back-to-top" href="#">
	<img src="<?php echo base_url();?>web_assets1/svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
</a>




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
