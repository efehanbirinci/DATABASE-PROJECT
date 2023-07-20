<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
class Admins extends Admin
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Client_model");
        $this->load->library('form_validation');
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

       $items=$this->Client_model->getAll('td_user');
       $viewData=array(
        "td_user"=>$items,
    );
  
    $this->load->view('admin/partials/head', $data);
    $this->load->view('admin/partials/header', $data);
    $this->load->view('admin/admins/home', $viewData);
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
       $data['admin'] = $this->db->where("userid", $id)->get("td_user")->row();
       if(!$data['admin'])
       {
          redirect(base_url("admin/Admins"));
       }

  if (post()) 
  {
        $post = secure();
        $this->db->where("userid", $id);
        if ($this->db->update('td_user', $post)) 
        {
           $alert = [
          'status' => 'success',
          'content' => 'Kullanıcı Güncelleme İşlemi Başarılı.',
          'redirect' => 'admin/admins',
      ];
      $this->alert($alert);
    }
    else 
    {
      $alert = [
        'status' => 'error',
        'content' => 'Kullanıcı Güncelleme İşlemi Başarısız.',
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
         redirect(base_url("admin"));
      }
      $data['admin'] = $this->db->where("userid", $id)->get("td_user")->row();
       if(!$data['admin'])
       {
          redirect(base_url("admin"));
       }
      $this->load->view('admin/partials/head',$data);
      $this->load->view('admin/partials/header',$data);
      $this->load->view('admin/admins/detail',$data);
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
       if ($this->db->insert('td_debitproduct', $post)) 
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

public function productList()
{
  $data = $this->data();

  $result=$this->Client_model->join(array(
    "table"=>"td_user",
    "table2"=>"td_product",
    "condition"=>"td_user.userid=td_debitproduct.dpuser",
    "condition2"=>"td_product.productid=td_debitproduct.dpproduct"
  )
  );
  $viewData=array(
    "td_debitproduct"=>$result
);
$this->load->view('admin/partials/head', $data);
$this->load->view('admin/partials/header', $data);
$this->load->view('admin/admins/productList', $viewData);
$this->load->view('admin/partials/footer', $data);

}

public function debitproduct($id=null)
{
  $data=$this->data();

 
  $items=$this->Client_model->getAll('td_product');
  $viewData=array(
   "td_product"=>$items
   
  );
  if($id==null)
      {
         redirect(base_url("admin/Admins"));
      }
       $data['admin'] = $this->db->where("userid", $id)->get("td_user")->row();
       if(!$data['admin'])
       {
          redirect(base_url("admin/Admins"));
       }
  
       if (post()) 
       {
            $post = secure();
            if ($this->db->insert('td_debitproduct', $post)) 
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
$this->load->view('admin/partials/head', $data);
$this->load->view('admin/partials/header', $data);
$this->load->view('admin/admins/debitproduct', $viewData);
$this->load->view('admin/partials/footer', $data);
}

public function debitproductdelete($id){
  $data = $this->data();
  if (!$data['admin']) {
    exit('hata');
  }


  $sil = $this->db->where('dpid',$id)->delete('td_debitproduct');

  if ($sil) {
            $alert = [
             'status' => 'success',
             'content' => 'Ürün Alma İşlemi Başarılı',
             'redirect' => 'admin/admins/productList',
           ];
           $this->alert($alert);
  }  
  else 
  {
       $alert = [
      'status' => 'error',
      'content' => 'Ürün Alma İşlemi Başarısız.',
      'redirect' => 'admin/admins/productList',
    ];
    $this->alert($alert);

}
}

public function adminDelete($id){
  $data = $this->data();
  if (!$data['admin']) {
    exit('hata');
  }


  $sil = $this->db->where('userid',$id)->delete('td_user');

  if ($sil) {
            $alert = [
             'status' => 'success',
             'content' => 'Prsonel Silme İşlemi Başarılı',
             'redirect' => 'admin/admins',
           ];
           $this->alert($alert);
  }  
  else 
  {
       $alert = [
      'status' => 'error',
      'content' => 'Personel Silme İşlemi Başarısız.',
      'redirect' => 'admin/admins',
    ];
    $this->alert($alert);

}
}

}
?>