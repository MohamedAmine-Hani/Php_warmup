<?php
function  manualReverse($text){
$mot="";    
for ($i= strlen($text)-1; $i >=0; $i--){
    $mot.=$text[$i];
    }
return $mot;
}
echo manualReverse("Hello");

?>