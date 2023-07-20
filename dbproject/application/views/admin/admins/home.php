<div class="dash-app">
  <div class="p-5 text-center">
  <div class="row">
  <a class="add text-primary" data-toggle="modal"  data-target="#detailModal" link="<?=base_url("admin/Admins/add/")?>"><i class="fa-solid fa-user-plus mr-3 fa-3x"></i></a>
  <a href="<?=base_url("admin/Admins/product")?>"><i class="fa-solid fa-screwdriver-wrench mr-3 fa-3x"></i></a>
  <a href="<?=base_url("admin/Admins/productList")?>"><i class="fa-solid fa-toolbox mr-3 fa-3x"></i></a>
  </div><br><br>
 <table class="table table-bordered table-hover text-center" id="sampleTable">
                <thead>
                    <th>Kullanıcı Adı</th>
                    <th>Adı</th>
                    <th>Soyadı</th>
                    <th>Tipi</th>
                    <th>Durumu</th>
                    <th>İşlemler</th>
                </thead>
                <tbody>
                    <?php  foreach($td_user as $admin) { ?>  
                    <tr>
                        <td><?php echo  $admin->username?></td>
                        <td><?php echo  $admin->userfirstname ?></td>
                        <td><?php echo  $admin->userlastname ?></td>
                        <td><?php if($admin->usertype==1) 	echo "Admin";
                                  else if($admin->usertype==2) echo "Personel";
                                  else if($admin->usertype==3) echo "Deneme";
                        ?></td>
                        <td><?php echo  $admin->userstatus==1?'<label class="text-success"><i class="fa-solid fa-check fa-2x"></i></label>':'<label class="text-danger"><i class="fa-solid fa-xmark fa-2x"></i></label>'; ?></td>
                        <td>
                          <a href="<?=base_url("admin/Admins/detail/").($admin->userid)?>"><i class="fa-solid fa-circle-info mr-3 fa-lg"></i></a>
                          <a href="<?=base_url("admin/Admins/debitproduct/").($admin->userid)?>"><i class="fa-solid fa-screwdriver-wrench mr-3 fa-lg"></i></a>
                          <a href="<?=base_url("admin/Admins/update/").($admin->userid)?>"><i class="fa-solid fa-pen-to-square mr-3 fa-lg"></i></a>
                          <a href="<?=base_url("admin/Admins/adminDelete/").($admin->userid)?>"><i class="fa-solid fa-trash bg mr-3 fa-lg"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
  </div>
</div>

<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body detailBody">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(function(){
    $('.filterSelect').change(function(){
      $('#filterForm').submit();
    });
  });
  
  $('.add').click(function(){
      var id = $(this).data('id');
      $.post('<?=base_url("admin/admins/add")?>', {id: id}, function(response){
        $('.detailBody').html(response);
      });
    });

    $('.update').click(function(){
      var id = $(this).data('id');
      $.post('<?=base_url("admin/admins/update")?>', {id: id}, function(response){
        $('.detailBody').html(response);
      });
    });

    $('.detail').click(function(){
      var id = $(this).data('id');
      $.post('<?=base_url("admin/admins/detail")?>', {id: id}, function(response){
        $('.detailBody').html(response);
      });
    });

    $('#sampleTable').DataTable({
		"language":{
			"sDecimal":        ",",
			"sEmptyTable":     "Tabloda herhangi bir veri mevcut değil",
			"sInfo":           "_TOTAL_ kayıttan _START_ - _END_ arasındaki kayıtlar gösteriliyor",
			"sInfoEmpty":      "Kayıt yok",
			"sInfoFiltered":   "(_MAX_ kayıt içerisinden bulunan)",
			"sInfoPostFix":    "",
			"sInfoThousands":  ".",
			"sLengthMenu":     "Sayfada _MENU_ kayıt göster",
			"sLoadingRecords": "Yükleniyor...",
			"sProcessing":     "İşleniyor...",
			"sSearch":         "Ara:",
			"sZeroRecords":    "Eşleşen kayıt bulunamadı",
			"oPaginate": {
				"sFirst":    "İlk",
				"sLast":     "Son",
				"sNext":     " Sonraki",
				"sPrevious": " Önceki"
			},
			"oAria": {
				"sSortAscending":  ": artan sütun sıralamasını aktifleştir",
				"sSortDescending": ": azalan sütun sıralamasını aktifleştir"
			}
		},
		'order': [0, 'desc'],
		"lengthMenu": [ [10, 20, 30, 40], [10, 20, 30, 40] ]
	});
</script>
