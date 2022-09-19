<?php
$numeros="100";
$num;

for($num=99;$num>=0;$num--){
    if($num%2==0){
    $numeros=$numeros."<br>".$num;
    }
}

echo $numeros;