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
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            </span> </a> <a href="#" class="accept-request request-del"> <span class="icon-minus">
            <svg class="olymp-happy-face-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            </span> </a> </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
            </div>
          </li>
          <li>
            <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar56-sm.jpg" alt="author"> </div>
            <div class="notification-event"> <a href="#" class="h6 notification-friend">Tony Stevens</a> <span class="chat-message-item">4 Friends in Common</span> </div>
            <span class="notification-icon"> <a href="#" class="accept-request"> <span class="icon-add without-text">
            <svg class="olymp-happy-face-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            </span> </a> <a href="#" class="accept-request request-del"> <span class="icon-minus">
            <svg class="olymp-happy-face-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            </span> </a> </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
            </div>
          </li>
          <li class="accepted">
            <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar57-sm.jpg" alt="author"> </div>
            <div class="notification-event"> You and <a href="#" class="h6 notification-friend">Mary Jane Stark</a> just became friends. Write on <a href="#" class="notification-link">her wall</a>. </div>
            <span class="notification-icon">
            <svg class="olymp-happy-face-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
              <svg class="olymp-little-delete">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-little-delete"></use>
              </svg>
            </div>
          </li>
          <li>
            <div class="author-thumb"> <img src="<?php echo base_url();?>web_assets/img/avatar58-sm.jpg" alt="author"> </div>
            <div class="notification-event"> <a href="#" class="h6 notification-friend">Stagg Clothing</a> <span class="chat-message-item">9 Friends in Common</span> </div>
            <span class="notification-icon"> <a href="#" class="accept-request"> <span class="icon-add without-text">
            <svg class="olymp-happy-face-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            </span> </a> <a href="#" class="accept-request request-del"> <span class="icon-minus">
            <svg class="olymp-happy-face-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            </span> </a> </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
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
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use>
            </svg>
            </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
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
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use>
            </svg>
            </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
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
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use>
            </svg>
            </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
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
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use>
            </svg>
            </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
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
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use>
            </svg>
            </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
              <svg class="olymp-little-delete">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-little-delete"></use>
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
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
              <svg class="olymp-little-delete">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-little-delete"></use>
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
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use>
            </svg>
            </span>
            <div class="comment-photo"> <img src="<?php echo base_url();?>web_assets/img/comment-photo1.jpg" alt="photo"> <span>“She looks incredible in that outfit! We should see each...”</span> </div>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
              <svg class="olymp-little-delete">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-little-delete"></use>
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
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use>
            </svg>
            </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
              <svg class="olymp-little-delete">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-little-delete"></use>
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
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
            </svg>
            </span>
            <div class="more">
              <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
              </svg>
              <svg class="olymp-little-delete">
                <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-little-delete"></use>
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
<div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-1 col-md-12 col-sm-12 col-12">
			<div class="ui-block">
				
				
				<!-- Post -->
				
				<article class="hentry post has-post-thumbnail thumb-full-width">
				
					<div class="post__author author vcard inline-items">
						<img src="<?php echo base_url();?>web_assets/img/author-page.jpg" alt="author">
				
						<div class="author-date">
							<a class="h6 post__author-name fn" href="<?php echo site_url();?>login_register">James Spiegel</a> wrote a <a href="#">blog post</a>
							<div class="post__date">
								<time class="published" datetime="2017-03-24T18:18">
									12 hours ago
								</time>
							</div>
						</div>
				
						<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
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
				
					</div>
				
					<div class="post-thumb">
						<img src="<?php echo base_url();?>web_assets/img/post__thumb6.jpg" alt="photo">
					</div>
				
					<a href="#" data-toggle="modal" data-target="#blog-post-popup" class="h2 post-title">Advices for Backpacking</a>
				
					<p>Lorem ipsum dolor sit amet, consectadipisicing elit, sed do eiusmod por incidid ut labore et dolore
						magna aliqua. Ut enim ad minim veniam, quis nostrud lorem exercitation ullamco laboris nisi ut
						aliquip ex ea commodo consequat.
					</p>
				
					<p>Duis en aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
						pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
						mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
						accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
						et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
						sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem
						sequi nesciun Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
						voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni...
					</p>
				
					<a href="#" data-toggle="modal" data-target="#blog-post-popup" class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Read More</a>
				
					<div class="post-additional-info inline-items">
				
						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
							<span>8</span>
						</a>
				
						<ul class="friends-harmonic">
							<li>
								<a href="#">
									<img src="<?php echo base_url();?>web_assets/img/friend-harmonic1.jpg" alt="friend">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="<?php echo base_url();?>web_assets/img/friend-harmonic9.jpg" alt="friend">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="<?php echo base_url();?>web_assets/img/friend-harmonic7.jpg" alt="friend">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="<?php echo base_url();?>web_assets/img/friend-harmonic4.jpg" alt="friend">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="<?php echo base_url();?>web_assets/img/friend-harmonic8.jpg" alt="friend">
								</a>
							</li>
						</ul>
				
						<div class="names-people-likes">
							<a href="#">Diana </a>, <a href="#">Nicholas</a> and
							<br>15 more liked this
						</div>
				
				
						<div class="comments-shared">
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-speech-balloon-icon"><use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
								<span>16</span>
							</a>
				
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-share-icon"><use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-share-icon"></use></svg>
								<span>8</span>
							</a>
						</div>
				
				
					</div>
				
					<div class="control-block-button post-control-button">
				
						<a href="#" class="btn btn-control">
							<svg class="olymp-like-post-icon"><use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-like-post-icon"></use></svg>
						</a>
				
						<a href="#" class="btn btn-control">
							<svg class="olymp-comments-post-icon"><use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
						</a>
				
						<a href="#" class="btn btn-control">
							<svg class="olymp-share-icon"><use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-share-icon"></use></svg>
						</a>
				
					</div>
				
				</article>
				
				<!-- ... end Post -->
			</div>
			<div class="ui-block">
				
				<!-- Post -->
				
				<article class="hentry post has-post-thumbnail thumb-full-width">
				
					<div class="post__author author vcard inline-items">
						<img src="<?php echo base_url();?>web_assets/img/author-page.jpg" alt="author">
				
						<div class="author-date">
							<a class="h6 post__author-name fn" href="<?php echo site_url();?>login_register">James Spiegel</a> wrote a <a href="#">blog post</a>
							<div class="post__date">
								<time class="published" datetime="2017-03-24T18:18">
									12 hours ago
								</time>
							</div>
						</div>
				
						<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
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
				
					</div>
				
					<div class="post-thumb">
						<img src="<?php echo base_url();?>web_assets/img/post__thumb7.jpg" alt="photo">
					</div>
				
					<h2 class="post-title">A Day as a Photographer with Maxxine Flames</h2>
				
					<p>Lorem ipsum dolor sit amet, consectadipisicing elit, sed do eiusmod por incidid ut labore et
						dolore magna aliqua. Ut enim ad minim veniam, quis nostrud lorem exercitation ullamco laboris
						nisi ut aliquip ex ea commodo consequat.
					</p>
				
					<p>Duis en aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
						pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
						mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
						accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
						et quasi hitecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
						aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt...
					</p>
				
					<a href="#" data-toggle="modal" data-target="#blog-post-popup" class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Read More</a>
				
					<div class="post-additional-info inline-items">
				
						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
							<span>8</span>
						</a>
				
						<ul class="friends-harmonic">
							<li>
								<a href="#">
									<img src="<?php echo base_url();?>web_assets/img/friend-harmonic1.jpg" alt="friend">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="<?php echo base_url();?>web_assets/img/friend-harmonic9.jpg" alt="friend">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="<?php echo base_url();?>web_assets/img/friend-harmonic7.jpg" alt="friend">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="<?php echo base_url();?>web_assets/img/friend-harmonic4.jpg" alt="friend">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="<?php echo base_url();?>web_assets/img/friend-harmonic8.jpg" alt="friend">
								</a>
							</li>
						</ul>
				
						<div class="names-people-likes">
							<a href="#">Diana </a>, <a href="#">Nicholas</a> and
							<br>15 more liked this
						</div>
				
				
						<div class="comments-shared">
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-speech-balloon-icon"><use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
								<span>16</span>
							</a>
				
							<a href="#" class="post-add-icon inline-items">
								<svg class="olymp-share-icon"><use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-share-icon"></use></svg>
								<span>8</span>
							</a>
						</div>
				
				
					</div>
				
					<div class="control-block-button post-control-button">
				
						<a href="#" class="btn btn-control">
							<svg class="olymp-like-post-icon"><use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-like-post-icon"></use></svg>
						</a>
				
						<a href="#" class="btn btn-control">
							<svg class="olymp-comments-post-icon"><use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
						</a>
				
						<a href="#" class="btn btn-control">
							<svg class="olymp-share-icon"><use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-share-icon"></use></svg>
						</a>
				
					</div>
				
				</article>
				
				<!-- ... end Post -->			</div>
		</div>
<!-- Right Sidebar -->
<div class="col col-xl-3 order-xl-3 col-lg-6 order-lg-4 col-md-6 col-sm-12 col-12">

			<div class="ui-block">
				<div class="ui-block-title">
					<h6 class="title">Last Photos</h6>
				</div>
				<div class="ui-block-content">

					<!-- W-Latest-Photo -->
					
					<ul class="widget w-last-photo js-zoom-gallery">
						<li>
							<a href="<?php echo base_url();?>web_assets/img/last-photo10-large.jpg">
								<img src="<?php echo base_url();?>web_assets/img/last-photo10-large.jpg" alt="photo">
							</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>web_assets/img/last-phot11-large.jpg">
								<img src="<?php echo base_url();?>web_assets/img/last-phot11-large.jpg" alt="photo">
							</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>web_assets/img/last-phot12-large.jpg">
								<img src="<?php echo base_url();?>web_assets/img/last-phot12-large.jpg" alt="photo">
							</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>web_assets/img/last-phot13-large.jpg">
								<img src="<?php echo base_url();?>web_assets/img/last-phot13-large.jpg" alt="photo">
							</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>web_assets/img/last-phot14-large.jpg">
								<img src="<?php echo base_url();?>web_assets/img/last-phot14-large.jpg" alt="photo">
							</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>web_assets/img/last-phot15-large.jpg">
								<img src="<?php echo base_url();?>web_assets/img/last-phot15-large.jpg" alt="photo">
							</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>web_assets/img/last-phot16-large.jpg">
								<img src="<?php echo base_url();?>web_assets/img/last-phot16-large.jpg" alt="photo">
							</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>web_assets/img/last-phot17-large.jpg">
								<img src="<?php echo base_url();?>web_assets/img/last-phot17-large.jpg" alt="photo">
							</a>
						</li>
						<li>
							<a href="<?php echo base_url();?>web_assets/img/last-phot18-large.jpg">
								<img src="<?php echo base_url();?>web_assets/img/last-phot18-large.jpg" alt="photo">
							</a>
						</li>
					</ul>
					
					
					<!-- .. end W-Latest-Photo -->
				</div>
			</div>

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
								<img src="<?php echo base_url();?>web_assets/img/avatar38-sm.jpg" alt="author">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>web_assets/img/avatar24-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>web_assets/img/avatar36-sm.jpg" alt="author">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>web_assets/img/avatar35-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>web_assets/img/avatar34-sm.jpg" alt="author">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>web_assets/img/avatar33-sm.jpg" alt="author">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>web_assets/img/avatar32-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>web_assets/img/avatar31-sm.jpg" alt="author">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>web_assets/img/avatar30-sm.jpg" alt="author">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>web_assets/img/avatar29-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>web_assets/img/avatar28-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>web_assets/img/avatar27-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>web_assets/img/avatar26-sm.jpg" alt="user">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo base_url();?>web_assets/img/avatar25-sm.jpg" alt="user">
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
											<img src="<?php echo base_url();?>web_assets/img/friend-harmonic1.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets/img/friend-harmonic2.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets/img/friend-harmonic3.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets/img/friend-harmonic4.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets/img/friend-harmonic5.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets/img/friend-harmonic6.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets/img/friend-harmonic7.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets/img/friend-harmonic8.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets/img/friend-harmonic9.jpg" alt="friend">
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
											<img src="<?php echo base_url();?>web_assets/img/friend-harmonic7.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets/img/friend-harmonic8.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets/img/friend-harmonic9.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets/img/friend-harmonic10.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets/img/friend-harmonic11.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets/img/friend-harmonic12.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets/img/friend-harmonic13.jpg" alt="friend">
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
											<img src="<?php echo base_url();?>web_assets/img/friend-harmonic14.jpg" alt="friend">
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo base_url();?>web_assets/img/friend-harmonic15.jpg" alt="friend">
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