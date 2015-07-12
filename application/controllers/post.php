<?php
	class Post extends CI_Controller{
		/*public function post(){
			$this->load->helper('url');
		}*/
		public function  index(){
			/*$sql = "select * from post";
			$query = $this->db->query($sql);
			$result = $query->result();*/
			if($this->session->userdata('username')){
				$this->load->model('posts');
				$data['result'] = $this->posts->getAll();
				$this->load->view('view',$data);
			}
			else{
				echo 'You can not access.';
			}
		}
		public function get($id=false){
			if($this->session->userdata('username')){
				if($id){
					$this->load->model('posts');
					$result = $this->posts->get($id);
					return $result;
				}else{
					echo "No id";
				}
			}else{
				echo 'You can not access.';
			}
			
		}
		public function insert(){
			if($this->session->userdata('username')){
				$title = $this->input->post('title');
				$content = $this->input->post('content');
				$new_data = array('title'=>$title,'content'=>$content);
				$this->load->model('posts');
				$this->posts->insert($new_data);
				redirect(base_url('index.php/post'));
			}else{
				echo 'You can not access.';
			}
		}
		public function edit($id){
			if($this->session->userdata('username')){
				$this->load->model('posts');
				$data = $this->posts->edit($id);
				$this->load->view('edit_post',$data);
			}else{
				echo 'You can not access.';
			}
		}
		public function update($id){
			if($this->session->userdata('username')){
				$title = $this->input->post('title');
				$content = $this->input->post('content');
				$new_data = array('title'=>$title,'content'=>$content);
				$this->load->model('posts');
				$this->posts->update($id,$new_data);
				redirect(base_url('index.php/post'));
			}else{
				echo 'You can not access.';
			}
		}
		public function delete($id){
			if($this->session->userdata('username')){
				$this->load->model('posts');
				$this->posts->delete($id);
				redirect(base_url('index.php/post'));
			}else{
				echo 'You can not access.';
			}
		}

		public function submit(){

			echo  $this->input->post('title')+$this->input->post('content');
			echo $this->input->post('c');
		}
		public function toForm(){
			if($this->session->userdata('username')){
				$this->load->view('form_post');
			}else{
				echo 'You can not access.';
			}
		}
	}
	
?>