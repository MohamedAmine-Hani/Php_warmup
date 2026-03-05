<?php 
$price_the=5;
$student=false;
// $x=(int)readline("entrez un nombre ");
$quantite=7;
$total=$price_the*$quantite;
if($quantite>=5){
    $total-=$quantite*1;
    }
    if($student==true){
    $total*=0.8;
    }
    echo"le total a payer est : " .$total."Dh"





?>