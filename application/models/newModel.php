<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewModel extends CI_Model {

	
	public function getData()
	{
        return ['a'=>'learn', 'b'=>'hunter'];
	}
}
