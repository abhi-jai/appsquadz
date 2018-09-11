<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('cookie');
        $this->load->helper('social_login_helper');
    }
	public function index()
	{
         header('Cache-Control: no cache'); //no cache// disable me if required.....!!!
        
         
        if(!$this->session->userdata('username'))
	{
		$this->load->view('cart');
    }
    else
    {
        $this->load->view('login-register');
    }
	}
    public function gotocart()
    {
         

        $this->load->view('cart');
    }

}
