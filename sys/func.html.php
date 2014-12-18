<?php

function btn_beli($status,$id_barang,$id_item){
    if($status == 1){
        echo '<button class="btn btn-primary" role="button" onclick="ModalJumlahBarang('.$id_barang.',\''.$id_item.'\')" data-toggle="modal" data-target="#myModal">Beli</button>';
    }else{
        echo '<button class="btn btn-danger" disabled role="button">Habis</button> ';
    }
}

function lbl_harga($diskon,$harga,$total){
    if($diskon > 0){
        echo '<p>
                <b><s>'.$harga.'</s></b> &nbsp; <font color="red">Diskon <b>'.$diskon.'%</b></font>
                <h4>'.$total.'</h4>
             </p>';
    }else{
        echo '<p>
                <h4>'.$harga.'</h4>
             </p>';
    }
}


function clean_int($i)
{
    if ( is_numeric( $i ) )
    {
        return ( int ) $i;
    }
    // return False if we don't get a number
    else
    {
        return False;
    }
}
?>