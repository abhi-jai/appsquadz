<?php  
class Signup extends CI_Model {

//
//        public $title;
//        public $content;
//        public $date;
//
//    public function get_last_ten_entries()
//        {
//                $query = $this->db->get('entries', 10);
//                return $query->result();
//        }
//        public function insert_entry()
//        {
//                $this->title    = $_POST['title']; // please read the below note
//                $this->content  = $_POST['content'];
//                $this->date     = time();
//
//                $this->db->insert('entries', $this);
//        }

//        public function update_entry()
//        {
//                $this->title    = $_POST['title'];
//                $this->content  = $_POST['content'];
//                $this->date     = time();
//
//                $this->db->update('entries', $this, array('id' => $_POST['id']));
//        }

// public function insert_data($data)
//{
 //   echo "insert data".$data;
// $this->db->insert('users',$data);
 
// $id = $this -> db
//        -> select('user_username','user_password')
//        -> where('user_id', 1)
//        -> limit(1)
//        -> get('users')
//        -> row()
//        ->user_username;
//  echo "ID is ".$id;

//     $this->db->select('*');
//     $this->db->from('users');
//     $this->db->where('user_id', 1 );
//     $query = $this->db->get();

//     if ( $query->num_rows() > 0 )
//     {
//         $row = $query->row_array();
//         echo $row['user_username']," ",$row['user_password'];
//     }
// }
public function get_data($data)
{
            
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_username', $data['user_username']);
        $this->db->where('user_password' ,$data['user_password']);
        $query = $this->db->get();
        
    
               if ( $query->num_rows() > 0 )
               {
                    $row = $query->row_array();//get data in array form                 
                    
                    //delete existing session data on same id
                    $this -> db -> where('sessions_userid', $row['user_id']);
                    $this -> db -> delete('sessions');
                    
                    return $row;
               }

}
public function insert_session_data($data)
{   
    print_r($data);
    //echo "hello ".$data['sessions_date'],$data['sessions_userid'];
    $this->db->insert('backend_user',$data);
}

}
?>