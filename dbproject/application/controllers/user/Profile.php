<?php 

class Profile extends User
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Client_model");
           $data = $this->data();
           if (!$data['user']) 
           {
             redirect(base_url('user/login'));
            exit;
           }
    }

public function index()
{
    $data = $this->data();

    $this->load->view('user/partials/head', $data);
    $this->load->view('user/partials/header', $data);
    $this->load->view('user/profile/home', $data);
    $this->load->view('user/partials/footer', $data);
}

public function update($id = NULL)
{
      $data=$this->data();
      if($id==null)
      {
         redirect(base_url("user/Profile"));
      }
       $data['user'] = $this->db->where("userid", $id)->get("td_user")->row();
       if(!$data['user'])
       {
          redirect(base_url("user/Profile"));
       }

  if (post()) 
  {
        $post = secure();
        $this->db->where("userid", $id);
        if ($this->db->update('td_user', $post)) 
        {
           $alert = [
          'status' => 'success',
          'content' => 'Bilgileriniz Başarıyla Güncellendi.',
          'redirect' => 'user/dashboard',
      ];
      $this->alert($alert);
    }
    else 
    {
      $alert = [
        'status' => 'error',
        'content' => 'Bilgileriniz Güncellenemedi.',
        'redirect' => 'user/profile/update',
      ];
      $this->alert($alert);
    }
  }
  $this->load->view('user/partials/head',$data);
  $this->load->view('user/partials/header',$data);
  $this->load->view('user/profile/update',$data);
  $this->load->view('user/partials/footer',$data);
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

public function debitProductUser($id=null)
{
$data=$this->data();

$result=$this->Client_model->join(array(
  "table"=>"td_product",
  "condition"=>"td_product.productid=td_debitproduct.dpproduct"
 ),
);

$result = $this->db->where("dpuser",$id)->get("td_debitproduct")->result();
$viewData=array(
  "td_debitproduct"=>$result,
  "td_product"=>$result

);
 
$this->load->view('admin/partials/head', $data);
$this->load->view('admin/partials/header', $data);
$this->load->view('admin/admins/debitProductUser',$viewData);
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
}
?>