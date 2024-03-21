<?php
class M_Testimonials extends CI_Model{
	public function __construct()
	{
		parent::__construct();
	}
	public function get($where = array())
	{
		return $this->db->where($where)->get('testimonials')->row();
	}
	public function getAll($order = 'id ASC'){
		return $this->db->order_by($order)->get('testimonials')->result();
	}
	public function save($data = array()){
		return $this->db->insert('testimonials', $data);
	}
	public function update($where = array(), $data = array())
	{
		return $this->db->where($where)->update('testimonials', $data);
	}
	public function delete($where = array())
	{
		return $this->db->where($where)->delete('testimonials');
	}
}
