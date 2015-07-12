<?php
	class Members extends CI_Model{


		public $table = 'member';

		public function login($email,$password){
			$condition = array($this->table.'.email'=>$email,$this->table.'.password'=>md5($password));
			$query = $this->db->get_where($this->table,$condition);
			$result = $query->row();
			//var_dump($result);
			return $result;
		}

		
		public function getAll($per_page,$page=false){
			$this->db->limit($per_page,$page);
			$query = $this->db->get($this->table);
			$result = $query->result();
			return $result;
		}

		public function getNumRows(){
			return $this->db->count_all($this->table);
		}

		public function get($id){
			$condition = array($this->table.'.member_id'=>$id);
			$query = $this->db->get_where($this->table,$condition);
			$result = $query->result();
			return $result;
		}

		public function getByEmail($email){
			$condition = array($this->table.'.email'=>$email);
			$query = $this->db->get_where($this->table,$condition);
			$result = $query->result();
			return $result;
		}

		public function insert($new_data){
			$this->db->insert($this->table,$new_data);
			
		}

		public function edit($id){
			$condition = array($this->table.'.member_id'=>$id);
			$query = $this->db->get_where('post',$condition);
			$data['row'] = $query->row();
			return $data;
		}
		public function update($id,$new_data){
			$condition = array($table.'.id'=>$id);
			$this->db->where($condition);
			$this->db->update('post',$new_data);

		}
		public function delete($id){
			$condition = array($table.'.id'=>$id);
			$this->db->where($condition);
			$this->db->delete($table);
		}

	}
?>