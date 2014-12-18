<?php

include "../sys/class.table.php";
include "../sys/func.currency.php";
include "../sys/func.html.php";

$s = new table();
if(isset($_GET['listof'])){
    $idlist = clean_int($_GET['idlist']);
    if($_GET['listof']==1){
        $query='SELECT * FROM v_barang WHERE kategori_id = "'.$idlist.'"';
    }else{
        $query='SELECT * FROM v_barang WHERE merk_id = "'.$idlist.'"';
    }
}else{
    $query="SELECT * FROM v_barang";
}

$row = $s->query($query);
$i=0;
if(count($row)<1){
    echo 
    '
        <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Informasi</h3>
            </div>
            <div class="panel-body">
               <h4><center>Data barang kosong</center></h4>
            </div>
        </div>
    ';
}

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
        <img src="<?=$r['path'].'/'.$r['filename'];?>" width="200px" alt="...">
      <div class="caption">
        <h3><?=$r['nm_barang'];?></h3>
        <p><?=$r['deskripsi'];?></p>
        <?=lbl_harga($r['diskon'],rp($r['harga']),rp($r['total']));?>
        <p>
            <?=btn_beli($r['status'],$r['id_barang'],$r['id_item']);?>
            <button class="btn btn-default" onclick="LoadProduct(<?=$r['id_barang'];?>)" role="button">lihat Detail</button>
        </p>
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
