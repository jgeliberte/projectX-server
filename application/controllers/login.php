<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('user_model');
		$this->load->model('authentication_model');
	}

	public function index(){
		$this->load->view('template/header');
		if (sizeof($this->authentication_model->checkAuthentication()) != 0) {
			if ($this->authentication_model->checkAuthentication()[0]->authentication_code == hash('sha512',getenv("username")."project-johngeliberte-rheyncaryllantonio")) {
				$is_logged_in = $this->session->userdata('is_logged_in');
				if(!isset($is_logged_in) || ($is_logged_in !== TRUE)) {
					$this->load->view('pages/index');
				} else {
					header('Location: ' . '../../dashboard', true);
				}
			} else {
				$this->load->view('pages/auth');
			}
		} else {
			$this->load->view('pages/auth');
		}
		$this->load->view('template/footer');
	}

	public function validate($data=null){
		$fromRegistration = false;
		if (!isset($_POST['credentials'])) {
			$credentials = array(
				'username'=> $data['username'],
				'password'=> $data['password']
			);
			$fromRegistration = true;
		} else {
			$credentials = array(
				'username'=> $_POST['credentials']['username'],
				'password'=> $_POST['credentials']['password']
			);
		}
		$result = $this->user_model->validate_credential($credentials);
		try {
			switch ($result->num_rows) {
				case 0:
					$isValid = false;
					break;
				case 1:
					$isValid = true;
					foreach ($result->result() as $session_keys) {
						$data = array (
							'userid' => $session_keys->user_id_fk,
							'username' => $session_keys->username,
							'is_logged_in' => true
						);
						$this->session->set_userdata($data);
					}
					break;
			}
		} catch (Exception $e) {
			print $e;
		}
		$response = array(
			'response'=>$isValid
		);
		if ($fromRegistration == false) {
			print json_encode($response);
		} else {
			return $isValid;
		}
	}

	public function register(){
		$loginExist = array (
			'username'=> $_POST['user_info']['username'],
			'password'=> $_POST['user_info']['password']
		);
		$isValid = $this->validate($loginExist);
		if ($isValid == false) {
			$result = $this->user_model->register_user($_POST['user_info']);
			if ($result == true) {
				$response = array(
					'response'=>'success'
				);
			} else {
				$response = array(
					'response'=>'failed',
					'result'=>$result
				);
			}
		} else {
			$response = array(
				'response'=>'duplicate'
			);
		}
		print json_encode($response);
	}

	public function logout() {
		$this->session->sess_destroy();
		header('Location: ' . '../../', true);
		die();
	}

	public function is_logged_in() {
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || ($is_logged_in !== TRUE)) {
			echo 'You don\'t have permission to access this page. <a href="../../../">Login</a>';
			die();
		}
		else {
			header('Location: ' . '../../dashboard', true);
		}
	}

	public function generateAuth() {
		print $this->authentication_model->generateAuthCode();
	}

	public function addAuthCode() {
		$data = $_POST['auth_code'];
		$result = $this->authentication_model->insertAuthCode($data);
		print $result;
	}
}
