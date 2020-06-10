<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function login(){
		$data = array();
		$data['admin_content'] = $this->load->view('pages/dashboard_content','',true);

		$this->load->view('dashboard',$data);
	}
}
