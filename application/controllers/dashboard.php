<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
	}

	public function index(){

		$this->is_logged_in();

		$this->load->view('template/header');
		$this->load->view('template/titleBar');
		$this->load->view('pages/dashboard');
		$this->load->view('template/footer');
		
	}

	public function patientRecords() {

		$this->is_logged_in();

		$this->load->view('template/header');
		$this->load->view('template/titleBar');
		$this->load->view('pages/dashboard');
		$this->load->view('pages/patient_records');
		$this->load->view('template/footer');
	}

	public function dentalRecords() {

		$this->is_logged_in();

		$this->load->view('template/header');
		$this->load->view('template/titleBar');
		$this->load->view('pages/dashboard');
		$this->load->view('pages/dental_records');
		$this->load->view('template/footer');
	}

	public function dentalService() {

		$this->is_logged_in();

		$this->load->view('template/header');
		$this->load->view('template/titleBar');
		$this->load->view('pages/dashboard');
		$this->load->view('pages/dental_services');
		$this->load->view('template/footer');
	}

	public function dentalInventory() {

		$this->is_logged_in();

		$this->load->view('template/header');
		$this->load->view('template/titleBar');
		$this->load->view('pages/dashboard');
		$this->load->view('pages/dental_inventory');
		$this->load->view('template/footer');
	}

	public function logs() {

		$this->is_logged_in();

		$this->load->view('template/header');
		$this->load->view('template/titleBar');
		$this->load->view('pages/dashboard');
		$this->load->view('pages/logs');
		$this->load->view('template/footer');		
	}

	public function is_logged_in() {
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || ($is_logged_in !== TRUE)) {
			echo 'You don\'t have permission to access this page. <a href="../../../">Login</a>';
			die();
		}
		else {
		}
	}
}
