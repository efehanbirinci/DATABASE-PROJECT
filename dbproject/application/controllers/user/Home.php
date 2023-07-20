<?php

class Home extends User
{

  function __construct()
  {
    parent::__construct();
    $data = $this->data();
    if (!$data['user']) {
      redirect(base_url('user/login'));
      exit;
    }
  }

  public function index()
  {
    $data = $this->data();

    if (!$data['user']) {
      redirect(base_url('user/login'));
    }

    redirect(base_url('user/dashboard'));

    $this->load->view('user/partials/header', $data);
    $this->load->view('user/home',$data);
    $this->load->view('user/partials/footer', $data);

  }

}

 ?>