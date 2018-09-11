<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_test extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper(array('custom'));
    }
    public function index()
    {//argument  $test_id,$id

        $postdata = http_build_query(
            array(
                'user_id' => 1,
                'test_series_id' => 4));

        $opts = array('http' => array(
            'method' => 'POST',
            'header' => 'Content-type:application/x-www-form-urlencoded',
            'content' => $postdata,
        ));
        $context = stream_context_create($opts);
        $url = START_URL . '/data_model/courses/test_series/get_test_series_with_id';

        $result = @file_get_contents($url, false, $context);//use @ to suppres the warning
      
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

        $data['detail'] = $datas[0]['data'];

        if ($status == 1) {
             
//             $this->load->view('quiz', $data);
                 $this->load->view('test1', $data);
//            $this->load->view('ssc', $data);
            //$this->load->view('test_question_bank', $data);
        } else {
            $this->load->view('description');
        }
    }

    }
    public function on_test_submit()
    {
        $user_id=$this->input->post('user_id');
        $test_series_id=$this->input->post('test_series_id');
        $time_spent=$this->input->post('time_spent');
        $question_dump=$this->input->post('question_dump');
        
//echo $user_id." ".$test_series_id;die;
        $question_dump=json_encode($question_dump);
      
        $url= START_URL."/data_model/courses/Test_series/save_test";
        $document = array('file_url' => $url, 'user_id' => $user_id,'test_series_id'=> $test_series_id,'time_spent'=>$time_spent,'question_dump'=>$question_dump);

        $res = file_curl_contents($document);
        $status=$res['status'];
        if($status==1)
        {
         $result= "<td>".$res['data']['test_series_name']."</td>
                     <td>".$res['data']['correct_count']."</td>
                     <td>".$res['data']['marks']."</td>
                     <td>".$res['data']['time_spent']."</td>
                     <td>".$res['data']['user_rank']."</td>";

            $result_id =$res['data']['id'];
            $final_array=json_encode(array('status'=>true,'result'=>$result,'u_id'=>$result_id));

             echo $final_array;
             // $result.= '<option value="'.$data[$i]['id'].'">'.$data[$i]['text'].'</option>';
        }

       
                 
    }


}
