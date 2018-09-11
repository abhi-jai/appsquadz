<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('handling');
        $this->load->helper('url');
        $this->load->library('session');
          $this->load->helper(array('form', 'url','custom'));
        // $this->load->database(); //to load database globally
        // $this->load->model('Signup'); //load model name
    }
    public function index()
    {

        $this->load->view('login-register');
       // redirect('My_test');

    }

    public function frontPage()
    {
        header('Cache-Control: no cache'); //no cache// disable me if required.....!!!
            $postdata = http_build_query(
                array(
                    'user_id' => 1,
                )
            );

            $opts = array('http' => array(
                'method' => 'POST',
                'header' => 'Content-type:application/x-www-form-urlencoded',
                'content' => $postdata,
            ));
            $context = stream_context_create($opts);

            $url = START_URL . '/data_model/courses/course/get_landing_page_data';

            $result = @file_get_contents($url, false, $context);
            $resp=handle($result);

            switch ($resp) {
                case  1: $this->load->view('network_error');
                        break;
                case 2:  $this->load->view('server_err');
                        break;

                default:  
                $data = array(json_decode($result, true));
                $status = $data[0]['status'];
                $data = $data[0];
                $data = $data['data'];
                $data['detail'] = $data[0];
                if ($status == 1) {
                $this->load->view('default', array('details' => $data)); //have to change the array
                } else {
                    $this->load->view('login-register');
                }
                    break;
            }
                
    }
function register()
{
    $name = $this->input->post('first_name')." ".$this->input->post('last_name');
    $data = array(
        'file_url' => START_URL . "/data_model/user/registration", 
        'name' => $name,
        'email' => $this->input->post('emailid'),
        'mobile' => $this->input->post('mobile'),
        'profile_picture' => '',
        'is_social' => 0,
        'device_type' => 0,
        'social_type' => 0,
        'password' => $this->input->post('pwd')
    );
    $res = file_curl_contents($data);
        if($res['status']){
            $ses_data = array(
                'username' => $res['data']['email'],
                'name' => $res['data']['name'],
                'id' => $res['data']['id'],
                'pro_img' => $res['data']['profile_picture']
            );
            $this->session->set_userdata($ses_data);
            echo "success";            
        }else{
            //echo "Something went wrong";
            echo $res['message'];
        }
}


public function login()
    {
        header('Cache-Control: no cache');
         //no cache// disable me if required.....!!
            $email= $this->input->post('username');
            $password = $this->input->post('password');
            $url= START_URL."data_model/user/registration/login_authentication";
            $document = array(
                    'file_url' => $url, 
                    'email'=>$email,
                    'password'=>$password,
                    'social_type'=>0,
                    'social_tokken'=>'',
                    'device_type'=>0,
                    'is_social'=>'',
                    'device_tokken'=>''
                );
            $post_list = file_curl_contents($document);   
       
            if($post_list['status'])
            {
                $session_var = array(
                    'username' => $post_list['data']['email'],
                    'id'=> $post_list['data']['id'],
                    'name'=> $post_list['data']['name'],
                    'pro_img' => $post_list['data']['profile_picture']
                );
                $this->session->set_userdata($session_var); //set data inside sessionskype
                echo "success";

            }
            else
            {
                echo $post_list['message'];        
            }
   }
    function damslogin()
    {
        $dams_username= $this->input->post('username');
        $dams_password = $this->input->post('password');
        $url= START_URL."data_model/user/registration/dams_auth";
        $document = array(
                'file_url' => $url, 
                'dams_username'=> $dams_username,
                'dams_password'=> $dams_password,
                'device_type'=>0,
                'is_social'=>''
            );
        $res = file_curl_contents($document); 
        if($res['status']){
            $session_var = array(
                'username' => $res['data']['email'],
                'id'=> $res['data']['id'],
                'name'=> $res['data']['name'],
                'pro_img' => $res['data']['profile_picture']
            );
            $this->session->set_userdata($session_var); 
            echo "success";
        }else{
            echo $res['message'];
        }       
    }
}

 