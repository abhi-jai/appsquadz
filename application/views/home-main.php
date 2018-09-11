<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MME-Home</title>
        <?php $this->load->view('head_content') ?>      
    </head>
    <body class="">       
        <!-- Header Standard -->

        <?php $this->load->view('module2/header_standard.php'); ?>
        
         <div id="myModal" class="modal1">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
        </div>

        <!-- ... end Header Standard  -->
        <?php if($this->session->userdata('mobModel')!=''){ ?>
              <script>  window.onload = function() { $("#mobModal").modal(); };</script>
        <?php $this->session->unset_userdata('mobModel'); 
         } ?>


        <div class="container">
            <div class="row">

                <div class="col col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                    <div class="ui-block responsive-flex1200">
                        <div class="ui-block-title">

                            <div class="w-select">
                                <div class="title">Filter By:</div>
                                <fieldset class="form-group">
                                    <select class="" id="category">
                                        <option value="0">All Categories</option>
                                        <option value="1">Medical</option>
                                        <option value="2">Dental</option>
                                    </select>
                                </fieldset>
                            </div>

                            <div class="w-select">

                                <select name="feed" id="feed">
                                    <option>Select Course</option>    

                                </select>
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
                        $com = 0;
                        if(!empty($posts['data'])){
                        // pre($posts);die;
                        foreach ($posts['data'] as $post_list) {
                           
                            ?>
                            <div class="ui-block">
                                <!-- Post -->

                                <article class="hentry post has-post-thumbnail shared-photo">

                                    <div class="post__author author vcard inline-items">
                                        <?php if (!empty($post_list['post_owner_info']['profile_picture'])) { ?>
                                            <img src="<?= $post_list['post_owner_info']['profile_picture'] ?>" alt="author">
                                        <?php } else { ?>
                                            <i class="fa fa-user-circle" alt="author" style="font-size:45px;"></i>
                                        <?php } ?>

                                        <div class="author-date">
                                            <a  href="<?= site_url() ?>Profile/index/<?php echo $post_list['user_id']; ?>"><?= $post_list['post_owner_info']['name'] ?></a>
                                            <?php if ($post_list['pinned_post'] != '') { ?>
        <!--                                                <span class="right-tick"><svg class="olymp-check-icon"><use xlink:href="<?php echo base_url(); ?>web_assets1/svg-icons/sprites/icons.svg#olymp-check-icon"></use></svg></span>-->
                                                <span style="color:#ff5e3a">  Featured Post</span>     
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
                                    <div id="pre_text<?= $post_list['user_id'] ?>">
                                        <pre class="pre_text <?= $post_list['user_id'] ?> "><?= substr($post_list['post_data']['text'], 0, 100); ?> <?php if (strlen($post_list['post_data']['text']) >= 100) { ?>....<span class="expand" id="expand<?= $post_list['user_id']; ?>" onclick="toggle_data(this.id,<?= $post_list['user_id'] ?>)"> <a href="javascript:void(0);">show more</a></span> <?php } ?>
                                            </p></pre>
                                    </div>
                                    <!-- //below//  == show complete content onclick== -->
                                    <span style="display: none;" class="pre_text expand<?= $post_list['user_id']; ?> "><?= $post_list['post_data']['text']; ?> </span>
                                    <?php if (strlen($post_list['post_data']['text']) >= 100) { ?>
                                        <span class="expand" id="expand<?= $post_list['user_id']; ?>" onclick="toggle_data_c(this.id,<?= $post_list['user_id'] ?>)"> <a id="hiexpand<?= $post_list['user_id']; ?>" style="display:none;" href="javascript:void(0);">show less</a></span>
                                    <?php } ?>

                                    <?php if (!empty($post_list['post_data']['post_file'])) { ?>
                                        <div class="post-thumb" style="border:none;">
                                            <?php list($width, $height, $type, $attr) = getimagesize($post_list['post_data']['post_file'][0]['link']); //echo $height;?>
                                            <img class="post_img" src="<?= $post_list['post_data']['post_file'][0]['link'] ?>" alt="photo" style="object-fit: cover;">
                                        </div>
                                    <?php } ?>

                                    <div class="post-additional-info inline-items">
                                        <?php if (isset($this->session->userdata['username'])) { ?>

                                            <a href="javascript:void(0)" onclick="likeF('<?= $post_list['post_data']['post_id'] ?>')" class="post-add-icon inline-items">
                                                <svg class="olymp-like-post-icon-hand">
                                                <use xlink:href="<?php echo base_url(); ?>web_assets1/svg-icons/sprites/icons.svg#olymp-like-post-icon-hand"></use>
                                                </svg>

                                                <span class="count-action" id="like<?= $post_list['post_data']['post_id'] ?>"><?php
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
                                        <?php } else { ?>
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#registration-login-form-popup" class="post-add-icon inline-items">
                                                <svg class="olymp-like-post-icon-hand">
                                                <use xlink:href="<?php echo base_url(); ?>web_assets1/svg-icons/sprites/icons.svg#olymp-like-post-icon-hand"></use>
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
                                        <?php } ?>

                                        <a href="javascript:void(0)" onclick="comment('<?= $post_list['post_data']['post_id'] ?>', 'load_comment<?= $com ?>')"  class="post-add-icon inline-items" data-toggle="collapse" data-target="#show-comment<?= $com ?>" id="comment">
                                            <input type="hidden" value="load_comment<?= $com ?>" id="comidd<?= $post_list['post_data']['post_id'] ?>"/>
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
                                                if ($post_list['comments'] <= 1) {
                                                    echo 'Comment';
                                                } else {
                                                    echo "Comments";
                                                }
                                                ?>

                                            </span>

                                        </a>
                                        <?php if (isset($this->session->user_data['username'])) { ?>
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#registration-login-form-popup" class="post-add-icon inline-items">
                                                <svg class="olymp-share-icon">
                                                <use xlink:href="<?php echo base_url(); ?>web_assets1/svg-icons/sprites/icons.svg#olymp-share-icon"></use>
                                                </svg>
                                                <span>Share</span>
                                            </a>
                                        <?php } else { ?>
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#registration-login-form-popup" class="post-add-icon inline-items">
                                                <svg class="olymp-share-icon">
                                                <use xlink:href="<?php echo base_url(); ?>web_assets1/svg-icons/sprites/icons.svg#olymp-share-icon"></use>
                                                </svg>
                                                <span>Share</span>
                                            </a>
                                        <?php } ?>

                                    </div>



                                </article>
                                <!-- .. end Post -->					
                                <!-- Comments -->

                                <div id="show-comment<?= $com ?>" class="collapse">

                                    <ul class="comments-list showmydata" id="load_comment<?= $com ?>" >



                                    </ul>

                                    <!-- ... end Comments -->
    <!--                                    <a href="#" class="more-comments">View more comments <span>+</span></a>-->

                                    <!-- Comment Form  -->

                                    <form class="comment-form inline-items">

                                        <div class="post__author author vcard inline-items">
                                            <?php if (remote_file_exists($this->session->pro_img, 1)) { ?>
                                                <img src="<?= $this->session->pro_img ?>" alt="author">
                                            <?php } else { ?>
                                                <i class="fa fa-user-circle" alt="author" style="font-size:28px"></i>
                                            <?php } ?>

                                            <div class="form-group with-icon-right ">
                                                <textarea class="form-control" placeholder="" id="commentdata<?= $post_list['post_data']['post_id'] ?>"></textarea>
                                                <!--                                                <div class="add-options-message">
                                                                                                    <a href="#" class="options-message" data-toggle="modal" data-target="#update-header-photo">
                                                                                                        <svg class="olymp-camera-icon">
                                                                                                        <use xlink:href="<?php //echo base_url();  ?>web_assets1/svg-icons/sprites/icons.svg#olymp-camera-icon"></use>
                                                                                                        </svg>
                                                                                                    </a>
                                                                                                </div>-->
                                            </div>
                                        </div>

                                        <?php if (isset($this->session->userdata['username'])) { ?>
                                            <button type="button" class="btn btn-md-2 btn-primary" class="more-comments" onclick="postComment('<?= $post_list['post_data']['post_id'] ?>')">Post Comment</button>
                                        <?php } else { ?>
                                            <button type="button" class="btn btn-md-2 btn-primary" class="more-comments" data-toggle="modal" data-target="#registration-login-form-popup">Post Comment</button>
                                        <?php } ?>

                                        <button class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color"  onclick="return(false)">Cancel</button>

                                    </form>


                                    <!-- ... end Comment Form  -->		
                                </div>	
                            </div>

                            <?php $com += 1;
                        }}else{ ?>
                         <center><h4>No feeds found!!</h4></center>
                        <?php }?>
                    </div>
<?php $pid = $post_list['post_data']['post_file'][0]['id']; ?>
                    <a onclick="search_filter('<?= $pid ?>')"  class="btn btn-control btn-more">
                        <svg class="olymp-three-dots-icon">
                        <use xlink:href="<?php echo base_url(); ?>web_assets1/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                        </svg>
                    </a>
                </div>


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

                                                    <?php if (remote_file_exists($experts['profile_picture'], 1)) { ?>
                                                        <img src="<?= $experts['profile_picture'] ?>" alt="photo">
    <?php } else { ?>
                                                        <div class="experts-users" style="background-color:<?='#'.substr(str_shuffle('ABCDEF0123456789'),0,6)?>"><span><?= substr($experts['name'], 0, 1) ?></span></div>

                                                                <!--<img src="<?php echo base_url(); ?>web_assets1/img/last-photo10-large.jpg" alt="photo">-->
    <?php } ?>

                                                    <a title="View Profile" href="<?= site_url() ?>Profile/index/<?php echo $experts['id']; ?>"> <p class="bold" style="text-overflow: ellipsis; 
                                                                                                                                                    overflow: hidden; 
                                                                                                                                                    white-space: nowrap;">
    <?= $experts['name'] ?></p></a>
                                                    <div class="">
                                                        <p style="text-overflow: ellipsis; 
                                                           overflow: hidden; 
                                                           white-space: nowrap;"><?= substr($experts['specification'], 0, 12) ?></p>
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

                                                    <a href=""><p class="bold hide-scroll-mozo" style="text-overflow: ellipsis; 
                                                                  overflow: hidden; 
                                                                  white-space: nowrap;">
    <?= $videos['video_title'] ?></p></a>
                                                    <p style="text-overflow: ellipsis; 
                                                       overflow: hidden; 
                                                       white-space: nowrap;"><?= $videos['author_name'] ?></p>
                                                </div>
                                            </li>
<?php } ?>
                                    </ul>
                                    <!-- .. end W-Latest-Photo -->
                                </div>
                            </div>
                            <!--===============================end suggested videos===============================-->
                            <!--=============================== suggested couses===============================-->
                            <!--                            <div class="ui-block">-->
                            <!--
                                                            <div class="ui-block-title">
                                                                <h6 class="title">Suggested Course</h6>
                                                            </div>
                            -->
                            <!--                                <div class="ui-block-content">-->

                            <!-- W-Latest-Photo -->

                            <!--                                    <ul class="widget w-last-photo js-zoom-gallery">-->
                            <!--
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
                            -->



                            <!--                                    </ul>-->


                            <!-- .. end W-Latest-Photo -->
                            <!--                                </div>-->




                            <!--                            </div>-->

                        </div>
                    </div>
                </div>

                <!-- ... end Right Sidebar -->

            </div>
        </div>


        <script>
            function comment(id, placeholder) {
                var postid = id;
                $.ajax({
                    type: 'Post',
                    data: {postid: postid},
                    url: '<?php echo site_url(); ?>Profile/comment',
                    success: function (data) {
                        $('#' + placeholder).html(data);
                    },
                    error: function (err) {
                        console.log("error" + err);
                    }
                });
            }
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
                    // ========================================on change cource====================================//
                    $(document).ready(function () {
                        $(document).on('change', '#feed', function () {
                            var category_id = $('#category').val();

                            var feed_id = $(this).val();
                            var last_post_id =<?= $post_list['post_data']['post_file'][0]['id'] ?>;
                            // alert(feed_id."  ".category_id);
                            $.ajax({
                                type: 'POST',
                                url: '<?php echo site_url('HomeMain/ajax_filter_post'); ?>',
                                data: {feed_id: feed_id,
                                    category_id: category_id,
                                    last_post_id: last_post_id
                                },
                                success: function (html) {
                                    // alert("sucee"+html);

                                    $('#post_list').html(html);
                                    $('.loading').fadeOut("slow");
                                }
                            });

                        });



                        // ========================================on change category====================================//
                        $('#category').change(function () {
                            var category_id = $(this).val();

                            if (category_id == 0)
                            {
                                $.ajax({
                                    type: 'POST',
                                    url: '<?php echo site_url('HomeMain/ajax_post'); ?>',
                                    data: {
                                    },
                                    success: function (html) {

                                        $('#post_list').html(html);
                                        $('.loading').fadeOut("slow");
                                        $('#feed').empty();
                                        $('#feed').append("<option>Select Courses</option>");


                                    }
                                });
                            } else
                            {
                                $.ajax({
                                    type: 'POST',
                                    dataType: 'JSON',
                                    url: '<?php echo site_url('HomeMain/ajax_onchange_course'); ?>',
                                    data: {category_id: category_id},
                                    success: function (data) {
                                        if (data.status == true) {
                                            $('#feed').empty();

                                            $('#feed').append(data.result);
                                        } else {
                                            //alert('error');
                                        }

                                    }
                                });
                            }
                        });
                    });


        //=================================== zoom image popup model ===================================
                    var modal1 = document.getElementById('myModal');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
                    var img = $('.post_img');
                    var modalImg = document.getElementById("img01");
                    var captionText = document.getElementById("caption");
                    $('.post_img').click(function () {

                        modal1.style.display = "block";
                        modalImg.src = this.src;
                        //captionText.innerHTML = this.alt;
                    });

        // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
                    modal1.onclick = function () {
                        modal1.style.display = "none";
                    }
        //=================================== zoom image popup model ===================================
        //=================================== content toggle ===================================
                    function toggle_data(id, dt) {
                        $('.' + id).show();
                        $('#pre_text' + dt).hide();
                        $('#hi' + id).show();
                    }
                    function toggle_data_c(id, dt) {
                        $('.' + id).hide();
                        $('#pre_text' + dt).show();
                        $('#hi' + id).hide();
                    }
        //=================================== end content toggle===================================
        //  =================================post like dislike=====================================
                    function likeF(pid){
                            $.ajax({
                                url: '<?= site_url('HomeMain/like') ?>',
                                type: 'POST',
                                dataType: 'json',
                                data: {post_id : pid},
                                beforeSend: function() {
                                  //$("#wave").show();
                                },
                                success: function(data){
                                    //console.log(data.status);
                                    if(data.status){
                                        //change like
                                        //alert(data.data.likes);
                                        $("#like"+pid).html(data.data.likes);
                                    }else{
                                            //dislike
                                        $.ajax({
                                            url: '<?= site_url('HomeMain/dislike') ?>',
                                            type: 'POST',
                                            dataType: 'json',
                                            data: {post_id : pid},
                                            success: function(data){
                                                //alert(data.data.likes);
                                                $("#like"+pid).html(data.data.likes);
                                            }
                                        });
                                    }
                                },
                                complete: function(){
                                    //$("#wave").hide();
                                }

                            });
                    }
        //==========================================end post likke dislike==============================
        //=============================================comment post------------------=================
                    function postComment(pid){
                        
                        var comd = $("#commentdata"+pid).val();
                        if(comd == ""){
                            //do nothing
                        }else{
                            $.ajax({
                                url: '<?= site_url('HomeMain/postComment') ?>',
                                type: 'POST',
                                dataType:'json',
                                data:{post_id: pid, commentmsg: comd},
                                beforeSend: function() {
                                  $("#wave").show();
                                },
                                success: function(data){
                                    console.log(data);
                                    if(data.status)
                                    {
                                        //console.log(data.data);
                                        var comid = $("#comidd"+pid).val();
                                        //alert(comid);
                                        comment(pid, comid);
                                        $("#commentdata"+pid).val('');
                                    }                                  
                                },
                                error:function(err){
                                    //alert("ERR"+err);
                                },
                                complete: function(){
                                    $("#wave").hide();
                                }
                            });
                        }
                    }
        </script>

        <!-- ... end Your Account Personal Information -->
        <?php include 'module2/footer.php'; ?>
<?php $this->load->view('foot') ?>
    </body>
</html>
