<div class="container p-0">
  <div class="row">
    <div class="col-12">
      <form class="updform w-100" action="<?=base_url('admin/Products/add')?>" method="post">
     
        <div class="form-row">
          <div class="form-group col-12">
            <label for="">Ürün Miktari:</label>
            <input type="number" class="form-control" name="productquantity"  required>
          </div>

          <div class="form-group col-12">
            <label for="">Ürün Adı:</label>
            <input type="text" class="form-control" name="productname"  required>
          </div>

          <div class="form-group col-12">
            <label for="">Ürün Seri Numarası:</label>
            <input type="text" class="form-control" name="productserialnumber"  required>
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