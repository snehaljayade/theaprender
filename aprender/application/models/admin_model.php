
<?php
class Admin_model extends CI_Model{
	function getallclubs(){
	$q = $this->db->query("select * from notification_clubs");
		if($q->num_rows()>0){
		foreach($q->result() as $row)
		$data[] = $row;
		return $data;
		}
		
	}
	function getallusers(){
	$q = $this->db->query("select * from notification_users");
		if($q->num_rows()>0){
		foreach($q->result() as $row)
		$data[] = $row;
		return $data;
		}
		
	}
}
?>