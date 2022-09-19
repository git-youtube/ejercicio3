<?php
$pares = $_GET ['boolean'];
$i = rand(1,99);

for($x=1; $x<$i; $x++){
    if($pares == "true" && $x%2 == 0){
        echo $x."<br>";
    }else if($pares == "false" && $x%2 != 0){
        echo $x."<br>";
    }
}


?>
