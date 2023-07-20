<div class="dash-app">
  <div class="p-5 text-center">
 
  <div class="alert alert-success">
  <strong>Değerli <?=$user->userfirstname." ".$user->userlastname?></strong><br> <br>

  <strong>İşiniz başarıyla tamamlanmıştır. İşiniz ile ilgili bir sorun yaşıyorsanız lütfen Bilgi İşlem ile iletişime geçiniz.</strong><br><br>
  <strong>İyi Çalışmalar...</strong>


    </div>

            
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
