<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model  extends CI_Model
{
    function login($email,$password)
    {

    	$this->db->select('*');
    	$this->db->from('admin_tbl');
    	$this->db->where('email',$email);
    	$this->db->where('password',md5($password));
    	$query = $this->db->get();
    	$result = $query->row();
    	return $result;

    }

    public function save_student_info(){

    	$data = array();
    	$data['student_name'] = $this->input->post('student_name',true);
    	$data['student_phone'] = $this->input->post('student_phone',true);
    	$data['student_role'] = $this->input->post('student_roll',true);
    	$this->db->insert('student',$data);

    }

    public function student_info(){
    	$this->db->select('*');
    	$this->db->from('student');
    	$query = $this->db->get();
    	$info = $query->result();
    	return $info;
    }


} // end admin model