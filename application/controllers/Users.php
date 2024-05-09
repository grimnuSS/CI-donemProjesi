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
		$this->load->library('form_validation');

		$email = $this->input->post('email');
		$old_email = $this->input->post('old-email');

		if ($email != $old_email) {
			$is_unique = '|is_unique[users.email]';
		} else {
			$is_unique = '';
		}

		$this->form_validation->set_rules('email', 'E-Posta', 'required|valid_email|trim' . $is_unique);
		$this->form_validation->set_rules('name', 'İsim', 'required|trim');
		$this->form_validation->set_rules('surname', 'Soyisim', 'required|trim');
		$this->form_validation->set_rules('password', 'Şifre', 'required|trim|min_length[6]|max_length[12]|matches[re-password]');
		$this->form_validation->set_rules('re-password', 'Tekrar Şifre', 'required|trim|min_length[6]|max_length[12]');

		$this->form_validation->set_message(
			array(
				"required" => "<b>{field}</b> alanı doldurulmalıdır.",
				"valid_email" => "<b>{field}</b> geçerli bir e-posta değildir.",
				"is_unique" => "<b>{field}</b> daha önceden sistemde kayıtlıdır.",
				"matches" => "Şifreler birbiriyle uyuşmuyor.",
			)
		);

		$validation = $this->form_validation->run();

		if ($validation){
			$data = array(
				"img_url" => "1",
				"email" => $this->input->post('email'),
				"name" => $this->input->post('name'),
				"surname" => $this->input->post('surname'),
				"password" => ($this->input->post('password') == "") ? $this->input->post('password') : password_hash($this->input->post('password'), PASSWORD_BCRYPT)
			);

			$where = array('id' => $id);
			$this->db->where($where);
			$update = $this->db->update('users', $data);

			if ($update) {
				redirect('/Users/index', 'refresh');
			} else {
				echo "Güncellenemedi";
			}
		} else{
			$data['user'] = $this->M_Users->get(array(
				"id" => $id
			));

			$viewData = new stdClass();
			$viewData->formError = true;
			$viewData->user = $data['user'];
			$this->load->view('v_users/update_form', $viewData);
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
