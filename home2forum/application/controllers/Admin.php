<?php
	class Admin extends CI_Controller{

		public function index(){
			$this->load->view('adminpage');
		}
		public function view_login(){
			$this->session->userdata('username');
			$this->load->view('loginpage');
		}
		public function login(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->load->model('admins');
			$admin = $this->admins->login($username,$password);
			if ($admin) {
				$array = array('username' => $username ,
								'is_admin' => '1' );
				$this->session->set_userdata($array);
				redirect('adminpage');
			}
			else{
				$this->session->set_flashdata('msg','Username or Password is incorrect');
				redirect('admin/view_login');
			}
		}
		public function logout(){
			$this->session->sess_destroy();
			redirect('admin/view_login');
		}
	}
?>