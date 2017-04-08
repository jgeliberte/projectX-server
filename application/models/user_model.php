<?php 
	class User_model extends CI_Model {

		public function validate_credential($data){
			try {
				$query = "SELECT * FROM membership WHERE username='".$data['username']."' AND password='".$data['password']."'";
				$result = $this->db->query($query);
				return $result;
			} catch (Execption $e){
				echo $e;
			}
		}

		public function register_user($data) {
			$isSuccess = false;
			$userSuccess = $this->insert_user($data);
			if ($userSuccess == true) {
				$membershipSuccess = $this->insert_membership($data);
				if ($membershipSuccess == true) {
					$isSuccess = true;
				}
			}
			return $isSuccess;
		}

		public function insert_membership($data){
			$query = "SELECT LAST_INSERT_ID() as fk_id";
			$result = $this->db->query($query);
			$fk_id = $result->result()[0]->fk_id;
			$query = "INSERT INTO membership VALUES(0,'".$fk_id."','".$data['username']."','".$data['password']."')";
			$result = $this->db->query($query);
			return $result;
		}

		public function insert_user($data){
			$query = "INSERT INTO users VALUES(0,'".$data['firstname']."','".$data['lastname']."','".$data['middlename']."','".$data['prefix']."','',0,0,'','')";
			$result = $this->db->query($query);
			return $result;
		}

	}
?>