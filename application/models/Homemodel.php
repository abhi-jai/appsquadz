<?php  
class Homemodel extends CI_Model 
{
    public function compare_sessions($data)
    {
                $this->db->select('*');
				$this->db->from('sessions');
                $this->db->where('sessions_userid',$data['sessions_userid']); 
                $this->db->where('sessions_token',$data['sessions_token']); 
                $this->db->where('sessions_serial',$data['sessions_serial']);
		   		$query = $this->db->get();
                $row = $query->row_array();//get data in array form    
                return $row;           
    }
}
?>