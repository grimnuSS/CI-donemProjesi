<?php
class M_Settings extends CI_Model{
	public function __construct()
	{
		parent::__construct();
	}
	public function get($where = array())
	{
		return $this->db->where($where)->get('settings')->row();
	}
	public function getAll($order = 'id ASC'){
		return $this->db->order_by($order)->get('settings')->result();
	}
	public function save($data = array()){
		return $this->db->insert('settings', $data);
	}
	public function update($where = array(), $data = array())
	{
		return $this->db->where($where)->update('settings', $data);
	}
	public function delete($where = array())
	{
		return $this->db->where($where)->delete('settings');
	}

}
