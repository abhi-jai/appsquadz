<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mycourse extends CI_Controller {


    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');// for url linking base and site url 
    }
	public function index()
	{
		
		$postdata = http_build_query(
			array(
				'user_id'=>4));
			
			$opts = array('http'=>
			array(
				'method'=>'POST',
				'header'=>'Content-type:application/x-www-form-urlencoded',
				'content'=>$postdata
			));
			$context = stream_context_create($opts);
		$url=START_URL.'/data_model/courses/my_courses/get_list_of_my_courses';
		
		$result = @file_get_contents($url,false,$context);
		$connected = @fsockopen("www.google.co.in", 80); //to check network error
        if(!$connected)
        {
            $this->load->view('network_error');
        }
        else if($result === FALSE)//check both no result or 0
        {
            $this->load->view('server_err');
        }
       
        else
        {	
		$datas = array(json_decode($result, true));
		$status1 = $datas[0]['status'];
	
		$data1['mycourse']= $datas[0]["data"]['course_list'];

		if($status1==1)
	{
		 $this->load->view('mycourse',array('mycourse'=>$data1));
	
	}
	else
	{
	$this->load->view('login-register');
	}

}
	}

}
