<?php 
/*
echo"Hello Word ";
$data_B=true;
$age=10;
$country="Morocco";
$a=3 ; $b=3 ;
$result_add = $a + $b;
$result_sous = $a - $b;
echo "a+b =$result_add";
echo "a-b =$result_sous";

$a=20;
$b= 2;
echo "L'adittion a+b =" .($a+$b) ."\n";
echo "la soustraction a-b = ".($a-$b). "\n";
echo"la division de a/b =".($a/$b)."\n";
echo"la miltiplication a*b=".($a*$b);
*/
// $note=8;
// if($note>=5){
//     echo"assez bien";
// }elseif($note>= 6){
//     echo"Assez bien ";
// }elseif($note>= 7){
//     echo"Bien ";
// }
// elseif ($note>= 8){
//     echo "Tres bien";
// }else{
//     echo "vous etes null";
// }
/* $choix_langue=2;
switch($choix_langue){
    case 1:
        echo"Arabic langue";
        break;
        case 2:
            
            case 3:
                echo "Frensh Language";
            break;

} */
/* $price_the=5;
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
    echo"le total a payer est : " .$total."Dh" */
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