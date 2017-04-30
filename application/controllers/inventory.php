<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inventory extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('inventory_model');
		$this->load->helper(array('form', 'url'));
	}

	public function addItem() {
		$data = json_decode($_POST['inventory_data']);
		$isExisting = $this->getExistingItem($data->item_name);
		$response = array();
		if ($isExisting->num_rows < 1) {
			$result = $this->inventory_model->add($data);
			if ($result == 1) {
				$response['status'] = "success";
			} else {
				$response['status'] = "failed";
			}
		} else {
			$response['status'] = "failed";
			$response['details'] = "existing_service";
		}
		print json_encode($response);
	}

	public function updateItem() {
		$data = json_decode($_POST['inventory_data']);
		$result = $this->inventory_model->update($data);
		$data = array();
		if ($result == true) {
			$data['status'] = "success";
		} else {
			$data['status'] = "failed";
		}
		print json_encode($data);
	}

	public function getAllItems() {
		$result = $this->inventory_model->getAllItems();
		$data = array();
		$inventory_ctr = 0;
		if ($result->num_rows != 0) {
			$response['status'] = "fetched";
			foreach ($result->result() as $res) {
				$data[$inventory_ctr]['id'] = $res->idinventory;
				$data[$inventory_ctr]['item_code'] = $res->item_code;
				$data[$inventory_ctr]['item_name'] = $res->item_name;
				$data[$inventory_ctr]['item_details'] = $res->item_details;
				$data[$inventory_ctr]['item_quantity'] = $res->item_quantity;
				$data[$inventory_ctr]['date_created'] = $res->date_created;
				$data[$inventory_ctr]['date_updated'] = $res->date_updated;
				$inventory_ctr++;
			}
		} else {
			$response['status'] = "no_data";
		}
		$response['data'] = $data;
		print json_encode($response);
	}

	public function getItem($data) {
		$result = $this->inventory_model->getItem($data);
		$data = array();
		$inventory_ctr = 0;
		if ($result->num_rows != 0) {
			$response['status'] = "fetched";
			foreach ($result->result() as $res) {
				$data[$inventory_ctr]['id'] = $res->idinventory;
				$data[$inventory_ctr]['item_code'] = $res->item_code;
				$data[$inventory_ctr]['item_name'] = $res->item_name;
				$data[$inventory_ctr]['item_details'] = $res->item_details;
				$data[$inventory_ctr]['item_quantity'] = $res->item_quantity;
				$data[$inventory_ctr]['date_created'] = $res->date_created;
				$data[$inventory_ctr]['date_updated'] = $res->date_updated;
				$inventory_ctr++;
			}
		} else {
			$response['status'] = "no_data";
		}
		$response['data'] = $data;
		print json_encode($data);
	}

	public function getExistingItem($data = null) {
		$result = $this->inventory_model->getItem($data);
		return $result;
	}
}

?>