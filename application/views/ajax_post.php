<head>

        <title>Profile </title>
        <?php $this->load->view('head_content') ?> 

    </head>
<?php //pre($followers['data'])?> 
<div class="row">
    <!-- Main Content -->
    <div class="col col-xl-8 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12" >
        <div id="post_list">
            <?php
            $com = 0;
            if (!empty($posts['data'])) {
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

                            </div>
                            <?php if (!empty($post_list['post_data']['text'])) { ?>
                                <p><pre class="pre_text"><?= $post_list['post_data']['text'] ?></pre></p> 
                            <?php } ?>

                            <?php if (!empty($post_list['post_data']['post_file'])) { ?>
                                <div class="post-thumb" >
                                    <img  class="post_img" src="<?= $post_list['post_data']['post_file'][0]['link'] ?>" alt="photo">
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

                        <div id="show-comment<?= $com ?>" class="collapse ">

                            <ul class="comments-list showmydata" id="load_comment<?= $com ?>">
                                <?php
                                if (isset($post_list['comment'])) {
                                    foreach ($post_list['comment'] as $comment_data) {
                                        ?>
                                        <li class="comment-item">
                                            <div class="post__author author vcard inline-items">
                                                <?php
                                                if (remote_file_exists($comment_data['profile_picture'], 1)) {
                                                    ?>
                                                    <img src="<?= $comment_data['profile_picture'] ?>" alt="author">
                                                <?php } else { ?>
                                                    <i class="fa fa-user-circle" alt="author" style="font-size:28px"></i> 
                <?php } ?>

                                                <div class="author-date">
                                                    <a class="h6 post__author-name fn" href="<?= site_url('Profile/index') ?>/<?= $comment_data['user_id'] ?>"><?= $comment_data['name'] ?></a>
                                                    <div class="post__date">
                                                        <time class="published" datetime="2017-03-24T18:18">
                                                            5 mins ago
                                                        </time>
                                                    </div>
                                                </div>

                                            </div>

                                            <p><?= $comment_data['comment'] ?></p>


                                            <?php if (isset($this->session->user_data['username'])) { ?>
                                                <a href="javascript:void(0)" class="reply">Reply</a>
                                            <?php } else { ?>
                                                <a href="javascript:void(0)" class="reply" data-toggle="modal" data-target="#registration-login-form-popup">Reply</a>
                                        <?php } ?>
                                        </li>
                                    <?php }
                                }
                                ?>

                            </ul>

                            <!-- ... end Comments -->
        <!--                                    <a href="javascript:void(0);" class="more-comments">View more comments <span>+</span></a>-->

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
                                <button type="button" href="javascript:void(0);" class="btn btn-md-2 btn-primary" class="more-comments" data-toggle="modal" data-target="#registration-login-form-popup">Post Comment</button>

                                <button href="javascript:void(0);" class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Cancel</button>

                            </form>
                            <!-- ... end Comment Form  -->      
                        </div>  
                    </div>

                    <?php $com += 1;
                }
            } else { ?>
                <center><h4>No feeds found!!</h4></center>
        <?php } ?>

        </div>
        <!-- <?php //$pid = $post_list['post_data']['post_file'][0]['id'];  ?> -->
<?php
if (!empty($posts['data'])) {
    $pid = $post_list['post_data']['id'];
    ?>
            <a onclick="search_filter('<?= $pid ?>')"  class="btn btn-control btn-more">
                <svg class="olymp-three-dots-icon">
                <use xlink:href="<?php echo base_url(); ?>web_assets1/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                </svg>
            </a>
<?php } ?>
    </div>
    <!-- ... end Main Content -->
    <!-- Right Sidebar -->
    <div class="col col-xl-4 order-xl-4 col-lg-6 order-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="ui-block">
                        <div class="ui-block-title">
                            <!--<h6 class="title">Followers (<?php //['followers_count'] ?>)</h6>-->
                            <?php //pre($followers) ?>
<!--                            [0] => Array
                (
                    [id] => 770235
                    [user_id] => 16213
                    [follower_id] => 70518
                    [creation_time] => 1530169376955
                    [action] => 0
                    [viewable_user] => Array
                        (
                            [id] => 70518
                            [name] => Nitin Sadashiv Jagtap
                            [profile_picture] => https://s3.ap-south-1.amazonaws.com/dams-apps-production/Test_Folder/profile_images/70518_1529304295727_image.jpg
                        )

                    [watcher_following] => 
                )-->

<h6 class="title">Followers (<?=$user_data['followers_count']?>)</h6>
                        </div>
                        <div class="ui-block-content">
                            <!-- W-Faved-Page -->
                            <?php if(!empty($followers['data'])) {?>
                            <ul class="widget w-faved-page js-zoom-gallery">
                                
                                <?php 
                                if($user_data['followers_count']>=30){
                                    $followers_length=29;
                                }else{
                                    $followers_length=count($followers['data']);
                                }
                                for($i=0;$i<=$followers_length;$i++){ ?>
                                <li>
                                    <a href="<?= site_url() ?>Profile/index/<?=$followers['data'][$i]['follower_id']?>" title="<?=$followers['data'][$i]['viewable_user']['name']?>">
                                        <?php if(remote_file_exists($followers['data'][$i]['viewable_user']['profile_picture'], 1)){?>
                                        <img src="<?=$followers['data'][$i]['viewable_user']['profile_picture']?>" alt="author">
                                        <?php }else{?>
                                        <div class="" style="line-height: 35px;color: #fff;font-size: 23px;background-color:<?='#'.substr(str_shuffle('ABCDEF0123456789'),0,6)?>"><span><?= substr($followers['data'][$i]['viewable_user']['name'], 0, 1) ?></span></div>
                                        <?php }?>
                                    </a>
                                </li>
                                <?php }?>
                                
                                <?php if($user_data['followers_count']>=30){?>                               
                                <li class="all-users">
                                    <a href="javascript:void(0)" id="all_followers">+<?=$user_data['followers_count']-30?></a>
                                </li>
                                <?php }?>
                            </ul>
                            <?php }?>
                            <!-- .. end W-Faved-Page -->
                        </div>
                    </div>
                </div>

    <!-- ... end Right Sidebar -->

</div>










<script>
    $('#all_followers').click(function(){
        $('#follower').click();
    });

// Get the modal

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
</script>

