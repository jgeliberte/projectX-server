<?php 
	class Patient_model extends CI_Model {
		public function add($data) {
			try {
				$query = "INSERT INTO patient_information VALUES(0,'".$data->firstname."','".$data->middlename."','".$data->lastname."','".$data->birthdate."','".$data->gender."','".$data->address."','".$data->email_address."','".$data->primary_contact."','".$data->secondary_contact."')";
				$result = $this->db->query($query);
				var_dump($result);
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