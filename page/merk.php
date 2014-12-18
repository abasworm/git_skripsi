<div class="list-group">

<?php

include "../sys/class.table.php";
$s = new table();
$row = $s->query("SELECT * FROM v_merk");
foreach($row as $r){
?>

    <a class="list-group-item" onclick="LoadProductList(2,'<?=$r['id_merk'];?>')">
        <!--<h4 class="list-group-item-heading">Asus</h4>-->
        <p class="list-group-item-text">
        <img src="<?=$r['path'].'/'.$r['filename'];?>" height="50px" >
        <?=$r['nm_merk'];?> 
        </p>
    </a>

<?php } ?>
    
</div>