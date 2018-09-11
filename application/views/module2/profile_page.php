

<!-- ///////////////////////// -->
<div class="container">
    <div class="row">
        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="ui-block">
                <div class="top-header">
                    <div class="top-header-thumb" style="background-color:#38a9ff;height:300px;">

                        <img style="height: 100%;width:100%" src="<?= base_url('web_assets/img/profile_banner.jpeg') ?>" alt="nature"> 
                    </div>
                    <div class="profile-section">
                        <div class="row">
                            <div class="col col-lg-5 col-md-5 col-sm-12 col-12">
                                <ul class="profile-menu">
                                    <?php $pid = $user_data['id']; ?>
                                    <li>

                                        <a class="active" onclick="callAjax('<?php echo $pid; ?>', 'posts')" href="javascript:void(0);" id="post">Posts</a>
                                    </li>
                                    <li>
                                        <a class="" onclick="callAjax('<?php echo $pid; ?>', 'abouts')" href="javascript:void(0);" id="about">About</a>
                                    </li>
                                    <!-- <li>
                                            <a onclick="callAjax('<?php //echo $pid ;  ?>','photos')" href="javascript:void(0);">Photos</a>
                                    </li> -->


                                </ul>
                            </div>
                            <div class="col col-lg-5 ml-auto col-md-5 col-sm-12 col-12">
                                <ul class="profile-menu">

                                    <li>
                                        <a class="" onclick="callAjax('<?php echo $pid; ?>', 'followers')" href="javascript:void(0);" id="follower">Followers</a>
                                    </li>
                                    <li>
                                        <a class="" onclick="callAjax('<?php echo $pid; ?>', 'follows')" href="javascript:void(0);" id="follow">Follow</a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="top-header-author">
                        <?php
                        if (remote_file_exists($user_data['profile_picture'], 1)) {
                            ?>
                            <a href="" class="author-thumb">
                                <img src="<?php echo $user_data['profile_picture']; ?>" alt="author">
                            </a>
                        <?php } else { ?>
                            <i class="fa fa-user-circle" alt="author" style="font-size:105px"></i>
                        <?php } ?>
                        <div class="author-content">
                            <a onclick="callAjax('<?php echo $pid; ?>', 'posts')" href="javascript:void(0);" class="h4 author-name"><?php echo $user_data['name']; ?></a>
                            <div class="country"><?php if(!empty($user_data['user_registration_info'])){echo $user_data['user_registration_info']['master_id_level_two_name'];} ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- //////////////////////call ajax=================================== -->
<script>
    function callAjax(id, typeofdata) {              
        $.ajax({
            
            type: 'POST',
            url: "<?php echo base_url(); ?>index.php/Profile/ajax_header/",
            data: {type: typeofdata
                , id: id,
            last_id:''},
            success: function (data)
            {                
                $('.home1').html(data);
                if(typeofdata=='posts'){
                  $('#post').addClass('active');
                  $('#about').removeClass('active');
                  $('#follower').removeClass('active');
                  $('#follow').removeClass('active');
                }
                if(typeofdata=='abouts'){
                  $('#about').addClass('active');
                  $('#post').removeClass('active');
                  $('#follower').removeClass('active');
                  $('#follow').removeClass('active');
                }
                if(typeofdata=='followers'){
                  $('#follower').addClass('active');
                  $('#about').removeClass('active');
                  $('#post').removeClass('active');
                  $('#follow').removeClass('active');
                }
                if(typeofdata=='follows'){
                  $('#follow').addClass('active');
                  $('#about').removeClass('active');
                  $('#post').removeClass('active');
                  $('#follower').removeClass('active');
                }
            },
            error: function (data) {
                // alert('error');
            }
        });
    }
</script>
<!-- //////////////////////End call ajax=================================== -->