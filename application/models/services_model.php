<?php 
	class Services_model extends CI_Model {
		public function add($data) {
			try {
				$query = "INSERT INTO services VALUES(0,'".$data->service_name."','".$data->service_fee."','".date("Y/m/d")."','".date("Y/m/d")."')";
				$result = $this->db->query($query);
				$result = $result->result();
			} catch (Exception $e) {
				$result = $e->getMessage();
			}
			return $result;
		}

		public function update($data) {
			try {
				$data->date_updated = date("Y/m/d");
				$this->db->where('idservices', $data->idservices);
				$result = $this->db->update('services', $data);
			} catch (Exception $e) {
				$result = $e->getMessage();
			}
			return $result;
		}

		public function archive() {
	
		}

		public function getService($data) {
			try {
				$this->db->where('idservices =',$data);
				$this->db->or_where('service_name =', $data);
				$result = $this->db->get('services');
			} catch (Exception $e) {
				$result = $e->getMessage();
			}
			return $result;
		}

		public function getAllServices(){
			try {
				$result = $this->db->get('services');
			} catch (Exception $e) {
				$result = $e->getMessage();
			}		
			return $result;
		}
	}
?>