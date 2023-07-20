<?php

class Login extends Admin
{
    public function index(){
      $this->load->model(['AdminModel' => 'ad']);
      $data = $this->data();

      if (post()) {
        $post = secure();
        $admin = $this->ad->login($post['adminusername'], $post['adminpassword']);
        if (!$admin) {
          $alert = [
            'status' => 'error',
            'content' => 'Böyle bir kullanıcı yok',
            'redirect' => 'admin/login',
          ];
          $this->alert($alert);
          exit;
        }
        $this->session->set_userdata('admin', $admin);
        redirect(base_url('admin'));
      }

      $this->load->view('admin/loginpartials/head', $data);
      $this->load->view('admin/loginpartials/header', $data);
      $this->load->view('admin/loginpartials/footer', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('admin/login'));
    }
}

 ?>