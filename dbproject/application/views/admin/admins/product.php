<div class="dash-app">
  <div class="container">
    <div class="row">
    <table class="w-100 table table-bordered">
        <form action="" method="post" class="form-group">
        <tr>
          <td><b>Kullanıcı:</b></td>
          <td> 
         <select name="dpuser" id="" class="form-control">
         <?php  foreach($td_user as $admin) { ?>
          <option value="<?php echo  $admin->userid?>"><?php echo  $admin->userfirstname." ".$admin->userlastname?></option>
            <?php } ?> 
         </select>   
        </td>
        </tr>
        <tr>
          <td><b>Ürün:</b></td>
          <td> 
          <select name="dpproduct" id="" class="form-control">
         <?php  foreach($td_product as $product) { ?>
          <option value="<?php echo  $product->productid?>"><?php echo  $product->productname?></option>
            <?php } ?> 
         </select>   
          </td>
        </tr>
        <tr>
          <td><b>Ürün:</b></td>
          <td> 
          <input class="form-control" type="date" name="dpdate" id="">
          </td>
        </tr>
<tr>
    <td></td>
    <td align="right">
    <button class="btn btn-primary">ZİMMETLE</button>
    </td>
</tr>
        </form>
      </table>
    </div>
  </div>
</div>
