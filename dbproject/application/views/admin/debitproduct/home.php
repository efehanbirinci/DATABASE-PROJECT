<div class="dash-app">
  <div class="p-5 text-center">
  <div class="row">
  <a class="add btn btn-outline-primary mr-3" data-toggle="modal"  data-target="#detailModal" link="<?=base_url("admin/Admins/add/")?>">Yeni Kullanıcı Ekle</a>
  <a class="btn btn-outline-success mr-3" href="<?=base_url("admin/Admins/product")?>">Ürün Zimmetle</a>
  <a class="btn btn-outline-danger" href="<?=base_url("admin/Admins/product")?>">Zimmetli Ürünler</a>
  </div>
 
 <table class="table table-bordered table-hover text-center" id="sampleTable">
                <thead>
                    <th>Ürün</th>
                    <th>Personel</th>
                    <th>Zimmet Tarihi</th>
                    <th>İşlemler</th>
                </thead>
                <tbody>
                    <?php  foreach($td_debitproduct as $debitproduct) { ?>  
                    <tr>
                        <td><?php echo  $debitproduct->dPId?></td>
                        <td><?php echo  $debitproduct->dPProduct?></td>
                        <td><?php echo  $debitproduct->dPUser?></td>
                        <td><?php echo  $debitproduct->dPCreateDate?></td>
                        <td>
                        <a class="btn btn-primary btn-sm" href="<?=base_url("admin/Admins/update/").md5($admin->userID)?>">Düzenle</a>
                          <a href="http://" class="btn btn-danger btn-sm">Sil</a>
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
