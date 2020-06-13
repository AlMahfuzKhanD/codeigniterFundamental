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
}