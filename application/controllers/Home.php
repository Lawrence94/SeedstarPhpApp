<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model', 'user');
	}

	public function index()
	{
		$this->load->view('home_page');
	}

	public function addDetails()
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// var_dump($this->user->getByEmail($_POST['email']));
			// exit;
			if(!empty($this->user->getByEmail($_POST['email']))){
				$emailErr = "Email Already Exists"; 
				$data = ['alert_display' => '',
						 'alert_message' => $emailErr,
						 'alert_type' => 'alert-danger'
						];
				$this->load->view('add_page', $data);
			}else{
				if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
					$emailErr = "Invalid email format"; 
					$data = ['alert_display' => '',
							 'alert_message' => $emailErr,
							 'alert_type' => 'alert-danger'
							];
					$this->load->view('add_page', $data);
				}else{
					if($this->user->insert($_POST)){
						$data = ['alert_display' => '',
								 'alert_message' => 'Details Added Successfully',
								 'alert_type' => 'alert-success'
								];
						$this->load->view('add_page', $data);
					}
				}
			}
		} else {
			$data = ['alert_display' => 'display:none',
					 'alert_message' => '',
					 'alert_type' => ''
					];
			$this->load->view('add_page', $data);
		}

	}

	public function listAllDetails()
	{
		$data = ['results' => $this->user->getAllValues()
				];
		$this->load->view('listing_page', $data);
	}
}
