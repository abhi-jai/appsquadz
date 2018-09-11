
<?php foreach ($comment['data'] as $comment_data) { 
                                              pre($comment_data);
                                              <?php foreach($post_list['comment']as $comment_data){?>
                                        
                                        <li class="comment-item">
                                            <div class="post__author author vcard inline-items">
                                            <?php   
                                            if (remote_file_exists($comment_data['profile_picture'], 1))
                                                    { ?>
                                                <img src="<?=$comment_data['profile_picture']?>" alt="author">
                                            <?php } else {   ?>
                                                <i class="fa fa-user-circle" alt="author" style="font-size:28px"></i>
                                                <?php } ?>
                                                <div class="author-date">
                                                    <a class="h6 post__author-name fn" title="View Profile" href="<?= site_url() ?>Profile/index/<?php echo $comment_data['user_id']; ?>"><?=ucwords($comment_data['name'])?></a>
                                                    <div class="post__date">
                                                        <time class="published" datetime="2017-03-24T18:18">
                                                            5 mins ago
                                                        </time>
                                                    </div>
                                                </div>

<!--                                                <a href="#" class="more">
                                                    <svg class="olymp-three-dots-icon">
                                                    <use xlink:href="<?php echo base_url(); ?>web_assets1/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                                                    </svg>
                                                </a>-->

                                            </div>

                                            <p><?=$comment_data['comment']?></p>
                                           
                                            <?php if(isset($this->session->user_data['username'])){ ?>
                                            <a href="javascript:void(0)" class="reply" >Reply</a>
                                            <?php }else{?>
                                            <a href="javascript:void(0)" class="reply" data-toggle="modal" data-target="#registration-login-form-popup">Reply</a>
                                            <?php }?>
                                        </li>
                                        <?php }?>
                                             } ?>