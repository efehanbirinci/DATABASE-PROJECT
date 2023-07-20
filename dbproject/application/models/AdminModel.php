<?php

class AdminModel extends CI_Model
{
  function logged_id()
  {
      return $this->session->userdata('adminid');
  }

  function check_login($admin, $adminUserName, $adminPassword)
  {
      $this->db->select('*');
      $this->db->from($admin);
      $this->db->where($adminUserName);
      $this->db->where($adminPassword);
      $this->db->limit(1);
      $query = $this->db->get();
      if ($query->num_rows() == 0) {
          return FALSE;
      } else {
          return $query->result();
      }
  }

  public function login($adminusername, $adminpassword){
    $where = [
      'adminusername' => $adminusername,
      'adminpassword' => md5($adminpassword)//buraya dokunma
    ];
    $user = $this->db->where($where)->get('td_admin')->row();
    return $user;
  }
}
 ?>