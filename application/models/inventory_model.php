<?php 
	class Inventory_model extends CI_Model {
		public function add($data) {
			try {
				$result = $this->db->insert('inventory', $data);
			} catch (Exception $e) {
				$result = $e->getMessage();
			}
			return $result;
		}

		public function update($data) {
			try {
				$this->db->where('idinventory', $data->idinventory);
				$result = $this->db->update('inventory', $data);
			} catch (Exception $e) {
				$result = $e->getMessage();
			}
			return $result;
		}

		public function archive() {
	
		}

		public function getItem($data) {
			try {
				$this->db->where('idinventory =',$data);
				$this->db->or_where('item_name =', $data);
				$result = $this->db->get('inventory');
			} catch (Exception $e) {
				$result = $e->getMessage();
			}
			return $result;
		}

		public function getAllItems(){
			try {
				$result = $this->db->get('inventory');
			} catch (Exception $e) {
				$result = $e->getMessage();
			}		
			return $result;
		}
	}
?>