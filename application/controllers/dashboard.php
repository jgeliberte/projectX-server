<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('template/header');
		$this->load->view('template/nav');
		$this->load->view('pages/dashboard');
		$this->load->view('template/footer');
	}
}
