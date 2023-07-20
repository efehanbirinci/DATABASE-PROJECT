<div class="dash-app">
  <div class="container">
    <div class="row">
    <table class="w-100 table table-bordered">
        <tr>
          <td><b>Durum:</b></td>
          <td>
          <?php echo  $admin->worksstatus==1?'<label class="btn btn-success btn-sm">Aktif</label>':'<label class="btn btn-danger btn-sm">Pasif</label>'; ?>
          </td>
        </tr>
        <tr>
          <td><b>Id:</b></td>
          <td> <?=$admin->worksid?></td>
        </tr>
        <tr>
          <td><b>İş Adı:</b></td>
          <td><?=$admin->worksname?></td>
        </tr>
        <tr>
          <td><b>İş Açıklaması:</b></td>
          <td><?=$admin->worksdescription?></td>
        </tr>
        <tr>
          <td><b>Sorumlu Personel:</b></td>
          <td><?=$works->userfirstname." ".$works->userlastname?></td>
        </tr>
        <tr>
          <td><b>Başlangıç Tarihi:</b></td>
          <td><?=$admin->worksstartdate?></td>
        </tr>
        <tr>
          <td><b>Bitiş Tarihi:</b></td>
          <td>
            <?php 
            if($admin->worksfinishdate==NULL)
            {
              ?> <p>İş Devam Etmektedir.</p><?php
            }
            else
            ?><?=$admin->worksfinishdate?><?php
            ?>
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>
