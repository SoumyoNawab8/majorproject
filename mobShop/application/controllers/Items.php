<?php
  class Posts extends CI_Controller{
  	public function index(){
  		$data['title'] = 'Items in dBase';

  		$data['item']=$this->product_model->get_products();

  		$this->load->helper('url');
			$this->load->helper('html');
			$this->load->view('templates/header');
			$this->load->view('items/index', $data);
			$this->load->view('templates/footer');
  	}
  }
?>