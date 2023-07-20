<div class="dash-app">
  <div class="container">
    <div class="row">
    <table class="w-100 table table-bordered">
        <tr>
          <td><b>Durum:</b></td>
          <td>
          <?php echo  $admin->adminstatus==1?'<label class="btn btn-success btn-sm">Aktif</label>':'<label class="btn btn-danger btn-sm">Pasif</label>'; ?>
          </td>
        </tr>
        <tr>
          <td><b>Kullanıcı Adı:</b></td>
          <td><?=$admin->adminusername?></td>
        </tr>
        <tr>
          <td><b>Adı:</b></td>
          <td><?=$admin->adminfirstname?></td>
        </tr>
        <tr>
          <td><b>Soyadı:</b></td>
          <td><?=$admin->adminlastname?></td>
        </tr>
        <tr>
          <td><b>Şifre</b></td>
          <td><pre><?=md5(md5(md5($admin->adminpassword)))?></pre></td>
        </tr>
      </table>
    </div>
  </div>
</div>
