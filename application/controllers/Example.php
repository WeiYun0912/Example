<?php 
class Example extends CI_Controller{
	public function index(){
		$this->load->view('example');
	}

	public function create(){
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$sex = $_POST['sex'];

		$this->example_model->create_data($name,$phone,$sex);
	}

	public function showData(){
		$data['personal'] = $this->example_model->show();
		$this->load->view('show',$data);
	}



}

?>