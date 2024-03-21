<?php
class M_Branches extends CI_Model{
	public function __construct()
	{
		parent::__construct();
	}
	public function get($where = array())
	{
		return $this->db->where($where)->get('branches')->row();
	}
	public function getAll($order = 'id ASC'){
		return $this->db->order_by($order)->get('branches')->result();
	}
	public function save($data = array()){
		return $this->db->insert('branches', $data);
	}
	public function update($where = array(), $data = array())
	{
		return $this->db->where($where)->update('branches', $data);
	}
	public function delete($where = array())
	{
		return $this->db->where($where)->delete('branches');
	}

}
