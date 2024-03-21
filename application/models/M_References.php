<?php
class M_References extends CI_Model{
	public function __construct()
	{
		parent::__construct();
	}
	public function get($where = array())
	{
		return $this->db->where($where)->get('references')->row();
	}
	public function getAll($order = 'id ASC'){
		return $this->db->order_by($order)->get('references')->result();
	}
	public function save($data = array()){
		return $this->db->insert('references', $data);
	}
	public function update($where = array(), $data = array())
	{
		return $this->db->where($where)->update('references', $data);
	}
	public function delete($where = array())
	{
		return $this->db->where($where)->delete('references');
	}

}
