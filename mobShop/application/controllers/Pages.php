<?php
	
	class Pages extends CI_Controller{

				// For logout
		public function logout(){
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('username');
			redirect('login');
		}


		public function view($page = 'home'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}

				if($page=='login'){
					// die("suor");
					// For login
					$data['title'] = 'Log In';
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run()===FALSE){

				$this->load->view('templates/header');
				$this->load->view('pages/login',$data);
				$this->load->view('templates/footer');
				// die('Helloa');
			}
			else{
				// die('Heyaa');
				// $enc_password = md5($this->input->post('password'));
				$username=$this->input->post('username');
				$password=$this->input->post('password');
				$user_id=$this->user_model->login($username,$password);

				if($user_id){
					// echo "Saala";
					// die('Success');

					//Create Session
					$user_data=array(
						'user_id' => $user_id,
						'username' => $username,
						'logged_in' =>true
					);

					$this->session->set_userdata($user_data);
					$this->session->set_flashdata('user_loggedin', 'You are now logged in');

				redirect(base_url());
				}else{
					$this->session->set_flashdata('login_failed', 'Login failed');

				redirect('login');
				}

				
			}
				}
				elseif ($page=='logout') {
					$this->logout();
				}
				else{

					$data['title'] = ucfirst($page);

			$data['Product'] = $this->product_model->get_products();
            $data['admin'] = $this->admin_model->get_admin();

			$this->load->helper('url');
			$this->load->helper('html');
			$this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
				}

		 		
		}



	}
?>