<?php
class M_Services extends CI_Model{
	public function __construct()
	{
		parent::__construct();
	}
	public function get($where = array())
	{
		return $this->db->where($where)->get('services')->row();
	}
	public function getAll($order = 'id ASC'){
		return $this->db->order_by($order)->get('services')->result();
	}
	public function save($data = array()){
		return $this->db->insert('services', $data);
	}
	public function update($where = array(), $data = array())
	{
		return $this->db->where($where)->update('services', $data);
	}
	public function delete($where = array())
	{
		return $this->db->where($where)->delete('services');
	}

}
