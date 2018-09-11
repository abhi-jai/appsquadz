<?php  
class Cart_Model extends CI_Model {
	  public  $session1;
function __construct()
{
	parent::__construct();
	$this->load->database();
}
public function create($data)
{
	$this->$session1= $data['session_id'];
	$this->db->insert('cart',$data);
}
public function get()
{
	echo  $session1;die;
	$this->db->where('session_id', $this->session->session_id);
	$query = $this->db->select('*');
    $this->db->from('cart1');	
    $this->db->get();
    $results = $query->result();
    
}
}
?>