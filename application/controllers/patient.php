<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Patient extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('patient_model');
		$this->load->helper(array('form', 'url'));
	}

	public function addPatient() {
		$data = json_decode($_POST['patient_data']);
		$isExisting = $this->getExistingPatient($data);
		$response = array();
		if ($isExisting->num_rows < 1) {
			$result = $this->patient_model->add($data);
			if ($result == 1) {
				$response['status'] = "SUCCESS";
			} else {
				$response['status'] = "FAILED";
			}
		} else {
			$response['status'] = "FAILED";
			$response['details'] = "Exisiting patient";
		}
		print json_encode($response);
	}

	public function updatePatient() {

	}

	public function getAllPatient() {

	}

	public function getPatient() {
		$result = $this->patient_model->getPatient($data);
		return $result;	
	}

	public function getExistingPatient($data = null) {
		$result = $this->patient_model->getPatient($data);
		return $result;
	}
}

?>