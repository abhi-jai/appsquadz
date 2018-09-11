<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->helper('url');
		$this->load->database();//to load database globally
        $this->load->model('Homemodel');//load model name
    }
	public function index()
	{
		if($this->checkLoginState())
		{
			$this->load->view('default');
		}
		else
		{
			$this->load->view('login-register');
		}

	}
	public function checkLoginState()
    { 
        //  echo "inside calling";
     
        if(!isset($_SESSION) ) 
        {
            session_start();
        }
        if(isset($_COOKIE['userid'])  &&  isset($_COOKIE['token']) && isset($_COOKIE['serial']))
        {
                $userid=$_COOKIE['userid'];
                $token=$_COOKIE['token'];
				$serial=$_COOKIE['serial'];
			
				$data=array(
					'sessions_userid'=> $userid,
					'sessions_token' => $token,
					'sessions_serial'=> $serial,
					
				);
				
				$row = $this->Homemodel->compare_sessions($data);   
            	 if ($row['sessions_userid'] > 0)
                { 
					     echo $_SESSION['userid'];
               	 if(
                        $row['sessions_userid'] == $_COOKIE['userid'] &&
                        $row['sessions_token']  == $_COOKIE['token'] &&
                        $row['sessions_serial'] == $_COOKIE['serial'] 
                    )
                    {
                     if(
                           $row['sessions_userid'] == $_SESSION['userid'] &&
                           $row['sessions_token']  == $_SESSION['token'] &&
                           $row['sessions_serial'] == $_SESSION['serial'] 
                        )   
                        {
                            return true;
                        }
                        else
                        {
							require('login_register.php');
							$login_register = new Login_register();
							$login_register->createSession($_COOKIE['username'],$_COOKIE['userid'],$_COOKIE['token'],$_COOKIE['serial']);
                            return true;
                        }
                    }
				}
        }
    }
}
