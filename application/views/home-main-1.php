    <!DOCTYPE html>
<html lang="en">
    <head>
        <title>Test1</title>

        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Main Font -->
        <script src="<?php echo base_url(); ?>web_assets1/js/webfontloader.min.js"></script>
        <script>
            WebFont.load({
                google: {
                    families: ['Roboto:300,400,500,700:latin']
                }
            });
        </script>
            
        <style>
            ::-webkit-scrollbar {
                display: none;
            }
            ::-moz-webkit-scrollbar {
                display: none;
            }
            .pre_text{              
                -webkit-box-sizing:border-box;
                -moz-box-sizing:border-box;
                white-space: pre-wrap;  
                white-space: -moz-pre-wrap; 
                white-space: -pre-wrap; 
                white-space: -o-pre-wrap; 
                word-wrap: break-word; 
                width:100%; overflow-x:auto;
                font-family: Roboto,-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI","Helvetica Neue",Arial,sans-serif;
                font-size: .812rem;
                font-weight: 400;
                line-height: 1.5;
                color: #888da8;
            }
        </style>


        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web_assets1/Bootstrap/dist/css/bootstrap-reboot.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web_assets1/Bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web_assets1/Bootstrap/dist/css/bootstrap-grid.css">

        <!-- Main Styles CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web_assets1/css/robin.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web_assets1/css/main.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>web_assets1/css/fonts.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <style>
            .material-icons.md-18 { font-size: 18px; }
            .material-icons.md-24 { font-size: 24px; } /* Default */
            .material-icons.md-36 { font-size: 36px; }
            .material-icons.md-48 { font-size: 48px; }
        </style>
    </head>
    <body class="">

 <div id="myModal" class="modal1">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

        <!-- Header Standard -->

        <?php include 'module2/header_standard.php'; ?>

        <!-- ... end Header Standard  -->


        <div class="container">
            <div class="row">

                <div class="col col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                    <div class="ui-block responsive-flex1200">
                        <div class="ui-block-title">

                            <div class="w-select">
                                <div class="title">Filter By:</div>
                                <fieldset class="form-group">
                                    <select class="selectpicker form-control" id="category">
                                        <option value="0">All Categories</option>
                                        <option value="1">Medical</option>
                                        <option value="2">Dental</option>
                                    </select>
                                </fieldset>
                            </div>

                            <div class="w-select">
                                <fieldset class="form-group" >
                                <select class="selectpicker form-control"  name="feed" id="feed">
                                       <option>Select Course</option>    
                                       
                                </select>

                                </fieldset>
                            </div>



                            <!-- <a href="#" class="btn btn-blue btn-md-2">Filter Feed</a> -->

                        </div>
                    </div>
                </div>

                <!-- Main Content -->

                <div class="col col-xl-8 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12" >
                    <div id="post_list">
                        <?php
                         $id = $lists['data']['expert_list'][0]['id'];
                        $com=0;
                        // pre($posts);die;
                        foreach ($posts['data'] as $post_list) {
                            
                            // 
                            ?>
                            <div class="ui-block">
                                <!-- Post -->

                                <article class="hentry post has-post-thumbnail shared-photo">

                                    <div class="post__author author vcard inline-items">
                                        <?php if (!empty($post_list['post_owner_info']['profile_picture'])) { ?>
                                            <img src="<?= $post_list['post_owner_info']['profile_picture'] ?>" alt="author">
                                        <?php } else { ?>
                                            <i class="fa fa-user-circle" alt="author"></i>
                                        <?php } ?>

                                        <div class="author-date">
                                            <a class" href="<?= site_url() ?>Profile/index/<?php echo $post_list['user_id']; ?>"><?= $post_list['post_owner_info']['name'] ?></a>
                                            <?php if ($post_list['pinned_post'] != '') { ?>
                                                <span class="right-tick"><svg class="olymp-check-icon"><use xlink:href="<?php echo base_url(); ?>web_assets1/svg-icons/sprites/icons.svg#olymp-check-icon"></use></svg></span>
                                            <?php } ?>
                                            <div class="post__date">
                                                <time class="published" datetime="2017-03-24T18:18">
                                                    7 hours ago
                                                </time>
                                            </div>
                                        </div>



                                    
                                    </div>

                                    <p>
                                         <!-- //below// == show first time content== -->
                                        <pre class="pre_text <?=$post_list['user_id'] ?> "><?= substr($post_list['post_data']['text'],0,100); ?> 
                                        </pre>
                                        <!-- //below//  == show complete content onclick== -->
                                            <span style="display: none;" class="pre_text expand<?=$post_list['user_id']; ?> "><?=$post_list['post_data']['text']; ?> </span>
                                    </p> 
                                    <span class="expand" id="expand<?=$post_list['user_id']; ?>" onclick="toggle_data(this.id,<?=$post_list['user_id'] ?>)"> <a href="javscript:void(0);">show</a></span>

                                    <div class="post-thumb">
                                        <?php if (!empty($post_list['post_data']['post_file'])) { ?>
                                            <img class="post_img" src="<?= $post_list['post_data']['post_file'][0]['link'] ?>" alt="photo">
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

                                        <a href="javascript:void(0);" onclick="comment(<?php echo $post_list['post_data']['post_id'];?>);" class="post-add-icon inline-items" data-toggle="collapse" data-target="#show-comment<?=$com?>" id="comment">
                                            <svg class="olymp-comments-post-icon">
                                            <use xlink:href="<?php echo base_url(); ?>web_assets1/svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use>
                                            </svg>
                                           
                                            <span class="count-action" ><?php
                                                if ($post_list['comments'] > 0) {
                                                    echo $post_list ['comments'];
                                                }
                                                ?>
                                                    
                                            </span> 
                                            <span>
                                                <?php
                                                if ($post_list['comments'] == 1) {
                                                    echo 'Comment';
                                                } else {
                                                    echo "Comments";
                                                }
                                                ?>
                                                    
                                            </span>
                                             
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

                                    <ul class="comments-list showmydata" >
<!--                                         <li class="comment-item">
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
                                        </li> -->
                                       <!--  <li class="comment-item has-children">
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

                                        </li> -->
                                    </ul>

                                    <!-- ... end Comments -->
                                    <a href="#" class="more-comments">View more comments <span>+</span></a>

                                    <!-- Comment Form  -->

                                    <form class="comment-form inline-items">

                                        <div class="post__author author vcard inline-items">
                                            <img src="<?php echo base_url(); ?>web_assets1/img/author-page.jpg" alt="author">

                                            <div class="form-group with-icon-right ">
                                                <textarea class="form-control" placeholder=""></textarea>
                                                <div class="add-options-message">
                                                    <a href="#" class="options-message" data-toggle="modal" data-target="#update-header-photo">
                                                        <svg class="olymp-camera-icon">
                                                        <use xlink:href="<?php echo base_url(); ?>web_assets1/svg-icons/sprites/icons.svg#olymp-camera-icon"></use>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-md-2 btn-primary" class="more-comments" data-toggle="modal" data-target="#registration-login-form-popup">Post Comment</button>

                                        <button class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Cancel</button>

                                    </form>


                                    <!-- ... end Comment Form  -->		
                                </div>	
                            </div>
                        
                        <?php $com+=1; } ?>

                      
                    </div>
                    <?php $pid = $post_list['post_data']['post_file'][0]['id']; ?>
                    <a onclick="search_filter('<?= $pid ?>')"  class="btn btn-control btn-more">
                        <svg class="olymp-three-dots-icon">
                        <use xlink:href="<?php echo base_url(); ?>web_assets1/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                        </svg>
                    </a>
                </div>

<!---->
                <!-- ... end Main Content -->
                <!-- Right Sidebar -->

                <div class="col col-xl-4 order-xl-4 col-lg-6 order-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="crumina-sticky-sidebar">
                        <div class="sidebar__inner">
                            <div class="ui-block expertes">
                                <div class="ui-block-title">
                                    <h6 class="title">Experts</h6>
                                </div>
                                <div class="ui-block-content">

                                    <!-- W-Latest-Photo -->

                                    <ul class="widget w-last-photo js-zoom-gallery">
                                        <?php
                                        foreach ($lists['data']['expert_list'] as $experts) {//pre($experts);
                                            ?>
                                            <li>
                                                <div class="expert-img">

                                                    <?php if (!empty($experts['profile_picture'])) { ?>
                                                        <img src="<?= $experts['profile_picture'] ?>" alt="photo">
                                                    <?php } else { ?>
                                                        <img src="<?php echo base_url(); ?>web_assets1/img/last-photo10-large.jpg" alt="photo">
                                                    <?php } ?>

                                                    <a title="View Profile" href="<?= site_url() ?>Profile/index/<?php echo $experts['id']; ?>"> <p class="bold" style="height:23px;overflow-x: hidden;overflow-y: scroll">
                                                            <?= $experts['name'] ?></p></a>
                                                    <div class="hide-scroll-mozo">
                                                        <p><?= $experts['specification'] ?></p>
                                                    </div>

                                                </div>

                                            </li>
                                        <?php } ?>    
                                    </ul>
                                    <!-- .. end W-Latest-Photo -->
                                </div>
                            </div>
                            <!--============================suggested videos=================================-->
                            <div class="ui-block">
                                <div class="ui-block-title">
                                    <h6 class="title">Suggested Videos</h6>
                                </div>
                                <div class="ui-block-content">

                                    <!-- W-Latest-Photo -->

                                    <ul class="widget w-last-photo js-zoom-gallery">
                                        <?php
                                        foreach ($lists['data']['suggested_videos'] as $videos) {
                                            //pre($videos);
                                            ?>
                                            <li>
                                                <div class="expert-img" style="height:150px">
                                                  
                                                    <img src="<?= $videos['thumbnail_url'] ?>" alt="photo">

                                                    <a href=""><p class="bold hide-scroll-mozo" style="height:38px;overflow-x: hidden;overflow-y: scroll">
                                                            <?= $videos['video_title'] ?></p></a>
                                                    <p style="height:38px;overflow-x: hidden;overflow-y: scroll"><?= $videos['author_name'] ?></p>
                                                </div>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                    <!-- .. end W-Latest-Photo -->
                                </div>
                            </div>
                            <!--===============================end suggested videos===============================-->
                            <div class="ui-block">
                                <div class="ui-block-title">
                                    <h6 class="title">Suggested Course</h6>
                                </div>
                                <div class="ui-block-content">

                                    <!-- W-Latest-Photo -->

                                    <ul class="widget w-last-photo js-zoom-gallery">
                                        <li>
                                            <div class="expert-img">

                                                <img src="<?php echo base_url(); ?>web_assets1/img/last-photo10-large.jpg" alt="photo">

                                                <a href=""><p class="bold">
                                                        OBG Module 4 - Hysteroscopy</p></a>
                                                <p>Radilogy</p>
                                            </div>

                                        </li>
                                        <li>
                                            <div class="expert-img">

                                                <img src="<?php echo base_url(); ?>web_assets1/img/last-photo10-large.jpg" alt="photo">

                                                <a href=""><p class="bold">
                                                        OBG Module 4 - Hysteroscopy</p></a>
                                                <p>Radilogy</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="expert-img">

                                                <img src="<?php echo base_url(); ?>web_assets1/img/last-photo10-large.jpg" alt="photo">

                                                <a href=""><p class="bold">
                                                        OBG Module 4 - Hysteroscopy</p></a>
                                                <p>Radilogy</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="expert-img">

                                                <img src="<?php echo base_url(); ?>web_assets1/img/last-photo10-large.jpg" alt="photo">

                                                <a href=""><p class="bold">
                                                        OBG Module 4 - Hysteroscopy</p></a>
                                                <p>Radilogy</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="expert-img">

                                                <img src="<?php echo base_url(); ?>web_assets1/img/last-photo10-large.jpg" alt="photo">

                                                <a href=""><p class="bold">
                                                        OBG Module 4 - Hysteroscopy</p></a>
                                                <p>Radilogy</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="expert-img">

                                                <img src="<?php echo base_url(); ?>web_assets1/img/last-photo10-large.jpg" alt="photo">

                                                <a href=""><p class="bold">
                                                        OBG Module 4 - Hysteroscopy</p></a>
                                                <p>Radilogy</p>
                                            </div>
                                        </li>



                                    </ul>


                                    <!-- .. end W-Latest-Photo -->
                                </div>




                            </div>

                        </div>
                    </div>
                </div>

                <!-- ... end Right Sidebar -->

            </div>
        </div>


        <script>
            function search_filter(page_num) {

                page_num = page_num ? page_num : 0;
                //alert(page_num);
                $.ajax({
                    type: 'POST',
                    url: '<?php echo site_url('HomeMain/ajax_post'); ?>',
                    data: 'last_post_id=' + page_num,

                    beforeSend: function () {
                        $('.loading').show();
                    },
                    success: function (html) {
                        $('#post_list').append(html);
                        $('.loading').fadeOut("slow");
                    }
                });
            }
        </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('change', '#feed', function(){
            var category_id  =$('#category').val();
            if(category_id==0)
            {
             category_id=1; 

            }
           var feed_id = $(this).val(); 
           // alert(feed_id."  ".category_id);
           $.ajax({
                    type: 'POST',
                    url: '<?php echo site_url('HomeMain/ajax_filter_post'); ?>',
                    data: {feed_id: feed_id,
                        category_id:category_id},
                    success: function (html) {
                        // alert("sucee"+html);

                        $('#post_list').html(html);
                        $('.loading').fadeOut("slow");
                    },
                    error:function(err){
                         alert("try again"+err);
                    },
            });
        
});



    // ============================================================================//
        $(document).on('change', '#category', function(){
         var category_id = $(this).val();
       
          if(category_id==0)
            {
                 $.ajax({
                    type: 'POST',
                    url: '<?php echo site_url('HomeMain/ajax_post'); ?>',
                    data: {
                     },
                    success: function (html) {
                     // alert(html);
                        // if(data.status==true){
               // console.log("data",html);               
                             $('#post_list').html(html);
                            $('.loading').fadeOut("slow");
                     
                        // }else{
                        //     alert('error');
                        // }
                     // $("#feed").append(data.result);
                        // console.log("data",data.result);
                        // }
                    }
            }); }
                 else
                 {
                     $.ajax({
                    type: 'POST',
                    dataType: 'JSON',
                    url: '<?php echo site_url('HomeMain/ajax_onchange_course'); ?>',
                    data: {category_id: category_id},
                    success: function (data) {
                    var select = document.getElementById("feed");             
                        console.log(data.result);
                        if(data.status==true){
                         $("#feed").html(data.result);
                            // $( 'select[name="feed"]' ).append(data.result);
                     
                        }else{
                            alert('error');
                        }
                     
                    }
            }); 
        }
  });
    });
    function comment(id){
    var postid=id;

    $.ajax({

        type:'Post',
        data:{postid:postid},
        url:'<?php echo site_url();?>Profile/comment',
        success:function(data){
            var data = JSON.parse(data);
            var len =data.data.length;
            var data1 = [];
        for(var i=0;i<len;i++){

            data1[i] = `<li class="comment-item">
                                            <div class="post__author author vcard inline-items">
                                                <img src="`+data.data[i].profile_picture+`" alt="author">

                                                <div class="author-date">
                                                    <a class="h6 post__author-name fn" href="#">`+data.data[i].name+`</a>
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

                                            <p>`+data.data[i].comment+`</p>

                                            <a href="#" class="post-add-icon inline-items">
                                                <svg class="olymp-heart-icon">
                                                <use xlink:href="<?php echo base_url(); ?>web_assets1/svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
                                                </svg>
                                                <span>8</span>
                                            </a>
                                            <a href="#" class="reply">Reply</a>
                                        </li>`;
                                        // console.log(data1);
       
        }
        $(".showmydata").html(data1); 
        
        },
        error:function(err){
        alert("error"+err);
        }
    });



}

//=================================== zoom image popup model ===================================
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
//=================================== zoom image popup model ===================================
//=================================== content toggle ===================================
function toggle_data(id,dt){

$('.'+id).slideToggle('slow');
$('.'+dt).html("");
}
//=================================== end content toggle===================================

</script>

        <!-- ... end Your Account Personal Information -->
        <?php include 'module2/footer.php'; ?>
        <!-- JS Scripts -->
        <script src="<?php echo base_url(); ?>web_assets1/js/jquery-3.2.1.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/jquery.appear.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/jquery.mousewheel.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/perfect-scrollbar.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/jquery.matchHeight.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/svgxuse.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/imagesloaded.pkgd.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/Headroom.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/velocity.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/ScrollMagic.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/jquery.waypoints.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/jquery.countTo.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/material.min.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/bootstrap-select.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/smooth-scroll.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/selectize.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/swiper.jquery.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/moment.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/daterangepicker.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/simplecalendar.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/fullcalendar.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/isotope.pkgd.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/ajax-pagination.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/Chart.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/chartjs-plugin-deferred.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/circle-progress.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/loader.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/run-chart.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/jquery.magnific-popup.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/jquery.gifplayer.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/mediaelement-and-player.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/js/mediaelement-playlist-plugin.min.js"></script>
        <!--<script src="<?php echo base_url(); ?>web_assets1/js/base-init.js"></script>-->
        <script defer src="<?php echo base_url(); ?>web_assets1/fonts/fontawesome-all.js"></script>
        <script src="<?php echo base_url(); ?>web_assets1/Bootstrap/dist/js/bootstrap.bundle.js"></script>
    </body>
</html>
