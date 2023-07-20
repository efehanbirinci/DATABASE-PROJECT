<?php

class Login extends Admin
{

    public function index(){
      $this->load->model(['UserModel' => 'um']);
      $data = $this->data();

      if (post()) {
        $post = secure();
        $admin = $this->um->login($post['username'], $post['userpassword']);
        if (!$admin) {
          $alert = [
            'status' => 'error',
            'content' => 'Böyle Bir Kullanıcı Yok !!',
            'redirect' => 'user/login',
          ];
          $this->alert($alert);
          exit;
        }

        $this->session->set_userdata('user', $admin);
        redirect(base_url('user/home'));

      }

      $this->load->view('user/loginpartials/head', $data);
      $this->load->view('user/loginpartials/header', $data);
      $this->load->view('user/loginpartials/footer', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('user/login');
    }
}
 ?>