<?php 
	class Diagnose_model extends CI_Model {

		public function addDiagnosis($data){
			try {
				$query = "INSERT INTO patient_dental_history VALUES(0,'".$data->patient_id."','".$data->service_rendered."','".date("Y/m/d")."','".$data->fee_rendered."','".$data->remarks_rendered."')";
				$result = $this->db->query($query);
			} catch (Exception $e) {
				$result = $e->getMessage();
			}
			return $result;
		}

		public function updateDiagnosis($data){
			try {
				$query = "UPDATE patient_dental_history SET service_rendered='".$data->service_rendered."',fee_rendered='".$data->fee_rendered."',remarks_rendered='".$data->remarks_rendered."' WHERE idpatient_dental_history='".$data->id."'";
				$result = $this->db->query($query);
			} catch (Exception $e) {
				$result = $e->getMessage();
			}
			return $result;
		}

		public function deleteDiagnosis($data){
			try {
				$query = "DELETE FROM patient_dental_history WHERE idpatient_dental_history='".$data."'";
				$result = $this->db->query($query);
			} catch (Exception $e) {
				$result = $e->getMessage();
			}
			return $result;
		}

		public function getAllHistory($data){
			$response;
			try {
				$query = "SELECT * FROM patient_dental_history WHERE idpatient_dental_history'=".$data."'";
				$result = $this->db->query($query);
				$response = $result->result();
			} catch (Exception $e) {
				$response = $e->getMessage();
			}
			return $response;
		}
	}
?>