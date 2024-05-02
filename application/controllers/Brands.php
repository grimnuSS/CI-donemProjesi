<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brands extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Brands');
	}
	public function index()
	{
		$data['brands'] = $this->M_Brands->getAll();
		$this->load->view('v_brands/index', $data);
	}
	public function new_form()
	{
		$this->load->view('v_brands/new_form');
	}
	public function save(){
		$data = array(
			"img_url" => "1",
			"title" => $this->input->post('title'),
			"rank" => $this->input->post('rank')
		);
		$insert = $this->M_Brands->save($data);
		if ($insert) {
			redirect('/Brands/index', 'refresh');
		} else {
			echo "Eklenemedi";
		}

	}
	public function update_form($id){
		$data['brand'] = $this->M_Brands->get(array(
			"id" => $id
		));
		$this->load->view('v_brands/update_form', $data);
	}
	public function update($id){
		$data = array(
			"img_url" => "1",
			"title" => $this->input->post('title'),
			"rank" => $this->input->post('rank')
		);

		$where = array('id' => $id);
		$this->db->where($where);
		$update = $this->db->update('brands', $data);

		if ($update) {
			redirect('/Brands/index', 'refresh');
		} else {
			echo "Güncellenemedi";
		}
	}
	public function delete($id)
	{
		$delete = $this->M_Brands->delete(array(
			"id" => $id
		));
		if ($delete) {
			redirect('/Brands/index', 'refresh');
		} else {
			echo "Silinemedi";
		}
	}
}
