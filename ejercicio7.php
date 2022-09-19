




<?php
$primerNum = $_GET ['Param1'];
$ultimum = $_GET ['Param2'];

for($i = $primerNum; $primerNum<$ultimum; $primerNum++, $i=$i+$primerNum){
}

echo "la suma de los numeros es: ".$i;
?>

>