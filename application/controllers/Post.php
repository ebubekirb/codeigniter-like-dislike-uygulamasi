<?php 

class Post extends CI_Controller{

	public function __consruct(){

		parent::__consruct();
	}


	public function index(){

		$viewData = new stdClass();
		$viewData->user = $this->session->userdata("user");

		$this->load->view("Post_list_v", $viewData);
	}
}

 ?>