<div class="dash-app">
  <div class="container">
    <div class="row">
      
    <table class="w-100 table table-bordered">
    <form action="<?=base_url('admin/AdminA/add/')?>" class="form-group" method="post">
        <tr>
          <td><b>Durum:</b></td>
          <td>
          <select name="adminstatus" id="" class="form-control">
            <option value="1">Aktif</option>
            <option value="0">Pasif</option>
          </select>
          </td>
        </tr>
        <tr>
          <td><b>Kullanıcı Adı:</b></td>
          <td><input type="text" name="adminusername" id="" class="form-control"></td>
        </tr>
        <tr>
          <td><b>Adı:</b></td>
          <td><input type="text" name="adminfirstname" id="" class="form-control"></td>
        </tr>
        <tr>
          <td><b>Soyadı:</b></td>
          <td><input type="text" name="adminlastname" id="" class="form-control"></td>
        </tr>
        <tr>
          <td><b>Şifre</b></td>
          <td><input type="password"  id="txt1" class="form-control"></td>
        </tr>
        <input type="hidden" class="form-control" id="txt2" name="adminpassword"  required>
        <tr>
          <td></td>
          <td><button type="submit"onclick="Md5()" class="btn btn-primary">Kaydet</button></td>
        </tr>

</form>
      </table>
    </div>
  </div>
</div>
<script>
              function Md5() 
              {
                 document.getElementById("txt2").value = md5(txt1.value);
              }
          </script>