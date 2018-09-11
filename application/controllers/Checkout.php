<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');// for url linking base and site url 
        $this->load->helper('cookie');
    }

    public function check()
    {
		header('Cache-Control: no cache'); //no cache// disable me if required.....!!!
		// if(!$this->session->userdata('username'))
		// {
		$this->load->view('cart');
		// }
		// else
		// {
		// $this->load->view('login-register');
		// }
    }
}
