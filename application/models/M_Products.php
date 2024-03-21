<?php
class M_Products extends CI_Model{
	public function __construct()
	{
		parent::__construct();
	}
	public function get($where = array())
	{
		return $this->db->where($where)->get('products')->row();
	}
	public function getAll($order = 'id ASC'){
		return $this->db->order_by($order)->get('products')->result();
	}
	public function save($data = array()){
		return $this->db->insert('products', $data);
	}
	public function update($where = array(), $data = array())
	{
		return $this->db->where($where)->update('products', $data);
	}
	public function delete($where = array())
	{
		return $this->db->where($where)->delete('products');
	}
}
