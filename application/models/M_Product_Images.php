<?php
class M_Product_Images extends CI_Model{
	public function __construct()
	{
		parent::__construct();
	}
	public function get($where = array())
	{
		return $this->db->where($where)->get('product_images')->row();
	}
	public function getAll($order = 'id ASC'){
		return $this->db->order_by($order)->get('product_images')->result();
	}
	public function save($data = array()){
		return $this->db->insert('product_images', $data);
	}
	public function update($where = array(), $data = array())
	{
		return $this->db->where($where)->update('product_images', $data);
	}
	public function delete($where = array())
	{
		return $this->db->where($where)->delete('product_images');
	}

}
