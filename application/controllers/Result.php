<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Result extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
	public function index($userid,$result_id)
	{
        // echo $userid." ".$result_id;die;
        $postdata = http_build_query(
            array(
                'test_segment_id'=>$result_id,
                'user_id' =>$userid
                // 'user_id'=>1,
                // 'test_series_id'=>11,
                // 'time_spent'=>11,
                // 'question_dump'=>'[{"answer": "3","question_id":"58"},{"answer": "2","question_id":"61"},{"answer": "4","question_id":"63"},{"answer": "2","question_id":"64"}]'
                 
            ));
            $opts = array('http'=>array(
                'method'=>'POST',
                'header'=>'Content-type:application/x-www-form-urlencoded',
                'content'=>$postdata,
            ));
            $context=stream_context_create($opts);
            $url = START_URL .'data_model/courses/Test_series/get_test_series_result';

            $result=@file_get_contents($url,false,$context);
            $connected = @fsockopen("www.google.co.in",80);
            if (!$connected) {
                $this->load->view('network_error');
            } else if ($result === false) //check both no result or 0
            {
                $this->load->view('server_err');
            } else {

                $data = array(json_decode($result,true));
               
                
                $status=$data[0]['status'];
                
                $data['result'] = $data[0]['data'];
               
                if($status==1)
                {
                //    $data= json_encode($data,true);
                   
                    $data['detail'] =$data[0]['data'];
                    // echo "<pre>";
                    // print_r($data[0]['data']);die;
                    $this->load->view('result',$data);
                }
                else
                {
                   echo "fail";
                }
            }
		
	}
}
