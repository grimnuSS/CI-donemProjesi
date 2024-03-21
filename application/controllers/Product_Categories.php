<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_Categories extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Product_Categories');
	}
	public function index()
	{
		$data['product_categories'] = $this->M_Product_Categories->getAll();
		$this->load->view('v_product_categories/index', $data);
	}
	public function new_form()
	{
		$this->load->view('v_product_categories/new_form');
	}
	public function save(){

	}
	public function update_form($id){
		$data['product_category'] = $this->M_Product_Categories->get(array(
			"id" => $id
		));
		$this->load->view('v_product_categories/update_form', $data);
	}
	public function update($id){

	}
	public function delete($id)
	{
		$delete = $this->M_Product_Categories->delete(array(
			"id" => $id
		));
		if ($delete) {
			redirect('/Product_Categories/index', 'refresh');
		} else {
			echo "Silinemedi";
		}
	}
}
