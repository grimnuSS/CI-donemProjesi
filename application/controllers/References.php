<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class References extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_References');
	}
	public function index()
	{
		$data['references'] = $this->M_References->getAll();
		$this->load->view('v_references/index', $data);
	}
	public function new_form()
	{
		$this->load->view('v_references/new_form');
	}
	public function save(){

	}
	public function update_form($id){
		$data['reference'] = $this->M_References->get(array(
			"id" => $id
		));
		$this->load->view('v_references/update_form', $data);
	}
	public function update($id){

	}
	public function delete($id)
	{
		$delete = $this->M_References->delete(array(
			"id" => $id
		));
		if ($delete) {
			redirect('/References/index', 'refresh');
		} else {
			echo "Silinemedi";
		}
	}
}
