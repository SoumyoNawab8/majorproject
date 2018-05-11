<?php
class user_model extends CI_Model{

		public function __construct(){
			$this->load->database();
			// $this->load->library('session');

		}

		//Login User
		public function login($username,$password){
			//Validate
			$this->db->where('Email',$username);
			$this->db->where('Password',$password);

			$result= $this->db->get('UserLog');

			if($result->num_rows() == 1){
				return $result->row(0)->id;
			}
			else{
				return false;
			}
		}

		 

	}
?>