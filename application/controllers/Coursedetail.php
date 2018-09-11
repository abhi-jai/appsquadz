<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coursedetail extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');// for url linking base and site url 
    }
	public function index()
	{
	$postdata = http_build_query(
			array(
				'user_id'=>1,
				'course_id'=>1));
			
			$opts = array('http'=>
			array(
				'method'=>'POST',
				'header'=>'Content-type:application/x-www-form-urlencoded',
				'content'=>$postdata
			));
			$context = stream_context_create($opts);
		$url=START_URL.'/data_model/courses/course/get_single_course_info_raw';
		
		$result = @file_get_contents($url,false,$context);
		// $connected=connection_status();
		// echo $connected;die;
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
		$status = $datas[0]['status'];
		
		$data['detail']=$datas[0]['data'];
		
		

		if($status==1)
	{
			
		 $this->load->view('description',$data);
	}
	else
	{
	$this->load->view('mycourse');
	}
	
}
	}
}
