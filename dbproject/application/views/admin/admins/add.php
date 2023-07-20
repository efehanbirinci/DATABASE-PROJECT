<div class="container p-0">
  <div class="row">
    <div class="col-12">
      <form class="updform w-100" id="updateform" action="<?=base_url('admin/admins/add/')?>" method="post">
      <div class="form-row">
      <div class="form-group col-12">
            <label for="">Durumu</label>
            <select name="userstatus" id="" class="form-control" required>
              <option value="1">Aktif</option>
            </select>
          </div>
          </div>
          <div class="form-row">
          <div class="form-group col-12">
            <label for="">Tipi</label>
            <select name="usertype" id="" class="form-control" required>
              <option value="2">Personel</option>
            </select>
          </div>
          </div>
          <?php echo form_open_multipart('upload/file_data');?>
        <div class="form-row">
          <div class="form-group col-12">
            <label for="">Adı</label>
            <input type="text" class="form-control" name="userfirstname"  required>
          </div>
          <div class="form-group col-12">
            <label for="">Soyadı</label>
            <input type="text" class="form-control" name="userlastname"  required>
          </div>

          <div class="form-group col-12">
            <label for="">Kullanıcı Adı</label>
            <input type="text" class="form-control" name="username"  required>
          </div>
          <div class="form-group col-12">
            <label for="">Şifre</label>
            <input type="password" class="form-control" id="txt1"  required>
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
    </div>
  </div>
</div>

<!-- <script type="text/javascript">
  $(function(){
    $('body').delegate('#updateform', 'submit', function(e){
      e.preventDefault();
    });
  });
</script> -->