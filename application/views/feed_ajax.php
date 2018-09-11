<head>
    <title>MME-Home</title>
    <?php $this->load->view('head_content') ?>      
    <?php
    
    //$id = $lists['data']['expert_list'][0]['id'];
    
    $com = 0;
    if(!empty($posts['data'])){
     //pre($posts);die;
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
                    <i class="fa fa-user-circle" alt="author" style="font-size:45px;"></i>
                <?php } ?>

                <div class="author-date">
                    <a class" href="<?= site_url() ?>Profile/index/<?php echo $post_list['user_id']; ?>"><?= $post_list['post_owner_info']['name'] ?></a>
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
                <?php if($post_list['post_type']=='user_post_type_normal'){?>
                <pre class="pre_text <?= $post_list['user_id'] ?> "><?= substr($post_list['post_data']['text'], 0, 100); ?> <?php if (strlen($post_list['post_data']['text']) >= 100) { ?>....<span class="expand" id="expand<?= $post_list['user_id']; ?>" onclick="toggle_data(this.id,<?= $post_list['user_id'] ?>)"> <a href="javascript:void(0);">show more</a></span> <?php } ?>
                                            </p></pre>
            </div>
            <!-- //below//  == show complete content onclick== -->
            <span style="display: none;" class="pre_text expand<?= $post_list['user_id']; ?> "><?= $post_list['post_data']['text']; ?> </span>
            <?php if (strlen($post_list['post_data']['text']) >= 100) { ?>
                <span class="expand" id="expand<?= $post_list['user_id']; ?>" onclick="toggle_data_c(this.id,<?= $post_list['user_id'] ?>)"> <a id="hiexpand<?= $post_list['user_id']; ?>" style="display:none;" href="javascript:void(0);">hide</a></span>
            <?php } ?>

            <?php if (!empty($post_list['post_data']['post_file'])) { ?>
                <div class="post-thumb" style="border:none;">
                    <img class="post_img" src="<?= $post_list['post_data']['post_file'][0]['link'] ?>" alt="photo" style="object-fit: cover;">
                </div>
                <?php } }?>

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

                <a href="javascript:void(0)" onclick="comment('<?= $post_list['post_data']['post_id'] ?>', 'load_comment<?= $com ?>')" class="post-add-icon inline-items" data-toggle="collapse" data-target="#show-comment<?= $com ?>" id="comment">
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

            <form class="comment-form inline-items">
                <div class="post__author author vcard inline-items">
                <?php if (remote_file_exists($this->session->pro_img, 1)) { ?>
                    <img src="<?= $this->session->pro_img ?>" alt="author">
                <?php } else { ?>
                    <i class="fa fa-user-circle" alt="author" style="font-size:28px"></i>
                <?php } ?>

                    <div class="form-group with-icon-right ">
                        <textarea class="form-control" placeholder="" id="commentdata<?= $post_list['post_data']['post_id'] ?>"></textarea>                        
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
<script>
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
        $('.' + id).show();
        $('#pre_text' + dt).show();
        $('#hi' + id).hide();
    }
//=================================== end content toggle===================================
//==================================like dislike--======================================
function likeF(pid){
        $.ajax({
            url: '<?= site_url('HomeMain/like') ?>',
            type: 'POST',
            dataType: 'json',
            data: {post_id : pid},
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
            }
        });
}
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