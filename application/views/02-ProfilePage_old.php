<!DOCTYPE html>
<html lang="en">
<head>

	<title>Profile Page</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Main Font -->
    <script src="<?php echo base_url();?>web_assets1/js/webfontloader.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ['Roboto:300,400,500,700:latin']
            }
        });
    </script>

<style>
body {font-family: Arial, Helvetica, sans-serif;}

.post_img {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
    max-height: 300px;
}

.post_img:hover {opacity: 0.7;}

/* The Modal (background) */
.modal1 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 10; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
</style>


	<!-- Bootstrap CSS -->

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>web_assets1/Bootstrap/dist/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>web_assets1/Bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>web_assets1/Bootstrap/dist/css/bootstrap-grid.css">

	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>web_assets1/css/main.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>web_assets1/css/fonts.min.css">


</head>
<body>
   <!-- The Modal -->
                                       
    <div id="myModal" class="modal1">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
                                         <!-- End Modal -->


<!-- Header Standard -->
 <?php include 'module2/header_standard.php';?> 
 <?php //include'module2/cart_header.php';?>
<!-- ... end Header Standard  -->



<!-- Top Header-Profile -->
<?php include'module2/profile_page.php';?>

                         
<!-- ... end Top Header-Profile -->

<div class="container">
    <div id="home1">
	<div class="row">
		<!-- Main Content -->
 <div class="col col-xl-8 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12" >
                    <div id="post_list">
                        <?php
                        $com=0;
                        foreach ($posts['data'] as $post_list) {
                            
                            //pre($post_list);
                            ?>
                            <div class="ui-block">
                                <!-- Post -->

                                <article class="hentry post has-post-thumbnail shared-photo">

                                    <div class="post__author author vcard inline-items">
                                        <?php if (!empty($post_list['post_owner_info']['profile_picture'])) { ?>
                                            <img class="post_img" src="<?= $post_list['post_owner_info']['profile_picture'] ?>" alt="author" >
                                        <?php } else { ?>
                                            <i class="fa fa-user-circle" alt="author"></i>
                                        <?php } ?>
                                        

                                        <div class="author-date">
                                            <a class" href="#"><?= $post_list['post_owner_info']['name'] ?></a>
                                            <?php if ($post_list['pinned_post'] != '') { ?>
                                                <span class="right-tick"><svg class="olymp-check-icon"><use xlink:href="<?php echo base_url(); ?>web_assets1/svg-icons/sprites/icons.svg#olymp-check-icon"></use></svg></span>
                                            <?php } ?>
                                            <div class="post__date">
                                                <time class="published" datetime="2017-03-24T18:18">
                                                    7 hours ago
                                                </time>
                                            </div>
                                        </div>



                                        <div class="more">
                                            <svg class="olymp-three-dots-icon">
                                            <use xlink:href="<?php echo base_url(); ?>web_assets1/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                                            </svg>
                                            <ul class="more-dropdown">
                                                <li>
                                                    <a href="#">Edit Post</a>
                                                </li>
                                                <li>
                                                    <a href="#">Delete Post</a>
                                                </li>
                                                <li>
                                                    <a href="#">Turn Off Notifications</a>
                                                </li>
                                                <li>
                                                    <a href="#">Select as Featured</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <span class="notification-icon add-bookmark" data-toggle="tooltip" data-placement="top" data-original-title="ADD TO YOUR FAVS">
                                            <a href="#">
                                                <svg class="olymp-star-icon"><use xlink:href="<?php echo base_url(); ?>web_assets1/svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
                                            </a>
                                        </span>

                                    </div>
                                    	<?php if(!empty($post_list['post_data']['text'])) { ?>
                                    <p><pre class="pre_text"><?= $post_list['post_data']['text'] ?></pre></p> 
                                    	<?php } ?>
                                    <div class="post-thumb" >
                                        <?php if (!empty($post_list['post_data']['post_file'])) { ?>
                                            <img  class="post_img" src="<?= $post_list['post_data']['post_file'][0]['link'] ?>" alt="photo">
                                        <?php } ?>

                                    </div>

                                   

                                    <div class="post-additional-info inline-items">

                                        <a href="#" class="post-add-icon inline-items">
                                            <svg class="olymp-like-post-icon">
                                            <use xlink:href="<?php echo base_url(); ?>web_assets1/svg-icons/sprites/icons.svg#olymp-like-post-icon"></use>
                                            </svg>

                                            <span class="count-action"><?php
                                                if ($post_list['likes'] > 0) {
                                                    echo $post_list ['likes'];
                                                }
                                                ?></span> <span><?php
                                                if ($post_list['likes'] == 1) {
                                                    echo 'Like';
                                                } else {
                                                    echo "Likes";
                                                }
                                                ?></span>
                                        </a>
                                        <a href="#" class="post-add-icon inline-items" data-toggle="collapse" data-target="#show-comment<?=$com?>">
                                            <svg class="olymp-comments-post-icon">
                                            <use xlink:href="<?php echo base_url(); ?>web_assets1/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use>
                                            </svg>
                                            <span class="count-action"><?php
                                                if ($post_list['comments'] > 0) {
                                                    echo $post_list ['comments'];
                                                }
                                                ?></span> <span><?php
                                                if ($post_list['comments'] == 1) {
                                                    echo 'Comment';
                                                } else {
                                                    echo "Comments";
                                                }
                                                ?></span>
                                        </a>
                                        <a href="#" class="post-add-icon inline-items">
                                            <svg class="olymp-share-icon">
                                            <use xlink:href="<?php echo base_url(); ?>web_assets1/svg-icons/sprites/icons.svg#olymp-share-icon"></use>
                                            </svg>
                                            <span>Share</span>
                                        </a>

                                    </div>



                                </article>
                                <!-- .. end Post -->					
                                <!-- Comments -->
                                
                                <div id="show-comment<?=$com?>" class="collapse">

                                    <ul class="comments-list" >
                                        <li class="comment-item">
                                            <div class="post__author author vcard inline-items">
                                                <img src="<?php echo base_url(); ?>web_assets1/img/avatar10-sm.jpg" alt="author">

                                                <div class="author-date">
                                                    <a class="h6 post__author-name fn" href="#">Elaine Dreyfuss</a>
                                                    <div class="post__date">
                                                        <time class="published" datetime="2017-03-24T18:18">
                                                            5 mins ago
                                                        </time>
                                                    </div>
                                                </div>

                                                <a href="#" class="more">
                                                    <svg class="olymp-three-dots-icon">
                                                    <use xlink:href="<?php echo base_url(); ?>web_assets1/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                                                    </svg>
                                                </a>

                                            </div>

                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium der doloremque laudantium.</p>

                                            <a href="#" class="post-add-icon inline-items">
                                                <svg class="olymp-heart-icon">
                                                <use xlink:href="<?php echo base_url(); ?>web_assets1/svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
                                                </svg>
                                                <span>8</span>
                                            </a>
                                            <a href="#" class="reply">Reply</a>
                                        </li>
                                        <li class="comment-item has-children">
                                            <div class="post__author author vcard inline-items">
                                                <img src="<?php echo base_url(); ?>web_assets1/img/avatar5-sm.jpg" alt="author">

                                                <div class="author-date">
                                                    <a class="h6 post__author-name fn" href="#">Green Goo Rock</a>
                                                    <div class="post__date">
                                                        <time class="published" datetime="2017-03-24T18:18">
                                                            1 hour ago
                                                        </time>
                                                    </div>
                                                </div>

                                                <a href="#" class="more">
                                                    <svg class="olymp-three-dots-icon">
                                                    <use xlink:href="<?php echo base_url(); ?>web_assets1/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                                                    </svg>
                                                </a>

                                            </div>

                                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugiten, sed quia
                                                consequuntur magni dolores eos qui ratione voluptatem sequi en lod nesciunt. Neque porro
                                                quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit en lorem ipsum der.
                                            </p>

                                            <a href="#" class="post-add-icon inline-items">
                                                <svg class="olymp-heart-icon">
                                                <use xlink:href="<?php echo base_url(); ?>web_assets1/svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
                                                </svg>
                                                <span>5</span>
                                            </a>
                                            <a href="#" class="reply">Reply</a>

                                            <ul class="children">
                                                <li class="comment-item">
                                                    <div class="post__author author vcard inline-items">
                                                        <img src="<?php echo base_url(); ?>web_assets1/img/avatar8-sm.jpg" alt="author">

                                                        <div class="author-date">
                                                            <a class="h6 post__author-name fn" href="#">Diana Jameson</a>
                                                            <div class="post__date">
                                                                <time class="published" datetime="2017-03-24T18:18">
                                                                    39 mins ago
                                                                </time>
                                                            </div>
                                                        </div>

                                                        <a href="#" class="more">
                                                            <svg class="olymp-three-dots-icon">
                                                            <use xlink:href="<?php echo base_url(); ?>web_assets1/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                                                            </svg>
                                                        </a>

                                                    </div>

                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                                                    <a href="#" class="post-add-icon inline-items">
                                                        <svg class="olymp-heart-icon">
                                                        <use xlink:href="<?php echo base_url(); ?>web_assets1/svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
                                                        </svg>
                                                        <span>2</span>
                                                    </a>
                                                    <a href="#" class="reply">Reply</a>
                                                </li>
                                                <li class="comment-item">
                                                    <div class="post__author author vcard inline-items">
                                                        <img src="<?php echo base_url(); ?>web_assets1/img/avatar2-sm.jpg" alt="author">

                                                        <div class="author-date">
                                                            <a class="h6 post__author-name fn" href="#">Nicholas Grisom</a>
                                                            <div class="post__date">
                                                                <time class="published" datetime="2017-03-24T18:18">
                                                                    24 mins ago
                                                                </time>
                                                            </div>
                                                        </div>

                                                        <a href="#" class="more">
                                                            <svg class="olymp-three-dots-icon">
                                                            <use xlink:href="<?php echo base_url(); ?>web_assets1/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                                                            </svg>
                                                        </a>

                                                    </div>

                                                    <p>Excepteur sint occaecat cupidatat non proident.</p>

                                                    <a href="#" class="post-add-icon inline-items">
                                                        <svg class="olymp-heart-icon">
                                                        <use xlink:href="<?php echo base_url(); ?>web_assets1/svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
                                                        </svg>
                                                        <span>0</span>
                                                    </a>
                                                    <a href="#" class="reply">Reply</a>

                                                </li>
                                            </ul>

                                        </li>

                                        <li class="comment-item">
                                            <div class="post__author author vcard inline-items">
                                                <img src="<?php echo base_url(); ?>web_assets1/img/avatar4-sm.jpg" alt="author">

                                                <div class="author-date">
                                                    <a class="h6 post__author-name fn" href="#">Chris Greyson</a>
                                                    <div class="post__date">
                                                        <time class="published" datetime="2017-03-24T18:18">
                                                            1 hour ago
                                                        </time>
                                                    </div>
                                                </div>

                                                <a href="#" class="more">
                                                    <svg class="olymp-three-dots-icon">
                                                    <use xlink:href="<?php echo base_url(); ?>web_assets1/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                                                    </svg>
                                                </a>

                                            </div>

                                            <p>Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>

                                            <a href="#" class="post-add-icon inline-items">
                                                <svg class="olymp-heart-icon">
                                                <use xlink:href="<?php echo base_url(); ?>web_assets1/svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
                                                </svg>
                                                <span>7</span>
                                            </a>
                                            <a href="#" class="reply">Reply</a>

                                        </li>
                                    </ul>

                                    <!-- ... end Comments -->
                                    <a href="javascript:void(0);" class="more-comments">View more comments <span>+</span></a>

                                    <!-- Comment Form  -->

                                    <form class="comment-form inline-items">

                                        <div class="post__author author vcard inline-items">
                                            <img src="<?php echo base_url(); ?>web_assets1/img/author-page.jpg" alt="author">

                                            <div class="form-group with-icon-right ">
                                                <textarea class="form-control" placeholder=""></textarea>
                                                <div class="add-options-message">
                                                    <a href="javascript:void(0);" class="options-message" data-toggle="modal" data-target="#update-header-photo">
                                                        <svg class="olymp-camera-icon">
                                                        <use xlink:href="<?php echo base_url(); ?>web_assets1/svg-icons/sprites/icons.svg#olymp-camera-icon"></use>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <button   class="btn btn-md-2 btn-primary">Post Comment</button>

                                        <button  class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Cancel</button>

                                    </form>


                                    <!-- ... end Comment Form  -->		
                                </div>	
                            </div>
                        
                        <?php $com+=1; } ?>

                        <div class="ui-block">
                          
                          

                            <!-- ... end Comment Form  -->				
                        </div>

                    </div>
                    <!-- <?php //$pid = $post_list['post_data']['post_file'][0]['id']; ?> -->
                    <?php $pid = $post_list['post_data']['id']; ?>
                    <a onclick="search_filter('<?= $pid ?>')"  class="btn btn-control btn-more">
                        <svg class="olymp-three-dots-icon">
                        <use xlink:href="<?php echo base_url(); ?>web_assets1/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                        </svg>
                    </a>
                </div>
		<!-- ... end Main Content -->


	


		<!-- Right Sidebar -->

		<div class="col col-xl-4 order-xl-4 col-lg-6 order-lg-4 col-md-6 col-sm-12 col-12">

			

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Blog Posts</h6>
				</div>
				<!-- W-Blog-Posts -->
				
				<ul class="widget w-blog-posts">
					<li>
						<article class="hentry post">
				
							<a href="#" class="h4">My Perfect Vacations in South America and Europe</a>
				
							<p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod por incidid ut labore et.</p>
				
							<div class="post__date">
								<time class="published" datetime="2017-03-24T18:18">
									7 hours ago
								</time>
							</div>
				
						</article>
					</li>
					<li>
						<article class="hentry post">
				
							<a href="#" class="h4">The Big Experience of Travelling Alone</a>
				
							<p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod por incidid ut labore et.</p>
				
							<div class="post__date">
								<time class="published" datetime="2017-03-24T18:18">
									March 18th, at 6:52pm
								</time>
							</div>
				
						</article>
					</li>
				</ul>
				
				<!-- .. end W-Blog-Posts -->
			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Friends (86)</h6>
				</div>
				<div class="ui-block-content">

					<!-- W-Faved-Page -->
					
					<ul class="widget w-faved-page js-zoom-gallery">
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/avatar38-sm.jpg" alt="author">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/avatar24-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/avatar36-sm.jpg" alt="author">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/avatar35-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/avatar34-sm.jpg" alt="author">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/avatar33-sm.jpg" alt="author">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/avatar32-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/avatar31-sm.jpg" alt="author">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/avatar30-sm.jpg" alt="author">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/avatar29-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/avatar28-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/avatar27-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/avatar26-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>web_assets1/img/avatar25-sm.jpg" alt="user">
							</a>
						</li>
						<li class="all-users">
							<a href="#">+74</a>
						</li>
					</ul>
					
					<!-- .. end W-Faved-Page -->
				</div>
			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Favourite Pages</h6>
				</div>

				<!-- W-Friend-Pages-Added -->
				
				<ul class="widget w-friend-pages-added notification-list friend-requests">
					<li class="inline-items">
						<div class="author-thumb">
							<img src="<?php echo base_url();?>web_assets1/img/avatar41-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">The Marina Bar</a>
							<span class="chat-message-item">Restaurant / Bar</span>
						</div>
						<span class="notification-icon" data-toggle="tooltip" data-placement="top" data-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
							</a>
						</span>
				
					</li>
				
					<li class="inline-items">
						<div class="author-thumb">
							<img src="<?php echo base_url();?>web_assets1/img/avatar42-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Tapronus Rock</a>
							<span class="chat-message-item">Rock Band</span>
						</div>
						<span class="notification-icon" data-toggle="tooltip" data-placement="top" data-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
							</a>
						</span>
				
					</li>
				
					<li class="inline-items">
						<div class="author-thumb">
							<img src="<?php echo base_url();?>web_assets1/img/avatar43-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Pixel Digital Design</a>
							<span class="chat-message-item">Company</span>
						</div>
						<span class="notification-icon" data-toggle="tooltip" data-placement="top" data-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
							</a>
						</span>
					</li>
				
					<li class="inline-items">
						<div class="author-thumb">
							<img src="<?php echo base_url();?>web_assets1/img/avatar44-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Thompson’s Custom Clothing Boutique</a>
							<span class="chat-message-item">Clothing Store</span>
						</div>
						<span class="notification-icon" data-toggle="tooltip" data-placement="top" data-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
							</a>
						</span>
				
					</li>
				
					<li class="inline-items">
						<div class="author-thumb">
							<img src="<?php echo base_url();?>web_assets1/img/avatar45-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Crimson Agency</a>
							<span class="chat-message-item">Company</span>
						</div>
						<span class="notification-icon" data-toggle="tooltip" data-placement="top" data-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
							</a>
						</span>
					</li>
				
					<li class="inline-items">
						<div class="author-thumb">
							<img src="<?php echo base_url();?>web_assets1/img/avatar46-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Mannequin Angel</a>
							<span class="chat-message-item">Clothing Store</span>
						</div>
						<span class="notification-icon" data-toggle="tooltip" data-placement="top" data-original-title="ADD TO YOUR FAVS">
							<a href="#">
								<svg class="olymp-star-icon"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
							</a>
						</span>
					</li>
				</ul>
				
				<!-- .. end W-Friend-Pages-Added -->
			</div>

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">James's Poll</h6>
				</div>
				<div class="ui-block-content">

					<!-- W-Pool -->
					
					<ul class="widget w-pool">
						<li>
							<p>If you had to choose, which actor do you prefer to be the next Darkman? </p>
						</li>
						<li>
							<div class="skills-item">
								<div class="skills-item-info">
									<span class="skills-item-title">
										<span class="radio">
											<label>
												<input type="radio" name="optionsRadios">
												Thomas Bale
											</label>
										</span>
									</span>
									<span class="skills-item-count">
										<span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="62" data-from="0"></span>
										<span class="units">62%</span>
									</span>
								</div>
								<div class="skills-item-meter">
									<span class="skills-item-meter-active bg-primary" style="width: 62%"></span>
								</div>
					
								<div class="counter-friends">12 friends voted for this</div>
					
								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets1/img/friend-harmonic1.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets1/img/friend-harmonic2.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets1/img/friend-harmonic3.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets1/img/friend-harmonic4.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets1/img/friend-harmonic5.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets1/img/friend-harmonic6.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets1/img/friend-harmonic7.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets1/img/friend-harmonic8.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets1/img/friend-harmonic9.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#" class="all-users">+3</a>
									</li>
								</ul>
							</div>
						</li>
					
						<li>
							<div class="skills-item">
								<div class="skills-item-info">
									<span class="skills-item-title">
										<span class="radio">
											<label>
												<input type="radio" name="optionsRadios">
												Ben Robertson
											</label>
										</span>
									</span>
									<span class="skills-item-count">
										<span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="27" data-from="0"></span>
										<span class="units">27%</span>
									</span>
								</div>
								<div class="skills-item-meter">
									<span class="skills-item-meter-active bg-primary" style="width: 27%"></span>
								</div>
								<div class="counter-friends">7 friends voted for this</div>
					
								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets1/img/friend-harmonic7.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets1/img/friend-harmonic8.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets1/img/friend-harmonic9.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets1/img/friend-harmonic10.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets1/img/friend-harmonic11.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets1/img/friend-harmonic12.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets1/img/friend-harmonic13.jpg" alt="friend">
										</a>
									</li>
								</ul>
							</div>
						</li>
					
						<li>
							<div class="skills-item">
								<div class="skills-item-info">
									<span class="skills-item-title">
										<span class="radio">
											<label>
												<input type="radio" name="optionsRadios">
												Michael Streiton
											</label>
										</span>
									</span>
									<span class="skills-item-count">
										<span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="11" data-from="0"></span>
										<span class="units">11%</span>
									</span>
								</div>
								<div class="skills-item-meter">
									<span class="skills-item-meter-active bg-primary" style="width: 11%"></span>
								</div>
					
								<div class="counter-friends">2 people voted for this</div>
					
								<ul class="friends-harmonic">
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets1/img/friend-harmonic14.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets1/img/friend-harmonic15.jpg" alt="friend">
										</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
					
					<!-- .. end W-Pool -->
					<a href="#" class="btn btn-md-2 btn-border-think custom-color c-grey full-width">Vote Now!</a>
				</div>
			</div>

		</div>

		<!-- ... end Right Sidebar -->

	</div>
</div>
</div>
<!-- Window-popup Update Header Photo -->

<div class="modal fade" id="update-header-photo" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">
	<div class="modal-dialog window-popup update-header-photo" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
			</a>

			<div class="modal-header">
				<h6 class="title">Update Header Photo</h6>
			</div>

			<div class="modal-body">
				<a href="#" class="upload-photo-item">
				<svg class="olymp-computer-icon"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>

				<h6>Upload Photo</h6>
				<span>Browse your computer.</span>
			</a>

				<a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">

			<svg class="olymp-photos-icon"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons.svg#olymp-photos-icon"></use></svg>

			<h6>Choose from My Photos</h6>
			<span>Choose from your uploaded photos</span>
		</a>
			</div>
		</div>
	</div>
</div>


<!-- ... end Window-popup Update Header Photo -->

<!-- Window-popup Choose from my Photo -->

<div class="modal fade" id="choose-from-my-photo" tabindex="-1" role="dialog" aria-labelledby="choose-from-my-photo" aria-hidden="true">
	<div class="modal-dialog window-popup choose-from-my-photo" role="document">

		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
			</a>
			<div class="modal-header">
				<h6 class="title">Choose from My Photos</h6>

				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">
							<svg class="olymp-photos-icon"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons.svg#olymp-photos-icon"></use></svg>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">
							<svg class="olymp-albums-icon"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons.svg#olymp-albums-icon"></use></svg>
						</a>
					</li>
				</ul>
			</div>

			<div class="modal-body">
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">

						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="<?php echo base_url();?>web_assets1/img/choose-photo1.jpg" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="<?php echo base_url();?>web_assets1/img/choose-photo2.jpg" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="<?php echo base_url();?>web_assets1/img/choose-photo3.jpg" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>

						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="<?php echo base_url();?>web_assets1/img/choose-photo4.jpg" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="<?php echo base_url();?>web_assets1/img/choose-photo5.jpg" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="<?php echo base_url();?>web_assets1/img/choose-photo6.jpg" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>

						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="<?php echo base_url();?>web_assets1/img/choose-photo7.jpg" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="<?php echo base_url();?>web_assets1/img/choose-photo8.jpg" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<div class="radio">
								<label class="custom-radio">
									<img src="<?php echo base_url();?>web_assets1/img/choose-photo9.jpg" alt="photo">
									<input type="radio" name="optionsRadios">
								</label>
							</div>
						</div>


						<a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
						<a href="#" class="btn btn-primary btn-lg btn--half-width">Confirm Photo</a>

					</div>
					<div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">

						<div class="choose-photo-item" data-mh="choose-item">
							<figure>
								<img src="<?php echo base_url();?>web_assets1/img/choose-photo10.jpg" alt="photo">
								<figcaption>
									<a href="#">South America Vacations</a>
									<span>Last Added: 2 hours ago</span>
								</figcaption>
							</figure>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<figure>
								<img src="<?php echo base_url();?>web_assets1/img/choose-photo11.jpg" alt="photo">
								<figcaption>
									<a href="#">Photoshoot Summer 2016</a>
									<span>Last Added: 5 weeks ago</span>
								</figcaption>
							</figure>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<figure>
								<img src="<?php echo base_url();?>web_assets1/img/choose-photo12.jpg" alt="photo">
								<figcaption>
									<a href="#">Amazing Street Food</a>
									<span>Last Added: 6 mins ago</span>
								</figcaption>
							</figure>
						</div>

						<div class="choose-photo-item" data-mh="choose-item">
							<figure>
								<img src="<?php echo base_url();?>web_assets1/img/choose-photo13.jpg" alt="photo">
								<figcaption>
									<a href="#">Graffity & Street Art</a>
									<span>Last Added: 16 hours ago</span>
								</figcaption>
							</figure>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<figure>
								<img src="<?php echo base_url();?>web_assets1/img/choose-photo14.jpg" alt="photo">
								<figcaption>
									<a href="#">Amazing Landscapes</a>
									<span>Last Added: 13 mins ago</span>
								</figcaption>
							</figure>
						</div>
						<div class="choose-photo-item" data-mh="choose-item">
							<figure>
								<img src="<?php echo base_url();?>web_assets1/img/choose-photo15.jpg" alt="photo">
								<figcaption>
									<a href="#">The Majestic Canyon</a>
									<span>Last Added: 57 mins ago</span>
								</figcaption>
							</figure>
						</div>


						<a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
						<a href="#" class="btn btn-primary btn-lg disabled btn--half-width">Confirm Photo</a>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<!-- ... end Window-popup Choose from my Photo -->

<!-- Playlist Popup -->

<div class="window-popup playlist-popup" tabindex="-1" role="dialog" aria-labelledby="playlist-popup" aria-hidden="true">

	<a href="" class="icon-close js-close-popup">
		<svg class="olymp-close-icon"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
	</a>

	<table class="playlist-popup-table">

		<thead>

		<tr>

			<th class="play">
				PLAY
			</th>

			<th class="cover">
				COVER
			</th>

			<th class="song-artist">
				SONG AND ARTIST
			</th>

			<th class="album">
				ALBUM
			</th>

			<th class="released">
				RELEASED
			</th>

			<th class="duration">
				DURATION
			</th>

			<th class="spotify">
				GET IT ON SPOTIFY
			</th>

			<th class="remove">
				REMOVE
			</th>
		</tr>

		</thead>

		<tbody>
		<tr>
			<td class="play">
				<a href="#" class="play-icon">
					<svg class="olymp-music-play-icon-big"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big"></use></svg>
				</a>
			</td>
			<td class="cover">
				<div class="playlist-thumb">
					<img src="<?php echo base_url();?>web_assets1/img/playlist19.jpg" alt="thumb-composition">
				</div>
			</td>
			<td class="song-artist">
				<div class="composition">
					<a href="#" class="composition-name">We Can Be Heroes</a>
					<a href="#" class="composition-author">Jason Bowie</a>
				</div>
			</td>
			<td class="album">
				<a href="#" class="album-composition">Ziggy Firedust</a>
			</td>
			<td class="released">
				<div class="release-year">2014</div>
			</td>
			<td class="duration">
				<div class="composition-time">
					<time class="published" datetime="2017-03-24T18:18">6:17</time>
				</div>
			</td>
			<td class="spotify">
				<i class="fab fa-spotify composition-icon" aria-hidden="true"></i>
			</td>
			<td class="remove">
				<a href="#" class="remove-icon">
					<svg class="olymp-close-icon"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
				</a>
			</td>
		</tr>

		<tr>
			<td class="play">
				<a href="#" class="play-icon">
					<svg class="olymp-music-play-icon-big"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big"></use></svg>
				</a>
			</td>
			<td class="cover">
				<div class="playlist-thumb">
					<img src="<?php echo base_url();?>web_assets1/img/playlist6.jpg" alt="thumb-composition">
				</div>
			</td>
			<td class="song-artist">
				<div class="composition">
					<a href="#" class="composition-name">The Past Starts Slow and Ends</a>
					<a href="#" class="composition-author">System of a Revenge</a>
				</div>
			</td>
			<td class="album">
				<a href="#" class="album-composition">Wonderize</a>
			</td>
			<td class="released">
				<div class="release-year">2014</div>
			</td>
			<td class="duration">
				<div class="composition-time">
					<time class="published" datetime="2017-03-24T18:18">6:17</time>
				</div>
			</td>
			<td class="spotify">
				<i class="fab fa-spotify composition-icon" aria-hidden="true"></i>
			</td>
			<td class="remove">
				<a href="#" class="remove-icon">
					<svg class="olymp-close-icon"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
				</a>
			</td>
		</tr>

		<tr>
			<td class="play">
				<a href="#" class="play-icon">
					<svg class="olymp-music-play-icon-big"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big"></use></svg>
				</a>
			</td>
			<td class="cover">
				<div class="playlist-thumb">
					<img src="<?php echo base_url();?>web_assets1/img/playlist7.jpg" alt="thumb-composition">
				</div>
			</td>
			<td class="song-artist">
				<div class="composition">
					<a href="#" class="composition-name">The Pretender</a>
					<a href="#" class="composition-author">Kung Fighters</a>
				</div>
			</td>
			<td class="album">
				<a href="#" class="album-composition">Warping Lights</a>
			</td>
			<td class="released">
				<div class="release-year">2014</div>
			</td>
			<td class="duration">
				<div class="composition-time">
					<time class="published" datetime="2017-03-24T18:18">6:17</time>
				</div>
			</td>
			<td class="spotify">
				<i class="fab fa-spotify composition-icon" aria-hidden="true"></i>
			</td>
			<td class="remove">
				<a href="#" class="remove-icon">
					<svg class="olymp-close-icon"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
				</a>
			</td>
		</tr>

		<tr>
			<td class="play">
				<a href="#" class="play-icon">
					<svg class="olymp-music-play-icon-big"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big"></use></svg>
				</a>
			</td>
			<td class="cover">
				<div class="playlist-thumb">
					<img src="<?php echo base_url();?>web_assets1/img/playlist8.jpg" alt="thumb-composition">
				</div>
			</td>
			<td class="song-artist">
				<div class="composition">
					<a href="#" class="composition-name">Seven Nation Army</a>
					<a href="#" class="composition-author">The Black Stripes</a>
				</div>
			</td>
			<td class="album">
				<a href="#" class="album-composition ">Icky Strung (LIVE at Cube Garden)</a>
			</td>
			<td class="released">
				<div class="release-year">2014</div>
			</td>
			<td class="duration">
				<div class="composition-time">
					<time class="published" datetime="2017-03-24T18:18">6:17</time>
				</div>
			</td>
			<td class="spotify">
				<i class="fab fa-spotify composition-icon" aria-hidden="true"></i>
			</td>
			<td class="remove">
				<a href="#" class="remove-icon">
					<svg class="olymp-close-icon"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
				</a>
			</td>
		</tr>

		<tr>
			<td class="play">
				<a href="#" class="play-icon">
					<svg class="olymp-music-play-icon-big"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big"></use></svg>
				</a>
			</td>
			<td class="cover">
				<div class="playlist-thumb">
					<img src="<?php echo base_url();?>web_assets1/img/playlist9.jpg" alt="thumb-composition">
				</div>
			</td>
			<td class="song-artist">
				<div class="composition">
					<a href="#" class="composition-name">Leap of Faith</a>
					<a href="#" class="composition-author">Eden Artifact</a>
				</div>
			</td>
			<td class="album">
				<a href="#" class="album-composition">The Assassins’s Soundtrack</a>
			</td>
			<td class="released">
				<div class="release-year">2014</div>
			</td>
			<td class="duration">
				<div class="composition-time">
					<time class="published" datetime="2017-03-24T18:18">6:17</time>
				</div>
			</td>
			<td class="spotify">
				<i class="fab fa-spotify composition-icon" aria-hidden="true"></i>
			</td>
			<td class="remove">
				<a href="#" class="remove-icon">
					<svg class="olymp-close-icon"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
				</a>
			</td>
		</tr>

		<tr>
			<td class="play">
				<a href="#" class="play-icon">
					<svg class="olymp-music-play-icon-big"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons-music.svg#olymp-music-play-icon-big"></use></svg>
				</a>
			</td>
			<td class="cover">
				<div class="playlist-thumb">
					<img src="<?php echo base_url();?>web_assets1/img/playlist10.jpg" alt="thumb-composition">
				</div>
			</td>
			<td class="song-artist">
				<div class="composition">
					<a href="#" class="composition-name">Killer Queen</a>
					<a href="#" class="composition-author">Archiduke</a>
				</div>
			</td>
			<td class="album">
				<a href="#" class="album-composition ">News of the Universe</a>
			</td>
			<td class="released">
				<div class="release-year">2014</div>
			</td>
			<td class="duration">
				<div class="composition-time">
					<time class="published" datetime="2017-03-24T18:18">6:17</time>
				</div>
			</td>
			<td class="spotify">
				<i class="fab fa-spotify composition-icon" aria-hidden="true"></i>
			</td>
			<td class="remove">
				<a href="#" class="remove-icon">
					<svg class="olymp-close-icon"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
				</a>
			</td>
		</tr>
		</tbody>
	</table>

	<audio id="mediaplayer" data-showplaylist="true">
		<source src="mp3/Twice.mp3" title="Track 1" data-poster="track1.png" type="audio/mpeg">
		<source src="mp3/Twice.mp3" title="Track 2" data-poster="track2.png" type="audio/mpeg">
		<source src="mp3/Twice.mp3" title="Track 3" data-poster="track3.png" type="audio/mpeg">
		<source src="mp3/Twice.mp3" title="Track 4" data-poster="track4.png" type="audio/mpeg">
	</audio>

</div>

<!-- ... end Playlist Popup -->


<a class="back-to-top" href="#">
	<img src="<?php echo base_url();?>web_assets1/svg-icons/back-to-top.svg" alt="arrow" class="back-icon">
</a>




<!-- Window-popup-CHAT for responsive min-width: 768px -->

<div class="ui-block popup-chat popup-chat-responsive" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">

	<div class="modal-content">
		<div class="modal-header">
			<span class="icon-status online"></span>
			<h6 class="title" >Chat</h6>
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
				<a href="javascript:void(0);" class="options-message">
					<svg class="olymp-computer-icon"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>
				</a>
				<div class="options-message smile-block">

					<svg class="olymp-happy-sticker-icon"><use xlink:href="<?php echo base_url();?>web_assets1/svg-icons/sprites/icons.svg#olymp-happy-sticker-icon"></use></svg>

					<ul class="more-dropdown more-with-triangle triangle-bottom-right">
						<li>
							<a href="javascript:void(0);">
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
 <!-- Footer Full Width -->

    <?php include 'module2/footer.php';?>
    <!-- ... end Footer Full Width -->
<!-- ... end Window-popup-CHAT for responsive min-width: 768px -->


<!-- JS Scripts -->

<!-- ======================modal script============= -->
<script>
// Get the modal

var modal1 = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = $('.post_img');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
$('.post_img').click (function(){

    modal1.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
});

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
modal1.onclick = function() { 
    modal1.style.display = "none";
}
</script>

<!-- ======================end modal script============= -->
<!-- ===============================call ajax for header options======================== -->
 
<!-- ===============================End of call ajax for header options======================== -->
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
<script src="<?php echo base_url();?>web_assets1/js/sticky-sidebar.js"></script>

<script src="<?php echo base_url();?>web_assets1/js/base-init.js"></script>
<script defer src="<?php echo base_url();?>web_assets1/fonts/fontawesome-all.js"></script>

<script src="<?php echo base_url();?>web_assets1/Bootstrap/dist/js/bootstrap.bundle.js"></script>


</body>
</html>