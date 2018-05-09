<?php
class Admin_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	Public function get_admin($Username = FALSE){
		 	if($Username === FALSE){
		 		$query = $this->db->get('admin');
		 		return $query->result_array();
		 	}
		 	$query = $this->db->get_where('admin', array('Username' => $Username));
		 		return $query->row_array();
		 }

}

?>