<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('pages/index');
		$this->load->view('template/footer');
	}

}
