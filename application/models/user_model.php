<?php
class User_model extends CI_model {
	public function __construct () {
		$this->load->database();
		$this->load->library('session');
	}

	public function getAllData() {
		$query = $this->db->select("name, surname, bday, university")->get("data");
		return $query->result_array();
	}

	public function getAgeData($age1, $age2) {
		$query = $this->db->select("name, surname, bday, university")->where('datediff(now(), bday) / 365.25 >=', $age1)->where('datediff(now(), bday) / 365.25 <=', $age2)->get("data");
		return $query->result_array();
	}

	public function getSpecificData($age1, $age2, $university) {
		$query = $this->db->select("name, surname, bday, university")->where('datediff(now(), bday) / 365.25 >=', $age1)->where('datediff(now(), bday) / 365.25 <=', $age2)->where('university', $university)->get("data");
		return $query->result_array();
	}

	public function getYoungest() {
		$query = $this->db->select("bday")->order_by("bday", "desc")->limit("1")->get("data");
		$data = $query->result_array();

		return date_diff(date_create($data[0]['bday']), date_create('today'))->y;
	}

	public function getOldest() {
		$query = $this->db->select("bday")->order_by("bday", "asc")->limit("1")->get("data");
		$data = $query->result_array();

		return date_diff(date_create($data[0]['bday']), date_create('today'))->y;
	}

	public function getNumStudents() {
		$query = $this->db->select('university, count(name) as count')->group_by('university')->get('data');
		return $query->result_array();
	}
}
?>