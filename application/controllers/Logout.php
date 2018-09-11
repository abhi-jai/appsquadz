<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');// for url linking base and site url 
    }
	public function index()
	{
	       $data = array(
			   'username' => '',
			   'name' => '',
			   'id' => '',
			   'pro_img' => ''
		   );
		$this->session->set_userdata($data);
		
		$this->session->sess_destroy();
		
        
		redirect('HomeMain/');
    }
    public static function deleteCookies()
    {
        //we can also add session_destroy() here
        setcookie('user_username','',time() -1,"/");
        setcookie('user_id','',time() -1,"/");
        setcookie('token','',time() -1,"/");
        setcookie('serial','',time() -1,"/");
		
    }

}
