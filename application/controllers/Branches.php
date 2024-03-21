<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branches extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Branches');
	}
	public function index()
	{
		$data['branches'] = $this->M_Branches->getAll();
		$this->load->view('v_branches/index', $data);
	}
	public function new_form()
	{
		$this->load->view('v_branches/new_form');
	}
	public function save(){
		$data = array(
			"title" => $this->input->post('title'),
			"address" => $this->input->post('address')
		);
		$insert = $this->M_Branches->save($data);
		if ($insert) {
			redirect('/Branches/index', 'refresh');
		} else {
			echo "Eklenemedi";
		}
	}
	public function update_form($id){
		$data['branch'] = $this->M_Branches->get(array(
			"id" => $id
		));
		$this->load->view('v_branches/update_form', $data);
	}
	public function update($id){
		$data = array(
			"title" => $this->input->post('title'),
			"address" => $this->input->post('address')
		);

		$where = array('id' => $id);
		$this->db->where($where);
		$update = $this->db->update('branches', $data);

		if ($update) {
			redirect('/Branches/index', 'refresh');
		} else {
			echo "Güncellenemedi";
		}
	}
	public function delete($id)
	{
		$delete = $this->M_Branches->delete(array(
			"id" => $id
		));
		if ($delete) {
			redirect('/Branches/index', 'refresh');
		} else {
			echo "Silinemedi";
		}
	}
}
