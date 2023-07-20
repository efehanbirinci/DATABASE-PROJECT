<?php 

class Products extends Admin
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

       $items=$this->Client_model->getAll('td_product');
       $viewData=array(
        "td_product"=>$items,
    );

    $this->load->view('admin/partials/head', $data);
    $this->load->view('admin/partials/header', $data);
    $this->load->view('admin/products/home', $viewData);
    $this->load->view('admin/partials/footer', $data);
}

public function add()
{
     $data = $this->data();
    
  
  if (post()) 
  {
       $post = secure();
       if ($this->db->insert('td_product', $post)) 
       {
       $alert = [
        'status' => 'success',
        'content' => 'Ürün Ekleme İşlemi Başarılı.',
        'redirect' => 'admin/products',
      ];
      $this->alert($alert);
    }
    else 
    {
         $alert = [
        'status' => 'error',
        'content' => 'Kullanıcı Ekleme İşlemi Başarısız.',
        'redirect' => 'admin/products/add',
      ];
      $this->alert($alert);
    }
  }
  $this->load->view('admin/products/add', $data);
}

public function update($id = NULL)
{
      $data=$this->data();
      if($id==null)
      {
         redirect(base_url("admin/Product"));
      }
       $data['admin'] = $this->db->where("productid", $id)->get("td_product")->row();
       if(!$data['admin'])
       {
          redirect(base_url("admin/Product"));
       }

  if (post()) 
  {
        $post = secure();
        $this->db->where("productid", $id);
        if ($this->db->update('td_product', $post)) 
        {
           $alert = [
          'status' => 'success',
          'content' => 'Ürün Güncelleme İşlemi Başarılı.',
          'redirect' => 'admin/products',
      ];
      $this->alert($alert);
    }
    else 
    {
      $alert = [
        'status' => 'error',
        'content' => 'Ürün Güncelleme İşlemi Başarısız.',
        'redirect' => 'admin/products/update',
      ];
      $this->alert($alert);
    }
  }
  $this->load->view('admin/partials/head',$data);
  $this->load->view('admin/partials/header',$data);
  $this->load->view('admin/products/update',$data);
  $this->load->view('admin/partials/footer',$data);
}

public function detail($id = NULL)
{
      $data=$this->data();

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

public function productDelete($id){
  $data = $this->data();
  if (!$data['admin']) {
    exit('hata');
  }
  $sil = $this->db->where('productid',$id)->delete('td_product');
  if ($sil) {
            $alert = [
             'status' => 'success',
             'content' => 'Ürün Silme İşlemi Başarılı',
             'redirect' => 'admin/products',
           ];
           $this->alert($alert);
  }  
  else 
  {
       $alert = [
      'status' => 'error',
      'content' => 'Ürün Silme İşlemi Başarısız.',
      'redirect' => 'admin/admins/products',
    ];
    $this->alert($alert);

}
}

}
?>