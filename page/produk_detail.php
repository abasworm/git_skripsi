<?php

include "../sys/class.table.php";
include "../sys/func.html.php";
include "../sys/func.currency.php";

$s = new table();
if(isset($_GET['id'])){
    $id = clean_int($_GET['id']);
    $row = $s->query_assoc('SELECT * FROM v_barang where id_barang = "'.$id.'"');
    if(count($row)>0){
        extract($row);
        ?>
            
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Detail Produk</h3>
    </div>
    <div class="panel-body">
        <h2><?=$nm_barang?></h2>
        <div class="row">
            <div class="col-lg-6"><img src="<?=$path.'/'.$filename;?>"></div>
            <div class="col-lg-6">
                
                <dl class="dl-horizontal">
                    <dt>Merk</dt>
                    <dd><a onclick="LoadProductList(2, <?=$merk_id;?>)"><?=$nm_merk;?></a></dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Kategori</dt>
                    <dd><a onclick="LoadProductList(1, <?=$kategori_id;?>)"><?=$nm_kategori;?></a></dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Produk ID</dt>
                    <dd><?=$id_item;?></dd>
                </dl>
                <div class="col-sm-4"><?=btn_beli($status,$id_barang,$id_item);?></div>
                 <div class="col-sm-8"><?=lbl_harga($diskon,rp($harga),rp($total));?></div>
                
<!--                <button type="button" class="btn btn-primary btn-lg" value="BELI">BELI</button>
                <s>Rp. 300.000</s> <br/><font color="red">Diskon <b>-5%</b></font><h2 style="margin-top:0.1em">Rp. 200.000</h2>>-->
            </div>
        </div>
        <div class="row" style="margin-top: 20px">
            <div class="col-sm-12">
                
                <dl class="dl-horizontal">
                    <dt>Deskripsi</dt>
                    <dd><?=$deskripsi;?></dd>
                </dl>
            </div>
        </div>
    </div>
</div>

            
            <?php
    }
}


?>

