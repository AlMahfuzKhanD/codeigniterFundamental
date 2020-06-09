<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newcontroller extends CI_Controller {

	
	public function index()
	{
		echo "welcome to mahfuz";
	}

	public function show(){
		
		$this->load->view('mahfuz');
	}

	public function another(){
		$this->load->model('NewModel');
		$data = $this->NewModel->getData();
		echo "<pre>";
		print_r($data);
		echo "</pre>";
		$this->load->view('another');
	}
}
