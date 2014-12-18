<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
    <!--<link rel="stylesheet" href="assets/css/bootswatch.min.css" type="text/css">-->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/css/allinone_bannerRotator.css" type="text/css">

    <title></title>
</head>

<body>
        
<?php include 'navbar.php';?>
<?php include 'jumbotron.php';?>


<!--Kiri-->
<div class="container-fluid">
    <div class="col-md-2">
        <?php include 'promo.php'?>
        <?php include 'pengunjung.php'?>
    </div>
    
    <div class="col-md-7">   
        <div class="preloader">
                <img src="assets/pict/devoops_getdata.gif" class="devoops-getdata" alt="preloader"/>
        </div>
        <div id="ajax-content"></div>
    </div>
    



    <!--< kanan >-->
    <div class="col-md-3">
        <?php include 'keranjang.php';?>
        <?php include 'iklanbaris.php';?>
    </div>
</div>
<?php include 'modal.php';?>  

<script src="assets/js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bas.js" type="text/javascript"></script>
<!--<script src="assets/js/allinone_bannerRotator.js" type="text/javascript"></script>-->
<script src="assets/js/highcharts.js" type="text/javascript"></script>
<script src="assets/js/chartcontain.js" type="text/javascript"></script>


    </body>
</html>
