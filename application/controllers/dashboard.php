<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index(){
		$this->load->view('template/header');
		$this->load->view('template/titleBar');
		$this->load->view('pages/dashboard');
		$this->load->view('template/footer');
	}

	public function patientRecords() {
		$this->load->view('template/header');
		$this->load->view('template/titleBar');
		$this->load->view('pages/patient_records');
		$this->load->view('template/footer');
	}

	public function dentalRecords() {
		$this->load->view('template/header');
		$this->load->view('template/titleBar');
		$this->load->view('pages/dental_records');
		$this->load->view('template/footer');
	}

	public function dentalService() {
		$this->load->view('template/header');
		$this->load->view('template/titleBar');
		$this->load->view('pages/dental_services');
		$this->load->view('template/footer');
	}

	public function dentalInventory() {
		$this->load->view('template/header');
		$this->load->view('template/titleBar');
		$this->load->view('pages/dental_inventory');
		$this->load->view('template/footer');
	}

	public function logs() {
		$this->load->view('template/header');
		$this->load->view('template/titleBar');
		$this->load->view('pages/logs');
		$this->load->view('template/footer');		
	}
}
