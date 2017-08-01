<?php
class Start extends CI_Controller {
	public function __construct () {
		parent::__construct();
		$this->load->model("Start_model");
		$this->load->library('encryption');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function Login() {
		if($this->session->userdata("fullname")) {
			redirect("User/Homepage");
		}
		else {
			if(!$this->input->post("username")) {
				$this->load->view("Login_view");
			}
			else {
				$username = $this->input->post("username");
				$password = $this->input->post("password");

				if($this->Start_model->checkAccount($username, $password)) {
					$this->session->set_userdata("fullname", $this->Start_model->getFullName($username, $password)); 
					redirect("User/Homepage");
				}
				else {
					$this->session->set_userdata("error", TRUE);
					redirect("Start/Login");
				}
			}
		}
	}
}

?>