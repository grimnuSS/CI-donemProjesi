<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Products');
	}
	public function index()
	{
		$data['products'] = $this->M_Products->getAll();
		$this->load->view('v_products/index', $data);
	}
	public function new_form()
	{
		$this->load->view('v_products/new_form');
	}
	public function save(){

	}
	public function update_form($id){
		$data['product'] = $this->M_Products->get(array(
			"id" => $id
		));
		$this->load->view('v_products/update_form', $data);
	}
	public function update($id){

	}
	public function delete($id)
	{
		$delete = $this->M_Products->delete(array(
			"id" => $id
		));
		if ($delete) {
			redirect('/Products/index', 'refresh');
		} else {
			echo "Silinemedi";
		}
	}
}
