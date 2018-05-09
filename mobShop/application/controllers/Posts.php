<?php
	
	class Posts extends CI_Controller{
		public function index(){

			$data['title'] = ucfirst('Latest Posts');

			$data['Product'] = $this->post_model->get_posts();

			$this->load->helper('url');
			$this->load->helper('html');
			$this->load->view('templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');

		
		}
	}
?>