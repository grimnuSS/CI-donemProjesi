<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonials extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Testimonials');
	}
	public function index()
	{
		$data['testimonials'] = $this->M_Testimonials->getAll();
		$this->load->view('v_testimonials/index', $data);
	}
	public function new_form()
	{
		$this->load->view('v_testimonials/new_form');
	}
	public function save(){

	}
	public function update_form($id){
		$data['testimonial'] = $this->M_Testimonials->get(array(
			"id" => $id
		));
		$this->load->view('v_testimonials/update_form', $data);
	}
	public function update($id){

	}
	public function delete($id)
	{
		$delete = $this->M_Testimonials->delete(array(
			"id" => $id
		));
		if ($delete) {
			redirect('/Testimonials/index', 'refresh');
		} else {
			echo "Silinemedi";
		}
	}
}
