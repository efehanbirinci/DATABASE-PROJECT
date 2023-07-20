<div class="dash-app">
  <div class="p-5 text-center">
  <div class="row">

<div class="col-md-3">
  <div class="alert alert-success">
  <strong>Personel Sayısı</strong> <br>   
  <?php 
    $query = $this->db->get('td_user');
    echo $query->num_rows();
  ?>
  </div>
</div>

<div class="col-md-3">
 <div class="alert alert-success">
 <strong>Ürün Sayısı</strong> <br>    
 <?php 
    $query = $this->db->get('td_product');
    echo $query->num_rows();
  ?>
  </div>
</div>
  

<div class="col-md-3">
  <div class="alert alert-success">
  <strong>İş Sayısı</strong> <br>  
  <?php 
    $query = $this->db->get('works');
    echo $query->num_rows();
  ?>
  </div>
</div>
          

<div class="col-md-3">
 <div class="alert alert-success">
 <strong>Zimmetli Ürün Sayısı</strong> <br>  
  <?php 
    $query = $this->db->get('td_debitproduct');
    echo $query->num_rows();
  ?>
  </div>
</div>

    </div>
  </div>
</div>
