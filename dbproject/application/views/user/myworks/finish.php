<div class="dash-app">
  <div class="container">
    <div class="row">
    <table class="w-100 table table-bordered">
        <form action="" method="post">
        <tr>
          <td><b>Durumu:</b></td>
          <td>
          <select name="worksstatus" id="" class="form-control" required>
            <?php if($work->workstatus==0){ ?><option value="0">Pasif</option><?php }?>
             
            </select>
          </td>
        </tr>
        <tr>
          <td><b>İş Bitirme Tarihi:</b></td>
          <td> <input class="form-control" type="date" name="worksfinishdate" id=""></td>
        </tr>
       
<tr>
    <td></td>
    <td align="right">
    <button class="btn btn-success">
    <?php echo $user->worksstatus==1?'KAPAT':'AÇ' ?>
    </button>
    </td>
</tr>
        </form>
      </table>
    </div>
  </div>
</div>
