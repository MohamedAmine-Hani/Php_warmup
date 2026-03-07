<?php 
function isAdult($age){
if ($age >=18 ){
    return true;}
    else{return false;} 
}
$age=12;
if (isAdult($age)) {
echo"Acces Granted";}
else
    { echo"Acces Denied";}

?>