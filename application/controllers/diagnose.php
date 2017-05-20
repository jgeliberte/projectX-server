<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Diagnose extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('diagnose_model');
		$this->load->model('logs_model');
		$this->load->helper(array('form', 'url'));
	}

	public function diagnosePatient() {
		$data = json_decode($_POST['diagnose_data']);
		$result = $this->diagnose_model->addDiagnosis($data);
		print json_encode($result);
	}

	public function modifyDiagnoseHistory() {
		$data = json_decode($_POST['update_history']);
		$result = $this->diagnose_model->updateDiagnosis($data);
		print json_encode($result);
	}

	public function deleteDiagnoseHistory() {
		$data = json_decode($_POST['delete_history']);
		$result = $this->diagnose_model->deleteDiagnosis($data);
		print json_encode($result);
	}

	public function getPatientDiagnoseHistory() {
		$data = json_decode($_POST['diagnose_hitory']);
		$result = $this->diagnose_model->getAllHistory($data);
		print json_encode($result);
	}
}
?>