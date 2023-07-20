<div class="dash-app">
  <div class="container">
    <div class="row">
    <table class="w-100 table table-bordered">
        <form action="" method="post">
        <tr>
          <td><b>Id:</b></td>
          <td> <input type="text" class="form-control" name="productid" value="<?=$admin->productid?>" required></td>
        </tr>
        <tr>
          <td><b>Miktar:</b></td>
          <td> <input type="text" class="form-control" name="productquantity" value="<?=$admin->productquantity?>" required></td>
        </tr>
        <tr>
          <td><b>Adı:</b></td>
          <td> <input type="text" class="form-control" name="productname" value="<?=$admin->productname?>" required></td>
        </tr>
        <tr>
          <td><b>Seri Numarası:</b></td>
          <td> <input type="text" class="form-control" name="productserialnumber" value="<?=$admin->productserialnumber?>" required></td>
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
