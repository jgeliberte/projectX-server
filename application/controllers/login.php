<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index(){
		$this->load->view('template/header');
		$this->load->view('pages/index');
		$this->load->view('template/footer');
	}

	public function validate($data=null){
		if (!isset($_POST['credentials'])) {
			$credentials = array(
				'username'=> $data['username'],
				'password'=> $data['password']
			);
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
					break;
			}
		} catch (Exception $e) {
			print $e;
		}
		$response = array(
			'response'=>$isValid
		);
		print json_encode($response);
		return $isValid;
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
}
