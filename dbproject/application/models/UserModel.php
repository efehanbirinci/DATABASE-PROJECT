<?php

class UserModel extends CI_Model
{

public function login($username, $userpassword)
{
    $where = [
      'username' => $username,
      'userpassword' => md5($userpassword)
    ];
    $user = $this->db->where($where)->get('td_user')->row();

    return $user;
}

public function getAllWorks($id)
{
    //return $this->db->get("works")->result();
    return $this->db->where("worksuser",$id)->get('works')->result();
}

public function getAllProduct($id)
{
    //return $this->db->get("works")->result();
    return $this->db->where("dpuser",$id)->get('td_debitproduct')->result();
}

public function join($join=array(),$select="")
{
  $this->db->select($select);
  $this->db->from("td_debitproduct");
  $this->db->join($join["table"],$join["condition"]);
  return $this->db->get()->result();
}

}
 ?>