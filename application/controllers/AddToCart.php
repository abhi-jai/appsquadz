<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddToCart extends CI_Controller {
	
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');// for url linking base and site url 
        $this->load->model('Cart_Model');
        $this->load->helper('cookie');
    }
	

	public function index()
	{	
		// echo $this->input->post("hidden_id");die;
	
		if($this->input->post())
		{
		 
		if($this->input->cookie("shopping_cart",TRUE))
		{

		$cookie_data = $this->input->cookie('shopping_cart');
		$cart_data = json_decode($cookie_data, true);
		
		}
		else
		{
			$cart_data = array();
		}

		$item_id_list = array_column($cart_data, 'item_id');
		
		if(in_array($this->input->post("hidden_id"), $item_id_list))
		{

			foreach($cart_data as $keys => $values)
			{
				if($cart_data[$keys]["item_id"] == $this->input->post("hidden_id"))
				{
					// $cart_data[$keys]["item_quantity"] = $cart_data[$keys]["item_quantity"] + $this->input->post("quantity");
				}
			}
		}
		else
		{				
			$item_array = array(
				'item_id'			=>	$this->input->post("hidden_id"),
				'item_name'			=>	$this->input->post("hidden_name"),
				'item_price'		=>	$this->input->post("hidden_price"),
				'item_img'			=>	$this->input->post("hidden_img"),
				'item_quantity'		=>	$this->input->post("hidden_qty")


			);
			$cart_data[] = $item_array;
		}
			 $item_data = json_encode($cart_data);
			 
			set_cookie('shopping_cart', $item_data, time() + (86400 * 30));
			if($this->input->cookie('shopping_cart'))
			{					
				$cookie_data = stripslashes($this->input->cookie('shopping_cart'));
				$cart_data = json_decode($cookie_data, true);
				$num = count($cart_data);
				 // print_r($cart_data);
					echo "$num";
				
			}
		}
		
	}
	public function move() 
	{
	
	// $action = $this->uri->segment(3);
	$id =$this->input->post('id');

	// if($action == "delete")
	// {  		
		$cookie_data = get_cookie('shopping_cart');
		$cart_data = json_decode($cookie_data, true);
		foreach($cart_data as $keys => $values)
		{ 
			if($cart_data[$keys]['item_id'] == $id)
			{
				unset($cart_data[$keys]);
				$item_data = json_encode($cart_data);
				//we must have to use 4th argument of setcookie ie.'/' to avoid create duplicate cookie with same name
				$res = setcookie("shopping_cart", $item_data,time() +(86400 * 30),'/');		
				
				if($this->uri->segment(5)==1)//$this->uri->segment(5)
				{
						// redirect('SscCourse');
					echo "inssc course";
				}

				// redirect('Cart');
				echo"data";
				// $this->load->view('ajax_course');
			}
		//}
	}

	
	
	}

}
