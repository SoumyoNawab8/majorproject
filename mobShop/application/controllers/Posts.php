<?php
	
	class Posts extends CI_Controller{
		public function index(){

			$data['title'] = ucfirst('Latest Posts');

			$data['Product'] = $this->post_model->get_products();

			$this->load->helper('url');
			$this->load->helper('html');
			$this->load->view('templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');

		
		}

		public function view($slug = NULL){
			$data['Product'] = $this->product_model->get_products();
			$temp='';
			$img='';
			$sdesc='';
			$desc='';
			if(empty($data['Product'])){
				show_404();
			}

			$name1=explode("%20",$slug);
			$product=$data['Product'];
			$num_product=sizeof($product);
			//getting through all products
			for($i=0;$i<$num_product;$i++){
				// $name2=explode("(", $product[$i]['Name']);
				// $name2_1=explode(" ", $name2[0]);

				if($name1[1] == $product[$i]['ID']){
					$temp=$product[$i]['Name'];
					$img=$product[$i]['Images'];
					$sdesc=$product[$i]['Short_Description'];
					$desc=$product[$i]['Description'];
					// echo $name1[0];;
                   
				}
				// else{
				// 	$temp=$num_product;
				// }
			}

             $data['title']=ucfirst($temp);
             $data['images']=ucfirst($img);
             $data['sdesc']=ucfirst($sdesc);
             $data['desc']=ucfirst($desc);

			// $data['title']=$data['item'];


			
			

			// $this->load->helper('url');
			// $this->load->helper('html');
			$this->load->view('templates/header');
			$this->load->view('posts/view', $data);
			$this->load->view('templates/footer');
		}
	}
?>