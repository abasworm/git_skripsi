<?php

include "../sys/class.table.php";
$s = new table();
$row = $s->query("SELECT * FROM v_kategori");
$i=0;
foreach($row as $r){
    if($i==3){
        $i=0;
    }
    if($i==0){
        echo '<div class="row">'; 
    }
?>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="<?=$r['path'].'/'.$r['filename'];?>" width="216px" alt="...">
      <div class="caption">
        <h3><?=$r['nm_kategori'];?></h3>
        <p><?=$r['deskripsi'];?></p>
        <p><a class="btn btn-primary" role="button" onclick="LoadProductList(1,'<?=$r['id_kategori'];?>')">Lihat Produk</a></p>
      </div>
    </div>
  </div>

 <?php 
    if($i==2){
        echo '</div>'; 
    }
    $i++;
} 
?>