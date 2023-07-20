<div class="dash-app">
  <div class="p-5 text-center">
 <table class="table table-bordered table-hover text-center" id="sampleTable">
                <thead> 
                    <th>İş Adı</th>
                    <th>İş Durumu</th>
                    <th>İşlem</th>
                </thead>
                <tbody>
                    <?php  foreach($works as $w) { ?>  
                    <tr>
                        <td><?php echo  $w->worksname?></td>
                        <td><?php echo  $w->worksstatus==1?'<i class="fa-solid fa-hourglass-end fa-lg"></i>':'<i class="fa-solid fa-check fa-2x text-success"></i>'; ?></td>
                
                          <td>
                            <?php 
                            if($w->worksstatus==1)
                            {
                            ?> 
                            <a class="btn btn-primary btn-sm" href="<?=base_url("user/myworks/finish/").($w->worksid)?>">BİTİR</a><?php
                            }
                            else
                            {
                                ?><?php
                            }
                            ?>
                           
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
  </div>
 
</div>






<script>

  


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
