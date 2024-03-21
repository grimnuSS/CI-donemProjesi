<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Settings');
	}
	public function index()
	{
		$data['settings'] = $this->M_Settings->getAll();
		$this->load->view('v_settings/index', $data);
	}
	public function new_form()
	{
		$this->load->view('v_settings/new_form');
	}
	public function save(){

	}
	public function update_form($id){
		$data['setting'] = $this->M_Settings->get(array(
			"id" => $id
		));
		$this->load->view('v_settings/update_form', $data);
	}
	public function update($id){

	}
	public function delete($id)
	{
		$delete = $this->M_Settings->delete(array(
			"id" => $id
		));
		if ($delete) {
			redirect('/Settings/index', 'refresh');
		} else {
			echo "Silinemedi";
		}
	}
}
