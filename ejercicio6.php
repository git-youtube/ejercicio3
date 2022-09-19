<?php
$numero = $_GET ['Param1'];
$letra="o";
$letra=$letra."<br>";

for($i=1;$i<=$numero;$i++){
    $contador=0;
    do{
        $letra=$letra."o";
        $contador++;
    }while($contador!=$i);
    $letra=$letra."<br>";
}

echo $letra;