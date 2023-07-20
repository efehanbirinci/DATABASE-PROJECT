<?php
/**
 *
 */
class MY_Controller extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
  }

  public function getdata(){
    $data = [];

    $data['alert'] = ($this->session->flashdata('alert')) ? $this->session->flashdata('alert') : false ;

    return $data;
  }


  public function alert($alert){
    $this->session->set_flashdata('alert', $alert);
    redirect(base_url($alert['redirect']));
    exit;
  }



}


/**
 *
 */
class User extends MY_Controller
{

  function __construct()
  {
    parent::__construct();
  }

  public function data(){
    $data = $this->getdata();

    $data['user'] = ($this->session->userdata('user')) ? $this->session->userdata('user') : false;
    return $data;

  }

}



/**
 *
 */
class Admin extends MY_Controller
{

  function __construct()
  {
    parent::__construct();
  }

  public function data(){

    $data = $this->getdata();

    $data['admin'] = ($this->session->userdata('admin')) ? $this->session->userdata('admin') : false;
    return $data;

  }

}








 ?>