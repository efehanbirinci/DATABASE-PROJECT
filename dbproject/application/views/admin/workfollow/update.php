<div class="dash-app">
  <div class="container">
    <div class="row">
    <table class="w-100 table table-bordered">
        <form action="" method="post">
        <tr>
          <td><b>Durumu:</b></td>
          <td>
          <select name="worksstatus" id="" class="form-control" required>
              <option value="1">Aktif</option>
              <option value="0">Pasif</option>
            </select>
          </td>
        </tr>
        <tr>
          <td><b>Id:</b></td>
          <td> <input type="text" class="form-control"  value="<?=$admin->worksid?>" disabled></td>
        </tr>
        <tr>
          <td><b>İşin Adı:</b></td>
          <td> <input type="text" class="form-control" name="username" value="<?=$admin->worksname?>" disabled></td>
        </tr>
        <tr>
          <td><b>İşin Açıklaması</b></td>
          <td> <input type="text" class="form-control" name="userfirstname" value="<?=$admin->worksdescription?>" disabled></td>
        </tr>
        <tr>
          <td><b>Sorumlu Personel:</b></td>
          <td> <input type="text" class="form-control" name="userlastname" value="<?=$works->userfirstname." ".$works->userlastname?>" disabled></td>
        </tr>
        <tr>
          <td><b>İş Başlangıç Tarihi:</b></td>
          <td> <input type="text" class="form-control" name="userpassword" value="<?=$admin->worksstartdate?>" disabled></td>
        </tr>
       
<tr>
    <td></td>
    <td align="right">
    <button class="btn btn-success">
    <?php echo $admin->worksstatus==1?'KAPAT':'AÇ' ?>
    </button>
    </td>
</tr>
        </form>
      </table>
    </div>
  </div>
</div>
