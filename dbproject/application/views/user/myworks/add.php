<div class="container p-0">
  <div class="row">
    <div class="col-12">
      <form class="updform w-100" id="updateform" action="<?=base_url('user/myworks/add/')?>" method="post">
      <div class="form-row">
      <div class="form-group col-12">
            <label for="">Durumu</label>
            <select name="worksstatus" id="" class="form-control" required>
              <option value="1">Aktif</option>
            </select>
          </div>
          </div>
        <div class="form-row">
          <div class="form-group col-12">
            <label for="">Adı</label>
            <input type="text" class="form-control" name="worksname"  required>
          </div>
          <div class="form-group col-12">
            <label for="">Açıklaması</label>
            <textarea class="form-control" name="worksdescription" id="" cols="10" rows="5"></textarea>
          </div>

          <div class="form-group col-12">
            <input type="hidden" class="form-control" name="worksuser" value="<?=$user->userid?>"  required>
          </div>

          <div class="form-group col-12">
            <label for="">Başlangıç Tarihi</label>
            <input class="form-control" type="date" name="worksstartdate" id="" required>
          </div>

          <div class="form-group col-12 text-right">
            <button type="submit" class="btn btn-primary">Kaydet</button>
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