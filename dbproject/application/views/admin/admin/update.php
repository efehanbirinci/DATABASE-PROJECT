<div class="dash-app">
  <div class="container">
    <div class="row">
    <table class="w-100 table table-bordered">
        <form action="" method="post">
        <tr>
          <td><b>Durumu:</b></td>
          <td>
          <select name="adminstatus" id="" class="form-control" required>
              <option value="1">Aktif</option>
              <option value="0">Pasif</option>
            </select>
          </td>
        </tr>
        <tr>
          <td><b>Kullanıcı Adı:</b></td>
          <td> <input type="text" class="form-control" name="adminusername" value="<?=$admin->adminusername?>" required></td>
        </tr>
        <tr>
          <td><b>Adı:</b></td>
          <td> <input type="text" class="form-control" name="adminfirstname" value="<?=$admin->adminfirstname?>" required></td>
        </tr>
        <tr>
          <td><b>Soyadı:</b></td>
          <td> <input type="text" class="form-control" name="adminlastname" value="<?=$admin->adminlastname?>" required></td>
        </tr>
        <tr>
          <td><b>Şifre</b></td>
          <td> <input type="password" class="form-control" value="<?=$admin->adminpassword?>"></td>
        </tr>
<tr>
    <td></td>
    <td align="right">
    <button class="btn btn-primary">GÜNCELLE</button>
    </td>
</tr>
       </form>
      </table>
    </div>
  </div>
</div>
