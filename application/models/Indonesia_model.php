<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Indonesia_model extends CI_Model
{
	private $province = 'provinces'; 

	public function get_provinces() {
		$get = $this->db->get($this->province);
		return $get->result_array();
	}
}