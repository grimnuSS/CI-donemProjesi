<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Services');
	}
	public function index()
	{
		$data['services'] = $this->M_Services->getAll();
		$this->load->view('v_services/index', $data);
	}
	public function save(){

	}
}
