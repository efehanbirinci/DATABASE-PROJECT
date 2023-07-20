<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class AdminA extends Admin
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

       $items=$this->Client_model->getAll('td_admin');
       $viewData=array(
        "td_admin"=>$items,
    );
  
    $this->load->view('admin/partials/head', $data);
    $this->load->view('admin/partials/header', $data);
    $this->load->view('admin/admin/home', $viewData);
    $this->load->view('admin/partials/footer', $data);
}

public function add()
{
     $data = $this->data();
    
  
  if (post()) 
  {
       $post = secure();
       if ($this->db->insert('td_admin', $post)) 
       {
       $alert = [
        'status' => 'success',
        'content' => 'Yönetici Ekleme İşlemi Başarılı.',
        'redirect' => 'admin/AdminA',
      ];
      $this->alert($alert);
    }
    else 
    {
         $alert = [
        'status' => 'error',
        'content' => 'Yönetici Ekleme İşlemi Başarısız.',
        'redirect' => 'admin/admin/add',
      ];
      $this->alert($alert);
    }
  }
  $this->load->view('admin/partials/head',$data);
  $this->load->view('admin/partials/header',$data);
  $this->load->view('admin/admin/add', $data);
  $this->load->view('admin/partials/footer',$data);
}

public function update($id = NULL)
{
      $data=$this->data();
      if($id==null)
      {
         redirect(base_url("admin/AdminA"));
      }
       $data['admin'] = $this->db->where("adminid", $id)->get("td_admin")->row();
       if(!$data['admin'])
       {
          redirect(base_url("admin/AdminA"));
       }

  if (post()) 
  {
        $post = secure();
        $this->db->where("adminid", $id);
        if ($this->db->update('td_admin', $post)) 
        {
           $alert = [
          'status' => 'success',
          'content' => 'Yönetici Güncelleme İşlemi Başarılı.',
          'redirect' => 'admin/AdminA',
      ];
      $this->alert($alert);
    }
    else 
    {
      $alert = [
        'status' => 'error',
        'content' => 'Yönetici Güncelleme İşlemi Başarısız.',
        'redirect' => 'admin/admin/update',
      ];
      $this->alert($alert);
    }
  }
  $this->load->view('admin/partials/head',$data);
  $this->load->view('admin/partials/header',$data);
  $this->load->view('admin/admin/update',$data);
  $this->load->view('admin/partials/footer',$data);
}

public function detail($id = NULL)
{
      $data=$this->data();

      if($id==null)
      {
         redirect(base_url("admin"));
      }
      $data['admin'] = $this->db->where("adminid", $id)->get("td_admin")->row();
       if(!$data['admin'])
       {
          redirect(base_url("admin"));
       }
      $this->load->view('admin/partials/head',$data);
      $this->load->view('admin/partials/header',$data);
      $this->load->view('admin/admin/detail',$data);
      $this->load->view('admin/partials/footer',$data);
}

public function adminDelete($id){
  $data = $this->data();
  if (!$data['admin']) {
    exit('hata');
  }


  $sil = $this->db->where('adminid',$id)->delete('td_admin');

  if ($sil) {
            $alert = [
             'status' => 'success',
             'content' => 'Yönetici Silme İşlemi Başarılı',
             'redirect' => 'admin/dashboard',
           ];
           $this->alert($alert);
  }  
  else 
  {
       $alert = [
      'status' => 'error',
      'content' => 'Yönetici Silme İşlemi Başarısız.',
      'redirect' => 'admin/admin',
    ];
    $this->alert($alert);

}
}

}
?>