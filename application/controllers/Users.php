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
		$data = array(
			"img_url" => "1",
			"email" => $this->input->post('email'),
			"name" => $this->input->post('name'),
			"surname" => $this->input->post('surname'),
			"password" => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
		);
		$insert = $this->M_Users->save($data);
		if ($insert) {
			redirect('/Users/index', 'refresh');
		} else {
			echo "Eklenemedi";
		}
	}
	public function update_form($id){
		$data['user'] = $this->M_Users->get(array(
			"id" => $id
		));
		$this->load->view('v_users/update_form', $data);
	}
	public function update($id){
		$data = array(
			"img_url" => "1",
			"email" => $this->input->post('email'),
			"name" => $this->input->post('name'),
			"surname" => $this->input->post('surname'),
			"password" => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
		);

		$where = array('id' => $id);
		$this->db->where($where);
		$update = $this->db->update('users', $data);

		if ($update) {
			redirect('/Users/index', 'refresh');
		} else {
			echo "Güncellenemedi";
		}
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

/* Controller kısmı önemli;
 *
 *
 *
 * */
