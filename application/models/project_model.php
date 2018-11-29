<?php
class Project_model extends CI_Model{

	public function get_project($id){
		$this->db->where('id', $id);
		$query = $this->db->get('projects');
		
		return $query->row();



	}

	public function get_projects(){


		$query = $this->db->get('projects');
		return $query->result();
	}
	public function create_project($data){
		$insert_query = $this->db->insert('projects', $data);
		return $insert_query;
	}
	public function edit_project($project_id, $data){
		$this->db->where('id', $project_id); /// id = to $project_id
		$this->db->update('projects', $data);
		return true;
	}
}


?>