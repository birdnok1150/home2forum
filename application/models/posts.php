<?php
	class Posts extends CI_Model{



		public function getAll($per_page,$page=false){
			$this->db->limit($per_page,$page);
			$query = $this->db->get('post');
			$result = $query->result();
			return $result;
		}
		public function get($id){
			$condition = array('post.id'=>$id);
			$query = $this->db->get_where('post',$condition);
			$result = $query->row();
			return $result;
		}
		public function insert($new_data){
			$this->db->insert('post',$new_data);
		}

		public function edit($id){
			$condition = array('post.id'=>$id);
			$query = $this->db->get_where('post',$condition);
			$data['row'] = $query->row();
			return $data;
		}
		public function update($id,$new_data){
			$condition = array('post.id'=>$id);
			$this->db->where($condition);
			$this->db->update('post',$new_data);

		}
		public function delete($id){
			$condition = array('post.id'=>$id);
			$this->db->where($condition);
			$this->db->delete('post');
		}

		public function getNumRows(){
			return $this->db->count_all('post');
		}

	}
?>