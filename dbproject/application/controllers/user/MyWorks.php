<?php 

class MyWorks extends User
{
    public function __construct()
    {
     
        parent::__construct();
        $this->load->model("UserModel");
           $data = $this->data();
           if (!$data['user']) 
           {
             redirect(base_url('user/login'));
            exit;
           }
    }

public function index($id=null)
{
    $data = $this->data();
    $this->load->view('user/partials/head', $data);
    $this->load->view('user/partials/header', $data);
    $this->load->view('user/myworks/home', $data);
    $this->load->view('user/partials/footer', $data);
}

public function add()
{
     $data = $this->data();
    
  
  if (post()) 
  {
       $post = secure();
       if ($this->db->insert('works', $post)) 
       {
       $alert = [
        'status' => 'success',
        'content' => 'İş Ekleme İşlemi Başarılı.',
        'redirect' => 'user/myworks',
      ];
      $this->alert($alert);
    }
    else 
    {
         $alert = [
        'status' => 'error',
        'content' => 'İş Ekleme İşlemi Başarısız.',
        'redirect' => 'user/myworks',
      ];
      $this->alert($alert);
    }
  }
  $this->load->view('user/myworks/add', $data);
}

public function finish($id = NULL)
{
      $data=$this->data();
      if($id==null)
      {
         redirect(base_url("user/MyWorks"));
      }
       $data['user'] = $this->db->where("worksid", $id)->get("works")->row();
       if(!$data['user'])
       {
          redirect(base_url("user/MyWorks"));
       }

  if (post()) 
  {
        $post = secure();
        $this->db->where("worksid", $id);
        if ($this->db->update('works', $post)) 
        {
           $alert = [
          'status' => 'success',
          'content' => 'İş Başarıyla Tamamlandı.',
          'redirect' => 'user/MyWorks',
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
  $this->load->view('user/partials/head',$data);
  $this->load->view('user/partials/header',$data);
  $this->load->view('user/myworks/finish',$data);
  $this->load->view('user/partials/footer',$data);
}

public function works($id)
{
  $data=$this->data();

  $items=$this->UserModel->getAllWorks($id);
  $viewData=array(
   "works"=>$items
);
   
      $this->load->view('user/partials/head',$data);
      $this->load->view('user/partials/header',$data);
      $this->load->view('user/myworks/works',$viewData);
      $this->load->view('user/partials/footer',$data);
}

public function product($id)
{
  $data=$this->data();

/*
  $result=$this->UserModel->join(array(
    "table"=>"td_product",
    "condition"=>"td_product.productid=td_debitproduct.dpproduct",
  )
  );
  */

  $this->db->select("*");
  $this->db->from("td_debitproduct");
  $this->db->join("td_product","td_product.productid=td_debitproduct.dpproduct");
  $this->db->where("dpuser",$id);
  $items= $this->db->get()->result();
  $viewData=array(
   "td_debitproduct"=>$items,
  
);
   
      $this->load->view('user/partials/head',$data);
      $this->load->view('user/partials/header',$data);
      $this->load->view('user/myworks/product',$viewData);
      $this->load->view('user/partials/footer',$data);
}

}
?>