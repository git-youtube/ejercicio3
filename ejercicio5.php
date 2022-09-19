<?php
$coso="o";
$coso=$coso."<br>";

for($i=1;$i<=10;$i++){
    $contador=0;
    do{
    $coso=$coso."o";
    $contador++;
    }while($contador!=$i);
    $coso=$coso."<br>";
}

echo $coso;