<div class="dash-app">
  <div class="container">
    <div class="row">
    <table class="w-100 table table-bordered">
    <form class="updform w-100" id="updateform" action="<?=base_url('user/profile/update/').($user->userid)?>" method="post">
          <?php echo form_open_multipart('upload/file_data');?>
        <div class="form-row">
          <div class="form-group col-12">
            <label for="">Adı</label>
            <input type="text" class="form-control" name="userfirstname" value="<?=$user->userfirstname?>"  required>
          </div>
          <div class="form-group col-12">
            <label for="">Soyadı</label>
            <input type="text" class="form-control" name="userlastname" value="<?=$user->userlastname?>" required>
          </div>

          <div class="form-group col-12">
            <label for="">Kullanıcı Adı</label>
            <input type="text" class="form-control" name="username" value="<?=$user->username?>"  required>
          </div>
          <div class="form-group col-12">
            <label for="">Şifre</label>
            <input type="password" class="form-control" id="txt1"   required>
          </div>

          <div class="form-group col-12">
            <input type="hidden" class="form-control" id="txt2" name="userpassword"  required>
          </div>

          <script>
              function Md5() 
              {
                 document.getElementById("txt2").value = md5(txt1.value);
              }
          </script>

          <div class="form-group col-12 text-right">
            <button type="submit"onclick="Md5()" class="btn btn-primary">Kaydet</button>
          </div>
        </div>
      </form>
      </table>
  </div>
</div>
    </div>
  </div>
</div>