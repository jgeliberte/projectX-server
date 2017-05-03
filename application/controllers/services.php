<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Services extends CI_Controller {

		public function __construct() {
			parent::__construct();
			$this->load->model('services_model');
			$this->load->model('logs_model');
			$this->load->helper(array('form', 'url'));
		}

		public function addService() {
			$data = json_decode($_POST['service_data']);
			$isExisting = $this->getExistingService($data->service_name);
			$response = array();
			if ($isExisting->num_rows < 1) {
				$result = $this->services_model->add($data);
				if ($result == 1) {
					$response['status'] = "success";
					$this->log("Added a service named ".$data->service_name." by ".$this->session->userdata('username'));
				} else {
					$response['status'] = "failed";
				}
			} else {
				$response['status'] = "failed";
				$response['details'] = "existing_service";
			}
			print json_encode($response);
		}

		public function updateService() {
			$data = json_decode($_POST['service_data']);
			$result = $this->services_model->update($data);
			$data = array();
			if ($result == true) {
				$data['status'] = "success";
				$this->log("Updated a service named ".$data->service_name." by ".$this->session->userdata('username'));
			} else {
				$data['status'] = "failed";
			}
			print json_encode($data);
		}

		public function getAllServices() {
			$result = $this->services_model->getAllServices();
			$data = array();
			$service_ctr = 0;
			if ($result->num_rows != 0) {
				$response['status'] = "fetched";
				foreach ($result->result() as $res) {
					$data[$service_ctr]['id'] = $res->idservices;
					$data[$service_ctr]['service_name'] = $res->service_name;
					$data[$service_ctr]['service_fee'] = $res->service_fee;
					$data[$service_ctr]['date_created'] = $res->date_created;
					$data[$service_ctr]['date_updated'] = $res->date_updated;
					$service_ctr++;
				}
			} else {
				$response['status'] = "no_data";
			}
			$response['data'] = $data;
			print json_encode($response);
		}

		public function getService($data) {
			$result = $this->services_model->getService($data);
			$data = array();
			$service_ctr = 0;
			if ($result->num_rows != 0) {
				$response['status'] = "fetched";
				foreach ($result->result() as $res) {
					$data[$service_ctr]['id'] = $res->idservices;
					$data[$service_ctr]['service_name'] = $res->service_name;
					$data[$service_ctr]['service_fee'] = $res->service_fee;
					$data[$service_ctr]['date_created'] = $res->date_created;
					$data[$service_ctr]['date_updated'] = $res->date_updated;
					$patient_ctr++;
				}
			} else {
				$response['status'] = "no_data";
			}
			$response['data'] = $data;
			print json_encode($response);
		}

		public function getExistingService($data = null) {
			$result = $this->services_model->getService($data);
			return $result;
		}

		public function log($description){
			$result = $this->logs_model->addLogs($description);
			return $result;
		}
	}
?>