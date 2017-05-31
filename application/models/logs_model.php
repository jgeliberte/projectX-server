<?php 
	class Logs_model extends CI_Model {
		public function addLogs($description) {
			$this->db->set('log_description', $description); 
			$result = $this->db->insert('logs');
			return $result;
		}

		public function fetchAll() {
			$query = "SELECT * FROM logs";
			$result = $this->db->query($query);
			return $result->result();
		}
	}
?>