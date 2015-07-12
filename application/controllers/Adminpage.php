<?php

	class Adminpage extends CI_Controller{
		public function index(){
			if($this->session->userdata('username')){
				//$this->load->model('admin');
				$this->load->view('adminpage');
			}
			else{
				$this->load->view('loginpage');
			}
		}
		public function getPost($id){
			if($id){
				$this->load->model('posts');
				$result = $this->posts->get($id);
				$data['result'] = $result;
				$data['test'] = array("test1","test2");
				$this->load->view('blog_ci/single',$data);
			}else{
				echo "No id";
			}
		}


		public function page($page=1){
			$per_page = 5;
			$this->load->model('posts');
			$this->load->library('pagination');
			$config['base_url'] = base_url('index.php/main/page');
			$config['total_rows'] = $this->posts->getNumRows();
			$config['per_page'] = $per_page;
			$config['use_page_numbers'] = true;

			$this->pagination->initialize($config);

			$page = ($page-1)*5;
			echo $this->pagination->create_links();
			
			$data['result'] = $this->posts->getAll($per_page,$page);
			$this->load->view('blog_ci/index',$data);
			
		}
	}

?>