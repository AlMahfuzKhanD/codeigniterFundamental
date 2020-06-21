<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function login(){

		$email = $this->input->post('email',true);
		$password = $this->input->post('password',true);
		$this->load->model('admin_model');
		$result = $this->admin_model->login($email,$password);
		$sdata = array();

		if($result){
			$sdata['admin_id'] = $result->$id;
			$sdata['admin_name'] = $result->$admin_name;
			$this->session->set_userdata($sdata);
			redirect('dashboard');
		}else{
			$sdata['message'] = 'Email or password invalid';
			$this->session->set_userdata($sdata);
			redirect(base_url());
		}



		
	}

	public function logout(){
		$this->session->unset_userdata('admin_id');
		$this->session->unset_userdata('admin_name');
		$sdata['message'] = "logged out successful";
		$this->session->set_userdata($sdata);
		redirect(base_url());
	}

	

	public function add_student(){
		$data = array();
		$data['admin_content'] = $this->load->view('pages/add_student','',true);
		$this->load->view('dashboard',$data);
	}

	// public function number_validation(){
	// 	if (isset($_POST['request'])) {
    // HERE IS THE INTERESTING PART OF THIS SOLUTION
    // You don't need any extra rules to validate the phone number value
    // No need a regex that supports all the country codes
    // As when that code comes in, it's valided and support all the country code
	// 		$data = array();
	// 		$this->form_validation->set_rules('phone', 'Numéro de téléphone', 'required');
	// 		$data['admin_content'] = $this->load->view('pages/dashboard_content','',true);
 //    $this->form_validation->set_rules('phone', 'Numéro de téléphone', 'required');
 //    // You can continue here with your app code.
 //    $this->form_validation->set_rules('mobile', 'Mobile Number ', 'required|regex_match[/^[0-9]{10}$/]');
	// 	}
	// }

	

	public function edit_admin(){
		$data = array();
		$data['admin_content'] = $this->load->view('pages/edit_admin','',true);
		$this->load->view('dashboard', $data);
	}

	public function dashboard(){
		$data = array();
		$data['admin_content'] = $this->load->view('pages/dashboard_content','',true);

		$this->load->view('dashboard',$data);
	}

	public function save_student(){
		$sdata = array();
		$this->Admin_model->save_student_info();
		$sdata['message'] = "Student added successfully";
		$this->session->set_userdata($sdata);
		redirect('add-student');
	}

	public function manage_student(){
		$data = array();
		$data['student_info'] = $this->Admin_model->student_info();
		$data['admin_content'] = $this->load->view('pages/manage_student',$data,true);
		$this->load->view('dashboard', $data);
	}

	public function edit_student(){

		$data = array();
		$data['student_info_by_id'] = $this->Admin_model->student_info_by_id($student_id);
		$data['admin_content'] = $this->load->view('pages/edit_student',$data,true);
		$this->load->view('pages/edit_student',$data);

	}


} // end Admin controller
