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
<?php include 'module/profile.php' ?>
<!-- ... end Header-BP --> 

<!-- Responsive Header-BP -->

<header class="header header-responsive" id="site-header-responsive"> 
  <!-- Tab panes -->
  <div class="tab-content tab-content-responsive">
    <div class="tab-pane " id="request" role="tabpanel">
      <div class="mCustomScrollbar" data-mcs-theme="dark">
        <div class="ui-block-title ui-block-title-small">
          <h6 class="title">FRIEND REQUESTS</h6>
          <a href="#">Find Friends</a> <a href="#">Settings</a> </div>
        <ul class="notification-list friend-requests">
          <li>
            <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar55-sm.jpg" alt="author"> </div>
            <div class="notification-event"> <a href="#" class="h6 notification-friend">Tamara Romanoff</a> <span class="chat-message-item">Mutual Friend: Sarah Hetfield</span> </div>
            <span class="notification-icon"> <a href="#" class="accept-request"> <span class="icon-add without-text">
            <svg class="olymp-happy-face-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            </span> </a> <a href="#" class="accept-request request-del"> <span class="icon-minus">
            <svg class="olymp-happy-face-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            </span> </a> </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
            </div>
          </li>
          <li>
            <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar56-sm.jpg" alt="author"> </div>
            <div class="notification-event"> <a href="#" class="h6 notification-friend">Tony Stevens</a> <span class="chat-message-item">4 Friends in Common</span> </div>
            <span class="notification-icon"> <a href="#" class="accept-request"> <span class="icon-add without-text">
            <svg class="olymp-happy-face-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            </span> </a> <a href="#" class="accept-request request-del"> <span class="icon-minus">
            <svg class="olymp-happy-face-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            </span> </a> </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
            </div>
          </li>
          <li class="accepted">
            <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar57-sm.jpg" alt="author"> </div>
            <div class="notification-event"> You and <a href="#" class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on <a href="#" class="notification-link">her wall</a>. </div>
            <span class="notification-icon">
            <svg class="olymp-happy-face-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
              <svg class="olymp-little-delete">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-little-delete"></use>
              </svg>
            </div>
          </li>
          <li>
            <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar58-sm.jpg" alt="author"> </div>
            <div class="notification-event"> <a href="#" class="h6 notification-friend">Stagg Clothing</a> <span class="chat-message-item">9 Friends in Common</span> </div>
            <span class="notification-icon"> <a href="#" class="accept-request"> <span class="icon-add without-text">
            <svg class="olymp-happy-face-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            </span> </a> <a href="#" class="accept-request request-del"> <span class="icon-minus">
            <svg class="olymp-happy-face-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            </span> </a> </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
            </div>
          </li>
        </ul>
        <a href="#" class="view-all bg-blue">Check all your Events</a> </div>
    </div>
    <div class="tab-pane " id="chat" role="tabpanel">
      <div class="mCustomScrollbar" data-mcs-theme="dark">
        <div class="ui-block-title ui-block-title-small">
          <h6 class="title">Chat / Messages</h6>
          <a href="#">Mark all as read</a> <a href="#">Settings</a> </div>
        <ul class="notification-list chat-message">
          <li class="message-unread">
            <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar59-sm.jpg" alt="author"> </div>
            <div class="notification-event"> <a href="#" class="h6 notification-friend">Diana Jameson</a> <span class="chat-message-item">Hi James! It’s Diana, I just wanted to let you know that we have to reschedule...</span> <span class="notification-date">
              <time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time>
              </span> </div>
            <span class="notification-icon">
            <svg class="olymp-chat---messages-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-chat---messages-icon"></use>
            </svg>
            </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
            </div>
          </li>
          <li>
            <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar60-sm.jpg" alt="author"> </div>
            <div class="notification-event"> <a href="#" class="h6 notification-friend">Jake Parker</a> <span class="chat-message-item">Great, I’ll see you tomorrow!.</span> <span class="notification-date">
              <time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time>
              </span> </div>
            <span class="notification-icon">
            <svg class="olymp-chat---messages-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-chat---messages-icon"></use>
            </svg>
            </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
            </div>
          </li>
          <li>
            <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar61-sm.jpg" alt="author"> </div>
            <div class="notification-event"> <a href="#" class="h6 notification-friend">Elaine Dreyfuss</a> <span class="chat-message-item">We’ll have to check that at the office and see if the client is on board with...</span> <span class="notification-date">
              <time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 9:56pm</time>
              </span> </div>
            <span class="notification-icon">
            <svg class="olymp-chat---messages-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-chat---messages-icon"></use>
            </svg>
            </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
            </div>
          </li>
          <li class="chat-group">
            <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar11-sm.jpg" alt="author"> <img src="<?php echo base_url();?>web_assets/img/avatar12-sm.jpg" alt="author"> <img src="<?php echo base_url();?>web_assets/img/avatar13-sm.jpg" alt="author"> <img src="<?php echo base_url();?>web_assets/img/avatar10-sm.jpg" alt="author"> </div>
            <div class="notification-event"> <a href="#" class="h6 notification-friend">You, Faye, Ed &amp; Jet +3</a> <span class="last-message-author">Ed:</span> <span class="chat-message-item">Yeah! Seems fine by me!</span> <span class="notification-date">
              <time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at 10:23am</time>
              </span> </div>
            <span class="notification-icon">
            <svg class="olymp-chat---messages-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-chat---messages-icon"></use>
            </svg>
            </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
            </div>
          </li>
        </ul>
        <a href="#" class="view-all bg-purple">View All Messages</a> </div>
    </div>
    <div class="tab-pane " id="notification" role="tabpanel">
      <div class="mCustomScrollbar" data-mcs-theme="dark">
        <div class="ui-block-title ui-block-title-small">
          <h6 class="title">Notifications</h6>
          <a href="#">Mark all as read</a> <a href="#">Settings</a> </div>
        <ul class="notification-list">
          <li>
            <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar62-sm.jpg" alt="author"> </div>
            <div class="notification-event">
              <div><a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
              <span class="notification-date">
              <time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time>
              </span> </div>
            <span class="notification-icon">
            <svg class="olymp-comments-post-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-comments-post-icon"></use>
            </svg>
            </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
              <svg class="olymp-little-delete">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-little-delete"></use>
              </svg>
            </div>
          </li>
          <li class="un-read">
            <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar63-sm.jpg" alt="author"> </div>
            <div class="notification-event">
              <div>You and <a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on <a href="#" class="notification-link">his wall</a>.</div>
              <span class="notification-date">
              <time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time>
              </span> </div>
            <span class="notification-icon">
            <svg class="olymp-happy-face-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
              <svg class="olymp-little-delete">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-little-delete"></use>
              </svg>
            </div>
          </li>
          <li class="with-comment-photo">
            <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar64-sm.jpg" alt="author"> </div>
            <div class="notification-event">
              <div><a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="#" class="notification-link">photo</a>.</div>
              <span class="notification-date">
              <time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time>
              </span> </div>
            <span class="notification-icon">
            <svg class="olymp-comments-post-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-comments-post-icon"></use>
            </svg>
            </span>
            <div class="comment-photo"> <img src="<?php echo base_url();?>web_assets/img/comment-photo1.jpg" alt="photo"> <span>“She looks incredible in that outfit! We should see each...”</span> </div>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
              <svg class="olymp-little-delete">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-little-delete"></use>
              </svg>
            </div>
          </li>
          <li>
            <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar65-sm.jpg" alt="author"> </div>
            <div class="notification-event">
              <div><a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a href="#" class="notification-link">Gotham Bar</a>.</div>
              <span class="notification-date">
              <time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time>
              </span> </div>
            <span class="notification-icon">
            <svg class="olymp-happy-face-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
              <svg class="olymp-little-delete">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-little-delete"></use>
              </svg>
            </div>
          </li>
          <li>
            <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar66-sm.jpg" alt="author"> </div>
            <div class="notification-event">
              <div><a href="#" class="h6 notification-friend">James Summers</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
              <span class="notification-date">
              <time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time>
              </span> </div>
            <span class="notification-icon">
            <svg class="olymp-heart-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-heart-icon"></use>
            </svg>
            </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
              <svg class="olymp-little-delete">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-little-delete"></use>
              </svg>
            </div>
          </li>
        </ul>
        <a href="#" class="view-all bg-primary">View All Notifications</a> </div>
    </div>
    <div class="tab-pane " id="search" role="tabpanel">
      <form class="search-bar w-search notification-list friend-requests">
        <div class="form-group with-button">
          <input class="form-control js-user-search" placeholder="Search here people or pages..." type="text">
        </div>
      </form>
    </div>
  </div>
  <!-- ... end  Tab panes --> 
  
</header>

<!-- ... end Responsive Header-BP -->
<div class="header-spacer"></div>
<div class="container">
  <div class="row">
    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
    
    <ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#home" role="tab">
							My Product
						<div class="ripple-container"></div></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-selected="false">
							Buy Product
						<div class="ripple-container"></div></a>
					</li>
				</ul>
                
                <div class="tab-content">
					<div class="tab-pane active show" id="home" role="tabpanel" data-mh="log-tab" style="">
						<div class="col col-xl-4 order-xl-1 col-lg-4 order-lg-1 col-md-12 order-md-2 col-sm-12 col-12">
			<div class="buy-product-box">
				<form class="buy-product-box-details">
					<div class="crumina-module crumina-heading with-title-decoration">
						<h5 class="heading-title">Product Details</h5>
					</div>

					
					<!-- Order Totals List -->
					
					<ul class="order-totals-list">
						<li>
							Course Name: <span>Radiology </span>
						</li>
						<li>
							Test Name:  <span>Test1</span>
						</li>
						<li>
							Date:<span>June 08th, 2018</span>
						</li>
                        <li>
							Payment Mode: <span>Debit Card</span>
						</li>
						<li class="total">
							Total Amount: <span> <i class="fas fa-rupee-sign"></i> 350</span>
						</li>
                        
					</ul>
					
					<!-- ... end Order Totals List -->

					
					<!-- Payment Methods List -->
					
					
					
					<!-- ... end Payment Methods List -->

					<a href="#" class="btn btn-blue btn-lg full-width">Invoice</a>
				</form>
                </div>
		</div>
						
					</div>
			
					<div class="tab-pane" id="profile" role="tabpanel" data-mh="log-tab" style="">
						
						<div class="col col-xl-4 order-xl-1 col-lg-4 order-lg-1 col-md-12 order-md-2 col-sm-12 col-12">
			<div class="buy-product-box">
				<form class="buy-product-box-details">
					<div class="crumina-module crumina-heading with-title-decoration">
						<h5 class="heading-title">Product Details</h5>
					</div>

					
					<!-- Order Totals List -->
					
					<ul class="order-totals-list">
						<li>
							Course Name: <span>Radiology </span>
						</li>
						<li>
							Test Name:  <span>Test1</span>
						</li>
						<li>
							Date:<span>June 08th, 2018</span>
						</li>
						<li class="total">
							Total Amount: <span> <i class="fas fa-rupee-sign"></i> 350</span>
						</li>
					</ul>
					
					<!-- ... end Order Totals List -->

					
					<!-- Payment Methods List -->
					
					<ul class="payment-methods-list">
						<li>
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios" checked=""><span class="circle"></span><span class="check"></span>
									Direct Bank Transfer
								</label>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor incididunt ut la etere dolore magna aliqua.</p>
						</li>
						<li>
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios"><span class="circle"></span><span class="check"></span>
									Cheque Payment
								</label>
							</div>
						</li>
						<li>
							<div class="radio">
								<label>
									<input type="radio" name="optionsRadios"><span class="circle"></span><span class="check"></span>
									Paypal
								</label>
							</div>
						</li>
					</ul>
					
					<!-- ... end Payment Methods List -->

					<a href="#" class="btn btn-purple btn-lg full-width">Make Payment</a>
				</form>
                </div>
		</div>
					</div>
				</div>
    
    
    
    
    
    
    
    
    
      
    </div>
  </div>
</div>

<!-- Window-popup Update Header Photo -->

<div class="modal fade" id="update-header-photo" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">
  <div class="modal-dialog window-popup update-header-photo" role="document">
    <div class="modal-content"> <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
      <svg class="olymp-close-icon">
        <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-close-icon"></use>
      </svg>
      </a>
      <div class="modal-header">
        <h6 class="title">Update Header Photo</h6>
      </div>
      <div class="modal-body"> <a href="#" class="upload-photo-item">
        <svg class="olymp-computer-icon">
          <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-computer-icon"></use>
        </svg>
        <h6>Upload Photo</h6>
        <span>Browse your computer.</span> </a> <a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">
        <svg class="olymp-photos-icon">
          <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-photos-icon"></use>
        </svg>
        <h6>Choose from My Photos</h6>
        <span>Choose from your uploaded photos</span> </a> </div>
    </div>
  </div>
</div>

<!-- ... end Window-popup Update Header Photo --> 

<!-- Window-popup Choose from my Photo -->

<div class="modal fade" id="choose-from-my-photo" tabindex="-1" role="dialog" aria-labelledby="choose-from-my-photo" aria-hidden="true">
  <div class="modal-dialog window-popup choose-from-my-photo" role="document">
    <div class="modal-content"> <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
      <svg class="olymp-close-icon">
        <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-close-icon"></use>
      </svg>
      </a>
      <div class="modal-header">
        <h6 class="title">Choose from My Photos</h6>
        
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">
            <svg class="olymp-photos-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-photos-icon"></use>
            </svg>
            </a> </li>
          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">
            <svg class="olymp-albums-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons//sprites/icons.svg#olymp-albums-icon"></use>
            </svg>
            </a> </li>
        </ul>
      </div>
      <div class="modal-body"> 
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">
            <div class="choose-photo-item" data-mh="choose-item">
              <div class="radio">
                <label class="custom-radio"> <img src="<?php echo base_url();?>web_assets/img/choose-photo1.jpg" alt="photo">
                  <input type="radio" name="optionsRadios">
                </label>
              </div>
            </div>
            <div class="choose-photo-item" data-mh="choose-item">
              <div class="radio">
                <label class="custom-radio"> <img src="<?php echo base_url();?>web_assets/img/choose-photo2.jpg" alt="photo">
                  <input type="radio" name="optionsRadios">
                </label>
              </div>
            </div>
            <div class="choose-photo-item" data-mh="choose-item">
              <div class="radio">
                <label class="custom-radio"> <img src="<?php echo base_url();?>web_assets/img/choose-photo3.jpg" alt="photo">
                  <input type="radio" name="optionsRadios">
                </label>
              </div>
            </div>
            <div class="choose-photo-item" data-mh="choose-item">
              <div class="radio">
                <label class="custom-radio"> <img src="<?php echo base_url();?>web_assets/img/choose-photo4.jpg" alt="photo">
                  <input type="radio" name="optionsRadios">
                </label>
              </div>
            </div>
            <div class="choose-photo-item" data-mh="choose-item">
              <div class="radio">
                <label class="custom-radio"> <img src="<?php echo base_url();?>web_assets/img/choose-photo5.jpg" alt="photo">
                  <input type="radio" name="optionsRadios">
                </label>
              </div>
            </div>
            <div class="choose-photo-item" data-mh="choose-item">
              <div class="radio">
                <label class="custom-radio"> <img src="<?php echo base_url();?>web_assets/img/choose-photo6.jpg" alt="photo">
                  <input type="radio" name="optionsRadios">
                </label>
              </div>
            </div>
            <div class="choose-photo-item" data-mh="choose-item">
              <div class="radio">
                <label class="custom-radio"> <img src="<?php echo base_url();?>web_assets/img/choose-photo7.jpg" alt="photo">
                  <input type="radio" name="optionsRadios">
                </label>
              </div>
            </div>
            <div class="choose-photo-item" data-mh="choose-item">
              <div class="radio">
                <label class="custom-radio"> <img src="<?php echo base_url();?>web_assets/img/choose-photo8.jpg" alt="photo">
                  <input type="radio" name="optionsRadios">
                </label>
              </div>
            </div>
            <div class="choose-photo-item" data-mh="choose-item">
              <div class="radio">
                <label class="custom-radio"> <img src="<?php echo base_url();?>web_assets/img/choose-photo9.jpg" alt="photo">
                  <input type="radio" name="optionsRadios">
                </label>
              </div>
            </div>
            <a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a> <a href="#" class="btn btn-primary btn-lg btn--half-width">Confirm Photo</a> </div>
          <div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">
            <div class="choose-photo-item" data-mh="choose-item">
              <figure> <img src="<?php echo base_url();?>web_assets/img/choose-photo10.jpg" alt="photo">
                <figcaption> <a href="#">South America Vacations</a> <span>Last Added: 2 hours ago</span> </figcaption>
              </figure>
            </div>
            <div class="choose-photo-item" data-mh="choose-item">
              <figure> <img src="<?php echo base_url();?>web_assets/img/choose-photo11.jpg" alt="photo">
                <figcaption> <a href="#">Photoshoot Summer 2016</a> <span>Last Added: 5 weeks ago</span> </figcaption>
              </figure>
            </div>
            <div class="choose-photo-item" data-mh="choose-item">
              <figure> <img src="<?php echo base_url();?>web_assets/img/choose-photo12.jpg" alt="photo">
                <figcaption> <a href="#">Amazing Street Food</a> <span>Last Added: 6 mins ago</span> </figcaption>
              </figure>
            </div>
            <div class="choose-photo-item" data-mh="choose-item">
              <figure> <img src="<?php echo base_url();?>web_assets/img/choose-photo13.jpg" alt="photo">
                <figcaption> <a href="#">Graffity & Street Art</a> <span>Last Added: 16 hours ago</span> </figcaption>
              </figure>
            </div>
            <div class="choose-photo-item" data-mh="choose-item">
              <figure> <img src="<?php echo base_url();?>web_assets/img/choose-photo14.jpg" alt="photo">
                <figcaption> <a href="#">Amazing Landscapes</a> <span>Last Added: 13 mins ago</span> </figcaption>
              </figure>
            </div>
            <div class="choose-photo-item" data-mh="choose-item">
              <figure> <img src="<?php echo base_url();?>web_assets/img/choose-photo15.jpg" alt="photo">
                <figcaption> <a href="#">The Majestic Canyon</a> <span>Last Added: 57 mins ago</span> </figcaption>
              </figure>
            </div>
            <a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a> <a href="#" class="btn btn-primary btn-lg disabled btn--half-width">Confirm Photo</a> </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ... end Window-popup Choose from my Photo --> 

<a class="back-to-top" href="#"> <img src="<?php echo base_url();?>web_assets/svg-icons//back-to-top.svg" alt="arrow" class="back-icon"> </a> 

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