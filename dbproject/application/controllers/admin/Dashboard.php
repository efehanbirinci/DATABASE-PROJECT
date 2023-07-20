<?php 

class Dashboard extends Admin
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

       $items=$this->Client_model->count('td_user');
       $viewData=array(
        "td_user"=>$items,
    );
  
    $this->load->view('admin/partials/head', $data);
    $this->load->view('admin/partials/header', $data);
    $this->load->view('admin/dashboard/home', $viewData);
    $this->load->view('admin/partials/footer', $data);
}

}
?>