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



<!-- ... end Responsive Header-BP -->

<div class="header-spacer"></div>

<div class="container">

  <div class="row">
  
    <div class="col col-lg-12 col-md-12 col-sm-12 col-12">
    <?php 
  
   foreach($details as $dtl){

          ?> 
      <div class="clients-grid">
        <!-- <ul class="cat-list-bg-style align-center sorting-menu">
          <li class="cat-list__item active" data-filter="*"><a href="#" class="">All</a></li>
          <li class="cat-list__item" data-filter=".running"><a href="#" class="">Active</a></li>
          <li class="cat-list__item" data-filter=".upcoming"><a href="#" class="">Upcoming</a></li>
          <li class="cat-list__item" data-filter=".missed"><a href="#" class="">Missed</a></li>
          <li class="cat-list__item" data-filter=".complete"><a href="#" class="">Complete</a></li>
        </ul>  -->
       <?php  if(!empty($dtl['course_list'])){ ?>
        <button class="btn btn-blue btn-md-2" style="float:right;margin-left:25px;height:25px;" onclick="location.href='<?php echo site_url();?>mycourse'">My Courses</button>

        
        <div  class="cat-list__item btn-blue btn-md-2" style ="background-color:skyblue;color:white ;"> <?php echo $dtl['category_info']['name'];?></div>              
        
        <button class="btn btn-blue btn-md-2" style="float:right;height:20px;" onclick="show()">See All</button>
       <?php } ?>
        <script>
        
          function show()
          {
            document.getElementById('last').style.display ='block';
          }
        </script>
        
        <div class="row sorting-container" id="clients-grid-1" data-layout="masonry">
        
       <?php 
            if(!empty($dtl['course_list'])) {
                foreach($dtl['course_list'] as $data) { ?>
          <div class="col col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6 sorting-item ecommerce running">
            <div class="ui-block"> 

              <!-- Friend Item -->            
               
              <div class="friend-item">
                <div class="friend-header-thumb"> <img src="<?php echo $data['desc_header_image']; ?>" alt="friend"> </div>
                <div class="friend-item-content">
                  <div class="friend-avatar">
                    <div class="author-thumb"> <img src="<?php echo $data['cover_image'];?>" alt="author"> </div>
                    <div class="author-content"> <a href="#" class="h5 author-name"><?php echo $data['title'];?></a>
                      <div class="country">Test Name</div>
                    </div>
                  </div>
                  <div class="swiper-container swiper-swiper-unique-id-1 initialized swiper-container-horizontal" id="swiper-unique-id-1">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next"> </div>
                      <div class="swiper-slide swiper-slide-active">
                        <div class="friend-count">
                          <div class="friend-count-item">
                            <div class="h6">28 May, 2018</div>
                            <div class="title">Start Date</div>
                          </div>
                          <div class="friend-count-item">
                            <div class="h6">30 May, 2018</div>
                            <div class="title">End Date</div>
                          </div>
                        </div>
                        <div class="friend-count">
                          <div class="friend-count-item">
                            <div class="h6">3 PM</div>
                            <div class="title">Time</div>
                          </div>
                          <div class="friend-count-item">
                            <div class="h6">45 Minutes</div>
                            <div class="title">Duration</div>
                          </div>
                        </div>
              
                          <div class="btn btn-blue btn-md-2"  id="addcourse">Add Course </div>
                        <div class="btn btn-blue btn-md-2"  onclick="document.getElementById('id01').style.display = 'block'">View </div>
                        
                      </div>
                      <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 243px;">
                        <div class="friend-count" data-swiper-parallax="-500" style="transform: translate3d(500px, 0px, 0px); transition-duration: 0ms;">
                          <div class="friend-count-item">
                            <div class="h6">52</div>
                            <div class="title">Friends</div>
                          </div>
                          <div class="friend-count-item">
                            <div class="h6">240</div>
                            <div class="title">Photos</div>
                          </div>
                          <div class="friend-count-item">
                            <div class="h6">16</div>
                            <div class="title">Videos</div>
                          </div>
                        </div>
                        <div class="control-block-button" data-swiper-parallax="-100" style="transform: translate3d(100px, 0px, 0px); transition-duration: 0ms;"> <a href="#" class="btn btn-control bg-blue">
                          <svg class="olymp-happy-face-icon">
                            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use>
                          </svg>
                          </a> <a href="#" class="btn btn-control bg-purple">
                          <svg class="olymp-chat---messages-icon">
                            <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use>
                          </svg>
                          </a> </div>
                      </div>
                    </div>
                    
                    <!-- If we need pagination --> 
                    
                  </div>
                </div>
              </div>
              
              <!-- ... end Friend Item -->
               </div>
              </div>
                <?php } 
                
                }
                ?> 
        
        </div>
      </div>
        <?php } ?>
    </div>
  </div>
</div>

<!-- Window-popup Update Header Photo -->

<div class="modal fade" id="update-header-photo" tabindex="-1" role="dialog" aria-labelledby="update-header-photo" aria-hidden="true">
  <div class="modal-dialog window-popup update-header-photo" role="document">
    <div class="modal-content"> <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
      <svg class="olymp-close-icon">
        <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-close-icon"></use>
      </svg>
      </a>
      <div class="modal-header">
        <h6 class="title">Update Header Photo</h6>
      </div>
      <div class="modal-body"> <a href="#" class="upload-photo-item">
        <svg class="olymp-computer-icon">
          <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-computer-icon"></use>
        </svg>
        <h6>Upload Photo</h6>
        <span>Browse your computer.</span> </a> <a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">
        <svg class="olymp-photos-icon">
          <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-photos-icon"></use>
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
        <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-close-icon"></use>
      </svg>
      </a>
      <div class="modal-header">
        <h6 class="title">Choose from My Photos</h6>
        
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">
            <svg class="olymp-photos-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-photos-icon"></use>
            </svg>
            </a> </li>
          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">
            <svg class="olymp-albums-icon">
              <use xlink:href="<?php echo base_url();?>web_assets/svg-icons/sprites/icons.svg#olymp-albums-icon"></use>
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