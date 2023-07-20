<div class="dash-app">
  <div class="container mt-5">
    <div class="row">
<a href="<?=base_url("user/MyWorks/add/")?>" class="add text-primary"  data-toggle="modal"  data-target="#detailModal"><i class="fa-solid fa-plus mr-3 fa-3x"></i></a>
<a href="<?=base_url("user/MyWorks/works/").($user->userid)?>" class="btn text-primary"><i class="fa-solid fa-briefcase mr-3 fa-3x"></i></a>
<a href="<?=base_url("user/MyWorks/product/").($user->userid)?>" class="btn text-primary"><i class="fa-solid fa-screwdriver-wrench mr-3 fa-3x"></i></a>


  </div>
  <div class="row mt-5">
    <div class="col-md-12">
        

  <div class="alert alert-success">
  <strong>Değerli <?=$user->userfirstname." ".$user->userlastname?></strong><br> <br>

  <strong>İş bitirildikten sonra sistemden "BİTİR" butonuna tıklayıp işi tamamlamayı unutmayınız.</strong><br><br>
  <strong>İyi Çalışmalar...</strong>


    </div>
    <marquee direction=right><strong class="text-danger">White Hats</strong></marquee>
    <marquee direction=left><strong class="text-primary">
        <i class="fa-sharp fa-solid fa-gear"></i>
        <i class="fa-solid fa-hammer"></i>
        <i class="fa-solid fa-screwdriver"></i>
        <i class="fa-solid fa-screwdriver-wrench"></i>
        <i class="fa-solid fa-bolt"></i>
        <i class="fa-solid fa-plug"></i>
        <i class="fa-solid fa-truck-bolt"></i>
        <i class="fa-regular fa-lightbulb-cfl"></i>
    
    
    </strong></marquee>
  </div>
</div>



<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailModalLabel">Yeni İş Ekleme</h5>
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
      $('.add').click(function(){
      var id = $(this).data('id');
      $.post('<?=base_url("user/myworks/add")?>', {id: id}, function(response){
        $('.detailBody').html(response);
      });
    });
</script>