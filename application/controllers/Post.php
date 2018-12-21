<?php 

class Post extends CI_Controller{

	public function __construct(){

		parent::__construct();

		$this->load->model("Post_model");

		$user = $this->session->userdata("user");

		if (!$user) {
			redirect("giris-yap");
		}
	}


	public function index(){

		$viewData = new stdClass();
		$viewData->user = $this->session->userdata("user");

		// $viewData->posts = $this->Post_model->get_all();
		$viewData->posts = $this->Post_model->post_list();

		$this->load->view("Post_list_v", $viewData);
	}


	public function vote(){

		$post_id = $this->input->post("post_id");
		$vote_status = $this->input->post("vote_status");

		$user 		= $this->session->userdata("user");
		$user_id	= $user->id;

		$this->load->model("Vote_model");

		$vote = $this->Vote_model->get(
			array(
				"post_id" 		=> $post_id,
				"user_id" 		=> $user_id
			));

		if ($vote) {
			
			$update = $this->Vote_model->update(
			array(
				"post_id" 		=> $post_id,
				"user_id" 		=> $user_id,
				"vote_status"	=> $vote_status
			),

			array(

				"id" => $vote->id
			));

		}


		else{

			$insert = $this->Vote_model->add(
			array(
				"post_id" 		=> $post_id,
				"user_id" 		=> $user_id,
				"vote_status"	=> $vote_status
			));


		}

		$renderData["posts"] = $this->Post_model->post_list();

		echo $this->load->view("renders/Post_list_render", $renderData, true);

	}


}

 ?>