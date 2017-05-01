<?php 
	class Patient_model extends CI_Model {
		public function add($data) {
			try {
				$result = $this->db->insert('patient_information', $data);
			} catch (Exception $e) {
				$result = $e->getMessage();
			}
			return $result;
		}

		public function update($data) {
			try {
				$this->db->where('idpatient', $data->idpatient);
				$result = $this->db->update('patient_information', $data);
			} catch (Exception $e) {
				$result = $e->getMessage();
			}
			return $result;
		}

		public function archive() {
	
		}

		public function getPatient($data) {
			try {
				if (!isset($data->idpatient) || $data->idpatient == null) {
					$result = $this->db->get_where('patient_information', array('firstname' => $data->firstname,'lastname' => $data->lastname,'middlename' => $data->middlename));
				} else {
					$result = $this->db->get_where('patient_information', array('idpatient' => $data));
				}
				
			} catch (Exception $e) {
				$result = $e->getMessage();
			}
			return $result;
		}

		public function getAllPatient(){
			try {
				$result = $this->db->get('patient_information');
			} catch (Exception $e) {
				$result = $e->getMessage();
			}		
			return $result;
		}
	}
?>