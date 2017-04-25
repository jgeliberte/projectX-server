<?php 
	class Patient_model extends CI_Model {

		public function add($data = null) {
			$result = $this->db->insert('patient_information', $data);
			return $result;
		}

		public function update() {

		}

		public function archive() {

		}

		public function getPatient($data = null) {
			$result = $this->db->get_where('patient_information', array('firstname' => $data->firstname,'lastname' => $data->lastname,'middlename' => $data->middlename));
			return $result;
		}

	}
?>