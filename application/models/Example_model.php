<?php 

class Example_model extends CI_Model{
	public function create_data($name,$phone,$sex){
		$data = array(
			"name" => $name,
			"phone" => $phone,
			"sex" => $sex
		);
		return $this->db->insert("data",$data);
	}

	public function show(){
		$this->db->select("*");
		$this->db->from("data");
		$query = $this->db->get();

		return $query->result_array();

	}

}


?>