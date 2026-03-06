<?php
$T_amis=[
    "Amine"=> 50 ,
    "Adnane"=>30,
    "Ilyas"=>130,
    "Youssef"=>300,
    ];
    $total=0;
    foreach ($T_amis as $ami => $argent) {
        $total+=$argent;
        if ($argent >100){
            echo $ami."   doit  ".$argent."dh   !!!!!! plus que 100 dh \n";
        } else{
            echo $ami." doit ".$argent."dh \n";
        }
    
    }
         echo "le total que tous mes amis me doivent est :".$total."dhs";



?>