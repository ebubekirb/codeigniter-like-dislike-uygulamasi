<?php 

class User extends CI_Controller{

	public function __construct(){

		parent::__construct();
	}


	public function login_form(){

		$this->load->view("Login_form_v");
	}


	public function login(){

		echo "Login işlemi yaptiniz";
	}
}

 ?>