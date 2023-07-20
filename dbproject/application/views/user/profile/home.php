<div class="dash-app">
  <div class="container">
    <div class="row">
    <table class="w-100 table table-bordered">
        <tr>
          <td><b>Durum:</b></td>
          <td>
          <?php echo  $user->userstatus==1?'<label class="btn btn-success btn-sm">Aktif</label>':'<label class="btn btn-danger btn-sm">Pasif</label>'; ?>
          </td>
        </tr>
        <tr>
          <td><b>Kullanıcı Adı:</b></td>
          <td><?=$user->username?></td>
        </tr>
        <tr>
          <td><b>Adı:</b></td>
          <td><?=$user->userfirstname?></td>
        </tr>
        <tr>
          <td><b>Soyadı:</b></td>
          <td><?=$user->userlastname?></td>
        </tr>
        <tr>
          <td><b>Şifre</b></td>
          <td><pre><?=md5(md5(md5($user->userpassword)))?></pre></td>
        </tr>
      </table>
      <a class="btn btn-primary btn-sm" href="<?=base_url("user/Profile/update/").($user->userid)?>">Bilgilerimi Güncelle</a>
    </div>
  </div>
</div>


  </div>
</div>
