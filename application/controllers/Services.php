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
	public function new_form()
	{
		$this->load->view('v_services/new_form');
	}
	public function save(){

	}
	public function update_form($id){
		$data['service'] = $this->M_Services->get(array(
			"id" => $id
		));
		$this->load->view('v_services/update_form', $data);
	}
	public function update($id){

	}
	public function delete($id)
	{
		$delete = $this->M_Services->delete(array(
			"id" => $id
		));
		if ($delete) {
			redirect('/Services/index', 'refresh');
		} else {
			echo "Silinemedi";
		}
	}
}
