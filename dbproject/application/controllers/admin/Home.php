<?php

class Home extends Admin
{

  function __construct()
  {
    parent::__construct();
    $data = $this->data();
    if (!$data['admin']) {
      redirect(base_url('admin/login'));
      exit;
    }
  }

  public function index(){
    $data = $this->data();

    if (!$data['admin']) {
      redirect(base_url('admin/login'));
    }

    redirect(base_url('admin/dashboard'));

    $this->load->view('admin/partials/header', $data);
    $this->load->view('admin/home',$data);
    $this->load->view('admin/partials/footer', $data);
  }
}
 ?>