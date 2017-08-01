<?php
class Start_model extends CI_model {
	public function __construct () {
		$this->load->database();
		$this->load->library('session');
	}

	public function checkAccount($username, $password) {
		$query = $this->db->select("username")->where(array('username' => $username, 'password' => md5($password)))->get("accounts");

		if($query->num_rows() > 0) {
			$this->session->set_userdata("account", true);
			return true;
		}
		
		return false;
	}

	public function getFullName($username, $password) {
		$query = $this->db->select("fullname")->where(array('username' => $username, 'password' => md5($password)))->get("accounts");

		if($query->num_rows() > 0) {
			$data = $query->result_array();
		}

		return ($data[0]['fullname']);
	}
}
?>