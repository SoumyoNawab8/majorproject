<?php
 class Users extends CI_Controller{

 	public function register(){
 		$data['title'] = 'Sign Up';

 		$this->form_validation->set_rules('name','Name','required');
 		$this->form_validation->set_rules('email','Email','required');
 		$this->form_validation->set_rules('email2','Confirm Email','matches[email]');
 		$this->form_validation->set_rules('password','Password','required');
 	
 		if($this->form_validation->run() === FALSE){
 			
 			$this->load->view('templates/header');
 			$this->load->view('pages/registration',$data);
 			$this->load->view('templates/footer');
 		} else {
 			die('Continue');
 		}


 	}
 }
?>