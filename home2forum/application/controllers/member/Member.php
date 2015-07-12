<?php
	class Member extends CI_Controller{

		public function index(){
			$this->load->view('member/searchmember');
		}

		public function login(){
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$this->load->model('members');
			if($this->members->login($email,$password)){
				$data['result'] = $this->members->login($email,$password);
				echo json_encode($data);
			}else{
				echo json_encode('email or password is worng');
			}
			
		}

		public function register(){
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$this->load->model('members');
			if($this->members->getByEmail($email)){
				$msg = 'Email นี้ถูกใช้งานแล้ว';
			}
			else{
				$msg = 'สมัครสมาชิคเรียบร้อยกรุณายืนยันการสมัคร';
				$a = $this->sendConfirmEmail($email);
				echo $a;
			}
			echo json_encode($msg);
		}

		public function getMember(){
			$member_id = $this->input->post('member_id');
			$this->load->model('members');
			$data['result'] = $this->members->get($member_id);
			echo json_encode($data);

		}

		public function page($page=1){
			$per_page = 15;
			$this->load->model('members');
			$this->load->library('pagination');
			$config['base_url'] = base_url('index.php/member/member/page');
			$config['total_rows'] = $this->members->getNumRows();
			$config['per_page'] = $per_page;
			$config['use_page_numbers'] = true;

			$this->pagination->initialize($config);

			$page = ($page-1)*5;
			$link = $this->pagination->create_links();
			
			$data['result'] = $this->members->getAll($per_page,$page);
			//$this->load->view('blog_ci/index',$data);

			echo json_encode($link);
			
		}

		public function logout(){
			$this->session->sess_destroy();
			redirect('admin/view_login');
		}


		public function sendConfirmEmail($email){
			$this->email->from('birdnok5515@gmail.com', 'Bird');
			$this->email->to($email); 
		//	$this->email->cc('another@another-example.com'); 
		//	$this->email->bcc('them@their-example.com'); 

			$this->email->subject('Email Test');
			$this->email->message('Testing the email class.');

			$k = 'fail';
			if($this->email->send()){
				$k = 'success';
			}
			return $k ;
		}

		public function Test(){
			return 'Hello';
		}

		//Thai json encode
		public function js_thai_encode($data)
		{	// fix all thai elements
			if (is_array($data))
			{
				foreach($data as $a => $b)
				{
					if (is_array($data[$a]))
					{
						$data[$a] = js_thai_encode($data[$a]);
					}
					else
					{
						$data[$a] = iconv("tis-620","utf-8",$b);
					}
				}
			}
			else
			{
				$data =iconv("tis-620","utf-8",$data);
			}
			return $data;
		}

	}
?>