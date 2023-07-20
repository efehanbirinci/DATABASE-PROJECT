<?php 

class WorkFollow extends Admin
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

    $this->db->select("*");
    $this->db->from("works");
    $this->db->join("td_user","td_user.userid=works.worksuser");
    $items= $this->db->get()->result();
    $viewData=array(
     "works"=>$items,
    
  );
     
    $this->load->view('admin/partials/head', $data);
    $this->load->view('admin/partials/header', $data);
    $this->load->view('admin/workfollow/home', $viewData);
    $this->load->view('admin/partials/footer', $data);
}

public function update($id = NULL)
{
      $data=$this->data();

      $this->db->select("*");
      $this->db->from("works");
      $this->db->join("td_user","td_user.userid=works.worksuser");
      $this->db->where("worksid",$id);
      $items= $this->db->get()->row();
      $viewData=array(
       "works"=>$items,
      
    );

      if($id==null)
      {
         redirect(base_url("admin/WorkFollow"));
      }
       $data['admin'] = $this->db->where("worksid", $id)->get("works")->row();
       if(!$data['admin'])
       {
          redirect(base_url("admin/WorkFollow"));
       }

  if (post()) 
  {
        $post = secure();
        $this->db->where("worksid", $id);
        if ($this->db->update('works', $post)) 
        {
           $alert = [
          'status' => 'success',
          'content' => 'İşlem Başarılı.',
          'redirect' => 'admin/workfollow',
      ];
      $this->alert($alert);
    }
    else 
    {
      $alert = [
        'status' => 'error',
        'content' => 'İşlem Başarısız.',
        'redirect' => 'admin/workfollow/update',
      ];
      $this->alert($alert);
    }
  }
  $this->load->view('admin/partials/head',$data);
  $this->load->view('admin/partials/header',$data);
  $this->load->view('admin/workfollow/update',$viewData);
  $this->load->view('admin/partials/footer',$data);
}

public function detail($id = NULL)
{
      $data=$this->data();

      $this->db->select("*");
      $this->db->from("works");
      $this->db->join("td_user","td_user.userid=works.worksuser");
      $this->db->where("worksid",$id);
      $items= $this->db->get()->row();
      $viewData=array(
       "works"=>$items,
      
    );
    
      if($id==null)
      {
         redirect(base_url("workfollow"));
      }
      $data['admin'] = $this->db->where("worksid", $id)->get("works")->row();
       if(!$data['admin'])
       {
          redirect(base_url("admin"));
       }
      $this->load->view('admin/partials/head',$data);
      $this->load->view('admin/partials/header',$data);
      $this->load->view('admin/workfollow/detail',$viewData);
      $this->load->view('admin/partials/footer',$data);
}

public function statusUpdate($id)
{
    $completed=($this->input->post("worksstatus")==0)? 1 : 0 ;
    $this->Client_model->statusUpdate($id, array(

"works"=>$completed));

}

}
?>