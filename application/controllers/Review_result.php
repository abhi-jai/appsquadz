<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review_result extends CI_Controller {

	
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');// for url linking base and site url 
    }
	public function index()
	{


////////////////////////////Question Curl Curl/////////////////////////////////////////////
		        $postdata = http_build_query(
            array(
                'user_id' => 1,
                'test_series_id' => 11));

        $opts = array('http' => array(
            'method' => 'POST',
            'header' => 'Content-type:application/x-www-form-urlencoded',
            'content' => $postdata,
        ));
        $context = stream_context_create($opts);
        $url = START_URL . '/data_model/courses/test_series/get_test_series_with_id';

        $result = @file_get_contents($url, false, $context); //use @ to suppres the warning

        $connected = @fsockopen("www.google.co.in", 80); //to check network error
        if (!$connected) {
            $this->load->view('network_error');
        } else if ($result === false) //check both no result or 0
        {
            $this->load->view('server_err');
        } else {
                $datas = array(json_decode($result, true));
            $status = $datas[0]['status'];

            $data['detail'] = $datas[0]['data'];

        }

////////////////////////////End of Question Curl/////////////////////////////////////////////


            if ($status == 1) {
        			$this->load->view('review_result',$data);
            } else {
                $this->load->view('description');
            }


		
	}
}
