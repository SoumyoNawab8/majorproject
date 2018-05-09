<?php
	class Post_model extends CI_Model{
		 public function __construct(){
		 	$this->load->database();
		 }

		 public function get_posts($slug = FALSE){
		 	if($slug === FALSE){
		 		$query = $this->db->get('Posts');
		 		return $query->result_array();
		 	}
		 
		 	$query = $this->db->get_where('UserLog', array('id' => $id));
		 	// $query = $this->db->get_where('Product', array('id' => $id));
		 }
	}
	
?>