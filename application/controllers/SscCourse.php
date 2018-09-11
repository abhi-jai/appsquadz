<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SscCourse extends CI_Controller {

	
    function __construct()
    {
          parent::__construct();
          $this->load->helper('url');// for url linking base and site url 
        	$this->load->helper('handling');
          $this->load->helper(array('form', 'url','custom'));
          $this->load->library('session');
    }
  	public function index()
  	{
          header('Cache-Control: no cache'); //no cache// disable me if required.....!!!
          $data =$this->callMe();
           $status =$this->input->post('status');
          if($status==1)
          {
            //on selected sidebar Allcourse option.....
             $this->load->view('ajax_course',array('details' => $data));
          }
      
          else
          {
          //on page load
            $this->load->view('ssc-course',array('details' => $data));
          }
    }
       
    
   public function callMe()
   {        
      $postdata = http_build_query(array('user_id' => 1,));
      $opts = array(
          'http' => array(
          'method' => 'POST',
          'header' => 'Content-type:application/x-www-form-urlencoded',
          'content' => $postdata,));
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
         	return $data;
          } break;
      }
    }
    public function details($id)
    {              
        $url= START_URL."data_model/courses/course/get_single_course_info_raw";
        $document = array('file_url' => $url, 'user_id' => 1,'course_id'=>$id);
        $post_list = file_curl_contents($document);
        $data['lists']=$post_list;  
        $data['detail'] = $data['lists']['data'];
        $this->load->view('course-detail',$data);

    }
    public function category_data()
    {  
        $url= START_URL."data_model/courses/course/get_all_category_data";
        $document = array('file_url' => $url, 'user_id' => 20,'cat_id'=>$this->input->post('cat_id'));
        $post_list = file_curl_contents($document);
        if($post_list['status']){
            $data['details'] = $post_list;
            $this->load->view('ajax_course',$data);
        }else{
            echo "<div class='col-sm-12' style='text-align:center; padding:30px;'><h3>No Courses Found!</h3></div>";
        }   
    }
   

}
