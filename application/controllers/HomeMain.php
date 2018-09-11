<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class HomeMain extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->helper(array('form', 'url', 'custom', 'custom_helper'));

        $this->BASE_URL = 'http://app.egyanshala.com/index.php/data_model/';
        
    }

    public function index() {
        $data = [];
        // $this->load->view('login-register');
        $url = START_URL . "/data_model/fanwall/master_hit/content";
        $document = array('file_url' => $url, 'user_id' => 1);
        $master_hit = file_curl_contents($document);

        $url1 = START_URL . "/data_model/fanwall/fan_wall/get_fan_wall_for_user";
        $document1 = array('file_url' => $url1, 'user_id' => 1, 'last_post_id' => 0, 'tag_id' => 1);
        $post_list = file_curl_contents($document1);

        $data['lists'] = $master_hit;
        $data['posts'] = $post_list;
//        $i=0;
//        foreach ($post_list['data'] as $post_data_list) {
//            $postid = $post_data_list['post_data']['post_id'];
//            $url = START_URL . "data_model/user/post_comment/get_post_comment";
//            $document = array('file_url' => $url, 'post_id' => $postid);
//            $post_list = file_curl_contents($document);
//            $data['posts']['data'][$i]['comment']=$post_list['data'];
//            $i++;
//        }
        //pre($data['posts']);die;  

        $this->load->view('home-main', $data);
    }
    function fb_login(){
        echo "Error";
    }
    function g_test()
    {   
        include_once APPPATH . "libraries/google-api-php-client/Google_Client.php";
        include_once APPPATH . "libraries/google-api-php-client/contrib/Google_Oauth2Service.php";
    
        //create google login and registration authentication url..
        $clientId = '474830604768-7q864jnrfq1le81lfke1eoo66g1uefkv.apps.googleusercontent.com';
        $clientSecret = 'EEWRosjc0oIf3ozdSJpYJFp4';
        $redirectUrl = "http://app.egyanshala.com/egyan/egyanshala_project/index.php/HomeMain/g_test";
        $gClient = new Google_Client();
        $gClient->setApplicationName('Login to app.egyanshala.com');
        $gClient->setClientId($clientId);
        $gClient->setClientSecret($clientSecret);
        $gClient->setRedirectUri($redirectUrl);
        $google_oauthV2 = new Google_Oauth2Service($gClient);

        if (isset($_GET['code'])) {
            $gClient->authenticate();
            $this->session->set_userdata('token', $gClient->getAccessToken());
            redirect($redirectUrl);
        }

        $token = $this->session->userdata('token');
        if (!empty($token)) {
            $gClient->setAccessToken($token);
        }
        
        if ($gClient->getAccessToken()) {
            $userProfile = $google_oauthV2->userinfo->get();
			
            // Preparing data for database insertion
            // $userData['oauth_provider'] = 'google';
            // $userData['oauth_uid'] = $userProfile['id'];
            // $userData['name'] = $userProfile['given_name'];
            // $userData['email'] = $userProfile['email'];
            // $userData['login_type'] = '2';
            // $userData['g_id'] = $userProfile['id'];
            // $userData['user_type'] = '';
            // $userData['locale'] = $userProfile['locale'];
            // $userData['profile_image'] = $userProfile['picture'];
            // $userData['create_date'] = date("Y-m-d h:i:s");
            $g_data = array(
                'file_url' => START_URL . "/data_model/user/registration/login_authentication", 
                'email' => $userProfile['email'],
                'is_social' => 1,
                'device_type' => 0,
                'social_type' => 2,
                'social_tokken' =>  $userProfile['id'],
                'name' => $userProfile['given_name'],
                'email' => $userProfile['email'],
                'profile_picture' => $userProfile['picture'],
            );
            $res = file_curl_contents($g_data);
            if($res['status']){
                $ses_data = array(
                        'username' => $res['data']['email'],
                        'name' => $res['data']['name'],
                        'id' => $res['data']['id'],
                        'pro_img' => $res['data']['profile_picture']
                    );
                $this->session->set_userdata($ses_data);
                redirect('HomeMain');
                    
            }else{
                $this->session->set_userdata('mobModel','user not registered');
                redirect('HomeMain');
            }

           
            
        } 
                     
    }
    function g_signUp()
    {
        include_once APPPATH . "libraries/google-api-php-client/Google_Client.php";
        include_once APPPATH . "libraries/google-api-php-client/contrib/Google_Oauth2Service.php";
    
        //create google login and registration authentication url..
        $clientId = '474830604768-7q864jnrfq1le81lfke1eoo66g1uefkv.apps.googleusercontent.com';
        $clientSecret = 'EEWRosjc0oIf3ozdSJpYJFp4';
        $redirectUrl = "http://app.egyanshala.com/egyan/egyanshala_project/index.php/HomeMain/g_test";
        $gClient = new Google_Client();
        $gClient->setApplicationName('Login to app.egyanshala.com');
        $gClient->setClientId($clientId);
        $gClient->setClientSecret($clientSecret);
        $gClient->setRedirectUri($redirectUrl);
        $google_oauthV2 = new Google_Oauth2Service($gClient);

        // if (isset($_GET['code'])) {
        //     $gClient->authenticate();
        //     $this->session->set_userdata('token', $gClient->getAccessToken());
        //     redirect($redirectUrl);
        // }

        $token = $this->session->userdata('token');
        if (!empty($token)) {
            $gClient->setAccessToken($token);
        }
        
        if ($gClient->getAccessToken()) {
            $userProfile = $google_oauthV2->userinfo->get();

        $g_data = array(
            'file_url' => START_URL . "/data_model/user/registration", 
            'mobile' => $this->input->post('mob_g'),
            'email' => $userProfile['email'],
            'is_social' => 1,
            'device_type' => 0,
            'social_type' => 2,
            'social_tokken' =>  $userProfile['id'],
            'name' => $userProfile['given_name'],
            'profile_picture' => $userProfile['picture'],
        );
       
        $res = file_curl_contents($g_data);
        if($res['status']){
            $ses_data = array(
                'username' => $res['data']['email'],
                'name' => $res['data']['name'],
                'id' => $res['data']['id'],
                'pro_img' => $res['data']['profile_picture']
            );
            $this->session->set_userdata($ses_data);
            redirect('HomeMain/');
        }else{
            echo "Something went wrong";
        }
    }

    }

    public function ajax_post() {
        $data = [];
        $l_p_i = $this->input->post('last_post_id');
        $url1 = START_URL . "/data_model/fanwall/fan_wall/get_fan_wall_for_user";
        $document1 = array('file_url' => $url1, 'user_id' => 1, 'last_post_id' => $l_p_i, 'tag_id' => 1);
        $post_list = file_curl_contents($document1);

        $data['posts'] = $post_list;
        
        
        //pre($data['posts']);die;
        $this->load->view('feed_ajax', $data);
    }

    public function ajax_filter_post() {
        $data = [];

        $feed_id = $this->input->post('feed_id');
        $category_id = $this->input->post('category_id');
        $last_post_id=$this->input->post('last_post_id');

        $url1 = START_URL . "/data_model/fanwall/fan_wall/get_fan_wall_for_user?get_only_feed=" . $category_id;
        if ($category_id == 2) {
            $feed_id = 0;
        }
        $document1 = array('file_url' => $url1, 'user_id' => 1, 'last_post_id' => $last_post_id, 'tag_id' => $feed_id);
        $post_list = file_curl_contents($document1);

        $data['posts'] = $post_list;
        
       

        // pre($data);      
        $this->load->view('feed_ajax', $data);
    }

    public function ajax_onchange_course() {
        $data = [];
        $category_id = $this->input->post('category_id');
// $url1= START_URL."/data_model/fanwall/fan_wall/get_fan_wall_for_user?get_only_feed=".$category_id;        
//     $document1 = array('file_url' => $url1, 'user_id' => 1,'last_post_id'=>0, 'tag_id'=>1);       
//     $post_list = file_curl_contents($document1);                 
//     $data['posts']=$post_list;      
        // pre($post_list);       
//////////////////////////////////Master Hit//////////////////////////////////////////////
        $url2 = START_URL . "/data_model/fanwall/master_hit/content";
        $document2 = array('file_url' => $url2, 'user_id' => 1, 'master_id' => $category_id);
        $post_list1 = file_curl_contents($document2);

        $data = $post_list1['data']['all_tags'];
        $result = '';
        for ($i = 0; $i < sizeof($post_list1['data']['all_tags']); $i++) {
            if ($data[$i]['master_id'] == $category_id) {
                $result .= '<option value="' . $data[$i]['id'] . '">' . $data[$i]['text'] . '</option>';
            }
        }
        $data = array('status' => true, 'result' => $result);
        $json = json_encode($data);
        echo $json;



        // $this->load->view('feed_ajax',$data);        
    }
    function like()
    {
        $like_data = array(
            'file_url' => START_URL . "/data_model/user/post_like/like_post",
            'post_id' => $this->input->post('post_id'),
            'user_id' => $this->session->id
        );
        $res = file_curl_contents($like_data);
        echo json_encode($res);
    

    }
    function dislike()
    {
        $dislike_data = array(
            'file_url' => START_URL . "/data_model/user/post_like/dislike_post",
            'post_id' => $this->input->post('post_id'),
            'user_id' => $this->session->id
        );
        $res = file_curl_contents($dislike_data);
        echo json_encode($res);
    }
    function postComment()
    {
        
        $comment_data = array(
            'file_url' => START_URL . "/data_model/user/post_comment/add_comment",
            'post_id' => $this->input->post('post_id'),
            'user_id' => $this->session->id,
            'comment' => $this->input->post('commentmsg')
        );
        $res = file_curl_contents($comment_data);
        echo json_encode($res);        
    }

}
