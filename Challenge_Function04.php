<?php
function multiplyNumbers($a,$b){
    if(is_numeric($a) && is_numeric($b)){
        return $a * $b;
    }else{
        
        echo "Error: Invalid Input";
    }
}
$test1=multiplyNumbers(5,10);
echo $test1."\n";
//echo $test1."<br>";
$test2=multiplyNumbers(5,"apple");
echo $test2."\n";
//echo $test2."<br>";
?>