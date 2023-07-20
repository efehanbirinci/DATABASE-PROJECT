<div class="dash-app">
  <div class="p-5 text-center">
 <table class="table table-bordered table-hover text-center" id="sampleTable">
                <thead>
                    <th>Adı</th>
                    <th>Durumu</th>
                    <th>Sorumlu Personel</th>
                    <th>İşlemler</th>
                </thead>
                <tbody>
                    <?php  foreach($works as $w) { ?>  
                    <tr>
                        <td><?php echo  $w->worksname?></td>
                        <td><?php echo  $w->worksstatus==1?'<label class="text-warning"><i class="fa-solid fa-hourglass-end fa-lg"></i></label>':'<label class="text-success"><i class="fa-solid fa-check fa-2x"></i></label>'; ?></td>
                        <td><?php echo  $w->userfirstname." ".$w->userlastname?></td>
                        <td>
                        <a href="<?=base_url("admin/WorkFollow/detail/").($w->worksid)?>" class="mr-3"><i class="fa-solid fa-circle-info fa-lg"></i></a>
                          <a href="<?=base_url("admin/WorkFollow/update/").($w->worksid)?>">
                          <?php echo $w->worksstatus==1?'<i class="fa-solid fa-lock fa-lg text-danger"></i>':'<i class="fa-solid fa-lock-open fa-lg text-success"></i>' ?>
                        </a>
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
      $.post('<?=base_url("admin/worktype/add")?>', {id: id}, function(response){
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
		"lengthMenu": [ [50, 100, 200, 300], [50, 100, 200, 300] ]
	});
</script>
