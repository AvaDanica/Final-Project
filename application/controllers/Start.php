<?php
class Start extends CI_Controller {
	public function __construct () {
		parent::__construct();
		/*$this->load->model("Start_model");*/
		$this->load->library('encryption');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function Login() {
		$this->load->view("Login_view");
	}
}

?>