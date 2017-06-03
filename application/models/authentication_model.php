<?php 
	class Authentication_model extends CI_Model {
		function checkAuthentication() {
			$query = "SELECT * FROM authentication LIMIT 1";
			$result = $this->db->query($query);
			return $result->result();
		}

		function insertAuthCode($data) {
			$query = "INSERT INTO authentication VALUES ('".$data."')";
			$result = $this->db->query($query);
			return $result;
		}

		function generateAuthCode() {
			return hash('sha512',getenv("username")."project-johngeliberte-rheyncaryllantonio");
		}
	}
?>