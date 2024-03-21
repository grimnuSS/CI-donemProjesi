<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Users');
	}
	public function index()
	{
		$data['users'] = $this->M_Users->getAll();
		$this->load->view('v_users/index', $data);
	}
	public function new_form()
	{
		$this->load->view('v_users/new_form');
	}
	public function save(){

	}
	public function update_form($id){
		$data['user'] = $this->M_Users->get(array(
			"id" => $id
		));
		$this->load->view('v_users/update_form', $data);
	}
	public function update($id){

	}
	public function delete($id)
	{
		$delete = $this->M_Users->delete(array(
			"id" => $id
		));
		if ($delete) {
			redirect('/Users/index', 'refresh');
		} else {
			echo "Silinemedi";
		}
	}
}
