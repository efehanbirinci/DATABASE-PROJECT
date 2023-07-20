<?php 

class Profile extends Admin
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Client_model");
           $data = $this->data();
           if (!$data['admin']) 
           {
             redirect(base_url('admin/login'));
            exit;
           }
    }

public function index()
{
    $data = $this->data();
    $this->load->view('admin/partials/head', $data);
    $this->load->view('admin/partials/header', $data);
    $this->load->view('admin/profile/home', $data);
    $this->load->view('admin/partials/footer', $data);
}

public function update($id = NULL)
{
      $data=$this->data();
      if($id==null)
      {
         redirect(base_url("admin/Profile"));
      }
       $data['admin'] = $this->db->where("adminid", $id)->get("td_admin")->row();
       if(!$data['admin'])
       {
          redirect(base_url("admin/Profile"));
       }

  if (post()) 
  {
        $post = secure();
        $this->db->where("adminid", $id);
        if ($this->db->update('td_admin', $post)) 
        {
           $alert = [
          'status' => 'success',
          'content' => 'Bilgileriniz Başarıyla Güncellenmiştir.',
          'redirect' => 'admin/profile',
      ];
      $this->alert($alert);
    }
    else 
    {
      $alert = [
        'status' => 'error',
        'content' => 'Bilgileriniz Güncellenirken Bir Hata Oluştu !!!',
        'redirect' => 'admin/profile/update',
      ];
      $this->alert($alert);
    }
  }
  $this->load->view('admin/partials/head',$data);
  $this->load->view('admin/partials/header',$data);
  $this->load->view('admin/profile/update',$data);
  $this->load->view('admin/partials/footer',$data);
}

}
?>