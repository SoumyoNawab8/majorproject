<?php
	
	class Pages extends CI_Controller{
		public function view($page = 'home'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}

		 		$data['title'] = ucfirst($page);

			$data['Product'] = $this->product_model->get_products();
            $data1['admin'] = $this->admin_model->get_admin();

			$this->load->helper('url');
			$this->load->helper('html');
			$this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
		}


	}
?>