<?php 
    // function kata($var1,$var2,$var3){
    //     if ($var1=='ya' && $var2=='ya' && $var3=='ya'){
    //         $datang = "anda terkena ginjal akut";
    //     }else if($var1=='ya' && $var2=='tidak' && $var3=='ya'){
    //         $datang =  "Anda Terkena ginjal";
    //     }else{
    //         $datang = "Anda Sehat";
    //     }
    //     return $datang;
    // }
    // function halo($param1,$param2,$param3){
    //     return kata($param1,$param2,$param3);
    // }
    // echo halo('ya','tidak','ya');

    function luas($p){
        return $p*$p;
    }
    
    function volum($a){
        return $a*$a*$a;
    }

    function halo($param1,$param2){
        if($param1==1){
           return luas($param2);
        }else{
           return volum($param2);
        }
    }
    echo halo(1,2);
?>
