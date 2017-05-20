<?php 
	class Patient_model extends CI_Model {
		public function add($data) {
			try {
				$query = "INSERT INTO patient_information VALUES(0,'".$data->firstname."','".$data->middlename."','".$data->lastname."','".$data->birthdate."','".$data->gender."','".$data->address."','".$data->email_address."','".$data->primary_contact."','".$data->secondary_contact."',true)";
				$result = $this->db->query($query);
			} catch (Exception $e) {
				$result = $e->getMessage();
			}
			return $result;
		}

		public function update($data) {
			try {				
				$query = "UPDATE patient_information SET firstname='".$data->firstname."',middlename='".$data->middlename."',lastname='".$data->lastname."',birthdate='".$data->birthdate."',gender='".$data->gender."',address='".$data->address."',email_address='".$data->email_address."',primary_contact='".$data->primary_contact."',secondary_contact='".$data->secondary_contact."' WHERE idpatient='".$data->id."'";
				$result = $this->db->query($query);
			} catch (Exception $e) {
				$result = $e->getMessage();
			}
			return $result;
		}

		public function archive($data) {
			$status = false;
			try {
				$query = "UPDATE patient_information SET status = false WHERE idpatient='".$data."'";
				$status = $this->db->query($query);
			} catch (Exception $e) {
				$status = $e->getMessage();
			}
			return $status;
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