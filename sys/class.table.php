<?php
    
    class table{
        var $__data = array();
        
        function __construct() {
            //koneksi
            mysql_connect('localhost','root','') or die(mysql_error());
            mysql_select_db('hardwareshop') or die(mysql_error());
        }
        
        function setQuery($query){
            //seter kuery
            $this->__data = $query;
        }
        
        
        function query($query){
            $__result = array();
            $__qr = mysql_query($query) or die(mysql_error());
            while($data = mysql_fetch_assoc($__qr)){
                $nc = array();
                foreach($data as $dt => $k){
                    $nc[$dt]=$k;
                }
                $__result[] = $nc;
            }
            return $__result;
        }
        
        function query_assoc($query){
            $q = mysql_query($query);
            $data = mysql_fetch_assoc($q);
            return $data;
        }
        
    }

    
    