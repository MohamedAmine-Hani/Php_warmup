<?php 
$age=5;
    if($age<=12){
        $price=20;
    }elseif($age>= 12 && $age<= 18){
        $price= 40;
    }elseif($age>=60){
        $price= 30;
    }else{
        $price= 60;
    }
    echo "le prix est : ".$price."\n";

    if($price==20){
        echo"Special: Children's Menu included!";}
?>