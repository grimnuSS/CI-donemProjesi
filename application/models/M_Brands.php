<?php
class M_Brands extends CI_Model{
	public function __construct()
	{
		parent::__construct();
	}

	public function get($where = array())
	{
		return $this->db->where($where)->get('brands')->row();
	}
	public function getAll($order = 'id ASC'){
		return $this->db->order_by($order)->get('brands')->result();
	}
	public function save($data = array()){
		return $this->db->insert('brands', $data);
	}
	public function update($where = array(), $data = array())
	{
		return $this->db->where($where)->update('brands', $data);
	}
	public function delete($where = array())
	{
		return $this->db->where($where)->delete('brands');
	}

}
