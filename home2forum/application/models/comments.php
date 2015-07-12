<?php
	class Comments extends CI_Model{


		public $table = 'comments';
		function get($id){
			$condition = array($table.'.id'=>$id);
			$query = $this->db->get_where('post',$condition);
			$result = $query->result();
			return $result;
		}
		public function insert($new_data){
			$this->db->insert('post',$new_data);
			
		}

		public function edit($id){
			$condition = array($table.'.id'=>$id);
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