<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

  private $table = "user";
  private $table2 = "order";

  public function input($data,$table)
  {
      return $this->db->insert($this->table2, $data);
  }

  public function findAllByUser($id_user)
  {
      return $this->db->query("SELECT * FROM user WHERE id_user='$id_user'")->row();
  }

  public function getOrderByUser($id_user)
	{
      $this->db->select('*');
      $this->db->from('order');
      $this->db->join('user', 'user.id_user = order.id_user');
      $this->db->where('user.id_user', $id_user);
      $this->db->order_by("order_date", "ASC");
      
      return $this->db->get()->result_array();
	}

  public function update($data, $id_user)
  {
      return $this->db->update($this->table, $data, array('id_user' => $id_user));
  }
  
}