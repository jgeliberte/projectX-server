<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logs extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('logs_model');
	}

	public function addLogs($description){
		$result = $this->logs_model->addlog();
		return $result;
	}

	public function fetchAllLogs(){
		$result = $this->logs_model->fetchAll();
		print json_encode($result);
	}
}

?>