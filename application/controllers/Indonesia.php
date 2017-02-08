<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Indonesia extends CI_Controller
{
	public function index() {
		$this->load->model('indonesia_model');
		$provinces = $this->indonesia_model->get_provinces();

		print_r($provinces);
	}
}