<?php 

class Post extends CI_Controller{

	public function __construct(){

		parent::__construct();

		$this->load->model("Post_model");
	}


	public function index(){

		$viewData = new stdClass();
		$viewData->user = $this->session->userdata("user");

		$viewData->posts = $this->Post_model->get_all();

		$this->load->view("Post_list_v", $viewData);
	}
}

 ?>