<?php
	class Post_model extends CI_Model{
		 public function __construct(){
		 	$this->load->database();
		 }

		 Public function get_products($price = FALSE){
		 	if($price === FALSE){
		 		$query = $this->db->get('Product');
		 		return $query->result_array();
		 	}
		 	$query = $this->db->get_where('Product', array('id' => $id));
		 		return $query->row_array();
		 }
	}
	
?>