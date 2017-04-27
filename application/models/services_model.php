<?php 
	class Services_model extends CI_Model {
		public function add($data) {
			try {
				$result = $this->db->insert('services', $data);
			} catch (Exception $e) {
				$result = $e->getMessage();
			}
			return $result;
		}

		public function update($data) {
			try {
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