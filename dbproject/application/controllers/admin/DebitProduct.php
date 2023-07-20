<?php 

class DebitProduct extends Admin
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
 
    $result=$this->Client_model->join(array(
      "table"=>"td_user",
      "condition"=>"td_user.userid=td_debitproduct.dPuser"
     ),
    );
    $viewData=array(
      "td_debitproduct"=>$result,
  );
  
    $this->load->view('admin/partials/head', $data);
    $this->load->view('admin/partials/header', $data);
    $this->load->view('admin/debitproduct/home', $viewData);
    $this->load->view('admin/partials/footer', $data);
}

public function add()
{
     $data = $this->data();
    
  
  if (post()) 
  {
       $post = secure();
       if ($this->db->insert('td_user', $post)) 
       {
       $alert = [
        'status' => 'success',
        'content' => 'Kullanıcı Ekleme İşlemi Başarılı.',
        'redirect' => 'admin/admins',
      ];
      $this->alert($alert);
    }
    else 
    {
         $alert = [
        'status' => 'error',
        'content' => 'Kullanıcı Ekleme İşlemi Başarısız.',
        'redirect' => 'admin/admins/add',
      ];
      $this->alert($alert);
    }
  }

  $this->load->view('admin/admins/add', $data);
}

public function update($id = NULL)
{
      $data=$this->data();
      if($id==null)
      {
         redirect(base_url("admin/Admins"));
      }
       $data['admin'] = $this->db->where("md5(userID)", $id)->get("td_user")->row();
       if(!$data['admin'])
       {
          redirect(base_url("admin/Admins"));
       }

  if (post()) 
  {
        $post = secure();
        $this->db->where("md5(userID)", $id);
        if ($this->db->update('td_user', $post)) 
        {
           $alert = [
          'status' => 'success',
          'content' => 'Admin Güncelleme İşlemi Başarılı.',
          'redirect' => 'admin/admins',
      ];
      $this->alert($alert);
    }
    else 
    {
      $alert = [
        'status' => 'error',
        'content' => 'İçerik Güncelleme İşlemi Başarısız.',
        'redirect' => 'admin/admins/update',
      ];
      $this->alert($alert);
    }
  }
  $this->load->view('admin/partials/head',$data);
  $this->load->view('admin/partials/header',$data);
  $this->load->view('admin/admins/update',$data);
  $this->load->view('admin/partials/footer',$data);
  
}

public function detail($id = NULL)
{
      $data=$this->data();

      if($id==null)
      {
         redirect(base_url("admin/Content"));
      }
  
       $data['content'] = $this->db->where("md5(content_id)", $id)->get("content")->row();

  

      if(!$data['content'])
      {
          redirect(base_url("admin/Content"));
      }

  $this->load->view('admin/partials/head',$data);
  $this->load->view('admin/partials/header',$data);
  $this->load->view('admin/content/detail',$data);
  $this->load->view('admin/partials/footer',$data);
  
}


public function product()
{
  $data=$this->data();


  $items=$this->Client_model->getAll('td_user');
  $items2=$this->Client_model->getAll('td_product');
  $viewData=array(
   "td_user"=>$items,
   "td_product"=>$items2
   
  );

  if (post()) 
  {
       $post = secure();
       if ($this->db->insert('td_user', $post)) 
       {
       $alert = [
        'status' => 'success',
        'content' => 'Zimmetleme  İşlemi Başarılı.',
        'redirect' => 'admin/admins/product',
      ];
      $this->alert($alert);
    }
    else 
    {
         $alert = [
        'status' => 'error',
        'content' => 'Zimmetleme  İşlemi Başarısız.',
        'redirect' => 'admin/admins/debitProduct',
      ];
      $this->alert($alert);
    }
  }
  $this->load->view('admin/partials/head',$data);
  $this->load->view('admin/partials/header',$data);
  $this->load->view('admin/admins/product',$viewData);
  $this->load->view('admin/partials/footer',$data);
}
}
?>