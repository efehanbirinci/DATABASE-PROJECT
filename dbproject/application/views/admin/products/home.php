<div class="dash-app">
  <div class="p-5 text-center">
  <div class="row">
  <a class="add text-primary" data-toggle="modal"  data-target="#detailModal" link="<?=base_url("admin/Products/add/")?>"><i class="fa-solid fa-plus mr-3 fa-3x"></i></a>
  </div>
  <br>

    
 <table class="table table-bordered table-hover text-center" id="sampleTable">
                <thead>
                    <th>Ürün Miktari</th>
                    <th>Ürün Adı</th>
                    <th>Ürün Seri Numarası</th>
                    <th>İşlemler</th>
                </thead>
                <tbody>
                    <?php  foreach($td_product as $product) { ?>  
                    <tr>
                        <td><?php echo  $product->productquantity?></td>
                        <td><?php echo  $product->productname?></td>
                        <td><?php echo  $product->productserialnumber?></td>
                       
    
                        <td>
                        <a class="text-primary" href="<?=base_url("admin/Products/update/").($product->productid)?>"><i class="fa-solid fa-pen-to-square mr-3 fa-lg"></i></a>
                          <a href="<?=base_url("admin/Products/productDelete/").($product->productid)?>" class="text-primary"><i class="fa-solid fa-trash bg mr-3 fa-lg"></i></a>
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
      $.post('<?=base_url("admin/products/add")?>', {id: id}, function(response){
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
