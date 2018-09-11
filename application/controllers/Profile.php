<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url'); // for url linking base and site url
        $this->load->helper(array('form', 'url', 'custom'));
    }

    public function index($id) {
        $data = [];
        
        $url = START_URL . "/data_model/fanwall/fan_wall/get_fan_wall_for_user?is_watcher=" . $id;
        $document = array('file_url' => $url, 'user_id' => $id, 'last_post_id ' => 1);
        
        $post_list = file_curl_contents($document);
        
        $data['posts'] = $post_list;
        
        $data['user_data'] = $this->user_data($id);
        //pre($data['user_data']);die;
        
        $data['followers'] = $this->follower($id,'');
        //pre($data);die;
        $this->load->view('ProfilePage', $data);
    }
    
    public function user_data($id) {
        $url = START_URL . "/data_model/user/Registration/get_active_user/" . $id;
        $document = array('file_url' => $url, 'user_id' => $id);
        $user_list = file_curl_contents($document)['data'];
        return $user_list;
    }

    public function posts($id) {
        $url1 = START_URL . "/data_model/fanwall/fan_wall/get_fan_wall_for_user?is_watcher=" . $id;
        $document1 = array('file_url' => $url1, 'user_id' => $id, 'last_post_id ' => 1);
        $post_list = file_curl_contents($document1);
        
        return $post_list;
    }

    public function follower($id,$last_id) {
        $url = START_URL . "data_model/user/user_follow/followers_list?is_watcher=" . $id;        
        $document = array('file_url' => $url, 'user_id' => $id,'last_follow_id'=>$last_id);               
        $post_list1 = file_curl_contents($document);
        //pre($post_list1);die;
        return $post_list1;
    }

    public function photo($id) {
        $url = START_URL . "data_model/user/user_follow/followers_list?is_watcher=" . $id;
        $document = array('file_url' => $url, 'user_id' => $id);
        $post_list1 = file_curl_contents($document);
        return $post_list1;
    }

    public function about($id) {
        $url = START_URL . "data_model/user/Registration/get_active_user/" . $id;
        $document = array('file_url' => $url);
        $post_list1 = file_curl_contents($document);
        return $post_list1;
    }

    public function following($id) {
        $url = START_URL . "data_model/user/user_follow/following_list?is_watcher=" . $id;
        $document = array('file_url' => $url, 'user_id' => $id);
        $post_list1 = file_curl_contents($document);
        return $post_list1;
    }

    public function ajax_header() {
        $type = $this->input->post('type');
        $id = $this->input->post('id');
        if ($type == 'posts') {
            $data = $this->posts($id);
            $data['posts'] = $data;
            $data['followers'] = $this->follower($id,''); 
            $data['user_data'] = $this->user_data($id);
            //pre($data['followers']);die;
            $this->load->view('ajax_post', $data);
        }
        if ($type == 'abouts') {
            $data = $this->about($id);
            $data['posts'] = $data;

            $this->load->view('ajax_about', $data);
        }
        if ($type == 'photos') {
            $data = $this->photo($id);
            $data['posts'] = $data;
            $this->load->view('ajax_photo', $data);
        }
        if ($type == 'follows') {
            $data = $this->following($id);
            $data['posts'] = $data;
            $data['user_data'] = $this->user_data($id);
            //pre($data);die;
            $this->load->view('ajax_follow', $data);
        }
        if ($type == 'followers') {
            $last_id=$this->input->post('last_id');
            $data = $this->follower($id,$last_id);
            $data['posts'] = $data;
            $data['user_data'] = $this->user_data($id);
            
            $this->load->view('ajax_followers', $data);
        }
    }

    public function comment() {
        $data = [];
        $postid = $this->input->post('postid');
        $url = START_URL . "data_model/user/post_comment/get_post_comment";
        $document = array('file_url' => $url, 'post_id' => $postid);
        $post_list = file_curl_contents($document);
        
        foreach ($post_list['data'] as $comments) {
            ?>
            <li class="comment-item">
                <div class="post__author author vcard inline-items">
                    <?php
                    if ($this->remote_file_exists($comments['profile_picture'], 1)) {
                        ?>
                        <img src="<?= $comments['profile_picture'] ?>" alt="author">
                    <?php } else { ?>
                        <i class="fa fa-user-circle" alt="author" style="font-size:28px"></i>
                    <?php } ?>
                    <div class="author-date">
                        <a class="h6 post__author-name fn" href="<?= site_url() ?>Profile/index/<?= $comments['user_id'] ?>"><?= $comments['name'] ?></a>
                        <div class="post__date">
                            <time class="published" datetime="2017-03-24T18:18">
                                5 mins ago
                            </time>
                        </div>
                    </div>                 
                </div>
                <p><?= $comments['comment'] ?></p>           
                <a href="javascript:void(0)" class="reply">Reply</a>
            </li>
            <?php
        }       
    }

    // public function subcomment()
    // {
    // 	$id=$this->input->post('id');
    // 	$url= START_URL."data_model/user/post_comment/get_single_comment_data";
    //        $document = array('file_url' => $url,'comment_id' =>$id);
    //        $post_list = file_curl_contents($document);
    //        $post_list=json_encode($post_list);
    //        print_r($post_list);
    // }
    public function user_profile() {
        $this->load->view('user_profile');
    }

    function remote_file_exists($source, $extra_mile = 0) {

        if ($extra_mile === 1) {
            $img = @getimagesize($source);

            if (!$img)
                return 0;
            else {
                switch ($img[2]) {
                    case 0:
                        return 0;
                        break;
                    case 1:
                        return $source;
                        break;
                    case 2:
                        return $source;
                        break;
                    case 3:
                        return $source;
                        break;
                    case 6:
                        return $source;
                        break;
                    default:
                        return 0;
                        break;
                }
            }
        } else {
            if (@FClose(@FOpen($source, 'r')))
                return 1;
            else
                return 0;
        }
    }
    
    public function followers_followings() {
        $type = $this->input->post('type');
        $id = $this->input->post('id');
        
        if ($type == 'follows') {
            $data = $this->following($id);
            $data['posts'] = $data;
            
        }
        if ($type == 'followers') {
            $last_id=$this->input->post('last_id');
            $data = $this->follower($id,$last_id);
            $data['posts'] = $data;
            //pre($data['posts']);
            /////////////////////////////////////////////////////////
           
       // pre($user_data);die;
            if(!empty($data['posts']['data'])){
        foreach ($data['posts']['data'] as $frnd_data) {
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
                                    <?php if ($this->remote_file_exists($frnd_data['viewable_user']['profile_picture'], 1)) { ?>
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
            <?php }?>
        <input type="hidden" id="new_last_id" value="<?=$frnd_data['id']?>">
        
        <?php   
            } 
        }
    }

}
