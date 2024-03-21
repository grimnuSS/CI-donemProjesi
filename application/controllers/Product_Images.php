<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_Images extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Product_Images');
	}
	public function index()
	{
		$data['product_images'] = $this->M_Product_Images->getAll();
		$this->load->view('v_product_images/index', $data);
	}
	public function new_form()
	{
		$this->load->view('v_product_images/new_form');
	}
	public function save(){

	}
	public function update_form($id){
		$data['product_image'] = $this->M_Product_Images->get(array(
			"id" => $id
		));
		$this->load->view('v_product_images/update_form', $data);
	}
	public function update($id){

	}
	public function delete($id)
	{
		$delete = $this->M_Product_Images->delete(array(
			"id" => $id
		));
		if ($delete) {
			redirect('/Product_Images/index', 'refresh');
		} else {
			echo "Silinemedi";
		}
	}
}
