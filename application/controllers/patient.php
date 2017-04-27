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
				$response['status'] = "success";
			} else {
				$response['status'] = "failed";
			}
		} else {
			$response['status'] = "failed";
			$response['details'] = "existing_patient";
		}
		print json_encode($response);
	}

	public function updatePatient() {
		$data = json_decode($_POST['patient_data']);
		$result = $this->patient_model->update($data);
		$data = array();
		if ($result == true) {
			$data['status'] = "success";
		} else {
			$data['status'] = "failed";
		}
		print $data;
	}

	public function getAllPatient() {
		$result = $this->patient_model->getAllPatient();
		$data = array();
		$patient_ctr = 0;
		if ($result->num_rows != 0) {
			$data['status'] = "fetched";
			foreach ($result->result() as $res) {
				$data[$patient_ctr]['id'] = $res->idpatient;
				$data[$patient_ctr]['firstname'] = $res->firstname;
				$data[$patient_ctr]['middlename'] = $res->middlename;
				$data[$patient_ctr]['lastname'] = $res->lastname;
				$data[$patient_ctr]['age'] = $res->age;
				$data[$patient_ctr]['gender'] = $res->gender;
				$data[$patient_ctr]['address'] = $res->address;
				$data[$patient_ctr]['email_address'] = $res->email_address;
				$data[$patient_ctr]['primary_contact'] = $res->primary_contact;
				$data[$patient_ctr]['secondary_contact'] = $res->secondary_contact;
				$patient_ctr++;
			}
		} else {
			$data['status'] = "no_data";
		}
		print json_encode($data);
	}

	public function getPatient($data) {
		$result = $this->patient_model->getPatient($data);
		$data = array();
		$patient_ctr = 0;
		if ($result->num_rows != 0) {
			$data['status'] = "fetched";
			foreach ($result->result() as $res) {
				$data[$patient_ctr]['id'] = $res->idpatient;
				$data[$patient_ctr]['firstname'] = $res->firstname;
				$data[$patient_ctr]['middlename'] = $res->middlename;
				$data[$patient_ctr]['lastname'] = $res->lastname;
				$data[$patient_ctr]['age'] = $res->age;
				$data[$patient_ctr]['gender'] = $res->gender;
				$data[$patient_ctr]['address'] = $res->address;
				$data[$patient_ctr]['email_address'] = $res->email_address;
				$data[$patient_ctr]['primary_contact'] = $res->primary_contact;
				$data[$patient_ctr]['secondary_contact'] = $res->secondary_contact;
				$patient_ctr++;
			}
		} else {
			$data['status'] = "no_data";
		}
		print json_encode($data);
	}

	public function getExistingPatient($data = null) {
		$result = $this->patient_model->getPatient($data);
		return $result;
	}
}

?>