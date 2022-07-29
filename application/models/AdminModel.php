<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

    private $table = "user";
    private $table2 = "order";

    public function findOne($col, $val)
    {
        return $this->db->get_where($this->table, [$col => $val])->row();
    }

    public function input($data,$table)
    {
        return $this->db->insert($this->table, $data);
    }

    public function getAllOrder()
	{
      $this->db->select('*');
      $this->db->from('order');
      $this->db->where('status', 'on progress');
      $this->db->order_by("order_date", "ASC");
      
      return $this->db->get()->result_array();
	}

    public function delete($id_order)
    {
      return $this->db->delete($this->table2, array('id_order' => $id_order));
    }
}