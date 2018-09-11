<head>

    <title>Profile </title>
    <?php $this->load->view('head_content') ?> 

</head>

<div class="container">
    <div class="row">
        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="ui-block responsive-flex">
                <div class="ui-block-title">
                    <div class="h6 title"> Followers (<?= $user_data['followers_count'] ?>)</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Friends -->
<div class="container">
    <div class="row" id="reloaded">
        <?php

       //pre($posts['data']);die;
        if(!empty($posts['data'])){
        foreach ($posts['data'] as $frnd_data) {
            ?>
            <div class="col col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
                <div class="ui-block">
                    <!-- Friend Item -->
                    <div class="friend-item">
                        <div class="friend-header-thumb">
                            <img src="<?php echo base_url(); ?>web_assets1/img/friend1.jpg" alt="friend">
                        </div>
                        <div class="friend-item-content">
                            <div class="friend-avatar">
                                <div class="author-thumb expert-img">
                                    <?php if (remote_file_exists($frnd_data['viewable_user']['profile_picture'], 1)) { ?>
                                        <img src="<?php echo $frnd_data['viewable_user']['profile_picture']; ?>" alt="author">
                                    <?php } else { ?>
                                        <div class="experts-users" style="background-color:<?= '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6) ?>"><span><?= substr($frnd_data['viewable_user']['name'], 0, 1) ?></span></div>
                                    <?php } ?>
                                </div>
                                <div class="author-content">
                                    <a href="#" class="h5 author-name"><?php echo $frnd_data['viewable_user']['name']; ?></a>
                                    <!--								<div class="country">San Francisco</div>-->
                                </div>
                            </div>
                            <div class="swiper-container" data-slide="fade">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="control-block-button" data-swiper-parallax="-100">
                                            <a href="<?= site_url() ?>Profile/index/<?php echo $frnd_data['viewable_user']['id']; ?>" class="btn btn-primary btn--half-width" style="border-color: purple;background-color:<?= '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6) ?>">
                                                view Profile
    <!--											<svg class="olymp-chat---messages-icon"><use xlink:href="</?php echo base_url();?>web_assets1/svg-icons/sprites/icons.svg#olymp-chat---messages-icon"></use></svg>-->
                                            </a>

                                        </div>
                                    </div>
                                </div>
                                <!-- If we need pagination -->
                                <!--							<div class="swiper-pagination"></div>-->
                            </div>
                        </div>
                    </div>
                    <!-- ... end Friend Item --></div>
            </div>
        <?php } 
        ?>   
    </div>
    <input type="hidden" value="<?=$frnd_data['id']?>" id="last_id_number"><br/>
        <?php }?>
</div>
<script>
    $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() == $(document).height()) {
            
            var last_id = $('#last_id_number').val();
            $.ajax({            
                type: 'POST',
                url: "<?php echo base_url(); ?>index.php/Profile/followers_followings/",
                data: {type: 'followers', 
                       id: <?=$user_data['id']?>,
                       last_id:last_id
                      },
                success: function (data)
                {                
                   $('#reloaded').append(data); 
                   $('#last_id_number').val($('#new_last_id').val());
                }            
           });
        }
    });
</script>