<?php

class Client_model extends CI_Model
{

public function login($email, $password)
{
    $where = [
      'username' => $email,
      'userpassword' => $password
    ];
    $user = $this->db->where($where)->get('td_user')->row();
    return $user;
}

public function getAll($tableName = 'product')
{
   return $this->db->get($tableName)->result();
}

public function debitproduct($id)
{
   return $this->db->where("dpuser",$id)->get('td_debitproduct')->row();
}

public function delete($id)
{
  return $this->db->where("dpid",$id)->delete($this->tableName);
}

public function update($id)
{
  return $this->db->where("project_id",$id)->update($this->tableName);
}

public function join($join=array(),$select="")
{
  $this->db->select($select);
  $this->db->from("td_debitproduct");
  $this->db->join($join["table"],$join["condition"]);
  $this->db->join($join["table2"],$join["condition2"]);
  return $this->db->get()->result();
}

public function joins($join=array(),$select="")
{

  $this->db->select($select);
  $this->db->from("td_user");
  $this->db->join($join["table"],$join["condition"]);
  return $this->db->get()->result();
}

public function debitProductUser($id)
{
  return $this->db->where("dpuser",$id)->get('td_debitproduct')->result();
}

public function productJoin($join=array(),$select="")
{
  $this->db->select($select);
  $this->db->from("td_debitproduct");
  $this->db->join($join["table"],$join["condition"]);
  return $this->db->get()->result();
}

public function count($tablename)
{
  $query=$this->db->get($tablename);
  return $query->num_rows();

}
}
 ?>