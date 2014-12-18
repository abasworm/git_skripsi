<?php

function rp($decimal){
    $jumlah_desimal = '0';
    $pemisah_desimal = ',';
    $pemisah_ribuan = '.';
    return 'Rp '.number_format($decimal,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan).',-';
}

?>
