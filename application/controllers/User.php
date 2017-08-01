<?php
class User extends CI_Controller {
	public function __construct () {
		parent::__construct();
		$this->load->model("User_model");
		$this->load->library('encryption');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function Homepage() {
		$this->load->view("Homepage_view");
	}

	public function Logout() {
		session_destroy();
		redirect("Start/Login");
	}
}

?>