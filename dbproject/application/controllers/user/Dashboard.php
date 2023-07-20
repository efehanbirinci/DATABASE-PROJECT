<?php 

class Dashboard extends User
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

public function index()
{
    $data = $this->data();

    $this->load->view('user/partials/head', $data);
    $this->load->view('user/partials/header', $data);
    $this->load->view('user/dashboard/home', $data);
    $this->load->view('user/partials/footer', $data);
}

}
?>